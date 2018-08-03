<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use config\paypal;

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;

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

    public function __construct()
   {
       // Detect if we are running in live mode or sandbox
       if(config('paypal.settings.mode') == 'live'){
           $this->client_id = config('paypal.live_client_id');
           $this->secret = config('paypal.live_secret');
       } else {
           $this->client_id = config('paypal.sandbox_client_id');
           $this->secret = config('paypal.sandbox_secret');
       }

       // Set the Paypal API Context/Credentials
       $this->apiContext = new ApiContext(new OAuthTokenCredential($this->client_id, $this->secret));
       $this->apiContext->setConfig(config('paypal.settings'));
   }

    public function index() {

      return view('register'); // formulario de registro
    }

    public function guardar(Request $request)
    {
          $precio = $request->input('precio');
          $producto = $request->input('producto');
          $envio = 0;
        //dd($request->all());
        $compra = new Payer();
        $compra->setPaymentMethod('paypal');

        $articulo = new Item();
        $articulo->setName($producto);
        $articulo->setCurrency('MXN')
                  ->setQuantity(1)
                  ->setPrice($producto);
        //echo $articulo->getPrice();
        $listaArticulos = new ItemList();
        $listaArticulos->setItems(array($articulo));

        $detalles new Details();
        $detalles->setShipping($envio)
                  ->setSubtotal($precio);

        $cantidad = new Amount();
        $cantidad -> setCurrency('MXN')
                  -> setTotal($precio)
                  -> setDetails($detalles);
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
}
