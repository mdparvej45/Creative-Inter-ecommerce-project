@extends('frontend.app.app')


@section('content')
    @php
        $user = Auth::user();
    @endphp
    <!-- Main -->
    <main class="main">
        <div class="page-content">
            <div class="container">
                <div class="row product_data">
                    <div class="col-lg-12 m-auto">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-5 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                    <div class="detail-gallery">
                                        <!-- MAIN SLIDES -->
                                        <div class="position-relative">
                                            <div class="product-image-slider">
                                                <figure class="border-radius-10">
                                                    <img src="{{ $product->image_url != null ? $product->image_url : asset('images/image_placeholder_2.png') }}"
                                                        alt="product image">
                                                </figure>

                                                @forelse($product->productImage as $item)
                                                    <figure class="border-radius-10">
                                                        <img src="{{ $item->image_url }}" alt="product image">
                                                    </figure>
                                                @empty
                                                    <figure class="border-radius-10">
                                                        <img src="{{ asset('images/image_placeholder_2.png') }}"
                                                            alt="product image">
                                                    </figure>
                                                @endforelse

                                            </div>

                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails">
                                            @forelse($product->productImage as $item)
                                                <div>
                                                    <img src="{{ $item->image_url }}" alt="product image">
                                                </div>
                                            @empty
                                                <div>
                                                    <img src="{{ asset('images/image_placeholder_2.png') }}"
                                                        alt="product image">
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <div class="bg-price">
                                            @php
                                                $price = $product->productPrice != null ? $product->productPrice->price : 0;
                                                $discount = $product->productPrice != null ? $product->productPrice->discount : 0;
                                                if ($discount != null) {
                                                    $ammount = ($discount / $price) * 100;
                                                }
                                            @endphp
                                            <span class="save-price mb-10 discount">
                                                @if ($discount == null)
                                                    00%
                                                @else
                                                    {{ ceil($ammount) . '%' }}
                                                @endif
                                            </span>
                                        </div>
                                        <h5 class="title-detail">{{ $product->title }}</h5>
                                        <div class="rating d-inline-block">
                                            @if ($averageResult != null)
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

                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <span
                                                    class="current-price">${{ $product->productPrice != null ? $product->productPrice->price : 0 }}</span>
                                                <span class="old-price">$
                                                    {{ $product->productPrice != null ? $product->productPrice->discount : 0 }}</span>
                                            </div>
                                        </div>
                                        <ul class="pro-code">
                                            <li>SKU ID : <span class="text-black">{{ $product->sku }}</span></li>
                                            <li>Category : <span
                                                    class="text-black">{{ $product->category->cat_name }}</span></li>
                                            <li>Availability : <span
                                                    class="text-brand">{{ $product->stock != 0 ? 'In Stock' : 'Sold Out' }}</span>
                                            </li>
                                        </ul>
                                        <div class="product-extra-link2 ">
                                            <h5>Quantity</h5>
                                            {{-- <div class="quntity-group d-flex">
                                                <input type="hidden" value="{{ $product->id }}" class="product_id">
                                                <div class="input-group text-center"
                                                    style="width: 130px; overflow:hidden; height:2.5rem; margin-right:5px;">
                                                    <button class="input-group-text decrement-btn">-</button>
                                                    <input type="text" name="quentity"
                                                        class="form-control qut-input text-center" value="1">
                                                    <button class="input-group-text increment-btn">+</button>
                                                </div>
                                                <button type="button"
                                                    class="button addToCartBtn button-add-to-cart me-3"><i
                                                        class="fi-rs-shopping-cart"></i> Add to cart</button>
                                            </div> --}}
                                            <form action="{{ route('addToCartProduct',$product->id) }}" method="post">
                                                @csrf
                                                <div class="quntity-group  d-flex">
                                                    <div class="detail-extralink">
                                                        <div class="detail-qty border radius">
                                                            <input type="number" class="qty w-100" name="qty" value="1">
                                                            <input type="hidden" class="qty w-100" name="productID" value="1" value="{{ $product->id }}">
                                                        </div>
                                                    </div>
                                                    <button class="button button-add-to-cart me-3"><i
                                                            class="fi-rs-shopping-cart"></i> Add to cart</button>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="pop-wish">
                                            <a aria-label="Add To Wishlist" class=" link-wishlist" href="wishlist.html"><i
                                                    class="feather-heart me-1 ms-1"></i>Add to Wishlist</a>
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
                                            <a class="nav-link active" id="Additional-info-tab" data-bs-toggle="tab"
                                                href="#Specification">Specification</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Description-tab" data-bs-toggle="tab"
                                                href="#Description">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="review-tab" data-bs-toggle="tab"
                                                href="#Review">Review</a>
                                        </li>
                                    </ul>
                                    <div class="view-detail-tab">
                                        <div class="tab-content shop_info_tab entry-main-content">
                                            <div class="tab-pane specific-perform fade" id="Specification">
                                                {!! $product->specification !!}
                                            </div>
                                            <div class="tab-pane about-items fade show active" id="Description">
                                                {{ $product->description }}
                                            </div>
                                            <div class="tab-pane review-tab fade" id="Review">

                                                {{-- Rating Review --}}
                                                <div class="review-rating-blk">
                                                    <div class="rating-views-blk">
                                                        <div class="rating-views text-center">
                                                            <h3>{{ $averageResult != null ? $averageResult : 0 }}<span>/5</span>
                                                            </h3>
                                                            <div class="review-card-bottom ">
                                                                <div class="rating d-inline-block">
                                                                    @if ($averageResult != null)
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
                                                                </div>
                                                            </div>
                                                            <p id="averageRatings" class="d-inline-block">
                                                                {{ $averageResult != null ? $averageResult : 0 }}</p>
                                                            <p class="d-inline-block">Ratings</p>
                                                        </div>
                                                    </div>
                                                    <div class="rating-star-group">
                                                        <div class="rating-star">
                                                            <h5>5 Stars</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success"
                                                                    style="width:{{ $five != null ? $five : 0 }}%">
                                                                </div>
                                                            </div>
                                                            <h6>{{ $five != null ? $five : 0 }}</h6>

                                                        </div>
                                                        <div class="rating-star">
                                                            <h5>4 Stars</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success"
                                                                    style="width:{{ $four != null ? $four : 0 }}%">
                                                                </div>
                                                            </div>
                                                            <h6>{{ $four != null ? $four : 0 }}</h6>
                                                        </div>
                                                        <div class="rating-star">
                                                            <h5>3 Stars</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning"
                                                                    style="width:{{ $three != null ? $three : 0 }}%">
                                                                </div>
                                                            </div>
                                                            <h6>{{ $three != null ? $three : 0 }}</h6>
                                                        </div>
                                                        <div class="rating-star">
                                                            <h5>2 Stars</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning"
                                                                    style="width:{{ $two != null ? $two : 0 }}%">
                                                                </div>
                                                            </div>
                                                            <h6>{{ $two != null ? $two : 0 }}</h6>
                                                        </div>
                                                        <div class="rating-star mb-0">
                                                            <h5>1 Stars</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-danger"
                                                                    style="width:{{ $one != null ? $one : 0 }}%">
                                                                </div>
                                                            </div>
                                                            <h6>{{ $one != null ? $one : 0 }}</h6>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Comment Review --}}
                                                <h3>Recent Reviews</h3>
                                                @forelse ($product->comments as $comment)
                                                    <div class="review-group mb-10">
                                                        <div class="review-img">
                                                            <a href="profile.html"><img
                                                                    src="{{ $comment->user->image_url != null ? $comment->user->image_url : asset('images/image_placeholder.png') }}"
                                                                    alt="img" class="img-fluid"></a>
                                                        </div>
                                                        <div class="review-name-group">
                                                            <h5><a href="profile.html">{{ $comment->user->name }}</a>
                                                                <span>| {{ $comment->updated_at->diffForhumans() }}</span>
                                                            </h5>
                                                            <div class="review-card-bottom ">
                                                            </div>
                                                            <div>
                                                                <small class="text-black">
                                                                    {{ $comment->comment }}
                                                                    <span>
                                                                        <div class="rating d-inline-block">
                                                                            @if ($comment->review->count() > 0)
                                                                                @if ($comment->review[0]->ratings == 1)
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                @elseif ($comment->review[0]->ratings == 1.5)
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i
                                                                                        class="fa-regular fa-star-half-stroke"></i>
                                                                                @elseif ($comment->review[0]->ratings == 2)
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                @elseif ($comment->review[0]->ratings == 2.5)
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i
                                                                                        class="fa-regular fa-star-half-stroke"></i>
                                                                                @elseif ($comment->review[0]->ratings == 3)
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                @elseif ($comment->review[0]->ratings == 3.5)
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i
                                                                                        class="fa-regular fa-star-half-stroke"></i>
                                                                                @elseif ($comment->review[0]->ratings == 4)
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                @elseif ($comment->review[0]->ratings == 4.5)
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i
                                                                                        class="fa-regular fa-star-half-stroke"></i>
                                                                                @elseif ($comment->review[0]->ratings == 5)
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                    <i class="fas fa-star avgResult"></i>
                                                                                @endif
                                                                            @endif
                                                                        </div>
                                                                    </span>
                                                                </small>
                                                            </div>
                                                            @if (count($comment->replies) > 0)
                                                                @foreach ($comment->replies as $reply)
                                                                    <div class="review-group mb-10">
                                                                        <div class="review-img">
                                                                            <a href="profile.html"><img
                                                                                    src="{{ $reply->user->image_url != null ? $reply->user->image_url : asset('images/image_placeholder.png') }}"
                                                                                    alt="img" class="img-fluid"></a>
                                                                        </div>
                                                                        <div class="review-name-group">
                                                                            <h5><a
                                                                                    href="profile.html">{{ $reply->user->name }}</a>
                                                                                <span>|
                                                                                    {{ $reply->updated_at->diffForhumans() }}</span>
                                                                            </h5>
                                                                            <small class="text-black">
                                                                                {{ $reply->comment }}
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                            @if ($authUser !== null)
                                                                <a id="{{ $comment->id }}"
                                                                    style="color: rgb(33, 160, 106);"
                                                                    class="replyBtn-{{ $comment->id }}">Reply</a>
                                                                <form id="replyForm-{{ $comment->id }}"
                                                                    class="replyForm-{{ $comment->id }}"
                                                                    action="{{ route('comment.reply.create', $comment->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="input col-sm-8">
                                                                            <input class="form-control mt-1"
                                                                                type="text" name="reply"
                                                                                placeholder="Enter your reply" />
                                                                        </div>
                                                                        <div class="btn-group col-sm-4">
                                                                            <button
                                                                                class="btn btn-sm btn-primary">Send</button>
                                                                        </div>
                                                                </form>
                                                        </div>
                                                @endif
                                            </div>
                                        </div>
                                    @empty
                                        <small>No Comment yet</small>
                                        @endforelse
                                        @if ($user != null)
                                            <div class="review-coment-group">
                                                <form action="{{ route('comment.create', $product->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Review <span class="text-danger">*</span></label>
                                                                <div class="rating">
                                                                    @error('raitings')
                                                                        {{ $message }}
                                                                    @enderror
                                                                    <span class="fa fa-star" id="star1"
                                                                        data-id="1"></span>
                                                                    <span class="fa fa-star" id="star2"
                                                                        data-id="2"></span>
                                                                    <span class="fa fa-star" id="star3"
                                                                        data-id="3"></span>
                                                                    <span class="fa fa-star" id="star4"
                                                                        data-id="4"></span>
                                                                    <span class="fa fa-star" id="star5"
                                                                        data-id="5"></span>
                                                                    <input type="hidden" class="form-control raitng"
                                                                        value="1" name="raitings">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Comment <span class="text-danger">*</span></label>
                                                            <div class="rating row">
                                                                <div class="col-md-12">
                                                                    <textarea type="text" name="comment" class="form-control col-sm-8"></textarea>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="review-submit">
                                                            <button class="btn btn-primary">Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        @else
                                            <h4>Do you write a comment or reiview please <a class="btn btn-sm btn-primary"
                                                    href="{{ route('login') }}">login</a> required</h4>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Products -->
                        <section class="feature-products pb-0">
                            <div>
                                <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                                    <h3>Similar Products</h3>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="feature-product-slider arrow-center position-relative">
                                            <div class="slider-arrow slider-arrow-two carousel-4-columns-arrow"
                                                id="carousel-4-columns-arrows"></div>
                                            <div class="carousel-4-columns carousel-arrow-center mb-0"
                                                id="carousel-4-columns">

                                                @foreach ($similarProduct as $product)
                                                    <!-- Product box -->
                                                    <div class="product-card wow animate__animated animate__fadeIn"
                                                        data-wow-delay=".1s">
                                                        <div class="product-img-col">
                                                            <div class="product-img product-img-zoom">
                                                                <a
                                                                    href="{{ route('product.details.create', $product->slug_unique) }}">
                                                                    <img src="{{ $product->image_url }}"
                                                                        alt="{{ $product->title }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-badge">
                                                                @php
                                                                    $price = $product->productPrice != null ? $product->productPrice->price : 0;
                                                                    $discount = $product->productPrice != null ? $product->productPrice->discount : 0;
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
                                                @endforeach

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
    @push('script')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.addToCartBtn').click(function(e) {
                    e.preventDefault();
                    var product_id = $(this).closest('.product_data').find('.product_id').val();
                    var product_qty = $(this).closest('.product_data').find('.qut-input').val();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        method: "post",
                        url: "/add/to/cart",
                        data: {
                            'product_id': product_id,
                            'product_qty': product_qty,
                        },
                        success: function(response) {
                            alert(response.status);


                        }
                    });
                });

                $("#star1").click(function() {
                    $("#star1").css("color", "black").removeClass("bigstar");
                    $("#star1").css("color", "#FFC700");
                    $(this).addClass("bigstar");
                });
                $("#star2").click(function() {
                    $("#star2").css("color", "black").removeClass("bigstar");
                    $("#star1,#star2").css("color", "#FFC700");
                    $(this).addClass("bigstar");
                });
                $("#star3").click(function() {
                    $("#star3").css("color", "black").removeClass("bigstar");
                    $("#star1,#star2,#star3").css("color", "#FFC700");
                    $(this).addClass("bigstar");
                });
                $("#star4").click(function() {
                    $("#star4").css("color", "black").removeClass("bigstar");
                    $("#star1,#star2,#star3,#star4").css("color", "#FFC700");
                    $(this).addClass("bigstar");
                });
                $("#star5").click(function() {
                    $("#star5").css("color", "black").removeClass("bigstar");
                    $("#star1,#star2,#star3,#star4,#star5").css("color", "#FFC700");
                    $(this).addClass("bigstar");
                });
            });
        </script>
        <script>
            $('.fa-star').on('click', function() {
                var id = $(this).data('id');
                $('.raitng').val(id)
            })
        </script>
    @endpush
@endsection
