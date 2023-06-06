{{-- home page start --}}

@extends('frontend.app.app')

@section('content')
    <style>
        .feather-arrow-left {}

        .Notification_wish,
        .Notification {
            position: fixed;
            right: 20px;
            top: 20px;
            background: rgba(209, 0, 14, 0.89);
            padding: 12px 32px;
            border-radius: 8px;
            opacity: 0.8;
            z-index: 99999999999999999999999999999;
            display: none;
        }

        .success_wish,
        .success {
            position: fixed;
            right: 20px;
            top: 20px;
            background: rgba(0, 128, 2, 0.744);
            padding: 12px 32px;
            border-radius: 8px;
            opacity: 0.8;
            z-index: 999999999999999999999999999;
            display: none;
        }

        .noti-title {
            color: #fff !important;
        }
    </style>
    <div class="Notification_wish">
        <p class="noti-title">Product alerady selected</p>
    </div>
    <div class="Notification">
        <p class="noti-title">Please Login First Please!</p>
    </div>
    <div class="success">
        <p class="noti-title">Succeessfully Add to Cart!</p>
    </div>
    <div class="success_wish">
        <p class="noti-title">Succeessfully Add to WishList!</p>
    </div>
    <main class="main">
        <section class="banner-section position-relative">
            <div class="container">
                <div class="banner-slider">
                    <div class="banner-slider-one pagination-square align-pagination-square">
                        @forelse ($banners as $banner)
                            <div class="banner-slider-single banner-animation-col">
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="banner-content">
                                            <h1 class="banner-title mb-25">
                                                {{ $banner->title }}
                                            </h1>
                                            <p>{{ $banner->description }} </p>
                                            <a href="{{ route('product.details.create', $banner->slug_unique) }}" class="shop-now">Shop Now <i
                                                    class="feather-arrow-right ml-5"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="single-banner-slider">
                                            <img src="{{ $banner->image_url }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h4>No banner yet</h4>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
        <!--End hero slider-->

        <!-- Shop -->
        <section class="digital-shop">
            <div class="container">
                <div class="row">

                    @forelse ($most_view as $item)
                        <div class="col-xl-4 col-md-6 d-flex ">
                            <div class="digital-group  wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                                <div class="pharmacy-equipments">
                                    <div class="digital-pharmacy">
                                        <h5>{{ $item->category->cat_name }}<br> <span>{{ $item->title }}</span></h5>
                                        <h2>{{ intval($item->productPrice != null ? $item->productPrice->price : '') . '$ ' }}
                                        </h2>
                                        <span>{{ intval($item->productPrice != null ? $item->productPrice->discount : '') . '$' }}</span>
                                        <h4><a href="{{ route('product.details.create', $item->slug_unique) }}">Explore <i
                                                    class="feather-arrow-right ml-5"></i></a>
                                        </h4>
                                    </div>
                                    <div class="digital-shop-img">
                                        <a href="{{ route('product.details.create', $item->slug_unique) }}">
                                            <img class="default-img" src="{{ $item->image_url }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
        <!-- /Shop -->

        <!-- Category -->
        <section class="section-category">
            <div class="container">
                <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                    <h3 class="">Popular Categories</h3>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="category-slider arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-two carousel-category-arrow"
                                id="carousel-category-arrows"></div>
                            <div class="carousel-category carousel-arrow-center" id="carousel-category">


                                @foreach ($category as $key => $item)
                                    <!-- Category Grid -->
                                    <div class="category-grid wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                        <div class="category-img-col">
                                            <div class="category-img category-img-zoom">
                                                <a href="{{ route('category-wise-product', $item->cat_slug) }}">
                                                    <img src="{{ $item->image_url }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="category-content">
                                            <h4><a href="view-product.html">{{ $item->cat_name }}</a></h4>
                                        </div>
                                    </div>
                                    <!-- /Category Grid -->
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Category -->

        <!-- Featured Products -->
        <section class="feature-products">
            <div class="container">
                <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                    <h3>Featured Products</h3>
                    <p>Top Picks - Our Favorite Products of the Month!</p>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="feature-product-slider arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-two carousel-4-columns-arrow"
                                id="carousel-4-columns-arrows"></div>
                            <div class="carousel-4-columns carousel-arrow-center" id="carousel-4-columns">
                                <!-- Product box -->
                                @forelse ($products as $product)
                                    <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                        <div class="product-img-col">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details.create', $product->slug_unique) }}">
                                                    <img src="{{ $product->image_url }}" alt="">
                                                </a>
                                            </div>
                                            @php
                                                $price = $product->productPrice != null ? $product->productPrice->price : 0;
                                                $discount = $product->productPrice != null ? $product->productPrice->discount : 0;
                                                if ($discount != null) {
                                                    $ammount = ($discount / $price) * 100;
                                                }
                                            @endphp
                                            <div class="product-badge">
                                                <span class="best">
                                                    @if ($discount == null)
                                                        00%
                                                    @else
                                                        {{ ceil($ammount) . '%' }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h2>
                                                <a
                                                    href="{{ route('product.details.create', $product->slug_unique) }}">{{ $product->title }}</a>
                                            </h2>
                                            <div class="product-card-bottom ">
                                                <div class="rating d-inline-block">
                                                    @php
                                                        $five = App\Models\Review::where('product_id', $product->id)
                                                            ->where('ratings', 5)
                                                            ->count();
                                                        
                                                        $four = App\Models\Review::where('product_id', $product->id)
                                                            ->where('ratings', 4)
                                                            ->count();
                                                        
                                                        $three = App\Models\Review::where('product_id', $product->id)
                                                            ->where('ratings', 3)
                                                            ->count();
                                                        $two = App\Models\Review::where('product_id', $product->id)
                                                            ->where('ratings', 2)
                                                            ->count();
                                                        $one = App\Models\Review::where('product_id', $product->id)
                                                            ->where('ratings', 1)
                                                            ->count();
                                                        $totalCount = App\Models\Review::where('product_id', $product->id)->count();
                                                        $totalRatings = $five * 5 + $four * 4 + $three * 3 + $two * 2 + $one * 1;
                                                        $averageResult = 0;
                                                        if ($totalRatings > 0) {
                                                            $averageResult = ceil($totalRatings / $totalCount);
                                                        } else {
                                                            $averageResult = 0;
                                                        }
                                                    @endphp
                                                    @if ($product->review != null)
                                                        @if ($averageResult == 1)
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 1.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 2)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 2.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 3)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 3.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 4)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 4.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @endif
                                                    @endif

                                                    <span class="ml-5">({{ $averageResult }})</span>
                                                </div>
                                            </div>

                                            <div class="product-card-bottom ">
                                                <div class="product-price">
                                                    <span>{{ $product->productPrice != null ? $product->productPrice->price : 0 }}$</span>
                                                    <span
                                                        class="old-price">{{ $product->productPrice != null ? $product->productPrice->discount : 0 }}.$</span>
                                                </div>
                                            </div>
                                            <div class="add-feature">
                                                <a class="btn btn-primary addToCart" data-id={{ $product->id }}>
                                                    <i class="feather-shopping-bag me-1"></i>Add</a>
                                                <div class="product-details-inner">
                                                    <a href="{{ route('product.details.create', $product->slug_unique) }}"><i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Quick view" class="product-btn quickModal"
                                                        data-bs-toggle="modal" data-id="{{ $product->id }}"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                    <a aria-label="Add To Wishlist" class="product-btn addToWishLists" data-id="{{ $product->id }}"
                                                        ><i class="fi-rs-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <h4>No product hare</h4>
                                @endforelse
                                <!-- /Product box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Featured Products -->

        <!-- Trending Products -->
        <section class="trending-products">
            <div class="container">
                <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                    <h3>Trending Products</h3>
                    <p>Hot Products - Stay Ahead of the Curve with Our Trending Items!</p>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="feature-product-slider arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-two carousel-4-columns-arrow"
                                id="carousel-5-columns-arrows"></div>
                            <div class="carousel-4-columns carousel-arrow-center" id="carousel-5-columns">

                                <!-- Product box -->
                                @foreach ($trendings as $trending)
                                    <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                        <div class="product-img-col">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details.create', $trending->slug_unique) }}">
                                                    <img src="{{ $trending->image_url }}" alt="">
                                                </a>
                                            </div>
                                            @php
                                                $price = $trending->productPrice != null ? $trending->productPrice->price : 0;
                                                $discount = $trending->productPrice != null ? $trending->productPrice->discount : 0;
                                                if ($discount != null) {
                                                    $ammount = ($discount / $price) * 100;
                                                }
                                            @endphp
                                            <div class="product-badge">
                                                <span class="best">
                                                    @if ($discount == null)
                                                        00%
                                                    @else
                                                        {{ ceil($ammount) . '%' }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h2>
                                                <a
                                                    href="{{ route('product.details.create', $trending->slug_unique) }}">{{ $trending->title }}</a>
                                            </h2>
                                            <div class="product-card-bottom ">
                                                <div class="rating d-inline-block">

                                                    @php
                                                        $five = App\Models\Review::where('product_id', $trending->id)
                                                            ->where('ratings', 5)
                                                            ->count();
                                                        
                                                        $four = App\Models\Review::where('product_id', $trending->id)
                                                            ->where('ratings', 4)
                                                            ->count();
                                                        
                                                        $three = App\Models\Review::where('product_id', $trending->id)
                                                            ->where('ratings', 3)
                                                            ->count();
                                                        $two = App\Models\Review::where('product_id', $trending->id)
                                                            ->where('ratings', 2)
                                                            ->count();
                                                        $one = App\Models\Review::where('product_id', $trending->id)
                                                            ->where('ratings', 1)
                                                            ->count();
                                                        $totalCount = App\Models\Review::where('product_id', $trending->id)->count();
                                                        $totalRatings = $five * 5 + $four * 4 + $three * 3 + $two * 2 + $one * 1;
                                                        $averageResult = 0;
                                                        if ($totalRatings > 0) {
                                                            $averageResult = ceil($totalRatings / $totalCount);
                                                        } else {
                                                            $averageResult = 0;
                                                        }
                                                    @endphp
                                                    @if ($product->review != null)
                                                        @if ($averageResult == 1)
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 1.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 2)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 2.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 3)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 3.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 4)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 4.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @endif
                                                    @endif
                                                    <span class="ml-5"> ({{ $averageResult }})</span>
                                                </div>
                                            </div>
                                            <div class="product-card-bottom ">
                                                <div class="product-price">
                                                    <span>{{ $trending->productPrice != null ? $trending->productPrice->price : 0 }}$</span>
                                                    <span
                                                        class="old-price">{{ $trending->productPrice != null ? $trending->productPrice->$discount : 0 }}.$</span>
                                                </div>
                                            </div>
                                            <div class="add-feature">
                                                <a class="btn btn-primary addToCart" data-id="{{ $trending->id }}"><i
                                                        class="feather-shopping-bag me-1"></i>Add</a>
                                                <div class="product-details-inner">
                                                    <a href="{{ route('product.details.create', $trending->slug_unique) }}"
                                                        class="product-btn"><i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Quick view" class="product-btn quickModal"
                                                        data-bs-toggle="modal" data-id="{{ $trending->id }}"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                    <a aria-label="Add To Wishlist" class="product-btn addToWishLists" data-id="{{ $trending->id }}"><i class="fi-rs-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- /Product box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Trending Products -->

        <!-- Deals of the day -->
        <section class="feature-products">
            <div class="container">
                <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                    <h3>Deals of the day</h3>
                    <p>Today's Best Deals - Unbeatable Discounts on Our Top Products!.</p>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="feature-product-slider arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-two carousel-4-columns-arrow"
                                id="carousel-6-columns-arrows"></div>
                            <div class="carousel-4-columns carousel-arrow-center" id="carousel-6-columns">

                                @forelse($dealsOfTheDay as $product)
                                    <!-- Product box -->
                                    <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                        <div class="product-img-col">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details.create', $product->slug_unique) }}">
                                                    <img src="{{ $product->image_url }}" alt="{{ $product->title }}">
                                                </a>
                                            </div>
                                            @php
                                                $price = $product->productPrice != null ? $product->productPrice->price : 0;
                                                $discount = $product->productPrice != null ? $product->productPrice->discount : 0;
                                                if ($discount != null) {
                                                    $ammount = ($discount / $price) * 100;
                                                }
                                            @endphp
                                            <div class="product-badge">
                                                <span class="best">
                                                    @if ($discount == null)
                                                        00%
                                                    @else
                                                        {{ ceil($ammount) . '%' }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h2><a
                                                    href="{{ route('product.details.create', $product->slug_unique) }}">{{ $product->title }}</a>
                                            </h2>
                                            <div class="product-card-bottom ">
                                                <div class="rating d-inline-block">
                                                    @php
                                                        $five = App\Models\Review::where('product_id', $product->id)
                                                            ->where('ratings', 5)
                                                            ->count();
                                                        
                                                        $four = App\Models\Review::where('product_id', $product->id)
                                                            ->where('ratings', 4)
                                                            ->count();
                                                        
                                                        $three = App\Models\Review::where('product_id', $product->id)
                                                            ->where('ratings', 3)
                                                            ->count();
                                                        $two = App\Models\Review::where('product_id', $product->id)
                                                            ->where('ratings', 2)
                                                            ->count();
                                                        $one = App\Models\Review::where('product_id', $product->id)
                                                            ->where('ratings', 1)
                                                            ->count();
                                                        $totalCount = App\Models\Review::where('product_id', $product->id)->count();
                                                        $totalRatings = $five * 5 + $four * 4 + $three * 3 + $two * 2 + $one * 1;
                                                        $averageResult = 0;
                                                        if ($totalRatings > 0) {
                                                            $averageResult = ceil($totalRatings / $totalCount);
                                                        } else {
                                                            $averageResult = 0;
                                                        }
                                                    @endphp
                                                    @if ($product->review != null)
                                                        @if ($averageResult == 1)
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 1.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 2)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 2.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 3)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 3.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 4)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @elseif ($averageResult == 4.5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fa-regular fa-star-half-stroke"></i>
                                                        @elseif ($averageResult == 5)
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                            <i class="fas fa-star avgResult"></i>
                                                        @endif
                                                    @endif
                                                    <span class="ml-5"> ({{ $averageResult }})</span>
                                                </div>
                                            </div>
                                            <div class="product-card-bottom ">
                                                <div class="product-price">
                                                    <span>{{ $product->productPrice != null ? $product->productPrice->price : 0 }}$</span>
                                                    <span
                                                        class="old-price">{{ $product->productPrice != null ? $product->productPrice->discount : 0 }}$</span>
                                                </div>
                                            </div>
                                            <div class="add-feature">
                                                <a class="btn btn-primary addToCart" data-id="{{ $product->id }}"><i
                                                        class="feather-shopping-bag me-1"></i>Add</a>
                                                <div class="product-details-inner">
                                                    <a href="{{ route('product.details.create', $product->slug_unique) }}" class="product-btn"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Quick view" class="product-btn quickModal"
                                                        data-bs-toggle="modal" data-id="{{ $product->id }}"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                    <a aria-label="Add To Wishlist" class="product-btn addToWishLists"
                                                        data-id="{{ $product->id }}"><i class="fi-rs-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Product box -->
                                @empty
                                    <h2>No Porduct</h2>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Deals  day -->

        <!-- Popular Categories -->
        <section class="popular-category">
            <div class="container">
                <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                    <h3 class="">Popular Categories</h3>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="category-slider arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-two carousel-category-arrow"
                                id="carousel-category-one-arrows"></div>
                            <div class="carousel-category carousel-arrow-center" id="carousel-category-one">
                                @foreach ($category as $key => $item)
                                    <!-- Category Grid -->
                                    <div class="category-grid wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                        <div class="category-img-col">
                                            <div class="category-img category-img-zoom">
                                                <a href="{{ route('category-wise-product', $item->cat_slug) }}">
                                                    <img src="{{ $item->image_url }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="category-content">
                                            <h4><a href="view-product.html">{{ $item->cat_name }}</a></h4>
                                        </div>
                                    </div>
                                    <!-- /Category Grid -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Popular Categories -->

    </main>

    @push('script')
        <script>
            let modalTitle = $('#quickViewModal .title-detail')
            let sliderParent = $('#quickViewModal .product-image-slider')
            let sliderThumbnail = $('#quickViewModal .slider-nav-thumbnails')
            let discount = $('#quickViewModal .discount')
            let currentPrice = $('#quickViewModal .current-price')
            let oldPrice = $('#quickViewModal .old-price')
            let sku = $('#quickViewModal .sku')
            let category = $('#quickViewModal .category')
            let stock = $('#quickViewModal .stock')
            let rating = $('#quickViewModal .rating')
            console.log(modalTitle)
            $('.quickModal').on('click', function(e) {
                e.preventDefault();
                let productId = $(this).attr('data-id')

                // * AJAX REQ
                $.ajax({
                    url: "{{ route('modal.product.id') }}",
                    method: "GET",
                    data: {
                        productId: productId,
                    },
                    success: function(response) {
                        let product = JSON.parse(response)
                        console.log(product)
                        let productImages = product[0].product_image
                        console.log(productImages)
                        modalTitle.html(product.title)

                        // * create slider element
                        let sliders = [];
                        let thumbs = [];
                        productImages.map(img => {
                            let figures = `
                        <figure class="border-radius-10">
                                        <img src="${img.image_url}"
                                            alt="product image">
                                        </figure>`
                            let thumbnail = `<div><img src="${img.image_url}"
                                        alt="product image"></div>`
                            sliders.push(figures)
                            thumbs.push(thumbnail)
                        })


                        sliderParent.html('')
                        sliderParent.html(sliders)
                        sliderParent.slick('unslick')
                        sliderParent.slick({
                            zoomType: "inner",
                            cursor: "crosshair",
                            zoomWindowFadeIn: 500,
                            zoomWindowFadeOut: 750
                        })

                        sliderThumbnail.html('')
                        sliderThumbnail.html(thumbs)
                        sliderThumbnail.slick('unslick')
                        sliderThumbnail.slick({
                            slidesToShow: 4,
                            autoplay: true,
                            arrow: false,
                            dots: false,
                            nextArrow: false,
                            prevArrow: false,
                        })

                        modalTitle.html(product[0].title)
                        currentPrice.html(product[0].product_price.price + '$')
                        oldPrice.html(product[0].product_price.discount + '$')
                        discount.html(product[7])
                        sku.html(product[0].sku)
                        $('.product_id').val(product[0].id)
                        category.html(product[0].category.cat_name)

                        let availability = ''

                        if (product[0].stock > 0) {
                            availability = "In stock"
                        } else {
                            availability = "Out of Stcok"
                        }
                        stock.html(availability)

                        rating.append(star)

                    },
                    error: function(error) {
                        console.log(error);
                    },
                })
            })
        </script>
        <script>
            const addToCart = $('.addToCart')
            var count = $('.count')
            var totalPrice = $('.totalPrice')
            addToCart.on('click', function() {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: '{{ route('addToCart') }}',
                    method: 'GET',
                    data: {
                        productId: id
                    },
                    success: function(data) {
                        console.log(data)
                        if (data.error) {
                            $('.Notification').css('display', 'block');
                            setTimeout(() => {
                                $('.Notification').css('display', 'none');
                            }, 4000);
                        } else {
                            $('.success').css('display', 'block');
                            setTimeout(() => {
                                $('.success').css('display', 'none');
                            }, 4000);
                            var showCartProducts = [];
                            data.allData.map(element => {
                                var product = `<li>
                                        <div class="shopping-cart-img">
                                            <a><img
                                                    src="${element.product.image_url}"
                                                    alt=""></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a>${element.product.title}</a></h4>
                                            <h4>(${element.product_qty})</h4>
                                        </div>
                                        <div class="shopping-cart-value">
                                            <h2>${element.price}</h2>
                                        </div>
                                    </li>`;
                                showCartProducts.push(product);
                            })
                            $('#cartProduct').html('')
                            $('#cartProduct').html(showCartProducts)
                            $('.count').html('')
                            $('.count').html(data.count);
                        }
                        $('.totalPrice').html('')
                        totalPrice.html(data.totalPrice);
                    },
                    error: function(error) {
                        console.log(error)
                    },
                })
            })
        </script>

        <script>
            const addToWishLists = $('.addToWishLists')
            var count = $('.count')
            var totalPrice = $('.wish_total')
            addToWishLists.on('click', function() {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: '{{ route('addToWishts') }}',
                    method: 'GET',
                    data: {
                        productId: id
                    },
                    success: function(data) {
                        if (data.error_auth) {
                            $('.Notification').css('display', 'block');
                            setTimeout(() => {
                                $('.Notification').css('display', 'none');
                            }, 4000);
                        }else if(data.error_wish) {
                            $('.Notification_wish').css('display', 'block');
                            setTimeout(() => {
                                $('.Notification_wish').css('display', 'none');
                            }, 4000);
                        }
                        else {
                            $('.success_wish').css('display', 'block');
                            setTimeout(() => {
                                $('.success_wish').css('display', 'none');
                            }, 4000);
                            var showCartProducts = [];
                            console.log(data)
                            data.allWishListsData.map(element => {
                                var product = ` <li>
                                                <div class="shopping-cart-img">
                                                    <a><img
                                                            src="${element.product.image_url}"
                                                            alt=""></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a>${element.product.title}</a></h4>
                                                </div>
                                                <div class="shopping-cart-value">
                                                    <h2>${element.price}</h2>
                                                </div>
                                            </li>`;
                                showCartProducts.push(product);
                            })
                            $('#wishlistsProducts').html('')
                            $('#wishlistsProducts').html(showCartProducts)
                            $('.blue').html('')
                            $('.blue').html(data.count);
                        }
                        $('.wish_total').html('')
                        totalPrice.html(data.total);
                    },
                    error: function(error) {
                        console.log(error)
                    },
                })
            })
        </script>
    @endpush
@endsection
{{-- home page end --}}
