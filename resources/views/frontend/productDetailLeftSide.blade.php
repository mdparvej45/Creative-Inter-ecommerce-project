@extends('frontend.app.app')


@section('content')
    <!-- Main -->
    <main class="main">
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">

                        <!--Categories -->
                        <div class="sidebar-widget price_range range mb-25">
                            <h5 class="section-title style-1 mb-20">Categories</h5>
                            <div class="list-group">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" id="accordionExample">
                                        <li class="nav-item" id="dashboard-one">
                                            <a class="nav-link active accordion-button" href="#"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">Diagnosis <i
                                                    class="feather-plus "></i></a>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="dashboard-one" data-bs-parent="#accordionExample">
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
                                            <a class="nav-link  accordion-button collapsed" href="#"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                My Stuff <i class="feather-plus "></i></a>
                                            <div id="collapseTwo" class="accordion-collapse collapse "
                                                aria-labelledby="dashboard-two" data-bs-parent="#accordionExample">
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
                                            <a class="nav-link  accordion-button collapsed" href="#"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="true" aria-controls="collapseTwo">
                                                Equipment <i class="feather-plus "></i></a>
                                            <div id="collapseThree" class="accordion-collapse collapse "
                                                aria-labelledby="dashboard-three" data-bs-parent="#accordionExample">
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
                                            <a class="nav-link  accordion-button collapsed" href="#"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="true" aria-controls="collapseTwo">
                                                Higiene <i class="feather-plus "></i></a>
                                            <div id="collapseFour" class="accordion-collapse collapse "
                                                aria-labelledby="dashboard-four" data-bs-parent="#accordionExample">
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
                                            <a class="nav-link  accordion-button collapsed" href="#"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                aria-expanded="true" aria-controls="collapseTwo">
                                                Laboratory <i class="feather-plus "></i></a>
                                            <div id="collapseFive" class="accordion-collapse collapse "
                                                aria-labelledby="dashboard-five" data-bs-parent="#accordionExample">
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
                                            <a class="nav-link  accordion-button collapsed" href="#"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                aria-expanded="true" aria-controls="collapseTwo">
                                                Tools <i class="feather-plus "></i></a>
                                            <div id="collapseSix" class="accordion-collapse collapse "
                                                aria-labelledby="dashboard-six" data-bs-parent="#accordionExample">
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
                                            <a class="nav-link  accordion-button collapsed" href="#"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                aria-expanded="true" aria-controls="collapseTwo">
                                                Wound Care <i class="feather-plus "></i></a>
                                            <div id="collapseSeven" class="accordion-collapse collapse "
                                                aria-labelledby="dashboard-seven" data-bs-parent="#accordionExample">
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
                                        <img class="img-fluid"
                                            src="{{ asset('frontend/assets/img/shop/product-01.jpg') }}" alt="">
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
                                        <img class="img-fluid"
                                            src="{{ asset('frontend/assets/img/shop/product-02.jpg') }}" alt="">
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
                                        <img class="img-fluid"
                                            src="{{ asset('frontend/assets/img/shop/product-03.jpg') }}" alt="">
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
                            <a href="checkout.html">Buy Now <i class="feather-arrow-right"></i></a>
                            <div class="offer-img">
                                <img src="assets/img/offer.jpg" alt="Offer image">
                            </div>
                        </div>
                        <!-- /Buy Product -->

                    </div>
                    <div class="col-lg-9 m-auto">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-5 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                    <div class="detail-gallery">
                                        <!-- MAIN SLIDES -->
                                        <div class="position-relative">
                                            <div class="product-image-slider">
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('frontend/assets/img/shop/product-big-1.jpg') }}"
                                                        alt="product image">
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('frontend/assets/img/shop/product-big-1.jpg') }}"
                                                        alt="product image">
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('frontend/assets/img/shop/product-big-1.jpg') }}"
                                                        alt="product image">
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('frontend/assets/img/shop/product-big-1.jpg') }}"
                                                        alt="product image">
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('frontend/assets/img/shop/product-big-1.jpg') }}"
                                                        alt="product image">
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('frontend/assets/img/shop/product-big-1.jpg') }}"
                                                        alt="product image">
                                                </figure>
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('frontend/assets/img/shop/product-big-1.jpg') }}"
                                                        alt="product image">
                                                </figure>
                                            </div>
                                            <span class="zoom-icon"><i class="feather-search"></i></span>
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails">
                                            <div><img src="{{ asset('frontend/assets/img/shop/product-small-02.jpg') }}"
                                                    alt="product image">
                                            </div>
                                            <div><img src="{{ asset('frontend/assets/img/shop/product-small-03.jpg') }}"
                                                    alt="product image">
                                            </div>
                                            <div><img src="{{ asset('frontend/assets/img/shop/product-small-02.jpg') }}"
                                                    alt="product image">
                                            </div>
                                            <div><img src="{{ asset('frontend/assets/img/shop/product-small-03.jpg') }}"
                                                    alt="product image">
                                            </div>
                                            <div><img src="{{ asset('frontend/assets/img/shop/product-small-02.jpg') }}"
                                                    alt="product image">
                                            </div>
                                            <div><img src="{{ asset('frontend/assets/img/shop/product-small-03.jpg') }}"
                                                    alt="product image">
                                            </div>
                                            <div><img src="{{ asset('frontend/assets/img/shop/product-small-02.jpg') }}"
                                                    alt="product image">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <div class="bg-price">
                                            <span class="save-price mb-10">100%</span>
                                        </div>
                                        <h5 class="title-detail">Digital Blood Pressure Monitor With Intellisense
                                            Technology For Most Accurate Measurement - Arm Circumference (22-32Cm)</h5>
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
                                                        <a href="#" class="qty-down"><i
                                                                class="fi-rs-minus-small"></i></a>
                                                        <span class="qty-val">1</span>
                                                        <a href="#" class="qty-up"><i
                                                                class="fi-rs-plus-small"></i></a>
                                                    </div>
                                                </div>
                                                <a href="cart.html" class="button button-add-to-cart me-3"><i
                                                        class="fi-rs-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="pop-wish">
                                            <a aria-label="Add To Wishlist" class=" link-wishlist"
                                                href="wishlist.html"><i class="feather-heart me-1 ms-1"></i>Add to
                                                Wishlist</a>
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
                                            <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                                href="#Description">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab"
                                                href="#Specification">Specification</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="review-tab" data-bs-toggle="tab"
                                                href="#Review">Review(4)</a>
                                        </li>
                                    </ul>
                                    <div class="view-detail-tab">
                                        <div class="tab-content shop_info_tab entry-main-content">
                                            <div class="tab-pane about-items fade show active" id="Description">
                                                <h5>About this item</h5>
                                                <div class="">
                                                    <ul class="pro-desc">
                                                        <li>The omron hem 7120 is a compact fully automatic blood pressure
                                                            monitor operating on the oscillometric principle for precise
                                                            measurements and accurate results. It measures your blood
                                                            pressure and pulse rate with easy one touch operation</li>
                                                        <li>Cuff Size - Fits Arm Circumference (22-32Cm) The device uses its
                                                            advanced IntelliSense technology for comfortable controlled
                                                            inflation without the need of pressure pre-setting or
                                                            re-inflation even a slight pressure change can be detected
                                                            resulting most accurate measurement</li>
                                                        <li>Along with blood pressure monitoring this product detects
                                                            irregular heartbeat. It is loaded with body movement indicator
                                                            and blinks if your systolic or diastolic pressure is outside the
                                                            standard range (above 135 systolic/85 diastolic mmHg)</li>
                                                        <li>Omron hem-7120 comes with 3 years warranty and lifetime support
                                                            provided by omron. This digital blood pressure monitor is
                                                            guaranteed to meet your standards</li>
                                                        <li>This product is mainly designed for general household use.
                                                            Please read the Important safety Information in the instruction
                                                            manual before using the unit. Hypertension Indicator</li>
                                                        <li>Measurement Tips 1 Wrapping the cuff properly is necessary for
                                                            an accurate reading 2 measure at the same time of the day
                                                            (within 1 hour after getting up and before bed time is
                                                            recommended 3 Sit in a chair straighten your back and be relaxed
                                                        </li>
                                                        <li>Manufacturer : Seven Rocks International, Seven Rocks
                                                            International, Cheema Chowk, Ludhiana</li>
                                                        <li>Wait 2-3 minutes before taking another blood pressure
                                                            measurement. Waiting between readings allows the arteries to
                                                            return to the condition prior to taking the blood pressure
                                                            measurement.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane specific-perform fade" id="Specification">
                                                <h5>Performance</h5>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered ">
                                                        <tbody>
                                                            <tr>
                                                                <td>Higher memory bandwidth </td>
                                                                <td>1,544 MHz</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Higher pixel rate </td>
                                                                <td>74.1 GPixel/s</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <h5>Speed</h5>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered ">
                                                        <tbody>
                                                            <tr>
                                                                <td>More shading units</td>
                                                                <td>1,544 MHz</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Better PassMark direct compute score</td>
                                                                <td>3,953 GFLOPS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>More texture mapping units </td>
                                                                <td>123.5 GTexel/s</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Higher memory clock speed </td>
                                                                <td>1,759 MHz</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Better floating-point performance </td>
                                                                <td>5,049</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <h5>Information</h5>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td>Power</td>
                                                                <td>5,049</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Windows</td>
                                                                <td>64bit Windows 7*, 8 or 10</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Graphic Card </td>
                                                                <td>4Gb dedicated Graphics card (such as NVIDIA – Open GL
                                                                    4.0 or later)</td>
                                                            </tr>
                                                            <tr>
                                                                <td>HDD</td>
                                                                <td>500Gb HDD (this is more driven by the amount of data you
                                                                    want to keep on your computer, rather than LSS itself)
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Screen</td>
                                                                <td>Single HD Screen (1920x1080 with 100% desktop scaling)
                                                                    or 1366x768 with second monitor 1920x1080 or higher</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
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
                                                                <div class="progress-bar bg-success" style="width:65%">
                                                                </div>
                                                            </div>
                                                            <h6>65%</h6>
                                                        </div>
                                                        <div class="rating-star">
                                                            <h5>4 Stars</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success" style="width:26%">
                                                                </div>
                                                            </div>
                                                            <h6>26%</h6>
                                                        </div>
                                                        <div class="rating-star">
                                                            <h5>3 Stars</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" style="width:5%">
                                                                </div>
                                                            </div>
                                                            <h6>5%</h6>
                                                        </div>
                                                        <div class="rating-star">
                                                            <h5>2 Stars</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" style="width:2%">
                                                                </div>
                                                            </div>
                                                            <h6>2%</h6>
                                                        </div>
                                                        <div class="rating-star mb-0">
                                                            <h5>1 Stars</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-danger" style="width:1%">
                                                                </div>
                                                            </div>
                                                            <h6>1%</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3>Recent Reviews</h3>
                                                <div class="review-group mb-10">
                                                    <div class="review-img">
                                                        <a href="profile.html"><img
                                                                src="{{ asset('frontend/assets/img/user/user-04.jpg') }}"
                                                                alt="img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="review-name-group">
                                                        <h5><a href="profile.html">Teri Jennings</a> <span>11 months
                                                                age</span></h5>
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
                                                        <p>I have been in treatment all my life For extrinsic asthma. As
                                                            spring pollen are big triggers, I really depend on
                                                            antihistamines and Allegra Generic, from Curist, is as effective
                                                            as Brand Allegra. And a very be healthy difference in price.</p>
                                                    </div>
                                                </div>
                                                <div class="review-group mb-10">
                                                    <div class="review-img">
                                                        <a href="profile.html"><img
                                                                src="{{ asset('frontend/assets/img/user/user-03.jpg') }}"
                                                                alt="img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="review-name-group">
                                                        <h5><a href="profile.html">Teri Jennings</a> <span>11 months
                                                                age</span></h5>
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
                                                        <p>I have been in treatment all my life For extrinsic asthma. As
                                                            spring pollen are big triggers, I really depend on
                                                            antihistamines and Allegra Generic, from Curist, is as effective
                                                            as Brand Allegra. And a very be healthy difference in price.</p>
                                                    </div>
                                                </div>
                                                <div class="review-group mb-10">
                                                    <div class="review-img">
                                                        <a href="profile.html"><img
                                                                src="{{ asset('frontend/assets/img/user/user-02.jpg') }}"
                                                                alt="img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="review-name-group">
                                                        <h5><a href="profile.html">Teri Jennings</a> <span>11 months
                                                                age</span></h5>
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
                                                        <p>I have been in treatment all my life For extrinsic asthma. As
                                                            spring pollen are big triggers, I really depend on
                                                            antihistamines and Allegra Generic, from Curist, is as effective
                                                            as Brand Allegra. And a very be healthy difference in price.</p>
                                                    </div>
                                                </div>
                                                <h3>Leave a Comment</h3>
                                                <div class="review-coment-group">
                                                    <p>Your email address will not be published. Required fields are marked
                                                        *</p>
                                                    <form action="javascript:;">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Your Name <span
                                                                            class="text-danger">*</span></label>
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
                                                                    <label>Your Name <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Your Email <span
                                                                            class="text-danger">*</span></label>
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
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="remember"> Remember me
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="review-submit">
                                                                <button type="button"
                                                                    class="btn btn-primary">Submit</button>
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
                                <div class="container">
                                    <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                                        <h3>Similar Products</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="feature-product-slider arrow-center position-relative">
                                                <div class="slider-arrow slider-arrow-two carousel-4-columns-arrow"
                                                    id="carousel-7-columns-arrows"></div>
                                                <div class="carousel-7-columns carousel-arrow-center mb-0"
                                                    id="carousel-7-columns">
                                                    <!-- Product box -->
                                                    <div class="product-card wow animate__animated animate__fadeIn"
                                                        data-wow-delay=".1s">
                                                        <div class="product-img-col">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="view-product.html">
                                                                    <img src="{{ asset('frontend/assets/img/shop/product-11.jpg') }}"
                                                                        alt="">
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
                                                                <a href="cart.html" class="btn btn-primary"><i
                                                                        class="feather-shopping-bag me-1"></i>Add</a>
                                                                <div class="product-details-inner">
                                                                    <a href="view-product.html" class="product-btn"><i
                                                                            class="fi-rs-eye"></i></a>
                                                                    <a aria-label="Quick view" class="product-btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickViewModal"><i
                                                                            class="fi-rs-search"></i></a>
                                                                    <a aria-label="Add To Wishlist" class="product-btn"
                                                                        href="wishlist.html"><i
                                                                            class="fi-rs-heart"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Product box -->

                                                    <!-- Product box -->
                                                    <div class="product-card wow animate__animated animate__fadeIn"
                                                        data-wow-delay=".1s">
                                                        <div class="product-img-col">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="view-product.html">
                                                                    <img src="{{ asset('frontend/assets/img/shop/product-12.jpg') }}"
                                                                        alt="">
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
                                                                <a href="cart.html" class="btn btn-primary"><i
                                                                        class="feather-shopping-bag me-1"></i>Add</a>
                                                                <div class="product-details-inner">
                                                                    <a href="view-product.html" class="product-btn"><i
                                                                            class="fi-rs-eye"></i></a>
                                                                    <a aria-label="Quick view" class="product-btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickViewModal"><i
                                                                            class="fi-rs-search"></i></a>
                                                                    <a aria-label="Add To Wishlist" class="product-btn"
                                                                        href="wishlist.html"><i
                                                                            class="fi-rs-heart"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Product box -->

                                                    <!-- Product box -->
                                                    <div class="product-card wow animate__animated animate__fadeIn"
                                                        data-wow-delay=".1s">
                                                        <div class="product-img-col">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="view-product.html">
                                                                    <img src="{{ asset('frontend/assets/img/shop/product-13.jpg') }}"
                                                                        alt="">
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
                                                                <a href="cart.html" class="btn btn-primary"><i
                                                                        class="feather-shopping-bag me-1"></i>Add</a>
                                                                <div class="product-details-inner">
                                                                    <a href="view-product.html" class="product-btn"><i
                                                                            class="fi-rs-eye"></i></a>
                                                                    <a aria-label="Quick view" class="product-btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickViewModal"><i
                                                                            class="fi-rs-search"></i></a>
                                                                    <a aria-label="Add To Wishlist" class="product-btn"
                                                                        href="wishlist.html"><i
                                                                            class="fi-rs-heart"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Product box -->

                                                    <!-- Product box -->
                                                    <div class="product-card wow animate__animated animate__fadeIn"
                                                        data-wow-delay=".1s">
                                                        <div class="product-img-col">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="view-product.html">
                                                                    <img src="{{ asset('frontend/assets/img/shop/product-10.jpg') }}"
                                                                        alt="">
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
                                                                <a href="cart.html" class="btn btn-primary"><i
                                                                        class="feather-shopping-bag me-1"></i>Add</a>
                                                                <div class="product-details-inner">
                                                                    <a href="view-product.html" class="product-btn"><i
                                                                            class="fi-rs-eye"></i></a>
                                                                    <a aria-label="Quick view" class="product-btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickViewModal"><i
                                                                            class="fi-rs-search"></i></a>
                                                                    <a aria-label="Add To Wishlist" class="product-btn"
                                                                        href="wishlist.html"><i
                                                                            class="fi-rs-heart"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Product box -->

                                                    <!-- Product box -->
                                                    <div class="product-card wow animate__animated animate__fadeIn"
                                                        data-wow-delay=".1s">
                                                        <div class="product-img-col">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="view-product.html">
                                                                    <img src="{{ asset('frontend/assets/img/shop/product-13.jpg') }}"
                                                                        alt="">
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
                                                                <a href="cart.html" class="btn btn-primary"><i
                                                                        class="feather-shopping-bag me-1"></i>Add</a>
                                                                <div class="product-details-inner">
                                                                    <a href="view-product.html" class="product-btn"><i
                                                                            class="fi-rs-eye"></i></a>
                                                                    <a aria-label="Quick view" class="product-btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickViewModal"><i
                                                                            class="fi-rs-search"></i></a>
                                                                    <a aria-label="Add To Wishlist" class="product-btn"
                                                                        href="wishlist.html"><i
                                                                            class="fi-rs-heart"></i></a>
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
@endsection
