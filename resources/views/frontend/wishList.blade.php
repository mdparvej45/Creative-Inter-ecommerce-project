@extends('frontend.app.app')

@section('content')
     <!-- Main -->
     <main class="main pages">
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="pharm-account-group">
                            <div class="card mb-30">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="account-profile-group"> 
                                                <div class="account-key-name d-flex align-items-center">
                                                    <a href="#" class="d-flex"><span class="more-avatars">T</span></a>
                                                    <div class="profile-names">
                                                        <h4>Teri Jennings</h4>
                                                        <p>teri@example.com</p>
                                                    </div>
                                                </div>
                                                <div class="profile-account-img">
                                                    <img src="{{ asset('frontend/assets/img/profile-img-01.png') }}" alt="Image">
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="pharm-account-list mb-50">
                                <ul>
                                    <li>
                                        <a href="account.html" >
                                            <div>
                                                <i class="feather-sliders"></i>
                                                <p>Overview</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="profile.html">
                                            <div>
                                                <i class="feather-user-check"></i>
                                                <p>Profile</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="orders.html" >
                                            <div>
                                                <i class="feather-shopping-bag"></i>
                                                <p>Orders</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="address-book.html">
                                            <div>
                                                <i class="feather-map"></i>
                                                <p>Address Book</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" class="active">
                                            <div>
                                                <img src="{{ asset('frontend/assets/img/icons/account-icon-05.png') }}" alt="Image">
                                                <p>Wishlist</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="change-password.html" >
                                            <div>
                                                <img src="{{ asset('frontend/assets/img/icons/key.svg') }}" alt="Image">
                                                <p>Change Password</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="vendor.html">
                                            <div>
                                                <i class="feather-shopping-cart"></i>
                                                <p>Become a Vendor</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html">
                                            <div>
                                                <i class="feather-log-out"></i>
                                                <p>Logout</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="section-title section-new-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                                <h4>My Wishlist</h4>
                            </div>
                            <div class="table-responsive shopping-table">
                                <table class="table">
                                    <thead>
                                        <tr class="table-head">
                                            <th></th>
                                            <th>Product Name</th>
                                            <th>Unit Price</th>
                                            <th>Stock status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-head">
                                            <td><a href="javascript:;" class="table-btn-close"><i class="feather-x-circle"></i></a></td>
                                            <td class="image product-thumbnail">
                                                <a href="view-product.html"><img src="{{ asset('frontend/assets/img/shop/wishlist-01.jpg') }}" class="img-fluid" alt="">Antiseptic Spray</a>
                                            </td>
                                            <td>
                                                <div class="cart-unit-price">
                                                    <span>$ 32.00</span>
                                                    <span class="old-price">$ 46.00</span>
                                                </div>
                                            </td>
                                            <td class="in-stock-cart">In stock</td>
                                            <td>
                                                <div class="add-to-cart">
                                                    <a href="cart.html" class="button button-add-to-cart "><i class="fi-rs-shopping-cart me-1"></i> Add to cart</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-head">
                                            <td><a href="javascript:;" class="table-btn-close"><i class="feather-x-circle"></i></a></td>
                                            <td class="image product-thumbnail">
                                                <a href="view-product.html"><img src="{{ asset('frontend/assets/img/shop/wishlist-02.jpg') }}" class="img-fluid" alt="">Digital Stethoscope</a>
                                            </td>
                                            <td>
                                                <div class="cart-unit-price">
                                                    <span>$ 12.00</span>
                                                    <span class="old-price">$ 16.00</span>
                                                </div>
                                            </td>
                                            <td class="in-stock-cart">In stock</td>
                                            <td>
                                                <div class="add-to-cart">
                                                    <a href="cart.html" class="button button-add-to-cart "><i class="fi-rs-shopping-cart me-1"></i> Add to cart</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-head">
                                            <td><a href="javascript:;" class="table-btn-close"><i class="feather-x-circle"></i></a></td>
                                            <td class="image product-thumbnail">
                                                <a href="view-product.html"><img src="{{ asset('frontend/assets/img/shop/wishlist-03.jpg') }}" class="img-fluid" alt="">Cosmetic Containers</a>
                                            </td>
                                            <td>
                                                <div class="cart-unit-price">
                                                    <span>$ 22.00</span>
                                                    <span class="old-price">$ 26.00</span>
                                                </div>
                                            </td>
                                            <td class="in-stock-cart">In stock</td>
                                            <td>
                                                <div class="add-to-cart">
                                                    <a href="cart.html" class="button button-add-to-cart "><i class="fi-rs-shopping-cart me-1"></i> Add to cart</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-head">
                                            <td><a href="javascript:;" class="table-btn-close"><i class="feather-x-circle"></i></a></td>
                                            <td class="image product-thumbnail">
                                                <a href="view-product.html"><img src="{{ asset('frontend/assets/img/shop/wishlist-04.jpg') }}" class="img-fluid" alt="">Blue Hand Gloves</a>
                                            </td>
                                            <td>
                                                <div class="cart-unit-price">
                                                    <span>$ 32.00</span>
                                                    <span class="old-price">$ 46.00</span>
                                                </div>
                                            </td>
                                            <td class="in-stock-cart">In stock</td>
                                            <td>
                                                <div class="add-to-cart">
                                                    <a href="cart.html" class="button button-add-to-cart "><i class="fi-rs-shopping-cart me-1"></i> Add to cart</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection