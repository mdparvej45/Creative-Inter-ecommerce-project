@extends('backend.layouts.app')

@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Sub Category</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    {{-- form start --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    @error('SubCategory_Name')
                        <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                                <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0 text-white">Error</h6>
                                    <div class="text-white">{{ $message }}</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                    <form class="card-body" action="{{ route('update.subCategory', $subCategory->id) }}" method="POST">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Select Category</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <select name="category_id" class="form-control">
                                    <option label="Choose One"></option>
                                    @forelse ($category as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == $subCategory->category_id ? 'selected' : '' }}>{{ $item->cat_name }}</option>
                                    @empty
                                        <option selected>No Category</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Edit Sub Category</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" id="subName" name="SubCategory_Name"  value="{{ $subCategory->sub_name }}"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Edit Sub Category Slug</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" id="slug" name="SubCategory_Slug"  value="{{ $subCategory->sub_slug }}"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <button class="btn btn-primary px-4">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- form end --}}
    @push('script')
        <script>
            var catName = $('#subName');
            catName.on('keyup', function() {
                var value = $(this).val();
                var convertValue = value.split(' ').join('-').toLowerCase();
                $('#slug').val(convertValue);
            })
        </script>
    @endpush
@endsection
