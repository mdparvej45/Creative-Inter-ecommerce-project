{{-- register start --}}

<div class="toggle-sidebar1">
    <div class="sidebar-header">
        <a href="#" class="sidebar-close"><i class="feather-x-circle"></i></a>
    </div>
    <div class="sidebar-layout">
        <div class="sidebar-body">
            <div class="side-logo mb-40">
                <a href="index.html"><img src="{{ asset('frontend/assets/img/logo.png') }}"
                        alt="logo" /></a>
            </div>
            <div class="login-group register-login">
                <h5>Register</h5>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Full Name">
                        @error('name')
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
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email address">
                        @error('email')
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
                    </div>
                    <div class="form-group">
                        <div class="pass-group">
                            <input type="password" name="password" class="form-control pass-input" placeholder=" password">
                            <span class="feather-eye toggle-password"></span>
                            @error('password')
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
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="pass-group">
                            <input type="password" name="password_confirmation" class="form-control pass-one-input"
                                placeholder="Confirm Password">
                            <span class="feather-eye conform-password"></span>
                            @error('password_confirmation')
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
                        </div>
                    </div>
                    <div class="register-policy">
                        <p>Your personal data will be used to support your experience throughout this website, to
                            manage access to your account, and for other purposes described in our privacy policy.
                        </p>
                    </div>
                    <div class="remember-me form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> I agree to terms
                            & Policy.
                        </label>
                    </div>
                    <div class="d-grid login-pharmacy mb-25">
                        <button class="btn btn-primary btn-start" >Sign Up</button>
                    </div>
                    <div class="create-account">
                        <p>Have an account already? <a href="javascript:;" class="popup-toggle">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- register end --}}