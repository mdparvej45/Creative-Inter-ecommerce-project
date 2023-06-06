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
                                                        <h4>{{ $user->name }}</h4>
                                                        <p>{{ $user->email }}</p>
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
                                    @if ( $user->roles[0]->name == 'buyer' )
                                    <li>
                                        <a href="vendor.html">
                                            <div>
                                                <i class="feather-shopping-cart"></i>
                                                <p>Become a Seller</p>
                                            </div>
                                        </a>
                                    </li> 
                                    @else
                                    <li>
                                        <a href="vendor.html">
                                            <div>
                                                <i class="feather-shopping-cart"></i>
                                                <p>Deshboard</p>
                                            </div>
                                        </a>
                                    </li> 
                                    @endif
                                    <li>
                                        <a href="{{ route('profile.create') }}" class="active">
                                            <div>
                                                <img src="{{ asset('frontend/assets/img/icons/account-icon-02.png') }}" alt="Image">
                                                <p>My Profile</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="orders.html">
                                            <div>
                                                <i class="feather-shopping-bag"></i>
                                                <p>Cart</p>
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
                                        <a href="{{ route('password.create') }}">
                                            <div>
                                                <img src="{{ asset('frontend/assets/img/icons/key.svg') }}" alt="Image" class="mb-10">
                                                <p> Change Password</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="section-title section-new-title border-tittle wow animate__animated animate__fadeIn" data-wow-delay="0">
                                <h4>Change password</h4>
                            </div>
                            <div class="billing-detail-blk">
                                <form method="post">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Current password <span class="text-danger">*</span></label>
                                            <div class="pass-group">
                                                <input type="password" class="form-control pass-input" >
                                                <span class="feather-eye toggle-password"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>New password <span class="text-danger">*</span></label>
                                            <div class="pass-group">
                                                <input type="password" class="form-control new-pass-input" >
                                                <span class="feather-eye new-password"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Conform password <span class="text-danger">*</span></label>
                                            <div class="pass-group">
                                                <input type="password" class="form-control pass-one-input" >
                                                <span class="feather-eye conform-password"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-update pass-change mt-30">
                                        <button type="button" class="btn btn-primary">Change password</button>
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