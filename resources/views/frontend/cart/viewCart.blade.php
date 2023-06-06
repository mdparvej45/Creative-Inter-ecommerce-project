@extends('frontend.app.app')
@section('content')
    @php
        $total = App\Models\Cart::where('user_id', Auth::user()->id)->sum('price');
    @endphp
    <main class="main">
        <div class="page-content">
            <div class="container">
                <div class="section-title section-new-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                    <h4>Shopping Cart</h4>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="table-responsive shopping-table">
                            <table class="table">
                                <thead>
                                    <tr class="table-head">
                                        <th></th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($cartItmes as $item)
                                        <tr class="table-head">
                                            <form action="{{ route('update.cart', $item->id) }}" method="post">
                                                @csrf
                                                <td>
                                                    <a href="{{ route('delete.cart', $item->id) }}"
                                                        class="btn btn-danger btn-sm" style="background: red!important"><i
                                                            class="feather-x-circle"></i></a>
                                                </td>
                                                <td class="cart-store">
                                                    <a
                                                        href="{{ route('product.details.create', $item->product->slug_unique) }}"><img
                                                            src="{{ $item->product->image_url }}" class="img-fluid"
                                                            alt=""></a>
                                                    <div class="sold-group">
                                                        <a
                                                            href="{{ route('product.details.create', $item->product->slug_unique) }}">{{ $item->product->title }}</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    @php
                                                        $totalPrice = $item->price;
                                                        $price = $totalPrice / $item->product_qty;
                                                    @endphp
                                                    {{ $price }}
                                                </td>
                                                <td>
                                                    <div class="product-extra-link2 ">
                                                        <div class="quntity-group  d-flex">
                                                            <div class="detail-extralink">
                                                                <div class="detail-qty border radius">
                                                                    <input type="number" class="form-control"
                                                                        value="{{ $item->product_qty }}" name="product_qty">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>${{ $item->price }} </td>
                                                <td>
                                                    <button class="btn btn-primary">Update Cart</button>
                                                </td>
                                            </form>
                                        </tr>

                                    @empty
                                        <tr>
                                            <h4>NO cart item here...</h4>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="shop-cart">
                        <div class="row">
                            <div class="col-lg-8 col-md-6">
                                <form action="{{ route('cupon.offer') }}" method="post">
                                    @csrf
                                    <div class="shop-cart-action mb-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Coupon code"
                                                name="offer">
                                        </div>
                                        <button class="btn continue-btn">Apply coupon</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="continue-shop d-flex align-items-center justify-content-end">
                                    <div class="shop-continuee">
                                        <a href="{{ url('/') }}">Continue Shopping</a>
                                    </div>

                                </div>
                                <div class="card">
                                    @if (isset($discountPrice))
                                        @php
                                            $discount = $total / $discountPrice;
                                            $new_price = $total - $discount;
                                        @endphp
                                    @elseif (isset($FixedDiscountPrice))
                                        @php
                                            $FixeDdiscount = $total - $FixedDiscountPrice;
                                        @endphp
                                    @endif

                                    <div class="card-body">
                                        <form class="shop-cart-info" action="{{ route('checkout') }}" method="POST">
                                            @csrf
                                            <p>Subtotal <span>
                                                    @if (isset($discountPrice))
                                                        {{ $new_price }}
                                                    @elseif (isset($FixedDiscountPrice))
                                                        {{ $FixeDdiscount }}
                                                    @else
                                                        {{ $total }}
                                                    @endif
                                                </span></p>
                                            <ul class="shipping-list">
                                                <li>Shipping</li>
                                                <li>Free shipping</li>
                                                <li>Shipping to Bangladesh. </li>
                                            </ul>
                                            <p>Total <span class="total-brand">
                                                    @if (isset($discountPrice))
                                                    <input type="hidden" value="{{ $new_price }}" name="discount_price">
                                                        {{ $new_price }}
                                                    @elseif (isset($FixedDiscountPrice))
                                                        {{ $FixeDdiscount }}
                                                        <input type="hidden" value="{{ $FixeDdiscount }}" name="discount_price">
                                                    @else
                                                        {{ $total }}
                                                        <input type="hidden" value="{{ $total }}" name="discount_price">
                                                    @endif
                                                </span>
                                            </p>
                                            <button class="btn checkout-btn w-100">Proceed to checkout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
