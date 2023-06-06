{{-- location start --}}

<div class="toggle-sidebar3">
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
                <h5>Choose your Location</h5>
                <form action="address-book.html">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter Pin code">
                    </div>
                    <div class="d-grid login-pharmacy mb-25">
                        <button class="btn btn-primary btn-start" type="submit">Check Pincode</button>
                    </div>
                    <div class="d-grid view-address ">
                        <button class="btn btn-primary btn-start" type="submit"><img
                                src="{{ asset('frontend/assets/img/icons/address-icon.svg') }}" class="me-1"
                                alt="" />Login to View Addresses</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- location end --}}