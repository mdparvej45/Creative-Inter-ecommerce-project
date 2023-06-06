@extends('backend.layouts.app')


@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @forelse ($products as $key=>$product)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td>
                                            <img src="{{ $product->image_url }}" alt="{{ $product->image }}" style="width:6rem;height:4rem;">
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-success btn-sm" href="{{ route('restore.product', $product->id) }}">Restore</a>
                                        </td>

                                        <td>

                                            {{-- <a class="btn btn-outline-danger btn-sm" href="{{ route('delete.product', $product) }}">Delete</a> --}}
                                            <button class="btn btn-outline-danger btn-sm button">Delete</button>
                                          <form action="{{ route('permanent.delete.product', $product->id) }}" method="post">
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No Category</td>
                                    </tr>
                                    @endforelse

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            var button = $('.button')
            button.on('click', function() {
                var form = $(this).next('form');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )

                        form.submit()
                    }
                })
            })
        </script>
    @endpush
@endsection
