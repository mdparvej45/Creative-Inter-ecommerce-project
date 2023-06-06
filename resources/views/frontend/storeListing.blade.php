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
                                            <li><a href="store-listing.html" class="active"><i class="fi-rs-apps"></i></a></li>
                                            <li><a href="store-single.html"><i class="fi-rs-list"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-4">
                                    <div class="show-result">
                                        <p>Total stores showing: 80</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="select-filter-group">
                                        <div class="sort-by-filter">
                                            <label>Sort By :</label>
                                            <select class="form-select select">
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

                            <!-- Store Card -->
                            <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                                <!-- Store box -->
                                <div class="product-card shop-list-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="store-single.html">
                                                <img src="{{ asset('frontend/assets/img/store-thum-01.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="Global-store">
                                            <p>Global Store</p>
                                            <div class="product-card-bottom m-0">
                                                <div class="rating d-inline-block">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="ml-5"> (3.5)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="global-img">
                                            <a href="store-single.html"><img  src="{{ asset('frontend/assets/img/user/user-02.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Store box -->
                            </div>
                            <!-- /Store Card -->

                            <!-- Store Card -->
                            <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                                <!-- Store box -->
                                <div class="product-card shop-list-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="store-single.html">
                                                <img src="{{ asset('frontend/assets/img/store-thum-02.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="Global-store">
                                            <p>Global Store</p>
                                            <div class="product-card-bottom m-0">
                                                <div class="rating d-inline-block">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="ml-5"> (3.5)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="global-img">
                                            <a href="store-single.html"><img  src="{{ asset('frontend/assets/img/user/user-02.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Store box -->
                            </div>
                            <!-- /Store Card -->

                            <!-- Store Card -->
                            <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                                <!-- Store box -->
                                <div class="product-card shop-list-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="store-single.html">
                                                <img src="{{ asset('frontend/assets/img/store-thum-03.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="Global-store">
                                            <p>Global Store</p>
                                            <div class="product-card-bottom m-0">
                                                <div class="rating d-inline-block">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="ml-5"> (3.5)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="global-img">
                                            <a href="store-single.html"><img  src="{{ asset('frontend/assets/img/user/user-03.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Store box -->
                            </div>
                            <!-- /Store Card -->

                            <!-- Store Card -->
                            <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                                <!-- Store box -->
                                <div class="product-card shop-list-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="store-single.html">
                                                <img src="{{ asset('frontend/assets/img/store-thum-02.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="Global-store">
                                            <p>Global Store</p>
                                            <div class="product-card-bottom m-0">
                                                <div class="rating d-inline-block">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="ml-5"> (3.5)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="global-img">
                                            <a href="store-single.html"><img  src="{{ asset('frontend/assets/img/user/user-02.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Store box -->
                            </div>
                            <!-- /Store Card -->

                            <!-- Store Card -->
                            <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                                <!-- Store box -->
                                <div class="product-card shop-list-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="store-single.html">
                                                <img src="{{ asset('frontend/assets/img/store-thum-03.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="Global-store">
                                            <p>Global Store</p>
                                            <div class="product-card-bottom m-0">
                                                <div class="rating d-inline-block">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="ml-5"> (3.5)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="global-img">
                                            <a href="store-single.html"><img  src="{{ asset('frontend/assets/img/user/user-03.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Store box -->
                            </div>
                            <!-- /Store Card -->

                            <!-- Store Card -->
                            <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                                <!-- Store box -->
                                <div class="product-card shop-list-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="store-single.html">
                                                <img src="{{ asset('frontend/assets/img/store-thum-01.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="Global-store">
                                            <p>Global Store</p>
                                            <div class="product-card-bottom m-0">
                                                <div class="rating d-inline-block">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="ml-5"> (3.5)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="global-img">
                                            <a href="store-single.html"><img  src="{{ asset('frontend/assets/img/user/user-01.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Store box -->
                            </div>
                            <!-- /Store Card -->

                            <!-- Store Card -->
                            <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                                <!-- Store box -->
                                <div class="product-card shop-list-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="store-single.html">
                                                <img src="{{ asset('frontend/assets/img/store-thum-01.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="Global-store">
                                            <p>Global Store</p>
                                            <div class="product-card-bottom m-0">
                                                <div class="rating d-inline-block">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="ml-5"> (3.5)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="global-img">
                                            <a href="store-single.html"><img  src="{{ asset('frontend/assets/img/user/user-01.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Store box -->
                            </div>
                            <!-- /Store Card -->

                            <!-- Store Card -->
                            <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                                <!-- Store box -->
                                <div class="product-card shop-list-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="store-single.html">
                                                <img src="{{ asset('frontend/assets/img/store-thum-02.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="Global-store">
                                            <p>Global Store</p>
                                            <div class="product-card-bottom m-0">
                                                <div class="rating d-inline-block">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="ml-5"> (3.5)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="global-img">
                                            <a href="store-single.html"><img  src="{{ asset('frontend/assets/img/user/user-02.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Store box -->
                            </div>
                            <!-- /Store Card -->

                            <!-- Store Card -->
                            <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                                <!-- Store box -->
                                <div class="product-card shop-list-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="store-single.html">
                                                <img src="{{ asset('frontend/assets/img/store-thum-03.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="Global-store">
                                            <p>Global Store</p>
                                            <div class="product-card-bottom m-0">
                                                <div class="rating d-inline-block">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="ml-5"> (3.5)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="global-img">
                                            <a href="store-single.html"><img  src="{{ asset('frontend/assets/img/user/user-03.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Store box -->
                            </div>
                            <!-- /Store Card -->

                            <!-- Store Card -->
                            <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                                <!-- Store box -->
                                <div class="product-card shop-list-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="store-single.html">
                                                <img src="{{ asset('frontend/assets/img/store-thum-03.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="Global-store">
                                            <p>Global Store</p>
                                            <div class="product-card-bottom m-0">
                                                <div class="rating d-inline-block">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="ml-5"> (3.5)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="global-img">
                                            <a href="store-single.html"><img  src="{{ asset('frontend/assets/img/user/user-03.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Store box -->
                            </div>
                            <!-- /Store Card -->

                            <!-- Store Card -->
                            <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                                <!-- Store box -->
                                <div class="product-card shop-list-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="store-single.html">
                                                <img src="{{ asset('frontend/assets/img/store-thum-01.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="Global-store">
                                            <p>Global Store</p>
                                            <div class="product-card-bottom m-0">
                                                <div class="rating d-inline-block">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="ml-5"> (3.5)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="global-img">
                                            <a href="store-single.html"><img  src="{{ asset('frontend/assets/img/user/user-01.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Store box -->
                            </div>
                            <!-- /Store Card -->

                            <!-- Store Card -->
                            <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                                <!-- Store box -->
                                <div class="product-card shop-list-card wow animate__animated animate__fadeIn mb-25" data-wow-delay=".1s">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="store-single.html">
                                                <img src="{{ asset('frontend/assets/img/store-thum-02.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="Global-store">
                                            <p>Global Store</p>
                                            <div class="product-card-bottom m-0">
                                                <div class="rating d-inline-block">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="ml-5"> (3.5)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="global-img">
                                            <a href="store-single.html"><img  src="{{ asset('frontend/assets/img/user/user-02.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Store box -->
                            </div>
                            <!-- /Store Card -->

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