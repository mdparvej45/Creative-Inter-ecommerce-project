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
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($cartItmes as $item)
                                        <tr class="table-head">
                                            <form action="{{ route('update.cart', $item->id) }}" method="post">
                                                @csrf
                                                <td>
                                                    <a href="{{ route('delete.cart', $item->id) }}" class="btn btn-danger btn-sm" style="background: red!important"><i
                                                            class="feather-x-circle"></i></a>
                                                </td>
                                                <td class="cart-store">
                                                    <a href="{{ route('product.details.create', $item->product->slug_unique) }}"><img src="{{ $item->product->image_url }}"
                                                            class="img-fluid" alt=""></a>
                                                    <div class="sold-group">
                                                        <a href="{{ route('product.details.create', $item->product->slug_unique) }}">{{ $item->product->title }}</a>
                                                    </div>
                                                </td>
                                               
                                                <td>${{ $item->price }} </td>
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
                   
                </div>
            </div>
        </div>
    </main>
@endsection
