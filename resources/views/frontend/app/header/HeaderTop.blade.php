<div class="header-top d-none d-lg-block">
    <div class="container">
        <div class="row justify-content-between align-items-center">

            <div class="col-xl-6 col-lg-6">
                <div class="header-details">
                    <ul>
                        <li>
                            <h6>Nookx -<span>Your One-Stop Online Shop</span></h6>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="header-left">
                    <ul>
                        <li>
                            @if (Auth::check())
                            <a class="popup-toggle"><img style="height: 30px; width:30px;" class="rounded-circle" src="{{ Auth::user()->image == null ? 'https://api.dicebear.com/5.x/initials/svg?seed=Felix' : Auth::user()->image }}
                                " alt="Profile Image"></a></li>
                            @else
                                <a class="popup-toggle"><i class="feather-user"></i>Login / Register</a></li>
                            @endif
                        <li>
                            <a class="language-dropdown-active" href="#"><img
                                    src="{{ asset('frontend/assets/img/icons/flag-icon.svg') }}" alt=""
                                    class="me-2">English <i class="fi-rs-angle-small-down"></i></a>
                            <ul class="language-dropdown">
                                <li>
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/flags/flag-fr.png') }}"
                                            alt="">Français</a>
                                </li>
                                <li>
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/flags/flag-dt.png') }}"
                                            alt="">Deutsch</a>
                                </li>
                                <li>
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/flags/flag-ru.png') }}"
                                            alt="">Pусский</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="language-dropdown-active" href="#">USD <i
                                    class="fi-rs-angle-small-down"></i></a>
                            <ul class="language-dropdown">
                                <li>
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/flags/flag-fr.png') }}"
                                            alt="">INR</a>
                                </li>
                                <li>
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/flags/flag-dt.png') }}"
                                            alt="">MBP</a>
                                </li>
                                <li>
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/flags/flag-ru.png') }}"
                                            alt="">EU</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>