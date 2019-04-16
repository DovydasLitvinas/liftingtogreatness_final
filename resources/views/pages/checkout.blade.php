@extends('layouts.app')
@section('checkout')
<head>
  <script src="https://js.stripe.com/v3/"></script>
</head>
<style>
    .container {
      margin-top: 7%;
      margin-bottom: 5%;
    }
    .spacer {
        margin-bottom: 24px;
    }
    /**
     * The CSS shown here will not be introduced in the Quickstart guide, but shows
     * how you can use CSS to style your Element's container.
     */
    .StripeElement {
      background-color: white;
      padding: 10px 12px;
      border-radius: 4px;
      border: 1px solid #ccd0d2;
      box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
      -webkit-transition: box-shadow 150ms ease;
      transition: box-shadow 150ms ease;
    }
    .StripeElement--focus {
      box-shadow: 0 1px 3px 0 #cfd7df;
    }
    .StripeElement--invalid {
      border-color: #fa755a;
    }
    .StripeElement--webkit-autofill {
      background-color: #fefde5 !important;
    }
    #card-errors {
        color: #fa755a;
    }
</style>
<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <h1>Mokėjimo forma</h1>
            <div class="spacer"></div>

            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('/checkout') }}" method="POST" id="payment-form">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">El. pašto adresas</label>
                    <input type="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                    <label for="name_on_card">Vardas ir pavardė ant kortelės</label>
                    <input type="text" class="form-control" id="name_on_card" name="name_on_card">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Adresas</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="city">Miestas</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="province">Rajonas/Provincija</label>
                            <input type="text" class="form-control" id="province" name="province">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="postalcode">Pašto kodas</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="country">Šalis</label>
                            <input type="text" class="form-control" id="country" name="country">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phone">Telefono numeris</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label for="card-element">Kredito kortelė</label>
                    <div id="card-element">
                      <!-- a Stripe Element will be inserted here. -->
                  </div>

                  <!-- Used to display form errors -->
                  <div id="card-errors" role="alert"></div>
                </div>

                <div class="spacer"></div>

                <button type="submit" class="btn btn-success">Patvirtinti mokėjimą</button>
            </form>
        </div>
    </div>

    <script>
        (function(){
            // Create a Stripe client
            var stripe = Stripe('{{ config('services.stripe.key') }}');
            // Create an instance of Elements
            var elements = stripe.elements();
            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
              base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Raleway", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                  color: '#aab7c4'
                }
              },
              invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
              }
            };
            // Create an instance of the card Element
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });
            // Add an instance of the card Element into the `card-element` <div>
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });
            // Handle form submission
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();
              var options = {
                name: document.getElementById('name_on_card').value,
              }
              stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;
                } else {
                  // Send the token to your server
                  stripeTokenHandler(result.token);
                }
              });
            });
            function stripeTokenHandler(token) {
              // Insert the token ID into the form so it gets submitted to the server
              var form = document.getElementById('payment-form');
              var hiddenInput = document.createElement('input');
              hiddenInput.setAttribute('type', 'hidden');
              hiddenInput.setAttribute('name', 'stripeToken');
              hiddenInput.setAttribute('value', token.id);
              form.appendChild(hiddenInput);
              // Submit the form
              form.submit();
            }
        })();
    </script>
@stop