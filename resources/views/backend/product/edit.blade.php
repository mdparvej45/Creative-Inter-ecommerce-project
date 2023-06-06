@extends('backend.layouts.app')

@section('content')
    {{-- jquery script start --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- jquery script  end --}}

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    {{-- form start --}}
    <form action="{{ route('update.product', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body p-4">
                <div class="row">
                    <h4 class="card-title col-sm-10">Edit Product</h4>
                    <div class=" col-sm-2">
                        <a class="btn btn-outline-info btn-sm" href="{{ route('all.Products') }}">Back</a>
                        <a class="btn btn-outline-success btn-sm" href="{{ route('viewSingle.product', $product) }}">View</a>
                    </div>
                </div>
                <div class="form-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-2">
                                    <label for="product_name" class="form-label">Product Title<span style="color: red;">*</span></label>
                                    <input type="text" name="product_name" value="{{ $product->title }}"
                                           class="form-control" id="product_name" placeholder="Enter product title">
                                    @error('product_name')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="product_name" class="form-label">Product Slug</label>
                                    <input type="text" name="product_slug" class="form-control" id="product_slug"
                                           placeholder="Enter product slug" value="{{$product->slug_unique}}">
                                    <div class="mb-3">
                                        <label for="specification" class="form-label">Specification<span
                                                style="color: red;">*</span></label>
                                        <textarea class="form-control editor" placeholder="Type product specification"
                                                  name="specification" id="specification"
                                                  rows="3">{{ $product->specification }}</textarea>
                                        @error('specification')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class=" mb-3">
                                        <div class="mt-2 col-sm-12" style=" border-radius:10px;">
                                            <label for="image" class="col-sm-12">Product Image<span
                                                    style="color: red;">*</span>
                                                <div class="text-secondary col-sm-12" style="height: 35rem;">
                                                    <img src="{{ $product->image_url }}" id="show_image"
                                                         style=" width: 100%; height:100%; border-radius: 10px; border:2px dashed rgba(0, 123, 254, 0.525);">
                                                    <div class="col-sm-9 text-secondary" style="display:none;">
                                                        <input type="file" class="form-control" id="image"
                                                               name="product_image"/>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        @error('product_image')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 mt-1">
                                        <div class="row col-sm-12"
                                             style="border-radius:10px; padding: 0px 10px 0px 10px;">
                                            <div class="form-group form-check col-sm-3 mt-1">
                                                <input type="checkbox"
                                                       {{ $product->banner == 1 ? 'checked' : '' }} class="form-check-input"
                                                       name="banner" id="banner">
                                                <label class="form-check-label" for="banner">Banner</label>
                                            </div>
                                            <div class="form-group form-check col-sm-3 mt-1">
                                                <input type="checkbox"
                                                       {{ $product->featured == 1 ? 'checked' : '' }} class="form-check-input"
                                                       name="featured" id="featured">
                                                <label class="form-check-label" for="featured">Featured</label>
                                            </div>
                                            <div class="form-group form-check col-sm-3 mt-1">
                                                <input type="checkbox"
                                                       {{ $product->trending == 1 ? 'checked' : '' }} class="form-check-input"
                                                       name="trending" id="trending">
                                                <label class="form-check-label" for="trending">Trending</label>
                                            </div>
                                            <div class="form-group form-check col-sm-3 mt-1">
                                                <input type="checkbox"
                                                       {{ $product->deals_of_the_day == 1 ? 'checked' : '' }} class="form-check-input"
                                                       name="deals_of_the_day" id="deals_of_the_day">
                                                <label class="form-check-label" for="deals_of_the_day">Deals of </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col lg 8-->
                        <div class="col-lg-4">
                            <div class="border border-3 p-4 rounded">
                                <div class="row g-3">

                                    <div class="col-12">
                                        <label for="category" class="form-label">Category<span
                                                style="color: red;">*</span></label>
                                        <select class="form-select" name="category" id="category">
                                            <option disabled selected>Select one</option>
                                            @foreach ($categories as $category)
                                                <option
                                                    {{ $category->id == $product->category_id ? "selected" : "" }} value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="sub_category" class="form-label">Sub-Category</label>
                                        <select class="form-select" name="sub_category" id="sub_category">
                                            <option disabled selected>Select one</option>
                                            @foreach ($sub_categories as $sub_category)
                                                <option
                                                    {{ $sub_category->id == $product->sub_category_id ? "selected" : "" }} value="{{ $sub_category->id }}">{{ $sub_category->sub_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="discount" class="form-label">Product Purchase Price<span
                                                style="color: red;">*</span></label>
                                        <input type="number" name="Product_Purchase_Price" class="form-control"
                                               placeholder="Enter Product Purchase Price" value="{{ ($product->purchase_price) ? $product->purchase_price : ''}}">
                                        @error('Product_Purchase_Price')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="price" class="form-label">Price<span
                                                style="color: red;">*</span></label>
                                        <input type="number" name="price" class="form-control" id="price"
                                               placeholder="00.00" value="{{ ($product->productPrice != null) ? $product->productPrice->price : ''}}">
                                        @error('price')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="discount" class="form-label">Product discount<span
                                                style="color: red;">*</span></label>
                                        <input type="number" name="discount" class="form-control" id="discount"
                                               placeholder="Enter Product discount"
                                               value="{{ $product->productPrice != null ? $product->productPrice->discount : ''}}">
                                        @error('discount')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="sku_name" class="form-label">SKU<span
                                                style="color: red;">*</span></label>
                                        <input type="text" value="{{ $product->sku }}" name="sku_name"
                                               class="form-control" id="sku_name">
                                        @error('sku_name')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="stock" class="form-label">Stock<span
                                                style="color: red;">*</span></label>
                                        <input type="number" value="{{ $product->stock }}" name="stock"
                                               class="form-control" id="stock" placeholder="00.00">
                                        @error('stock')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="stock" class="form-label">Initial Stock<span
                                                style="color: red;">*</span></label>
                                        <input type="number" name="initial_stock" class="form-control" id="initial_stock"
                                               placeholder="00.00" value="{{$product->intial_stock}}">
                                        @error('initial_stock')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="product_tag" class="form-label">Product Tags<span
                                                style="color: red;">*</span></label>
                                        <input type="text" name="product_tag" class="form-control" id="product_tag"
                                               placeholder="Enter Product Tags" value="{{$product->product_tag}}">
                                        @error('product_tag')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Description<span
                                                style="color: red;">*</span></label>
                                        <textarea class="form-control" name="description" id="description"
                                                  rows="3">{{ $product->description }}</textarea>
                                        @error('description')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Save Product</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </form>
    {{-- form end --}}
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
        @forelse($galleryImage as $image)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('gallery.image',$image->id)}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @error('gallery_image')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label for="image1" class="form-label text-center">Gallery Image
                                    <input type="file" class="form-control" name="gallery_image"/>
                                    <img src="{{$image->image_url}}" class="mt-3 mx-auto"
                                         style="width: 100%; cursor: pointer">
                                </label>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update Image</button>
                                </div>
                            </div>
                        </form>
                        <form action="{{route('delete.image',$image->id)}}" method="post" enctype="multipart/form-data"
                              class="mt-3">
                            @csrf
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-danger">Delete Image</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>

        @empty
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">No Gallery Images</label>
                        </div>
                    </div>
                </div>
            </div>
        @endforelse

    </div>

    @push('script')
        <script>
            ClassicEditor
                .create(document.querySelector('.editor'))
                .catch(error => {
                });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#image').change(function (e) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#show_image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0'])
                })
            })
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#image1').change(function (e) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#show_image1').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0'])
                })
            })
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#image').change(function (e) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#show_image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0'])
                })
            })
        </script>
        <script>
            var catName = $('#catName');
            catName.on('keyup', function () {
                var value = $(this).val();
                var convertValue = value.split(' ').join('-').toLowerCase();
                $('#slug').val(convertValue);
            })
        </script>
    @endpush
@endsection
