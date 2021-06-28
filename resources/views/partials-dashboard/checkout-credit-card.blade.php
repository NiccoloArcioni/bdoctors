@extends('layouts.app')

@section('content')
    @php
        /* chiave pubblica stripe */
        $stripe_key = 'pk_test_51J5WAhDHGqBrI8m3ng2oNaCnjsHTztW9hwRjk86D222GHFvmBX5BoIVBxDCFxVZf8XEdbOQZ3hK6GCo7iKbeUgtR00wu6yfyW9';
    @endphp
    <div class="container " style="margin-top:10%;margin-bottom:10%">
        <div class="row checkout_container justify-content-center">
            <div class="riepilogo col-md-6 col-sm-12">
                <div class="carrello">
                    <h1>Riepilogo carrello <i class="icofont-ui-cart"></i></h1>
                    <p><i class="icofont-package"></i> Pacchetto selezionato: <strong>{{$ad->type}}</strong></p>
                    <p><i class="icofont-clock-time"></i> Valido per: <strong>{{$ad->hours}} h</strong></p>
                    <p><i class="icofont-price"></i> Importo: <strong>€{{$ad->price}} </strong> </p>
                </div>
            </div>
            <div class=" pagamento col-md-6 col-sm-12">
                <div class="card">
                    <form action="{{route('checkout.credit-card', ['id' => $ad->id])}}"  method="post" id="payment-form">
                        @csrf                    
                        <div class="form-group form_datipagamento">
                            <h1>Pagamento</h1>
                            <div class="card-body">
                                <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                                </div>
                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                                <input type="hidden" name="plan" value="" />
                            </div>
                        </div>
                        <div class="card-footer">
                          <button
                          id="card-button"
                          class="register-btn"
                          type="submit"
                          data-secret="{{ $intent }}"
                        > Pay </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)

        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
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
    
        const stripe = Stripe('{{ $stripe_key }}', { locale: 'en' }); // Create a Stripe client.
        const elements = stripe.elements(); // Create an instance of Elements.
        const cardElement = elements.create('card', { style: style }); // Create an instance of the card Element.
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
    
        cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.
    
        // Handle real-time validation errors from the card Element.
        cardElement.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
    
        // Handle form submission.
        var form = document.getElementById('payment-form');
    
        form.addEventListener('submit', function(event) {
            event.preventDefault();
    
        stripe.handleCardPayment(clientSecret, cardElement, {
                payment_method_data: {
                    //billing_details: { name: cardHolderName.value }
                }
            })
            .then(function(result) {
                console.log(result);
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    console.log(result);
                    form.submit();
                }
            });
        });
    </script>
@endsection
