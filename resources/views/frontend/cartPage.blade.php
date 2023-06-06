@extends('frontend.app.app')


@section('content')
      <!-- Main -->
      <main class="main">
        <div class="page-content">
            <div class="container">
                <div class="section-title section-new-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                    <h4>Shopping Cart</h4>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive shopping-table">
                            <table class="table">
                                <thead>
                                    <tr class="table-head">
                                        <th></th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-head">
                                        <td><a href="javascript:;" class="table-btn-close"><i class="feather-x-circle"></i></a></td>
                                        <td class="cart-store">
                                            <a href="view-product.html"><img src="{{ asset('frontend/assets/img/shop/wishlist-01.jpg') }}" class="img-fluid" alt=""></a>
                                            <div class="sold-group">
                                                <a href="javascript:;">Antiseptic Spray</a>
                                                <p>Vendor: <span> Global Store</span></p>
                                            </div>
                                        </td>
                                        <td>$ 32.00</td>
                                        <td >
                                            <div class="product-extra-link2 ">
                                                <div class="quntity-group  d-flex">
                                                    <div class="detail-extralink">
                                                        <div class="detail-qty border radius">
                                                            <a href="#" class="qty-down"><i class="fi-rs-minus-small"></i></a>
                                                            <span class="qty-val">1</span>
                                                            <a href="#" class="qty-up"><i class="fi-rs-plus-small"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$320.00 </td>
                                    </tr>
                                    <tr class="table-head">
                                        <td><a href="javascript:;" class="table-btn-close"><i class="feather-x-circle"></i></a></td>
                                        <td class="cart-store">
                                            <a href="view-product.html"><img src="{{ asset('frontend/assets/img/shop/wishlist-02.jpg') }}" class="img-fluid" alt=""></a>
                                            <div class="sold-group">
                                                <a href="javascript:;">Digital Stethoscope</a>
                                                <p>Vendor: <span> Global Store</span></p>
                                            </div>
                                        </td>
                                        <td>$ 12.00</td>
                                        <td >
                                            <div class="product-extra-link2 ">
                                                <div class="quntity-group  d-flex">
                                                    <div class="detail-extralink">
                                                        <div class="detail-qty border radius">
                                                            <a href="#" class="qty-down"><i class="fi-rs-minus-small"></i></a>
                                                            <span class="qty-val">1</span>
                                                            <a href="#" class="qty-up"><i class="fi-rs-plus-small"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$120.00 </td>
                                    </tr>
                                    <tr class="table-head">
                                        <td><a href="javascript:;" class="table-btn-close"><i class="feather-x-circle"></i></a></td>
                                        <td class="cart-store">
                                            <a href="view-product.html"><img src="{{ asset('frontend/assets/img/shop/wishlist-03.jpg') }}" class="img-fluid" alt=""></a>
                                            <div class="sold-group">
                                                <a href="javascript:;">Cosmetic Containers</a>
                                                <p>Vendor: <span> Global Store</span></p>
                                            </div>
                                        </td>
                                        <td>$ 32.00</td>
                                        <td >
                                            <div class="product-extra-link2 ">
                                                <div class="quntity-group  d-flex">
                                                    <div class="detail-extralink">
                                                        <div class="detail-qty border radius">
                                                            <a href="#" class="qty-down"><i class="fi-rs-minus-small"></i></a>
                                                            <span class="qty-val">1</span>
                                                            <a href="#" class="qty-up"><i class="fi-rs-plus-small"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$420.00 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="shop-cart">
                        <div class="row">
                            <div class="col-lg-8 col-md-6">
                                <form action="javascript:;">
                                    <div class="shop-cart-action mb-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Coupon code">
                                        </div>
                                        <button type="button" class="btn continue-btn">Apply coupon</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="continue-shop d-flex align-items-center justify-content-end">
                                    <div class="shop-continuee">
                                        <a href="shop-grid.html">Continue Shopping</a>
                                    </div>
                                    <div class="update-carts">
                                        <a href="javascript:;" class="btn btn-primary">Update Cart</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="shop-cart-info">
                                            <p>Subtotal <span>$320.00 </span></p>
                                            <ul class="shipping-list">
                                                <li>Shipping</li>
                                                <li>Free shipping</li>
                                                <li>Shipping to India. </li>
                                            </ul>
                                            <p>Total <span class="total-brand">$320.00 </span></p>
                                            <a href="checkout.html" class="btn checkout-btn w-100">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /Main -->
@endsection