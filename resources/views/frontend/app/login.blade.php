{{-- login start --}}

<div class="toggle-sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-close"><i class="feather-x-circle"></i></a>
    </div>
    <div class="sidebar-layout">
        <div class="sidebar-body">
            <div class="side-logo mb-40">
                <a href="index.html"><img src="{{ asset('frontend/assets/img/logo.png') }}"
                        alt="logo" /></a>
            </div>
            <div class="login-group">
                <h5>Login</h5>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
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
                            <input type="password" name="password" class="form-control pass-input"
                                placeholder="Enter your password">
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
                    <div class="forgot-pass">
                        <a class="forgot-link popup-toggle2" href="javascript:;">Forgot Password ?</a>
                    </div>
                    <div class="d-grid login-pharmacy mb-25">
                        <button class="btn btn-primary btn-start">Sign In</button>
                    </div>
                    <div class="d-grid login-pharmacy mb-25">
                            <a href="{{ route('google.login') }}" class="btn btn-danger btn-start" style="background: #dc3545!important;">Sing In with Google</a>
                    </div>
                    <div class="create-account create-sign mb-5">
                        <p>Don't have an account? <a href="javascript:;" class="popup-toggle1 mb-3">Create one</a>
                        </p>
                    </div>
                </form>
               

            </div>
            <div class="mt-5 d-block" style="margin:20px 0 0 0">
                <p>role:admin</p>
                <p>email: admin@gmail.com</p>
                <p>password: 12345678</p>
            </div>

            <div class="mt-5 d-block" style="margin:20px 0 0 0">
                <p>role:buyer</p>
                <p>email: buyer@gmail.com</p>
                <p>password: 12345678</p>
            </div>
           
        </div>
    </div>
    
</div>



{{-- login end --}}
