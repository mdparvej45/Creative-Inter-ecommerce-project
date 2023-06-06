@extends('backend.layouts.app')

@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Create Cupon</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    {{-- form start --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <p style="padding: 1rem; background-color:#0d6efd;color:white;">Create Cupon</p>
                    <form class="card-body" action="{{ route('store.update.cupon',$cupon->id) }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Cupon Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" id="slug" name="Cupon_Name"
                                    placeholder="Cupon Name" required="" value="{{ $cupon->name }}"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Type</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <select name="type" id="" class="form-control" required>
                                    <option selected disabled>Selected type</option>
                                    <option value="Discount">Discount</option>
                                    <option value="Fixed">Fixed</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Cupon Discount</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="number" class="form-control" id="slug" name="Cupon_Discount"
                                    placeholder="Cupon Discount 20%" required="" value="{{ $cupon->discount }}"/>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Start Date</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="date" class="form-control" name="Start_Date" required="" value="{{ $cupon->start_date }}"/>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">End Date</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="date" class="form-control" name="End_Date" required=""/ value="{{ $cupon->end_date }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <button class="btn btn-primary px-4">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- form end --}}

        </div>
    </div>
@endsection
