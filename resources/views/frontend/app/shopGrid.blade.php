@extends('frontend.app.app')


@section('content')
     <!-- Main -->
     <main class="main">
        <div class="page-content">
            <div class="container mb-30">
                <div class="row">
                    <div class="col-lg-12">
                       <div class="product-filter-group">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4">
                                    <div class="filter-list">
                                        <ul>
                                            <li><a href="javascript:;"><i class="fas fa-filter me-1"></i>Filter</a></li>
                                            <li><a href="shop-grid.html" class="active"><i class="fi-rs-apps"></i></a></li>
                                            <li><a href="shop-list.html"><i class="fi-rs-list"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-4">
                                    <div class="show-result">
                                        <p>Showing 1–8 of 62 results</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="select-filter-group">
                                        <div class="sort-by-filter">
                                            <label>Sort By :</label>
                                            <select class="form-select">
                                                <option>Latest</option>
                                                <option>Lastweek</option>
                                                <option>Lastmonth</option>
                                            </select>
                                        </div>
                                        <div class="sort-by-filter show-filter">
                                            <label>Show :</label>
                                            <select class="form-select ">
                                                <option>10</option>
                                                <option>20</option>
                                                <option>30</option>
                                                <option>40</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                       <div class="row product-grid">

                            <!-- Product Card -->
                            <div class="col-xl-3 col-md-4 col-12 col-sm-6">
                                <!-- Product box -->
                                <div class="product-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/product-11.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="sold-group mb-15">
                                            <p>Sold By <span> Global Store</span></p>
                                        </div>
                                        <h2><a href="view-product.html">Antiseptic Spray</a></h2>
                                        <div class="product-card-bottom ">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom ">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                            </div>
                                        </div>
                                        <div class="add-feature">
                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                            <div class="product-details-inner">
                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product box -->
                            </div>
                            <!-- /Product Card -->

                            <!-- Product Card -->
                            <div class="col-xl-3 col-md-4 col-12 col-sm-6">
                                <!-- Product box -->
                                <div class="product-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/product-12.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="sold-group mb-15">
                                            <p>Sold By <span> Global Store</span></p>
                                        </div>
                                        <h2><a href="view-product.html">Digital Stethoscope</a></h2>
                                        <div class="product-card-bottom ">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom ">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                            </div>
                                        </div>
                                        <div class="add-feature">
                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                            <div class="product-details-inner">
                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product box -->
                            </div>
                            <!-- /Product Card -->

                            <!-- Product Card -->
                            <div class="col-xl-3 col-md-4 col-12 col-sm-6">
                                <!-- Product box -->
                                <div class="product-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/product-13.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="sold-group mb-15">
                                            <p>Sold By <span> Global Store</span></p>
                                        </div>
                                        <h2><a href="view-product.html">Cosmetic Containers</a></h2>
                                        <div class="product-card-bottom ">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom ">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                            </div>
                                        </div>
                                        <div class="add-feature">
                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                            <div class="product-details-inner">
                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product box -->
                            </div>
                            <!-- /Product Card -->

                            <!-- Product Card -->
                            <div class="col-xl-3 col-md-4 col-12 col-sm-6">
                                <!-- Product box -->
                                <div class="product-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/product-10.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="sold-group mb-15">
                                            <p>Sold By <span> Global Store</span></p>
                                        </div>
                                        <h2><a href="view-product.html">Blue Hand Gloves</a></h2>
                                        <div class="product-card-bottom ">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom ">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                            </div>
                                        </div>
                                        <div class="add-feature">
                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                            <div class="product-details-inner">
                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product box -->
                            </div>
                            <!-- /Product Card -->

                            <!-- Product Card -->
                            <div class="col-xl-3 col-md-4 col-12 col-sm-6">
                                <!-- Product box -->
                                <div class="product-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/trend-product-01.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="sold-group mb-15">
                                            <p>Sold By <span> Global Store</span></p>
                                        </div>
                                        <h2><a href="view-product.html">Antiseptic Spray</a></h2>
                                        <div class="product-card-bottom ">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom ">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                            </div>
                                        </div>
                                        <div class="add-feature">
                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                            <div class="product-details-inner">
                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product box -->
                            </div>
                            <!-- /Product Card -->

                            <!-- Product Card -->
                            <div class="col-xl-3 col-md-4 col-12 col-sm-6">
                                <!-- Product box -->
                                <div class="product-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/trend-product-02.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="sold-group mb-15">
                                            <p>Sold By <span> Global Store</span></p>
                                        </div>
                                        <h2><a href="view-product.html">Cetaphil Sun Kids Liposomal...</a></h2>
                                        <div class="product-card-bottom ">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom ">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                            </div>
                                        </div>
                                        <div class="add-feature">
                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                            <div class="product-details-inner">
                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product box -->
                            </div>
                            <!-- /Product Card -->

                            <!-- Product Card -->
                            <div class="col-xl-3 col-md-4 col-12 col-sm-6">
                                <!-- Product box -->
                                <div class="product-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/trend-product-03.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="sold-group mb-15">
                                            <p>Sold By <span> Global Store</span></p>
                                        </div>
                                        <h2><a href="view-product.html"> TruRadix Curcumin Oral Str...</a></h2>
                                        <div class="product-card-bottom ">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom ">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                            </div>
                                        </div>
                                        <div class="add-feature">
                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                            <div class="product-details-inner">
                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product box -->
                            </div>
                            <!-- /Product Card -->

                            <!-- Product Card -->
                            <div class="col-xl-3 col-md-4 col-12 col-sm-6">
                                <!-- Product box -->
                                <div class="product-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/trend-product-04.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="sold-group mb-15">
                                            <p>Sold By <span> Global Store</span></p>
                                        </div>
                                        <h2><a href="view-product.html">Goodlife Nutrition Immuni...</a></h2>
                                        <div class="product-card-bottom ">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom ">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                            </div>
                                        </div>
                                        <div class="add-feature">
                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                            <div class="product-details-inner">
                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product box -->
                            </div>
                            <!-- /Product Card -->

                            <!-- Product Card -->
                            <div class="col-xl-3 col-md-4 col-12 col-sm-6">
                                <!-- Product box -->
                                <div class="product-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/trend-product-05.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="sold-group mb-15">
                                            <p>Sold By <span> Global Store</span></p>
                                        </div>
                                        <h2><a href="view-product.html">Ibuprofen 200mg Capsule</a></h2>
                                        <div class="product-card-bottom ">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom ">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                            </div>
                                        </div>
                                        <div class="add-feature">
                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                            <div class="product-details-inner">
                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product box -->
                            </div>
                            <!-- /Product Card -->

                            <!-- Product Card -->
                            <div class="col-xl-3 col-md-4 col-12 col-sm-6">
                                <!-- Product box -->
                                <div class="product-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/trend-product-06.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="sold-group mb-15">
                                            <p>Sold By <span> Global Store</span></p>
                                        </div>
                                        <h2><a href="view-product.html">Natural Elixir For Perfect Skin</a></h2>
                                        <div class="product-card-bottom ">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom ">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                            </div>
                                        </div>
                                        <div class="add-feature">
                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                            <div class="product-details-inner">
                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product box -->
                            </div>
                            <!-- /Product Card -->

                            <!-- Product Card -->
                            <div class="col-xl-3 col-md-4 col-12 col-sm-6">
                                <!-- Product box -->
                                <div class="product-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/trend-product-07.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="sold-group mb-15">
                                            <p>Sold By <span> Global Store</span></p>
                                        </div>
                                        <h2><a href="view-product.html">Alvedon® Film-coated tablet...</a></h2>
                                        <div class="product-card-bottom ">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom ">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                            </div>
                                        </div>
                                        <div class="add-feature">
                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                            <div class="product-details-inner">
                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product box -->
                            </div>
                            <!-- /Product Card -->

                            <!-- Product Card -->
                            <div class="col-xl-3 col-md-4 col-12 col-sm-6">
                                <!-- Product box -->
                                <div class="product-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/trend-product-08.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="sold-group mb-15">
                                            <p>Sold By <span> Global Store</span></p>
                                        </div>
                                        <h2><a href="view-product.html">Amoxicillin 500mg Capsule</a></h2>
                                        <div class="product-card-bottom ">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom ">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                            </div>
                                        </div>
                                        <div class="add-feature">
                                            <a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
                                            <div class="product-details-inner">
                                                <a href="view-product.html" class="product-btn" ><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product box -->
                            </div>
                            <!-- /Product Card -->

                        </div>

                        <!--product grid-->
                        <div class="pagination-area">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fi-rs-angle-left"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fi-rs-angle-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        
                        <!--End Deals-->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /Main -->
@endsection