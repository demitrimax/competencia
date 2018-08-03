<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree_ClientToken;
use Braintree_Configuration;

class BraintreeTokenController extends Controller
{
    //
    public function token() {
      return env('BRAINTREE_ENV');
      /*
      return response()->json([
        'data' => [
          'token' => Braintree_ClientToken::generate(),
        ]
      ]);
      */
    }
}
