@php
    $user = App\Models\User::find(1);
    if (Auth::user() != null) {
        $userData = App\Models\User::find(Auth::user()->id);
    }
@endphp
{{-- footer start --}}
<footer class="footer">
    <section class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp"
                        data-wow-delay="0">
                        <div class="logo mb-30">
                            <a href="index.html" class="mb-15"><img src="{{ asset('frontend/assets/img/logo.png') }}"
                                    alt="logo" /></a>
                            <p>Shop with us for a seamless online experience. Find quality products at unbeatable
                                prices. Contact us for any assistance.</p>
                            <a><img src="{{ asset('frontend/assets/img/payment.png') }}" alt="logo" /></a>
                        </div>
                    </div>
                </div>
                <div class="footer-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <h4 class="footer-title">Contact Info</h4>
                    <ul class="contact-info">
                        <li>
                            <p><i
                                    class="fas fa-phone-alt"></i>{{ $user->phone != null ? $user->phone : 'No Phone Number' }}
                            </p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope"></i>{{ $user->email }}</p>
                        </li>
                        <li>
                            <p><i
                                    class="fas fa-map-marker-alt"></i>{{ $user->address != null ? $user->address : 'No Address' }}
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="footer-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        @auth
                            <li><a href="{{ route('view.cart', $userData->id) }}">My Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        @endauth
                        <li><a href="javascript:;">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-bottom wow animate__animated animate__fadeInUp" data-wow-delay="0">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-12 col-md-12">
                    <p class="font-sm mb-0">Copyright © 2022 Bestpharmacy All rights reserved.</p>
                </div>

            </div>
        </div>
    </div>
</footer>

{{-- footer end --}}
