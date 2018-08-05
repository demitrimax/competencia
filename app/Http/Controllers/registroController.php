<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suscriptores;
use Illuminate\Support\Facades\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Validator;
use URL;
use Session;
use Redirect;
use Input;

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;


use PayPal\Api\ChargeModel;
use PayPal\Api\Currency;
use PayPal\Api\MerchantPreferences;
use PayPal\Api\PaymentDefinition;
use PayPal\Api\Plan;
use PayPal\Api\Patch;
use PayPal\Api\PatchRequest;
use PayPal\Common\PayPalModel;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

class registroController extends Controller
{
    //

   private $apiContext;
    public function __construct()
   {
       // Detect if we are running in live mode or sandbox
       /*if(config('paypal.settings.mode') == 'live'){
           $this->client_id = config('paypal.live_client_id');
           $this->secret = config('paypal.live_secret');
       } else {
           $this->client_id = config('paypal.sandbox_client_id');
           $this->secret = config('paypal.sandbox_secret');
       }

       // Set the Paypal API Context/Credentials
       $this->apiContext = new ApiContext(new OAuthTokenCredential($this->client_id, $this->secret));
       $this->apiContext->setConfig(config('paypal.settings'));
      */
       //parent::__construct();

        /** setup PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->apiContext = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->apiContext->setConfig($paypal_conf['settings']);
   }

    public function index() {

      return view('register'); // formulario de registro
    }

    public function paypalpago(Request $request)
    {
      //validadores
      $rules = [
        'nombre' => 'required|min:3|max:191',
        'apellidos' => 'required|max:191',
        'fecnac' => 'required',
        'edad' => 'required|integer',
        'gender' => 'required',
        'telefono' => 'required',
        'tcompetencia' => 'required',
        'email' => 'required|email|unique:suscriptores',
        'password' => 'required|min:5|max:15|confirmed',
      ];
      $mensajes = [
        'nombre.required' => 'El nombre es datos requerido',
        'nombre.min' => 'El nombre tiene que tener más de 2 letras',
        'nombre.max' => 'El nombre no puede tener más de 190 letras',
        'fecnac.required' => 'Es necesario la fecha de nacimiento',
        'gender.required' => 'Es necesario seleccione el Genero',
        'telefono.required' => 'El telefono es un dato requerido',
        'tcompetencia.required' => 'Tiene que seleccionar una competencia',
        'email.required' => 'El email es un dato requerido',
        'email.email' => 'Verifique el correo electronico',
        'email.unique' => 'Ya existe un usuario registrado con ese correo eletronico',
        'password.required' => 'Tiene que escribir una contraseña',
        'password.min' => 'La contraseña debe contener al menos 5 carácteres',
        'password.max' => 'La contraseña no debe pasar de 20 carácteres',
        'password.confirmed' => 'Las contreñas no coinciden',
      ];
      $this->validate($request, $rules, $mensajes);
      //verificar que el google captcha

      //guardar los datos del usuario en la bd
      $suscriptor = new suscriptores();
      $suscriptor->nombre = $request->input('nombre');
      $suscriptor->apellidos = $request->input('apellidos');
      $suscriptor->fecnac = $request->input('fecnac');
      $suscriptor->edad = $request->input('edad');
      $suscriptor->genero = $request->input('gender');
      $suscriptor->telefono = $request->input('telefono');
      $suscriptor->tcompetencia = $request->input('tcompetencia');
      $suscriptor->email = $request->input('email');
      $suscriptor->password = bcrypt($request->input('password'));
      $suscriptor->premium = 0;
      $suscriptor->save();


          $id_suscriptor = $suscriptor->id;
          $precio = $request->input('precio');
          $precio = 200;
          $precio = (int) $precio;
          $producto = $request->input('producto');
          $producto = "Suscripcion Competencia MaxEffortChallenge 2018";
          $envio = 0;
        //dd($request->all());

        //paypal variables
        $compra = new Payer();
        $compra->setPaymentMethod('paypal');

        $articulo = new Item();
        $articulo->setName($producto);
        $articulo->setCurrency('MXN')
                  ->setQuantity(1)
                  ->setPrice($precio);

        //echo $articulo->getPrice();
        $listaArticulos = new ItemList();
        $listaArticulos->setItems(array($articulo));

        $detalles = new Details();
        $detalles->setShipping($envio)
                  ->setTax(0)
                  ->setSubtotal($precio);

        $cantidad = new Amount();
        $cantidad ->setCurrency('MXN')
                  ->setTotal($precio)
                  ->setDetails($detalles);

        $transaccion = new Transaction();
        $transaccion->setAmount($cantidad)
                      ->setItemList($listaArticulos)
                      ->setDescription('Pago')
                      ->setInvoiceNumber(uniqid());
        //echo $transaccion->getInvoiceNumber();
        $redireccionar = new RedirectUrls();
        $redireccionar->setReturnUrl(url('/pagocorrecto').'/'.$id_suscriptor)
                      ->setCancelUrl(url('/pagocancelado').'/'.$id_suscriptor);

        $pago = new Payment();
        $pago->setIntent('sale')
              ->setPayer($compra)
              ->setRedirectUrls($redireccionar)
              ->setTransactions(array($transaccion));

    //dd($pago);
    try {
      //dd($pago->create($this->apiContext));exit;
        $pago->create($this->apiContext);
    } catch (\PayPal\Exception\PayPalConnectionException $pce) {
          echo "<pre>";
          print_r(json_decode($pce->getData()));
          print_r($pago);
          //dd($pago);
          exit;
          echo "</pre>";
    }

    $aprobado = $pago->getApprovalLink();

    return redirect($aprobado);


    }

    public function guardar($id) {
      $suscriptor = suscriptores::find($id);
      $suscriptor->premium = 1;
      $suscriptor->save();
      //actualizar que ya es usuario premium porque hizo el pago
      //en esta parte hay que meterle mas seguridad

      return redirect('/suscriptcorrecto/'.$id);
    }

    public function UsuarioRegistrado ($id) {
      $suscriptor = suscriptores::find($id);

      //aqui enviar email notificando el registro
      Mail::to($suscriptor->email)
            ->send(new App\Mail\WelcomeUser());

      return view('registrado')->with(compact('suscriptor'));
    }

    public function cancelado($id) {
      $suscriptor = suscriptores::find($id);
      return view('cancelado')->with(compact('suscriptor'));
    }

    public function validaform(Request $request) {
      /*
        $validator = Validator::make($request->all(), [
          'nombre' => 'required',
          'apellidos' => 'required',
          'email' => 'required|email',
          'fecnac' => 'required',
        ]);

        if ($validator->passes()){
            return response()->json(['success'=>'Added new records']);
        }
        return response()->json(['error']=>$validator->errors()->all()]);
        */
    }
}
