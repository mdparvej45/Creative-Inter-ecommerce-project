{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!-- loader-->
    <link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('backend/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet">
    <title>NooKx Ecommerce Website</title>
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper mt-5" style="margin-top: 100px">
        <div class="authentication-reset-password d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-5 border-end">
                                <div class="card-body">
                                    <div class="p-5">
                                        <form method="POST" action="{{ route('password.store') }}">
                                            @csrf
                                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                            <div class="text-start">
                                                <img src="{{ asset('frontend/assets/img/logo.png') }}"
                                                    width="180" alt="">
                                            </div>
                                            <h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
                                            <p class="text-muted">We received your reset password request. Please enter
                                                your new password!</p>
                                            @error('email')
                                                <div
                                                    class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="font-35 text-white"><i
                                                                class="bx bxs-message-square-x"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 text-white">Error</h6>
                                                            <div class="text-white">{{ $message }}</div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @enderror
                                            @error('password')
                                                <div
                                                    class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="font-35 text-white"><i
                                                                class="bx bxs-message-square-x"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 text-white">Error</h6>
                                                            <div class="text-white">{{ $message }}</div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @enderror
                                            @error('password_confirmation')
                                                <div
                                                    class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="font-35 text-white"><i
                                                                class="bx bxs-message-square-x"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 text-white">Error</h6>
                                                            <div class="text-white">{{ $message }}</div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @enderror
                                            <div class="mb-3 mt-5">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Enter Email"
                                                    name="email" value="{{ $request->email }}" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">New Password</label>
                                                <input type="password" class="form-control"
                                                    placeholder="Enter new password" name="password" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Confirm password" name="password_confirmation" />
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-primary">Change Password</button>
                                                <a href="{{ route('login') }}" class="btn btn-light"><i
                                                        class='bx bx-arrow-back mr-1'></i>Back to Login</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <img src="{{ asset('backend/assets/images/login-images/forgot-password-frent-img.jpg') }}"
                                    class="card-img login-img h-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
</body>

</html>
