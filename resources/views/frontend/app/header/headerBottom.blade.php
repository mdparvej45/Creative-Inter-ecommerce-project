@php
    $category = App\Models\Category::latest()
        ->limit(6)
        ->with('subCategory')
        ->get(['id', 'cat_name', 'cat_slug', 'image_url']);
    
    use App\Models\Cart;
    $authUser = Auth::user();
    if ($authUser != null) {
        $cartItmes = Cart::with('product')
            ->where('user_id', $authUser->id)
            ->get();
        $total = App\Models\Cart::where('user_id', Auth::user()->id)->sum('price');
    }
@endphp
{{-- header bottom start --}}
<div class="header-bottom sticky-bar">
    <div class="container">
        <div class="header-col">
            <div class="logo header-logo d-block d-lg-none">
                <a href="{{ url('/') }}" class="d-none d-lg-block"><img
                        src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo"></a>
                <a href="{{ url('/') }}" class="d-sm-block"><img src="{{ asset('frontend/assets/img/logo-01.png') }}"
                        alt="logo"></a>
            </div>
            <div class="header-nav d-none d-lg-flex">
                <div class="main-menu d-none d-lg-block">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            @foreach ($category as $category)
                                <li>
                                    <a
                                        href="{{ route('category-wise-product', $category->cat_slug) }}">{{ $category->cat_name }}</a>
                                    @if (count($category->subCategory) > 0)
                                        <i class="fi-rs-angle-down fa-sm text-white"></i>
                                        <ul class="has-submenu">
                                            @foreach ($category->subCategory as $subcategory)
                                                <li><a
                                                        href="{{ route('sub-wise-product-show', $subcategory->sub_slug) }}">{{ $subcategory->sub_name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                            @auth
                                <li>
                                    <a href="#">Profile <i class="fi-rs-angle-down"></i></a>
                                    <ul class="has-submenu">
                                        @if (Auth::user()->roles[0]->name == 'buyer')
                                            <li><a href="{{ route('profile.create') }}">My Profile</a></li>
                                            <li><a href="{{ route('view.cart',$authUser->id) }}">Cart</a></li>
                                            <li><a href="{{ route('viewToWishts',$authUser->id) }}">Wishlist</a></li>
                                        @else
                                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        @endif
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button style="color: red;" class="dropdown-item"> Logout</button>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endauth
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header-inner-icon d-block d-lg-none">
                <div class="bar-icon">
                    <span class="bar-icon-one"></span>
                    <span class="bar-icon-two"></span>
                    <span class="bar-icon-three"></span>
                </div>
            </div>
            <div class="header-details d-block d-lg-none">
                <div class="header-inner">
                    <div class="header-inner-icon">
                        <a class="small-cart-icon " href="javascript:;">
                            <i class="feather-heart"></i>
                            <span class="pro-count blue">0</span>
                        </a>
                        <div class="cart-dropdown-wrap cart-dropdown-two">
                            <ul>
                                <li>
                                    <div class="shopping-cart-img">
                                        <a href="view-product.html"><img
                                                src="{{ asset('frontend/assets/img/shop/cart-img-02.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="view-product.html">Liver Detox Pills </a></h4>
                                        <h4>(x 10)</h4>
                                    </div>
                                    <div class="shopping-cart-value">
                                        <h2>$15.00</h2>
                                    </div>
                                </li>
                                <li>
                                    <div class="shopping-cart-img">
                                        <a href="view-product.html"><img
                                                src="{{ asset('frontend/assets/img/shop/cart-img-03.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="view-product.html">Heat Meter </a></h4>
                                        <h4>(x 10)</h4>
                                    </div>
                                    <div class="shopping-cart-value">
                                        <h2>$18.00</h2>
                                    </div>
                                </li>
                            </ul>
                            <div class="shopping-cart-footer">
                                <div class="shopping-cart-total">
                                    <h4>Total <span>$3000.00</span></h4>
                                </div>
                                <div class="shopping-cart-btn">
                                    <a href="cart.html">View cart</a>
                                    <a href="checkout.html">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-inner-icon">
                        @auth
                            <a class="small-cart-icon " href="javascript:;">
                                <i class="feather-shopping-bag"></i>
                                <span class="pro-count blue count">{{ count($cartItmes) }}</span>
                            </a>

                            <div class="cart-dropdown-wrap cart-dropdown-two">
                                <ul>
                                    @forelse ($cartItmes as $item)
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="view-product.html"><img src="{{ $item->product->image_url }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="view-product.html">{{ $item->name }}</a></h4>
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
                                        <h4>Total <span>$</span><span>{{ $total }}</span></h4>
                                    </div>
                                    <div class="shopping-cart-btn">
                                        @auth
                                            <a href="{{ route('view.cart', $authUser->id) }}" class="outline">View cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        @endauth
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
{{-- header bottom end --}}
