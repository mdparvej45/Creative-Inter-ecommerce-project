@extends('backend.layouts.app')
@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">View Product</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->


    <div class="card">
        <div class="row g-0">
            <div class="col-md-4 border-end">
                <img src="{{ url($product->image_url) }}" class="img-fluid" style="width: 100%;">
                <div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
                        @forelse($galleryImage as $image)
                            <div class="col"><img src="{{ $image->image_url }}" width="70"
                                                  class="border rounded cursor-pointer" alt=""></div>
                        @empty
                            <div class="col">No Gallery Image</div>
                        @endforelse
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-sm-9">{{ $product->title }}</h4>
                        <div class=" col-sm-3">
                            <a class="btn btn-outline-info btn-sm" href="{{ route('all.Products') }}">Back</a>
                            <a class="btn btn-outline-primary btn-sm"
                               href="{{ route('edit.product', $product) }}">Edit</a>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex gap-3 py-3">
                        {{-- <div class="cursor-pointer">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-secondary'></i>
                          </div>
                          <div>142 reviews</div> --}}
                        <div class="text-success"><i class='bx bxs-cart-alt align-middle'></i> {{ $product->stock }}
                            <span> Stock</span></div>
                    </div>
                    {{-- <div class="mb-3">
                      <span class="price h4">$149.00</span>
                      <span class="text-muted">/per pic</span>
                  </div> --}}
                    <p class="card-text fs-6">{{ $product->description }}</p>
                    <dl class="row">
                        <dt class="col-sm-3">Category :</dt>
                        <dd class="col-sm-9">{{ $product->category->cat_name }}</dd>
                        <dt class="col-sm-3">Sub-Category :</dt>
                        <dd class="col-sm-9">{{ isset($product->subCategory->sub_name) ? $product->subCategory->sub_name : '' }}</dd>
                        <dt class="col-sm-3">Price :</dt>
                        <dd class="col-sm-9">{{ isset($product->productPrice) ? $product->productPrice->price : ' '}}</dd>
                        <dt class="col-sm-3">Discount:</dt>
                        <dd class="col-sm-9">{{ ($product->productPrice) ? $product->productPrice->discount : 'No Discount'}}</dd>
                        <dt class="col-sm-9">SKU :</dt>
                        <dd class="col-sm-9">{{ $product->sku }}</dd>
                        <dt class="col-sm-9">Product Show On :</dt>
                        <dd class="col-sm-9">{{ $product->banner == 1 ? 'Banner.' : '' }}</dd>
                        <dt class="col-sm-3"></dt>
                        <dd class="col-sm-9">{{ $product->featured == 1 ? 'Featured.' : '' }}</dd>
                        <dt class="col-sm-3"></dt>
                        <dd class="col-sm-9">{{ $product->trending == 1 ? 'Trending.' : '' }}</dd>
                        <dt class="col-sm-3"></dt>
                        <dd class="col-sm-9">{{ $product->deals_of_the_day == 1 ? 'Deals of the day.' : '' }}</dd>
                    </dl>
                </div>
            </div>
        </div>
        <hr/>
        <div class="card-body">
            <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class='bx bx-comment-detail font-18 me-1'></i>
                            </div>
                            <div class="tab-title"> Product Specification</div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class='bx bx-bookmark-alt font-18 me-1'></i>
                            </div>
                            <div class="tab-title">Description</div>
                        </div>
                    </a>
                </li>
                {{-- <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class='bx bx-star font-18 me-1'></i>
                            </div>
                            <div class="tab-title">Reviews & Comments</div>
                        </div>
                    </a>
                </li> --}}
            </ul>
            <div class="tab-content pt-3">
                <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                    {!! $product->specification !!}
                </div>
                <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                    <p>{{ $product->description }}</p>
                </div>
                {{-- <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                </div> --}}
            </div>
        </div>

    </div>
@endsection
