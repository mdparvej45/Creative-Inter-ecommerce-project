@extends('frontend.app.app')
@section('content')
    <div class="main-menu-wrapper">
        <div class="mobile-header-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index.html"><img src="assets/img/logo.png" alt="logo" /></a>
                </div>
                <div class="mobile-menu-close close-col menu-close-position">
                    <button class="close-style">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content">
                <div class="mobile-search mobile-search-three mobile-header-border">
                    <form action="product-category-list.html">
                        <input type="text" placeholder="Search for items…" />
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-col mobile-header-border">

                    <!-- Mobile Menu -->
                    <nav>
                        <ul class="main-nav">
                            <li class="mobile-menu-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="mobile-menu-item">
                                <a href="#">All Medicines</a>
                                <ul class="dropdown">
                                    <li><a href="view-product.html">COVID Medicines</a></li>
                                    <li><a href="view-product.html">Ayrvedic Medicines</a></li>
                                    <li><a href="view-product.html">Health Equipments</a></li>
                                    <li><a href="view-product.html">Personal Care</a></li>
                                    <li><a href="view-product.html">Fitness Suppliments</a></li>
                                    <li><a href="view-product.html">Childcare</a></li>
                                </ul>
                            </li>
                            <li class="mobile-menu-item">
                                <a href="#">COVID Medicines</a>
                                <ul class="dropdown">
                                    <li><a href="view-product.html">Stimulants</a></li>
                                    <li><a href="view-product.html">Opoids</a></li>
                                    <li><a href="view-product.html">Antibiotics</a></li>
                                </ul>
                            </li>
                            <li class="mobile-menu-item">
                                <a href="#">Ayrvedic Medicines</a>
                                <ul class="dropdown">
                                    <li><a href="view-product.html">Calcitonin</a></li>
                                    <li><a href="view-product.html">Echinocandins</a></li>
                                    <li><a href="view-product.html">Handicraft</a></li>
                                    <li><a href="view-product.html">Suppositories</a></li>
                                </ul>
                            </li>
                            <li class="mobile-menu-item">
                                <a href="#">Health Equipments</a>
                                <ul class="dropdown">
                                    <li><a href="view-product.html">Medical Supplies</a></li>
                                    <li><a href="view-product.html">Pulse Oximeters</a></li>
                                    <li><a href="view-product.html">Examination Gloves</a></li>
                                    <li><a href="view-product.html">Baby Care</a></li>
                                    <li><a href="view-product.html">Respiratory</a></li>
                                    <li><a href="view-product.html">Medical Equipment</a></li>
                                </ul>
                            </li>
                            <li class="mobile-menu-item">
                                <a href="#">Personal Care</a>
                                <ul class="dropdown">
                                    <li><a href="view-product.html"> Digital Glucose Meter</a></li>
                                    <li><a href="view-product.html">Digital Thermometer</a></li>
                                    <li><a href="view-product.html">Cotton Mask</a></li>
                                    <li><a href="view-product.html">Kids Thermometer</a></li>
                                    <li><a href="view-product.html">Face Mask</a></li>
                                    <li><a href="view-product.html">Digital Meter</a></li>
                                </ul>
                            </li>
                            <li class="mobile-menu-item">
                                <a href="#">Mega Menu</a>
                                <ul class="dropdown">
                                    <li class="mobile-menu-item">
                                        <a href="#">Shop Layout</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="shop-grid-left.html">Shop Left Sidebar</a></li>
                                            <li><a href="shop-grid-right.html">Shop Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="mobile-menu-item">
                                        <a href="#">Product Layout</a>
                                        <ul class="dropdown">
                                            <li><a href="view-product.html">View Product</a></li>
                                            <li><a href="product-left-sidebar.html">Product Left Sidebar</a></li>
                                            <li><a href="product-right-sidebar.html">Product Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="mobile-menu-item">
                                        <a href="#">Product Type</a>
                                        <ul class="dropdown">
                                            <li><a href="store-listing.html">Store Listing</a></li>
                                                <li><a href="store-single.html">Store Single</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages <i class="fi-rs-angle-down"></i></a>
                                <ul class="has-submenu">
                                    <li><a href="account.html">My Account</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="orders.html">Orders</a></li>
                                    <li><a href="address-book.html">Address Book </a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="vendor.html">Vendor</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="error-404.html">Error404</a></li>
                                    <li><a href="error-500.html">Error500</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- /Mobile Menu -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Header -->

    <!-- breadcrumb -->
    <div class="breadcrumb-group">
        <div class="container">
            <div class="page-header breadcrumb-wrap">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.html" rel="nofollow"><i class="fas fa-home mr-10"></i>Home</a></li>
                        <li>Product Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /breadcrumb -->
    
    <!-- Main -->
    <main class="main">
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-5 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                    <div class="detail-gallery">
                                        <!-- MAIN SLIDES -->
                                        <div class="position-relative">
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="{{ url($product[0]->image_url) }}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                            </figure>
                                        </div>
                                            <span class="zoom-icon"><i class="feather-search"></i></span>
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails">
                                            <div><img src="assets/img/shop/product-small-02.jpg" alt="product image"></div>
                                            <div><img src="assets/img/shop/product-small-03.jpg" alt="product image"></div>
                                            <div><img src="assets/img/shop/product-small-02.jpg" alt="product image"></div>
                                            <div><img src="assets/img/shop/product-small-03.jpg" alt="product image"></div>
                                            <div><img src="assets/img/shop/product-small-02.jpg" alt="product image"></div>
                                            <div><img src="assets/img/shop/product-small-03.jpg" alt="product image"></div>
                                            <div><img src="assets/img/shop/product-small-02.jpg" alt="product image"></div>
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <div class="bg-price">
                                            <span class="save-price mb-10">100%</span>
                                        </div>
                                        <h5 class="title-detail">{{ $product[0]->title }}</h5>
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <span class="current-price">$ 32.00</span>
                                                <span class="old-price">$ 46.00</span>
                                            </div>
                                        </div>
                                        <ul class="pro-code">
                                            <li>SKU ID : <span class="text-black">{{ $product[0]->sku }}</span></li>
                                            <li>Category : <span class="text-black">{{ $product[0]->category->cat_name}}</span></li>
                                            <li>Availability : <span style="color:{{ $product[0]->stock !== 0 ? 'green' : 'red' }}" class="text-brand">{{ $product[0]->stock !== 0 ? 'In Stock' : 'Sold Out' }}</span></li>
                                        </ul>                                  
                                        <div class="product-extra-link2 ">
                                            <h5>Quantity</h5>
                                            <div class="quntity-group  d-flex">
                                                <div class="detail-extralink">
                                                    <div class="detail-qty border radius">
                                                        <a href="#" class="qty-down"><i class="fi-rs-minus-small"></i></a>
                                                        <span class="qty-val">1</span>
                                                        <a href="#" class="qty-up"><i class="fi-rs-plus-small"></i></a>
                                                    </div>
                                                </div>
                                                <a href="cart.html" class="button button-add-to-cart me-3"><i class="fi-rs-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="pop-wish">
                                            <a aria-label="Add To Wishlist" class=" link-wishlist" href="wishlist.html"><i class="feather-heart me-1 ms-1"></i>Add to Wishlist</a>
                                        </div>
                                        <div class="pro-share">
                                            <ul>
                                                <li class="me-2"><span>Share :</span></li>
                                                <li><a href="javascript:;"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="javascript:;"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="tab-style3">
                                    <ul class="nav nav-tabs text-uppercase">
                                        <li class="nav-item">
                                            <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Specification">Specification</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="review-tab" data-bs-toggle="tab" href="#Review">Review(4)</a>
                                        </li>
                                    </ul>
                                    <div class="view-detail-tab">
                                        <div class="tab-content shop_info_tab entry-main-content">
                                            <div class="tab-pane specific-perform fade" id="Specification">
                                                {!! $product[0]->specification !!}
                                            </div>
                                            <div class="tab-pane about-items fade show active" id="Description">
                                                {{ $product[0]->description }}
                                            </div>
                                            <div class="tab-pane review-tab fade" id="Review">
                                                <div class="review-rating-blk">
                                                    <div class="rating-views-blk">
                                                        <div class="rating-views text-center">
                                                            <h3>4.5<span>/5</span></h3>
                                                            <div class="review-card-bottom ">
                                                                <div class="rating d-inline-block">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                </div>
                                                            </div>
                                                            <p>296 Ratings</p>
                                                        </div>
                                                    </div>
                                                    <div class="rating-star-group">
                                                        <div class="rating-star">
                                                            <h5>5 Stars</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success" style="width:65%"></div>
                                                            </div>
                                                            <h6>65%</h6>
                                                        </div>
                                                        <div class="rating-star">
                                                            <h5>4 Stars</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success" style="width:26%"></div>
                                                            </div>
                                                            <h6>26%</h6>
                                                        </div>
                                                        <div class="rating-star">
                                                            <h5>3 Stars</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" style="width:5%"></div>
                                                            </div>
                                                            <h6>5%</h6>
                                                        </div>
                                                        <div class="rating-star">
                                                            <h5>2 Stars</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" style="width:2%"></div>
                                                            </div>
                                                            <h6>2%</h6>
                                                        </div>
                                                        <div class="rating-star mb-0">
                                                            <h5>1 Stars</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-danger" style="width:1%"></div>
                                                            </div>
                                                            <h6>1%</h6>
                                                        </div>
                                                    </div>
                                                </div> 

                                                
                                                <h3>Recent Reviews</h3>
                                                <div class="review-group mb-10">
                                                    <div class="review-img">
                                                        <a href="profile.html"><img src="assets/img/user/user-04.jpg" alt="img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="review-name-group">
                                                        <h5><a href="profile.html">Teri Jennings</a> <span>11 months age</span></h5>
                                                        <div class="review-card-bottom ">
                                                            <div class="rating d-inline-block">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star filled"></i>
                                                            </div>
                                                        </div>
                                                        <h6>Allegra Generic</h6>
                                                        <p>I have been in treatment all my life For extrinsic asthma. As spring pollen are big triggers, I really depend on antihistamines and Allegra Generic, from Curist, is as effective as Brand Allegra. And a very be healthy difference in price.</p>
                                                    </div>
                                                </div>
                                                <div class="review-group mb-10">
                                                    <div class="review-img">
                                                        <a href="profile.html"><img src="assets/img/user/user-04.jpg" alt="img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="review-name-group">
                                                        <h5><a href="profile.html">Teri Jennings</a> <span>11 months age</span></h5>
                                                        <div class="review-card-bottom ">
                                                            <div class="rating d-inline-block">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star filled"></i>
                                                            </div>
                                                        </div>
                                                        <h6>Allegra Generic</h6>
                                                        <p>I have been in treatment all my life For extrinsic asthma. As spring pollen are big triggers, I really depend on antihistamines and Allegra Generic, from Curist, is as effective as Brand Allegra. And a very be healthy difference in price.</p>
                                                    </div>
                                                </div>
                                                <div class="review-group mb-10">
                                                    <div class="review-img">
                                                        <a href="profile.html"><img src="assets/img/user/user-04.jpg" alt="img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="review-name-group">
                                                        <h5><a href="profile.html">Teri Jennings</a> <span>11 months age</span></h5>
                                                        <div class="review-card-bottom ">
                                                            <div class="rating d-inline-block">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star filled"></i>
                                                            </div>
                                                        </div>
                                                        <h6>Allegra Generic</h6>
                                                        <p>I have been in treatment all my life For extrinsic asthma. As spring pollen are big triggers, I really depend on antihistamines and Allegra Generic, from Curist, is as effective as Brand Allegra. And a very be healthy difference in price.</p>
                                                    </div>
                                                </div>
                                                <h3>Leave a Comment</h3>
                                                <div class="review-coment-group">
                                                    <p >Your email address will not be published. Required fields are marked *</p>
                                                    <form action="javascript:;">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Your Name <span class="text-danger">*</span></label>
                                                                    <div class="rating ">
                                                                        <i class="far fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                        <i class="far fa-star "></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Your Name <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Your Email <span class="text-danger">*</span></label>
                                                                    <input type="email" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Your Review</label>
                                                                    <textarea class="form-control" rows="7" id="comment" name="text"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-check mb-3">
                                                                    <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="review-submit">
                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Products -->
                            <section class="feature-products pb-0">
                                <div >
                                    <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                                        <h3>Similar Products</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="feature-product-slider arrow-center position-relative">
                                                <div class="slider-arrow slider-arrow-two carousel-4-columns-arrow" id="carousel-4-columns-arrows"></div>
                                                <div class="carousel-4-columns carousel-arrow-center mb-0" id="carousel-4-columns">
                                                <!-- Product box -->
                                                <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                    <div class="product-img-col">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="view-product.html">
                                                                <img  src="assets/img/shop/product-11.jpg" alt="">
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

                                                <!-- Product box -->
                                                <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                    <div class="product-img-col">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="view-product.html">
                                                                <img  src="assets/img/shop/product-12.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product-badge">
                                                            <span class="best">-20%</span>
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
                                                                <span>$ 550.00</span>
                                                                <span class="old-price">$ 350.00</span>
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

                                                <!-- Product box -->
                                                <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                    <div class="product-img-col">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="view-product.html">
                                                                <img  src="assets/img/shop/product-13.jpg" alt="">
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

                                                <!-- Product box -->
                                                <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                    <div class="product-img-col">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="view-product.html">
                                                                <img  src="assets/img/shop/product-10.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product-badge">
                                                            <span class="best">-20%</span>
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
                                                                <span>$ 250.00</span>
                                                                <span class="old-price">$ 150.00</span>
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

                                                <!-- Product box -->
                                                <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                    <div class="product-img-col">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="view-product.html">
                                                                <img  src="assets/img/shop/product-13.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product-badge">
                                                            <span class="best">-15%</span>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- /Products -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /Main -->

    <!-- Footer --> 
    <footer class="footer">
        <section class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="logo mb-30">
                                <a href="index.html" class="mb-15"><img src="assets/img/logo.png" alt="logo" /></a>
                                <p>Integer posuere orci sit amet feugiat pellent que. Suspendisse vel tempor justo, sit amet posuere orci dapibus auctor.Integer posuere orci sit amet.</p>
                                <a href="index.html"><img src="assets/img/payment.png" alt="logo" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <h4 class="footer-title">Contact Info</h4>
                    <ul class="contact-info">
                        <li><p><i class="fas fa-phone-alt"></i> +3 (523) 555 123 8745</p></li>
                        <li><p><i class="fas fa-envelope"></i> example@paharmacy.com</p></li>
                        <li><p><i class="fas fa-map-marker-alt"></i> London</p></li>
                    </ul>
                    <ul class="footer-social-icon">
                        <li><a href="javascript:;" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="javascript:;" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="javascript:;" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="javascript:;" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="footer-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <h4 class="footer-title">Usefull Links</h4>
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        <li><a href="javascript:;">Product Recall</a></li>
                        <li><a href="javascript:;">Gift Vouchers</a></li>
                        <li><a href="javascript:;">Returns & Exchange</a></li>
                        <li><a href="javascript:;">Shipping Options</a></li>
                        <li><a href="javascript:;">Help & FAQs</a></li>
                    </ul>
                </div>
                <div class="footer-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        <li><a href="javascript:;">About Us </a></li>
                        <li><a href="product-left-sidebar.html">Shop Products</a></li>
                        <li><a href="cart.html">My Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="javascript:;">Contact Us</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </section>
        <div class="footer-bottom wow animate__animated animate__fadeInUp" data-wow-delay="0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5">
                        <p class="font-sm mb-0">Copyright © 2022 Bestpharmacy All rights reserved.</p>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="orders.html">My Orders</a></li>
                            <li><a href="javascript:;">Help</a></li>
                            <li><a href="javascript:;">Site Map</a></li>
                            <li><a href="javascript:;">About</a></li>
                            <li><a href="javascript:;">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer --> 

    <!-- Preloader -->
    <div id="loader-wrapper">
       <div class="preloader d-flex align-items-center justify-content-center">
            <div class="loaderPill">
                <div class="loaderPill-anim">
                    <div class="loaderPill-anim-bounce">
                        <div class="loaderPill-anim-flop">
                            <div class="loaderPill-pill"></div>
                        </div>
                    </div>
                </div>
                <div class="loaderPill-floor">
                    <div class="loaderPill-floor-shadow"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close quick-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="feather-x-circle"></i>
                </button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery">
                                <!-- MAIN SLIDES -->
                                <div class="position-relative">
                                    <div class="product-image-slider">
                                        <figure class="border-radius-10">
                                            <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                        </figure>
                                    </div>
                                    <span class="zoom-icon"><i class="feather-search"></i></span>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails">
                                    <div><img src="assets/img/shop/product-small-02.jpg" alt="product image"></div>
                                    <div><img src="assets/img/shop/product-small-03.jpg" alt="product image"></div>
                                    <div><img src="assets/img/shop/product-small-02.jpg" alt="product image"></div>
                                    <div><img src="assets/img/shop/product-small-03.jpg" alt="product image"></div>
                                    <div><img src="assets/img/shop/product-small-02.jpg" alt="product image"></div>
                                    <div><img src="assets/img/shop/product-small-03.jpg" alt="product image"></div>
                                    <div><img src="assets/img/shop/product-small-02.jpg" alt="product image"></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="detail-info">
                                <div class="bg-price">
                                    <span class="save-price mb-10">100%</span>
                                </div>
                                <h5 class="title-detail">Blood Pressure Monitor</h5>
                                <div class="rating d-inline-block">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="ml-5"> (3.5)</span>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <span class="current-price">$ 32.00</span>
                                        <span class="old-price">$ 46.00</span>
                                    </div>
                                </div>
                                <ul class="pro-code">
                                    <li>SKU ID : <span class="text-black">BPM-001</span></li>
                                    <li>Category : <span class="text-black">Health, Thermometer</span></li>
                                    <li>Availability : <span class="text-brand">In stock</span></li>
                                </ul>                                  
                                <div class="product-extra-link2 ">
                                    <h5>Quantity</h5>
                                    <div class="quntity-group  d-flex">
                                        <div class="detail-extralink">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down"><i class="fi-rs-minus-small"></i></a>
                                                <span class="qty-val">1</span>
                                                <a href="#" class="qty-up"><i class="fi-rs-plus-small"></i></a>
                                            </div>
                                        </div>
                                        <a href="cart.html" class="button button-add-to-cart me-3"><i class="fi-rs-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="pop-wish">
                                    <a aria-label="Add To Wishlist" class=" link-wishlist" href="wishlist.html"><i class="feather-heart me-1 ms-1"></i>Add to Wishlist</a>
                                </div>
                                <div class="pro-share">
                                    <ul>
                                        <li class="me-2"><span>Share :</span></li>
                                        <li><a href="javascript:;"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="javascript:;"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Quick view -->

@endsection

