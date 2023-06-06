<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
//FrontendController start
Route::prefix('/users')->name('users.')->group(function(){
    //user data store route
    Route::put('/update/{id:id}', [FrontendController::class, 'updateProfile'])->name('update');
});
//FrontendController end