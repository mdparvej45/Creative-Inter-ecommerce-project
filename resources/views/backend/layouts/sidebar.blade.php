{{-- sidebar start --}}

<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('frontend/assets/img/logo.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Nookx</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
            <ul>
                <li> <a href="{{ route('create.category') }}"><i class="bx bx-right-arrow-alt"></i>Add</a>
                </li>
                <li> <a href="{{ route('all.category') }}"><i class="bx bx-right-arrow-alt"></i>All Category </a>
                </li>
                {{-- <li> <a href="{{ route('create.subCategory') }}"><i class="bx bx-right-arrow-alt"></i>Add Sub Category</a> --}}
                </li>
                <li> <a href="{{ route('all.subCategory') }}"><i class="bx bx-right-arrow-alt"></i>All Sub-Category</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Product Managment</div>
            </a>
            <ul>
                <li> <a href="{{ route('create.product') }}"><i class="bx bx-right-arrow-alt"></i>Add Product</a>
                </li>
                <li> <a href="{{ route('all.Products') }}"><i class="bx bx-right-arrow-alt"></i>All Products</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Recycle Bin</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.restore') }}"><i class="bx bx-right-arrow-alt"></i>Product Recycle</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Cupon</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.product.cupon') }}"><i class="bx bx-right-arrow-alt"></i>Cupon</a>
                </li>

            </ul>
        </li>

    </ul>
    <!--end navigation-->
</div>

{{-- sidebar end --}}
