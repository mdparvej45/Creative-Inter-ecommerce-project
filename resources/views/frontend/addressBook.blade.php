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
                                        <a href="account.html">
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
                                        <a href="orders.html">
                                            <div>
                                                <i class="feather-shopping-bag"></i>
                                                <p>Orders</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="address-book.html" class="active">
                                            <div>
                                                <img src="{{ asset('frontend/assets/img/icons/account-icon-04.png') }}" alt="Image">
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
                                        <a href="change-password.html">
                                            <div>
                                                <img src="{{ asset('frontend/assets/img/icons/key.svg') }}" alt="Image" class="mb-10">
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
                            <div class="account-overview">
                                <p>The following addresses will be used on the checkout page by default.</p>
                            </div>
                        </div>
                        <div class="addres-book-group">
                            <div class="account dashboard-content">
                                <div class="card border-0 mb-30 mt-30">
                                    <div
                                        class="card-header card-header-border d-flex align-items-center justify-content-between pt-0 pb-30">
                                        <h3 class="card-title">Manage Address</h3>
                                        <div class="account-edit">
                                            <a aria-label="addmodal" class="btn modal-btn-address" data-bs-toggle="modal"
                                                data-bs-target="#addmodal">+ ADD A NEW ADDRESS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 mb-30">
                                    <div class="card-header p-0">
                                        <p class="card-content">Saved Address</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mb-25">
                                            <div class="card-body">
                                                <div class="card-header card-header-border">
                                                    <h4 class="card-sub-title">Home</h4>
                                                </div>
                                                <div class="card-details">
                                                    <h4 class="card-details-title">Teri Jennings</h4>
                                                    <p><i class="feather-phone"></i> 5396 5250 1908</p>
                                                    <p class="d-flex align-items-center">
                                                        <i class="feather-map-pin"></i> 3556 Beech Street, San Francisco,
                                                        California, CA 94108
                                                    </p>
                                                    <a href="#" class="edit-book" aria-label="editmodal"
                                                        data-bs-toggle="modal" data-bs-target="#editmodal"><i
                                                            class="feather-edit me-1"></i>Edit</a>
                                                    <a href="#" class="delete-book"><i
                                                            class="feather-trash-2 me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-header card-header-border">
                                                    <h4 class="card-sub-title">Office</h4>
                                                </div>
                                                <div class="card-details">
                                                    <h4 class="card-details-title">Teri Jennings Two</h4>
                                                    <p><i class="feather-phone"></i> 5396 5250 1908</p>
                                                    <p class="d-flex align-items-center">
                                                        <i class="feather-map-pin"></i> 3556 Beech Street, San Francisco,
                                                        California, CA 94108
                                                    </p>
                                                    <a href="#" class="edit-book" aria-label="editmodal"
                                                        data-bs-toggle="modal" data-bs-target="#editmodal"><i
                                                            class="feather-edit me-1"></i>Edit</a>
                                                    <a href="#" class="delete-book"><i
                                                            class="feather-trash-2 me-1"></i>Delete</a>
                                                </div>
                                            </div>
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
@endsection
