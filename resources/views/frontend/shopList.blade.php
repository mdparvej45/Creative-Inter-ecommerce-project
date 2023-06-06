@extends('frontend.app.app')


@section('content')
       <!-- Main -->
       <main class="main">
        <div class="page-content">
            <div class="container mb-30">
                <div class="row ">
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">

                        <!--Categories -->
                        <div class="sidebar-widget price_range range mb-25">
                            <h5 class="section-title style-1 mb-20">Categories</h5>
                            <div class="list-group">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" id="accordionExample">
                                        <li class="nav-item" id="dashboard-one">
                                            <a class="nav-link accordion-button collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Diagnosis <i class="feather-plus "></i></a>
                                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="dashboard-one" data-bs-parent="#accordionExample">
                                                <ul class="dashboard-sub-link">
                                                    <li><a href="javascript:;">Biopsy Tools</a></li>
                                                    <li><a href="javascript:;">Endoscopes</a></li>
                                                    <li><a href="javascript:;">Monitoring</a></li>
                                                    <li><a href="javascript:;">Otoscopes</a></li>
                                                    <li><a href="javascript:;">Oxygen Concentrators</a></li>
                                                    <li><a href="javascript:;">Tables And Assistants</a></li>
                                                    <li><a href="javascript:;">Thermometer</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item" id="dashboard-two">
                                            <a class="nav-link  accordion-button collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            My Stuff <i class="feather-plus "></i></a>
                                            <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="dashboard-two" data-bs-parent="#accordionExample">
                                                <ul class="dashboard-sub-link">
                                                    <li><a href="javascript:;">Biopsy Tools</a></li>
                                                    <li><a href="javascript:;">Endoscopes</a></li>
                                                    <li><a href="javascript:;">Monitoring</a></li>
                                                    <li><a href="javascript:;">Otoscopes</a></li>
                                                    <li><a href="javascript:;">Oxygen Concentrators</a></li>
                                                    <li><a href="javascript:;">Tables And Assistants</a></li>
                                                    <li><a href="javascript:;">Thermometer</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item" id="dashboard-three">
                                            <a class="nav-link  accordion-button collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
                                                Equipment <i class="feather-plus "></i></a>
                                            <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="dashboard-three" data-bs-parent="#accordionExample">
                                                <ul class="dashboard-sub-link">
                                                    <li><a href="javascript:;">Biopsy Tools</a></li>
                                                    <li><a href="javascript:;">Endoscopes</a></li>
                                                    <li><a href="javascript:;">Monitoring</a></li>
                                                    <li><a href="javascript:;">Otoscopes</a></li>
                                                    <li><a href="javascript:;">Oxygen Concentrators</a></li>
                                                    <li><a href="javascript:;">Tables And Assistants</a></li>
                                                    <li><a href="javascript:;">Thermometer</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item" id="dashboard-four">
                                            <a class="nav-link  accordion-button collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
                                                Higiene <i class="feather-plus "></i></a>
                                            <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="dashboard-four" data-bs-parent="#accordionExample">
                                                <ul class="dashboard-sub-link">
                                                    <li><a href="javascript:;">Biopsy Tools</a></li>
                                                    <li><a href="javascript:;">Endoscopes</a></li>
                                                    <li><a href="javascript:;">Monitoring</a></li>
                                                    <li><a href="javascript:;">Otoscopes</a></li>
                                                    <li><a href="javascript:;">Oxygen Concentrators</a></li>
                                                    <li><a href="javascript:;">Tables And Assistants</a></li>
                                                    <li><a href="javascript:;">Thermometer</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item" id="dashboard-five">
                                            <a class="nav-link  accordion-button collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseTwo">
                                                Laboratory <i class="feather-plus "></i></a>
                                            <div id="collapseFive" class="accordion-collapse collapse " aria-labelledby="dashboard-five" data-bs-parent="#accordionExample">
                                                <ul class="dashboard-sub-link">
                                                    <li><a href="javascript:;">Biopsy Tools</a></li>
                                                    <li><a href="javascript:;">Endoscopes</a></li>
                                                    <li><a href="javascript:;">Monitoring</a></li>
                                                    <li><a href="javascript:;">Otoscopes</a></li>
                                                    <li><a href="javascript:;">Oxygen Concentrators</a></li>
                                                    <li><a href="javascript:;">Tables And Assistants</a></li>
                                                    <li><a href="javascript:;">Thermometer</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item" id="dashboard-six">
                                            <a class="nav-link  accordion-button collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseTwo">
                                                Tools <i class="feather-plus "></i></a>
                                            <div id="collapseSix" class="accordion-collapse collapse " aria-labelledby="dashboard-six" data-bs-parent="#accordionExample">
                                                <ul class="dashboard-sub-link">
                                                    <li><a href="javascript:;">Biopsy Tools</a></li>
                                                    <li><a href="javascript:;">Endoscopes</a></li>
                                                    <li><a href="javascript:;">Monitoring</a></li>
                                                    <li><a href="javascript:;">Otoscopes</a></li>
                                                    <li><a href="javascript:;">Oxygen Concentrators</a></li>
                                                    <li><a href="javascript:;">Tables And Assistants</a></li>
                                                    <li><a href="javascript:;">Thermometer</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item" id="dashboard-seven">
                                            <a class="nav-link  accordion-button collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseTwo">
                                                Wound Care <i class="feather-plus "></i></a>
                                            <div id="collapseSeven" class="accordion-collapse collapse " aria-labelledby="dashboard-seven" data-bs-parent="#accordionExample">
                                                <ul class="dashboard-sub-link">
                                                    <li><a href="javascript:;">Biopsy Tools</a></li>
                                                    <li><a href="javascript:;">Endoscopes</a></li>
                                                    <li><a href="javascript:;">Monitoring</a></li>
                                                    <li><a href="javascript:;">Otoscopes</a></li>
                                                    <li><a href="javascript:;">Oxygen Concentrators</a></li>
                                                    <li><a href="javascript:;">Tables And Assistants</a></li>
                                                    <li><a href="javascript:;">Thermometer</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Categories -->

                        <!--Filter Price -->
                        <div class="sidebar-widget price_range range mb-25">
                            <h5 class="section-title style-1 mb-20">Filter by price</h5>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range" class="mb-20"></div>
                                    <div class="d-flex justify-content-between">
                                        <div class="caption">Price: 
                                            <span id="slider-range-value1"></span> — 
                                            <span id="slider-range-value2"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="product-left-sidebar.html" class="btn fillter-btn">Fillter</a>
                        </div>
                        <!-- Filter Price -->

                        <!--New products -->
                        <div class="sidebar-widget price_range range mb-25">
                            <h5 class="section-title style-1 mb-20">New products</h5>
                            <div class="new-products mb-20">
                                <div class="new-img-product">
                                    <a href="view-product.html">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/img/shop/product-01.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="new-content-product">
                                    <h5><a href="view-product.html">Extractor used to remove teeth</a></h5>
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
                                            <span>$ 35.00</span>
                                            <span class="old-price">$ 45.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-products mb-20">
                                <div class="new-img-product">
                                    <a href="view-product.html">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/img/shop/product-02.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="new-content-product">
                                    <h5><a href="view-product.html">Oxygen concentrator model KTS-5000</a></h5>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (9.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 32.00</span>
                                            <span class="old-price">$ 42.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-products ">
                                <div class="new-img-product">
                                    <a href="view-product.html">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/img/shop/product-03.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="new-content-product">
                                    <h5><a href="view-product.html">Automatic blood pressure monitor</a></h5>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (6.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 38.00</span>
                                            <span class="old-price">$ 48.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New products -->

                        <!-- Buy Product -->
                        <div class="buy-offer-product">
                            <h4> SANITZER <br> <span>SAVE 20%</span></h4>
                            <a>Buy Now <i class="feather-arrow-right"></i></a>
                            <div class="offer-img">
                                <img src="assets/img/offer.jpg" alt="Offer image">
                            </div>
                        </div>
                        <!-- /Buy Product -->

                    </div>
                    <div class="col-lg-9">
                        <div class="product-list mb-50">

                            <!-- Single Product -->
                            <div class="product-card">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <div class="product-img-inner">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/product-12.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-20%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-10">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Digital Stethoscope</a></h2>
                                    <div class="product-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
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
                                            <span>$ 42.00</span>
                                            <span class="old-price">$ 56.00</span>
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
                            <!-- /Single Product -->

                            <!-- Single Product -->
                            <div class="product-card">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <div class="product-img-inner">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/product-13.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-20%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-10">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Cosmetic Containers</a></h2>
                                    <div class="product-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (4.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 18.00</span>
                                            <span class="old-price">$ 45.00</span>
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
                            <!-- /Single Product -->

                            <!-- Single Product -->
                            <div class="product-card">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <div class="product-img-inner">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/trend-product-03.png') }}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-20%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-10">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">TruRadix Curcumin Oral Str...</a></h2>
                                    <div class="product-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore et dolore magna aliqua. Mauris in aliquam sem fringilla ut.</p>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (8.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 12.00</span>
                                            <span class="old-price">$ 16.00</span>
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
                            <!-- /Single Product -->

                            <!-- Single Product -->
                            <div class="product-card">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <div class="product-img-inner">
                                            <a href="view-product.html">
                                                <img  src="{{ asset('frontend/assets/img/shop/product-10.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">-20%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="sold-group mb-10">
                                        <p>Sold By <span> Global Store</span></p>
                                    </div>
                                    <h2><a href="view-product.html">Blue Hand Gloves</a></h2>
                                    <div class="product-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ml-5"> (9.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom ">
                                        <div class="product-price">
                                            <span>$ 26.00</span>
                                            <span class="old-price">$ 45.00</span>
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
                            <!-- /Single Product -->

                        </div>

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
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /Main -->
@endsection