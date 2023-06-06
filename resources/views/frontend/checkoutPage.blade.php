@extends('frontend.app.app')

@section('content')
    <!-- Main -->
    <main class="main">
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="coupon-group">
                        <div class="row">
                            <div class="col-lg-6 mb-sm-15 mb-lg-0 mb-md-3">
                                <div class="toggle_info">
                                    <span>
                                        <i class="fas fa-user mr-10"></i>
                                        <span class="return-coupon mr-10">Returning customer?</span> 
                                        <a href="#loginform" data-bs-toggle="collapse" class="collapsed " aria-expanded="false">Click here to login</a>
                                    </span>
                                </div>
                                <div class="panel-collapse collapse login_form" id="loginform">
                                    <div class="panel-body">
                                        <p class="mb-30 font-sm">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" name="email" placeholder="Username Or Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" placeholder="Password">
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="">
                                                        <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                                    </div>
                                                </div>
                                                <a href="#">Forgot password?</a>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-md" name="login">Log in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="toggle_info">
                                    <span>
                                        <img src="{{ asset('frontend/assets/img/icons/voucher.svg') }}" alt="" class="mr-10">
                                        <span class="return-coupon mr-10">Have a coupon?</span> 
                                        <a href="javascript:;"  class="collapsed ">Click here to enter your code</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <h4 class="mb-30">Billing Details</h4>
                        <div class="billing-detail-blk">
                            <form method="post">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input type="text" required="" name="fname" placeholder="Full Name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Last Name <span class="text-danger">*</span></label>
                                        <input type="text" required="" name="lname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Company name (optional)</label>
                                        <input type="text" required="" name="fname" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Email address <span class="text-danger">*</span></label>
                                        <input type="email" name="email" required="" placeholder="Email ">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Country / Region <span class="text-danger">*</span></label>
                                        <select class="form-select">
                                            <option>United States (US)</option>
                                            <option>India</option>
                                            <option>Russia</option>
                                            <option>London</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Street address  <span class="text-danger">*</span></label>
                                        <input type="text" name="billing_address" required="" placeholder="Address">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" name="billing_address2" required="" placeholder="Address line2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Town / City  <span class="text-danger">*</span></label>
                                        <input required="" type="text" name="city" placeholder="Town / City">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>State  <span class="text-danger">*</span></label>
                                        <select class="form-select">
                                            <option>New York</option>
                                            <option>India</option>
                                            <option>Russia</option>
                                            <option>London</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Zip <span class="text-danger">*</span></label>
                                        <input required="" type="text" name="zipcode" placeholder="ZIP ">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Phone  <span class="text-danger">*</span></label>
                                        <input required="" type="text" name="phone" placeholder="Phone ">
                                    </div>
                                </div>
                                <div class="ship_detail">
                                    <div class="form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="differentaddress">
                                                <label class="form-check-label label_info" data-bs-toggle="collapse" data-bs-target="#collapseAddress" for="differentaddress"><span>Ship to a different address?</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseAddress" class="different_address collapse in">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label>First Name <span class="text-danger">*</span></label>
                                                <input type="text" required="" name="fname" placeholder="Full Name">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Last Name <span class="text-danger">*</span></label>
                                                <input type="text" required="" name="lname" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label>Company name (optional)</label>
                                                <input type="text" required="" name="fname" placeholder="Company Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label>Email address <span class="text-danger">*</span></label>
                                                <input type="email" name="email" required="" placeholder="Email ">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Country / Region <span class="text-danger">*</span></label>
                                                <select class="form-select">
                                                    <option>United States (US)</option>
                                                    <option>India</option>
                                                    <option>Russia</option>
                                                    <option>London</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label>Street address  <span class="text-danger">*</span></label>
                                                <input type="text" name="billing_address" required="" placeholder="Address">
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <input type="text" name="billing_address2" required="" placeholder="Address line2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-30">
                                    <label>Order notes (optional)</label>
                                    <textarea rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </form>
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
                                    <tr>
                                        <td class="check-cart-img">
                                            <a href="shop-list.html"><img src="{{ asset('frontend/assets/img/shop/cart-img-03.jpg') }}" alt="#"></a>
                                            <h6 ><a href="shop-list.html" class="text-heading">Antiseptic Spray <span>(x 10)</span></a></h6>
                                        </td>
                                        <td>
                                            <h4 class="text-brand">$32.00</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <ul>
                            <li>Shipping</li>
                            <li>Shipping to India. </li>
                        </ul>
                        <div class="total-checkout">
                            <h3>Total <span>$320.00</span></h3>
                        </div>
                    </div>
                    <div class="payment">
                        <h4 class="mb-20">Payment method</h4>
                        <div class="payment_option">
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" checked="">
                                <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-bs-target="#bankTranfer">Direct Bank Transfer<br>
                                    <span>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</span>
                                </label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4" checked="">
                                <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-bs-target="#checkPayment">Cash on delivery</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5" checked="">
                                <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-bs-target="#paypal">Online Getway </label>
                                <img class="ml-10" src="{{ asset('frontend/assets/img/icons/paypal.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="terms-conditions-pay">
                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="javascript:;">privacy policy.</a></p>
                        </div>
                        <div class="check-pay">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"> I have read and agree to the website ? <br><a href="javascript:;">terms and conditions <span class="text-danger">*</span></a>
                                </label>
                            </div>
                        </div>
                        <div class="place-orders">
                            <a aria-label="succesmodal"  data-bs-toggle="modal" data-bs-target="#succesmodal" class="btn btn-fill-out btn-block mt-30">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /Main -->
@endsection