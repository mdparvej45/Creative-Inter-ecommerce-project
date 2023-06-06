{{-- header middle start --}}
@php
    use App\Models\Cart;
    use App\Models\ProductWishlist;
    $authUser = Auth::user();
    if ($authUser !== null) {
        $cartItmes = Cart::with('product')
            ->where('user_id', $authUser->id)
            ->get();
        $total = App\Models\Cart::where('user_id', Auth::user()->id)->sum('price');
    }
    
    $authUser = Auth::user();
    if ($authUser !== null) {
        $wishItem = ProductWishlist::with('product')
            ->where('user_id', $authUser->id)
            ->get();
        $totalWisthPrice = App\Models\ProductWishlist::where('user_id', Auth::user()->id)->sum('price');
    }
@endphp



<div class="header-middle d-none d-lg-block">
    <div class="container">
        <div class="header-col">
            <div class="logo header-logo">
                <a href="{{ url('/') }}" class="d-none d-lg-block"><img
                        src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo"></a>
                <a href="{{ url('/') }}" class="d-lg-none d-sm-block"><img
                        src="{{ asset('frontend/assets/img/logo-01.png') }}" alt="logo 2"></a>
            </div>
            <div class="header-right position-relative">
                <div class="header-search">
                    <form action="{{ route('search-product-data') }}" method="POST">
                        @csrf
                        <input type="text" class="search" placeholder="Search for items…" name="product">
                        <input type="submit" name="form-submit submit" class="submit-btn popup-toggle3">
                    </form>
                    <ul class="position-absolute col-lg-12 searchData" style="z-index: 1">

                    </ul>
                </div>
                <div class="header-details">
                    <div class="header-inner">
                        @auth
                            <div class="header-inner-icon ">
                                <a class="small-cart-icon" href="javascript:;">
                                    <i class="feather-heart"></i>
                                    <span class="pro-count blue">{{ count($wishItem) }}</span>
                                </a>
                                <div class="cart-dropdown-wrap">
                                    <ul id="wishlistsProducts">
                                        @forelse ($wishItem as $item)
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a><img src="{{ $item->product->image_url }}"
                                                            alt=""></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a>{{ $item->product->title }}</a></h4>
                                                </div>
                                                <div class="shopping-cart-value">
                                                    <h2>${{ $item->price }}</h2>
                                                </div>
                                            </li>
                                        @empty
                                            <small>No Cart item here...</small>
                                        @endforelse
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span class="wish_total">${{ $totalWisthPrice }}</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a href="{{ route('viewToWishts', $authUser->id) }}" class="outline">View cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-inner-icon ">
                                <a class="small-cart-icon me-3" href="javascript:;">
                                    <i class="feather-shopping-bag"></i>
                                    <span class="pro-count blue count">{{ count($cartItmes) }}</span>
                                </a>
                                <a href="cart.html" class="me-3">
                                    <span class="lable d-block mt-0">Cart</span>
                                    <span class="cart-amout d-block ">$0.00</span>
                                </a>
                                <div class="cart-dropdown-wrap">
                                    <ul id="cartProduct">
                                        @forelse ($cartItmes as $item)
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a><img src="{{ $item->product->image_url }}"
                                                            alt=""></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a>{{ $item->name }}</a></h4>
                                                    <h4>(x{{ $item->product_qty }})</h4>
                                                </div>
                                                <div class="shopping-cart-value">
                                                    <h2>${{ $item->price }}</h2>
                                                </div>
                                            </li>
                                        @empty
                                            <small>No Cart item here...</small>
                                        @endforelse
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$</span><span class="totalPrice">{{ $total }}</span>
                                            </h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            @auth
                                                <a href="{{ route('view.cart', $authUser->id) }}" class="outline">View cart</a>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- header middle end --}}
