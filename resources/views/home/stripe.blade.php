@include('home.css')
@include('home.header')

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h3 class="page-name">Pay On Card</h3>
					<ol class="breadcrumb">
						<li><a href="{{url('/checkout')}}">Checkout</a></li>
						<li class="active">Pay On Card</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="page-wrapper">
    <div class="checkout shopping">
       <div class="container">
          <div class="row">
             <div class="col-md-8">
                <div class="block billing-details">
                   <h4 class="widget-title">Billing Details</h4>
                   <form action="{{url('comfirm_order')}}" method="Post">
                      @csrf
                      <div class="form-group">
                         <label for="full_name">Full Name</label>
                         <input type="text" class="form-control" id="full_name"  name="name" value="{{Auth::user()->name}}">
                      </div>
                      <div class="form-group">
                         <label for="user_address">Address</label>
                         <input type="text" class="form-control" id="user_address"  name="address" value="{{Auth::user()->address}}">
                      </div>
                      <div class="checkout-country-code clearfix">
                         {{-- <div class="form-group">
                            <label for="user_post_code">Zip Code</label>
                            <input type="text" class="form-control" id="user_post_code" name="zipcode" value="">
                         </div> --}}
                         <div class="form-group" >
                            <label for="user_city">Phone</label>
                            <input type="text" class="form-control" id="user_city" name="phone" value="{{Auth::user()->phone}}">
                         </div>
                      </div>
                      {{-- <div class="form-group">
                         <label for="user_country">Country</label>
                         <input type="text" class="form-control" id="user_country" placeholder="">
                      </div> --}}
                   </form>
                </div>
                <div class="block">
                   <h4 class="widget-title">Payment Method</h4>

                    <div class="col-md-12 col-md-offset-3">
                        <div class="panel panel-default credit-card-box">
                            <div class="panel-heading display-table" >
                                    <h3 class="panel-title" >Payment Details</h3>
                                    <h4>You need to pay ${{ $value }}</h4>
                            </div>
                            <div class="panel-body">
                
                                @if (Session::has('success'))
                                    <div class="alert alert-success text-center">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <p>{{ Session::get('success') }}</p>
                                    </div>
                                @endif
                
                                <form 
                                        role="form" 
                                        action="{{ route('stripe.post',$value) }}" 
                                        method="post" 
                                        class="require-validation"
                                        data-cc-on-file="false"
                                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                        id="payment-form">
                                    @csrf
                
                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Name on Card</label> <input
                                                class='form-control' size='4' type='text'>
                                        </div>
                                    </div>
                
                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group card required'>
                                            <label class='control-label'>Card Number</label> <input
                                                autocomplete='off' class='form-control card-number' size='20'
                                                type='text'>
                                        </div>
                                    </div>
                
                                    <div class='form-row row'>
                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                                class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Month</label> <input
                                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                                type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Year</label> <input
                                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                                type='text'>
                                        </div>
                                    </div>
                
                                    <div class='form-row row'>
                                        <div class='col-md-12 error form-group hide'>
                                            <div class='alert-danger alert'>Please correct the errors and try
                                                again.</div>
                                        </div>
                                    </div>
                
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                                        </div>
                                    </div>
                                        
                                </form>
                            </div>
                        </div>        
                    </div>

                   
                   {{-- <p>Credit Cart Details (Secure payment)</p>
                   <div class="checkout-product-details">
                      <div class="payment">
                         <div class="card-details">
                            <form  class="checkout-form">
                               <div class="form-group">
                                  <label for="card-number">Card Number <span class="required">*</span></label>
                                  <input  id="card-number" class="form-control"   type="tel" placeholder="•••• •••• •••• ••••">
                               </div>
                               <div class="form-group half-width padding-right">
                                  <label for="card-expiry">Expiry (MM/YY) <span class="required">*</span></label>
                                  <input id="card-expiry" class="form-control" type="tel" placeholder="MM / YY">
                               </div>
                               <div class="form-group half-width padding-left">
                                  <label for="card-cvc">Card Code <span class="required">*</span></label>
                                  <input id="card-cvc" class="form-control"  type="tel" maxlength="4" placeholder="CVC" >
                               </div>
                               <a href="confirmation.html" class="btn btn-main mt-20">Place Order</a >
                            </form>
                         </div>
                      </div>
                   </div> --}}
                </div>
             </div>
             <div class="col-md-4">
                <div class="product-checkout-details">
                   <div class="block">
                      <h4 class="widget-title">Order Summary</h4>
                      <?php
               
                     $value=0;
               
                     ?>
                      @foreach ($cart as $cart)
                      <div class="media product-card">
                         <a class="pull-left" href="{{url('mycart')}}">
                            <img class="media-object" src="/products/{{$cart->product->image}}" alt="Image" />
                         </a>
                         <div class="media-body">
                            <h4 class="media-heading"><a href="{{url('mycart')}}">{{$cart->product->title}}</a></h4>
                            <p class="price">${{$cart->product->price}}</p>
                            <a class="product-remove" href="{{url('remove_cart',$cart->id)}}">Remove</a>
                            {{-- <span class="remove" >Remove</span> --}}
                         </div>
                         <?php
                            $value=$value + $cart->product->price;
                         ?>
                      </div>
                      @endforeach
                      
                      <ul class="summary-prices">
                         <li>
                            <span>Subtotal:</span>
                            <span class="price">${{$value}}</span>
                         </li>
                         <li>
                            <span>Shipping:</span>
                            <span>Free</span>
                         </li>
                      </ul>
                      <div class="summary-total">
                         <span>Total</span>
                         <span>${{$value}}</span>
                      </div>
                      {{-- <div class="verified-icon">
                         <img src="{{ asset('assets/images/shop/verified.png') }}">
                      </div> --}}
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>




<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
<script type="text/javascript">
  
$(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>
@include('home.footer')
