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
                                        <a href="wishlist.html">
                                            <div>
                                                <i class="feather-heart"></i>
                                                <p>Wishlist</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="change-password.html" >
                                            <div>
                                                <img src="{{ asset('frontend/assets/img/icons/key.svg') }}" alt="Image" class="mb-10">
                                                <p>Change Password</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="vendor.html" class="active">
                                            <div>
                                                <img src="{{ asset('frontend/assets/img/icons/account-icon-07.png') }}" alt="Image">
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
                            <div class="section-title section-new-title border-tittle wow animate__animated animate__fadeIn" data-wow-delay="0">
                                <h4>Become Vendor</h4>
                            </div>
                            <div class="billing-detail-blk">
                                <form method="post">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Shop Name <span class="text-danger">*</span></label>
                                            <input type="text" required="" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Shop URL <span class="text-danger">*</span></label>
                                            <input type="text" required="" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Phone Number <span class="text-danger">*</span></label>
                                            <input type="text" required="" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="profile-update mt-30">
                                        <button type="button" class="btn btn-primary">Register</button>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection