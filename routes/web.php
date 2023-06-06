<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\CuponController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\frontend\CommentController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\HomePageController;
use App\Http\Controllers\backend\RecycleBinController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\backend\AdminProfileController;
use App\Http\Controllers\frontend\ProductsListsController;
use Illuminate\Support\Facades\Artisan;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// backend controller start
// dashboard controller
Route::group(['middleware' => ['auth', 'role:admin|manager|editor|seller']], function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'create')->name('dashboard');
    });

    // category controller
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/create/category', 'create')->name('create.category');
        Route::post('/store/category', 'store')->name('store.category');
        Route::get('/all/category', 'all')->name('all.category');
        Route::get('/edit/category/{id}', 'edit')->name('edit.category');
        Route::post('/update/category/{id}', 'update')->name('update.category');
        Route::post('/delete/category/{id}', 'delete')->name('delete.category');
    });

    // sub category controller
    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/create/sub-category', 'create')->name('create.subCategory');
        Route::post('/store/sub-category', 'store')->name('store.subCategory');
        Route::get('/all/subCategory', 'all')->name('all.subCategory');
        Route::get('/edit/subCategory/{id}', 'edit')->name('edit.subCategory');
        Route::post('/update/subCategory/{id}', 'update')->name('update.subCategory');
        Route::post('/delete/subCategory/{id}', 'delete')->name('delete.subCategory');
    });

    //product route
    Route::controller(ProductController::class)->group(function () {
        Route::get('/create/product', 'create')->name('create.product');
        Route::post('/store/product', 'store')->name('store.product');
        Route::get('/all/products', 'all')->name('all.Products');
        Route::get('edit/products/{id}', 'edit')->name('edit.product');
        Route::post('update/product/{id}', 'update')->name('update.product');
        Route::get('viewSingle/product/{id}', 'viewSingle')->name('viewSingle.product');
        Route::post('delete/product/{id}', 'delete')->name('delete.product');

        // jQuery ajax product table

        Route::get('/category/{id}', 'category')->name('category');

        // gallery image

        Route::post('/gallery-image/{id}', 'galleryImage')->name('gallery.image');
        Route::post('/delete-gallery-image/{id}', 'deleteGalleryImage')->name('delete.image');

        // print pdf
        Route::get('/show-product-pdf', 'showPdf')->name('show.pdf');

        Route::get('prdouct/export/', 'export')->name('export.execl');
    });

    Route::controller(RecycleBinController::class)->group(function () {
        Route::get('/all/restore/product/', 'all')->name('all.restore');
        Route::get('/restore/product/{id}', 'restoreProduct')->name('restore.product');
        Route::post('/permanent/delete/product/{id}', 'deleteProduct')->name('permanent.delete.product');
    });

    Route::controller(CuponController::class)->group(function () {
      
        // All Cupon
        Route::get('/all/product/cupon', 'allCupon')->name('all.product.cupon');
        Route::get('/create/all/cupon', 'createAllCupon')->name('create.all.cupon');
        Route::post('/store/all/cupon', 'storeAllCupon')->name('store.all.cupon');
        Route::get('/edit/all/cupon/{id}', 'editAllCupon')->name('edit.all.cupon');
        Route::post('/update/all/cupon/{id}', 'updateAllCupon')->name('store.update.cupon');
        Route::post('/delete/all/cupon/{id}', 'deleteAllCupon')->name('delete.all.cupon');
    });
});

Route::controller(AdminProfileController::class)
    ->group(function () {
        // update profile
        Route::get('/create/profile', 'create')->name('create.profile');
        Route::post('/update/profile/{id}', 'update')->name('update.profile');

        // update password
        Route::get('/edit/password/', 'editPassword')->name('edit.password');
        Route::put('/update/password/{id}', 'updatePassword')->name('update.password');
    })
    ->middleware(['auth', 'verified']);
// profile controller end

// backend controller end

// google login end
Route::get('/google/login', [ProfileController::class, 'login'])->name('google.login');
Route::get('/google/redriect', [ProfileController::class, 'redriect'])->name('google.redriect');
// google login end

// frontend all controller start
// HomePage Controller Start
Route::controller(HomePageController::class)->group(function () {
    // home page setup
    Route::get('/', 'create')->name('home.create');
    // product details page setup
    Route::get('/product/details/{slug?}', 'createProductDetailsPage')->name('product.details.create');
    // search product
    Route::post('/search-product', 'search')->name('search-product');
    // mega menu
    // shop grid
    Route::get('/shop/grid', 'createShopGrid')->name('shop.grid.create');
    // shop list
    Route::get('/shop/list', 'createShopList')->name('shop.list.create');
    // shop left list
    Route::get('/shop/left/list', 'createShopLeftList')->name('shop.left.list.create');
    // shop right list
    Route::get('/shop/right/list', 'createShopRightList')->name('shop.right.list.create');
    // shop product details left side
    Route::get('/shop/details/left', 'createShopDetailsLeft')->name('shop.left.details.create');
    // shop product details right side
    Route::get('/shop/details/right', 'createShopDetailsRight')->name('shop.right.details.create');
    // store listing
    Route::get('/store/listing', 'createShopStoreListing')->name('store.listing.create');
    // single store listing
    Route::get('/store/single', 'createSingleShopStore')->name('store.single.create');
    // account page
    Route::get('/account/page', 'createAccountPage')->name('create.account');
    // profile page
    Route::get('/profile/page', 'createProfilePage')->name('profile.create');
    // password page
    Route::get('/password/page', 'createPasswordPage')->name('password.create');
    // odrer page
    Route::get('/odrer/page', 'createOdrerPage')->name('odrer.create');
    // address page
    Route::get('/address/page', 'createAddressPage')->name('address.create');
    // wisih list page
    Route::get('/wisih/page', 'createWisihPage')->name('wisih.create');
    // vendor page
    Route::get('/vendor/page', 'createVendorPage')->name('vendor.create');
    // cart page
    Route::get('/cart/page', 'createCartPage')->name('cart.create');
    // check out page
    Route::get('/check-out/page', 'createCheckOutPage')->name('check.out.create');
    //error 400 page
    Route::get('/error/400/page', 'createError400Page')->name('error.400.create');
    //error 500 page
    Route::get('/error/500/page', 'createError500Page')->name('error.500.create');

    // ajax
    Route::get('/modal/product','modalProductId')->name('modal.product.id');

    Route::get('user/change/password','userChangePassword')->name('user.change.password');
    Route::put('user/update/password/{id}','userUpdatePassword')->name('user.password.update');
});
// HomePage Controller End

//comment al controller
Route::controller(CommentController::class)->group(function () {
    Route::post('/create/comment/{id}', 'createComment')->name('comment.create');
    Route::post('/create/comment/reply/{id}', 'createReplyComment')->name('comment.reply.create');
});

// Products lists
Route::controller(ProductsListsController::class)->group(function () {
    Route::get('/category-wise-product/{slug}', 'catProduct')->name('category-wise-product');
    Route::get('/subCategory-wise-product/{slug}', 'subProduct')->name('sub-wise-product-show');
    Route::post('/search-product-data', 'searchProduct')->name('search-product-data');
});

//Cart
Route::controller(CartController::class)->group(function(){
    Route::get('/add-to-cart','addToCart')->name('addToCart');
    Route::get('/view/cart/{id}','viewCart')->name('view.cart');
    Route::get('/delete/cart/{id}','deleteCart')->name('delete.cart');
    Route::post('/add-to-cart-product/{id}','addToCartProduct')->name('addToCartProduct');
    Route::post('/update-cart-product/{id}','updataCart')->name('update.cart');
    Route::post('/add/to/cart/product','cartProduct')->name('cartProduct');

    // wish lists
    Route::get('add-wish-lists','addToWishts')->name('addToWishts');
    Route::get('view-wish-lists/{id}','viewToWishts')->name('viewToWishts');

    // cupon
    Route::post('cupon/offer','offer')->name('cupon.offer');

    // checkout
    Route::post('/checkout','checkout')->name('checkout')->middleware(['auth']);
    //stripe payement
        Route::post('/payment-with-stripe','stripe')->name('paymentWithStripe');
});

// fortend all controller end

require __DIR__ . '/auth.php';
require __DIR__ . '/frontend.php';
