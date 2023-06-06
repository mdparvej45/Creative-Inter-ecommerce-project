@extends('frontend.app.app')


@section('content')
    <main class="main">
        <div class="container mb-80 mt-50">
            @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
            <form role="form" action="{{ route('paymentWithStripe') }}" method="POST" data-cc-on-file="false"
                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form" class="require-validation">
                @csrf
                <div class="row">

                    <div class="col-lg-12">
                        <div class="coupon-group">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <h4 class="mb-30">Billing Details</h4>
                            <div class="billing-detail-blk">
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" required="" name="fname" placeholder="Full Name">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Email address <span class="text-danger">*</span></label>
                                        <input type="email" name="email" required="" placeholder="Email ">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Country / Region <span class="text-danger">*</span></label>
                                        <select class="form-select" name="country">
                                            <option value="United States (US)">United States (US)</option>
                                            <option value="India">India</option>
                                            <option value="Russia">Russia</option>
                                            <option value="London">London</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Street address <span class="text-danger">*</span></label>
                                        <input type="text" name="billing_address" required="" placeholder="Address">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Town / City <span class="text-danger">*</span></label>
                                        <input required="" type="text" name="city" placeholder="Town / City">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Zip <span class="text-danger">*</span></label>
                                        <input required="" type="text" name="zipcode" placeholder="ZIP ">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input required="" type="text" name="phone" placeholder="Phone ">
                                    </div>
                                </div>
                                <div class="ship_detail">
                                    <div class="form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                    id="differentaddress">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseAddress" class="different_address collapse in">
                                    </div>
                                </div>
                                <div class="form-group mb-30">
                                    <label>Order notes (optional)</label>
                                    <textarea rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="cart-totals mb-50">
                            <div class="d-flex align-items-end justify-content-between mb-20">
                                <h4>Your Order</h4>
                            </div>
                            <div class="table-responsive order_table checkout">
                                <table class="table no-border mb-0">
                                    <thead>
                                        <tr>
                                            <th>Product name </th>
                                            <th>SubTotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartItems as $item)
                                            <tr>
                                                <td class="check-cart-img">
                                                    <a href="shop-list.html"><img src="{{ $item->product->image_url }}"
                                                            alt="#" width="80"></a>
                                                    <h6><a href="shop-list.html"
                                                            class="text-heading">{{ $item->product->title }}
                                                            <span>(x
                                                                10)</span></a></h6>
                                                </td>
                                                <td>
                                                    <h4 class="text-brand">${{ $item->price }}</h4>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <ul>
                                <li>Shipping</li>
                                <li>Shipping to India. </li>
                            </ul>
                            @php
                                $total = App\Models\Cart::where('user_id', Auth::user()->id)->sum('price');
                            @endphp
                            <div class="total-checkout">
                                <input type="hidden" name="total_ammount" value="{{ $price->discount_price }}">
                                <h3>Total <span>${{ $price->discount_price }}</span></h3>
                            </div>
                        </div>
                        <div class="payment">
                            <h4 class="mb-20">Payment method</h4>
                            <div class="payment_option">


                                <div class="custome-radio">
                                    <input class="form-check-input" required="" type="radio" name="payment_option"
                                        id="exampleRadios5" checked="" name="stripe_method">
                                    <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse"
                                        data-bs-target="#paypal">Online Getway </label>
                                    <img class="ml-10" src="assets/img/icons/paypal.svg" alt="">
                                </div>
                            </div>
                            <div class="terms-conditions-pay">
                                <p>Your personal data will be used to process your order, support your experience throughout
                                    this website, and for other purposes described in our <a href="javascript:;">privacy
                                        policy.</a></p>
                            </div>
                            <div class="check-pay">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" required> I have
                                        read and
                                        agree to the website ? <br><a href="javascript:;">terms and conditions <span
                                                class="text-danger">*</span></a>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> <input class='form-control'
                                        size='4' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 form-group card required'>
                                    <label class='control-label'>Card Number</label> <input autocomplete='off'
                                        class='form-control card-number' size='20' type='text'>
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


                        </div>
                    </div>
                    <div class="place-orders">
                        <button class="btn btn-fill-out btn-block mt-30">Place Order</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    @push('script')
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
    @endpush
@endsection
