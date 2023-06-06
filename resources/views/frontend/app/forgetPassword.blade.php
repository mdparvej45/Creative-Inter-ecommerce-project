{{-- forget password --}}

<div class="toggle-sidebar2">
    <div class="sidebar-header">
        <a href="#" class="sidebar-close"><i class="feather-x-circle"></i></a>
    </div>
    <div class="sidebar-layout">
        <div class="sidebar-body">
            <div class="side-logo mb-40">
                <a href="index.html"><img src="{{ asset('frontend/assets/img/logo.png') }}"
                        alt="logo" /></a>
            </div>
            <div class="login-group login-forget">
                <h5>Forgot Your Password?</h5>
                <p>Enter the email associated with your account and we’ll send an email with instructions to reset
                    your password</p>
                <form action="index.html">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter your email address">
                    </div>
                    <div class="d-grid login-pharmacy mb-25">
                        <button class="btn btn-primary btn-start" type="submit">Reset Password</button>
                    </div>
                    <div class="forgot-pass mb-0 ">
                        <a class="forgot-link" href="index.html">Back to Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- forget password --}}