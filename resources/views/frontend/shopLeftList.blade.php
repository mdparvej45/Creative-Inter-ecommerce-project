@extends('frontend.app.app')

@section('content')
    <style>
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

    <!-- Main -->
    <main class="main">
        <div class="page-content">
            <div class="container mb-30">
                <div class="row">
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">

                        <!--Categories -->
                        <div class="sidebar-widget price_range range mb-25">
                            <h5 class="section-title style-1 mb-20">Categories</h5>
                            <div class="list-group">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" id="accordionExample">
                                        @foreach ($category as $item)
                                            <li class="nav-item" id="dashboard-one">
                                                <a class="nav-link accordion-button collapsed"
                                                    href="{{ route('category-wise-product', $item->cat_slug) }}"
                                                    data-bs-toggle="collapse" data-bs-target="#{{ $item->cat_slug }}"
                                                    aria-expanded="false" aria-controls="collapseOne">{{ $item->cat_name }}
                                                    <i class="feather-plus "></i></a>
                                                <div id="{{ $item->cat_slug }}" class="accordion-collapse collapse"
                                                    aria-labelledby="dashboard-one" data-bs-parent="#accordionExample">
                                                    <ul class="dashboard-sub-link">
                                                        @if ($item->subCategory != null)
                                                            @foreach ($item->subCategory as $subCategory)
                                                                <li><a
                                                                        href="{{ route('sub-wise-product-show', $subCategory->sub_slug) }}">{{ $subCategory->sub_name }}</a>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    </ul>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Categories -->

                    </div>
                    <div class="col-lg-9 ">
                        <div class="product-filter-group left-filter-bar">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6">
                                    <div class="filter-list">
                                        <ul>
                                            <li>Showing 1-{{ $count }} of 62 results</li>
                                        </ul>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="row product-grid">

                            @forelse ($productLists as $item)
                                <!-- Product Card -->
                                <div class="col-xl-4 col-md-4 col-12 col-sm-6">
                                    <!-- Product box -->
                                    <div class="product-card wow animate__animated animate__fadeIn mb-25"
                                        data-wow-delay=".1s">
                                        <div class="product-img-col">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details.create', $item->slug_unique) }}">
                                                    <img src="{{ $item->image_url != null ? $item->image_url : '' }}"
                                                        alt="{{ $item->title != null ? $item->title : '' }}">
                                                </a>
                                            </div>
                                            <div class="product-badge">
                                                @php
                                                    $price = $item->productPrice != null ? $item->productPrice->price : 0;
                                                    $discount = $item->productPrice != null ? $item->productPrice->discount : 0;
                                                    if ($discount != null) {
                                                        $ammount = ($discount / $price) * 100;
                                                    }
                                                @endphp
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
                                            <div class="sold-group mb-15">
                                            </div>
                                            <h2><a
                                                    href="{{ route('product.details.create', $item->slug_unique) }}">{{ $item->title }}</a>
                                            </h2>
                                            <div class="product-card-bottom ">
                                                <div class="rating d-inline-block">
                                                    @php
                                                        $five = App\Models\Review::where('product_id', $item->id)
                                                            ->where('ratings', 5)
                                                            ->count();
                                                        
                                                        $four = App\Models\Review::where('product_id', $item->id)
                                                            ->where('ratings', 4)
                                                            ->count();
                                                        
                                                        $three = App\Models\Review::where('product_id', $item->id)
                                                            ->where('ratings', 3)
                                                            ->count();
                                                        $two = App\Models\Review::where('product_id', $item->id)
                                                            ->where('ratings', 2)
                                                            ->count();
                                                        $one = App\Models\Review::where('product_id', $item->id)
                                                            ->where('ratings', 1)
                                                            ->count();
                                                        $totalCount = App\Models\Review::where('product_id', $item->id)->count();
                                                        $totalRatings = $five * 5 + $four * 4 + $three * 3 + $two * 2 + $one * 1;
                                                        $averageResult = 0;
                                                        if ($totalRatings > 0) {
                                                            $averageResult = ceil($totalRatings / $totalCount);
                                                        } else {
                                                            $averageResult = 0;
                                                        }
                                                    @endphp
                                                    @if ($item->review != null)
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
                                                    <span>{{ $item->productPrice != null ? $item->productPrice->price : 0 }}$</span>
                                                    <span
                                                        class="old-price">{{ $item->productPrice != null ? $item->productPrice->discount : 0 }}$</span>
                                                </div>
                                            </div>
                                            <div class="add-feature">
                                                <a class="btn btn-primary addToCart" data-id="{{ $item->id }}"><i
                                                        class="feather-shopping-bag me-1"></i>Add</a>
                                                <div class="product-details-inner">
                                                    <a href="{{ route('product.details.create', $item->slug_unique) }}" class="product-btn"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Quick view" class="product-btn quickModal"
                                                        data-bs-toggle="modal" data-id="{{ $item->id }}"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                    <a aria-label="Add To Wishlist" class="product-btn addToWishLists" data-id="{{ $item->id }}"
                                                       ><i class="fi-rs-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Product box -->
                                </div>
                                <!-- /Product Card -->
                            @empty
                                <h2>No Product</h2>
                            @endforelse
                        </div>

                        <!--product grid-->
                        <div class="pagination-area">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    {{ $productLists->links() }}
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
                                    <a href="view-product.html"><img
                                            src="${element.product.image_url}"
                                            alt=""></a>
                                </div>
                                <div class="shopping-cart-title">
                                    <h4><a href="view-product.html">${element.product.title}</a></h4>
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
                        } else if (data.error_wish) {
                            $('.Notification_wish').css('display', 'block');
                            setTimeout(() => {
                                $('.Notification_wish').css('display', 'none');
                            }, 4000);
                        } else {
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
