<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;

//use config\paypal;

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
          $precio = $request->input('precio');
          $precio = (int) $precio;
          $producto = $request->input('producto');
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
        $redireccionar->setReturnUrl(url('/pagocorrecto'))
                      ->setCancelUrl(url('/pagocancelado'));

        $pago = new Payment();
        $pago->setIntent('sale')
              ->setPayer($compra)
              ->setRedirectUrls($redireccionar)
              ->setTransactions(array($transaccion));


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
        //verificar que el google captcha
        //guardar el post
        /*
        $suscriptor = new suscriptores();
        $suscriptor->nombre = $request->input('nombre');
        $suscriptor->apellidos = $request->input('apellidos');
        $suscriptor->fecnac = $request->input('fecnac');
        $suscriptor->edad = $request->input('edad');
        $suscriptor->sexo = $request->input('gender');
        $suscriptor->telefono = $request->input('telefono');
        $suscriptor->clasificacion = $request->input('clasifica');
        $suscriptor->email = $request->input('email');
        $suscriptor->password = bcrypt($request->input('password'));
        $suscriptor->premium = 0;
        $suscriptor->save();
        */
        //antes verificar el pago

        //return redirect('registrado');
        //aqui debe llevar a la pagina del usuario en este caso utilizare el find

    }

    public function guardar() {
      return view('registrado');
    }
}
