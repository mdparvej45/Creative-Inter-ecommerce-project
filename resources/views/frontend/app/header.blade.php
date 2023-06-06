{{-- header start --}}


<header class="header">


    <div class="mobile-view">
        <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
    </div>


    {{-- top header start --}}
    @include('frontend.app.header.HeaderTop')
    {{-- top header end --}}


    {{-- header middle start --}}
    @include('frontend.app.header.headerMiddle')
    {{-- header middle end --}}


    {{-- header bottom --}}
    @include('frontend.app.header.headerBottom')
    {{-- header bottom --}}


</header>
    

    {{-- mobile menu start --}}
    @include('frontend.app.header.mobileMenu')
    {{-- mobile menu end --}}


{{-- header end --}}
