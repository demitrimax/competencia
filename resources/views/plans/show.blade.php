@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">{{ $plan }}</div>
          <div class="panel-body">
            <form>
              <div id="dropin-container"></div>
              <hr>

              <button id="payment-button" class="btn btn-primary btn-flat" type="submit">Pagar Ahora</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('braintree-script')
    <script src="https://js.braintreegateway.com/js/braintree-2.30.0.min.js"></script>
    <script>
        braintree.setup('CLIENT-TOKEN-FROM-SERVER', 'dropin', {
        container: 'dropin-container'
        });
    </script>
@endsection
