@php
    $products = App\Models\Product::latest()
        ->with('user', 'category', 'subCategory', 'productPrice', 'review')
        ->get();
@endphp
{{-- quick view start --}}
<div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close quick-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="feather-x-circle"></i>
            </button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                        <div class="detail-gallery">
                            <!-- MAIN SLIDES -->
                            <div class="position-relative">
                                <div class="product-image-slider">

                                </div>
                                <span class="zoom-icon"><i class="feather-search"></i></span>
                            </div>
                            <!-- THUMBNAILS -->
                            <div class="slider-nav-thumbnails">

                            </div>
                        </div>
                        <!-- End Gallery -->
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="detail-info">
                            <div class="bg-price">
                                <span class="save-price mb-10 discount">

                                </span>
                            </div>
                            <h5 class="title-detail"></h5>
                            <div class="rating d-inline-block">
                                {{-- <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star filled"></i> --}}
                                <span class="ml-5"></span>
                            </div>
                            <div class="clearfix product-price-cover">
                                <div class="product-price primary-color float-left">
                                    <span class="current-price"></span>
                                    <span class="old-price">$</span>
                                </div>
                            </div>
                            <ul class="pro-code">
                                <li>SKU ID : <span class="text-black sku"></span></li>
                                <li>Category : <span class="text-black category"></span></li>
                                <li>Availability : <span class="text-brand stock">In stock</span></li>
                            </ul>
                            <div class="product-extra-link2 ">
                                <h5>Quantity</h5>
                                <div class="quntity-group  d-flex">
                                    <form action="{{ route('cartProduct') }}" method="post">
                                        @csrf
                                        <div class="detail-extralink d-flex">
                                            <div class="detail-qty border radius w-50">
                                                {{-- <a href="#" class="qty-down"><i class="fi-rs-minus-small"></i></a> --}}
                                                {{-- <span class="qty-val">1</span> --}}
                                                <input type="number" name="product_qty" value="1"
                                                    class="product_qty d-inline-block">
                                                <input type="hidden" name="product_id" value=""
                                                    class="product_id d-inline-block">    
                                                {{-- <a href="#" class="qty-up"><i class="fi-rs-plus-small"></i></a> --}}
                                            </div>


                                            @csrf
                                            <button type="submit" class="button button-add-to-cart w-50 me-3 d-inline-block"><i
                                                    class="fi-rs-shopping-cart"></i> Add to cart</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="pop-wish">
                                <a aria-label="Add To Wishlist" class=" link-wishlist" href="wishlist.html"><i
                                        class="feather-heart me-1 ms-1"></i>Add to
                                    Wishlist</a>
                            </div>
                            <div class="pro-share">
                                <ul>
                                    <li class="me-2"><span>Share :</span></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Detail Info -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- quick view end --}}
