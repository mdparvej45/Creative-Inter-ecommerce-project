@php
    $category = App\Models\Category::latest()
        ->limit(6)
        ->with('subCategory')
        ->get(['id', 'cat_name', 'cat_slug', 'image_url']);
@endphp

{{-- mobile ment start --}}
<div class="main-menu-wrapper">
    <div class="mobile-header-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo" /></a>
            </div>
            <div class="mobile-menu-close close-col menu-close-position">
                <button class="close-style">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content">
            <div class="mobile-menu-col mobile-header-border">

                <!-- Mobile Menu -->
                <nav>
                    <ul class="main-nav">
                        <li class="mobile-menu-item">
                            <a href="index.html">Home</a>
                        </li>
                        @foreach ($category as $category)
                            <li class="mobile-menu-item">
                                <a
                                    href="{{ route('category-wise-product', $category->cat_slug) }}">{{ $category->cat_name }}</a>
                                @if (count($category->subCategory) > 0)
                                    @foreach ($category->subCategory as $subcategory)
                                        <ul class="dropdown">
                                            <li><a
                                                    href="{{ route('sub-wise-product-show', $subcategory->sub_slug) }}">{{ $subcategory->sub_name }}</a>
                                            </li>
                                        </ul>
                                    @endforeach
                                @endif
                            </li>
                        @endforeach
                        @auth
                            <li>
                                <a href="#">Profile <i class="fi-rs-angle-down"></i></a>
                                <ul class="has-submenu">
                                    @if (Auth::user()->roles[0]->name == 'buyer')
                                    <li><a href="{{ route('profile.create') }}">My Profile</a></li>
                                    <li><a href="{{ route('odrer.create') }}">Orders</a></li>
                                    <li><a href="{{ route('cart.create') }}">Cart</a></li>
                                    <li><a href="{{ route('wisih.create') }}">Wishlist</a></li>
                                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    @else
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
                        <li>
                            @if (Auth::check())
                            <a class="popup-toggle"><img style="height: 30px; width:30px;" class="rounded-circle" src="{{ Auth::user()->image == null ? 'https://api.dicebear.com/5.x/initials/svg?seed=Felix' : Auth::user()->image }}
                                " alt="Profile Image"></a></li>
                            @else
                                <a class="popup-toggle"><i class="feather-user"></i>Login / Register</a></li>
                            @endif
                        <li>
                    </ul>
                </nav>
                <!-- /Mobile Menu -->

            </div>
        </div>
    </div>
</div>
{{-- mobile menu end --}}
