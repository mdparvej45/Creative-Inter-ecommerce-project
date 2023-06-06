 {{-- Head Section start --}}
 @include('frontend.app.head')
 {{-- Head Section End --}}

 <body>

     <!-- Header -->
    @include('frontend.app.header')
     <!-- /Header -->

     <!-- Main -->
     @yield('content')
     <!-- /Main -->

     <!-- Footer -->
    @include('frontend.app.footer')
     <!-- /Footer -->

     <!-- Preloader -->
     @include('frontend.app.preloader')
     <!-- /Preloader -->

     <!-- Quick view -->
     @include('frontend.app.quickView')
     <!-- /Quick view -->

     <!-- Login -->
     @include('frontend.app.login')
     <!-- /Login -->

     <!-- Register -->
     @include('frontend.app.register')
     <!-- /Register -->

     <!-- Forgot Password -->
     @include('frontend.app.forgetPassword')
     <!-- /Forgot Password -->

     <!-- Location -->
     @include('frontend.app.location')
     <!-- /Location -->

   @include('frontend.app.script')
 </body>

 </html>
