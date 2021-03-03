<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ContactInfoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|categories
*/

Route::get('/' , [PagesController::class,'index'])->name('frontend.home');
Route::get('/categories', [PagesController::class ,'category'])->name('frontend.category');
Route::get('/products', [PagesController::class,'product'])->name('frontend.category.product');

Route::get('/category1', [\App\Http\Controllers\Category1Controller::class,'index'])->name('category1.index');
Route::post('/store',[\App\Http\Controllers\Category1Controller::class,'store'])->name('category1.store');



Route::group(['prefix'=>'admin', 'as' => 'admin.', 'middleware' => ['auth']], function (){
    Route::get('/dashboard', [DashboardController::class, 'getDashboardPage'])->name('dashboard');

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class,'index'])->name('backend.category');
        Route::get('/create', [CategoryController::class, 'create'])->name('backend.category.create');
        Route::get('/edit/{id}', [CategoryController::class,'edit'])->name('backend.category.edit');
        Route::post('/edit/{id}', [CategoryController::class,'update'])->name('backend.category.update');
        Route::post('/store', [CategoryController::class, 'store'])->name('backend.category.store');
        Route::post('/delete/{id}', [CategoryController::class,'delete'])->name('backend.categories.delete');
    });
    Route::resource('product', ProductController::class);
    Route::get('/search', [ProductController::class,'search'])->name('search');


    Route::group(['prefix' => 'banner'], function () {
        Route::get('/', [BannerController::class,'index'])->name('backend.banner');
        Route::get('/create', [BannerController::class, 'create'])->name('backend.banner.create');
        Route::get('/edit/{id}', [BannerController::class,'edit'])->name('backend.banner.edit');
        Route::post('/store', [BannerController::class, 'store'])->name('backend.banner.store');
        Route::post('/edit/{id}', [BannerController::class,'update'])->name('backend.banner.update');
        Route::post('/delete/{id}', [BannerController::class,'delete'])->name('backend.banners.delete');

    });

    Route::group(['prefix' => 'logo'], function () {
        Route::get('/', [LogoController::class,'index'])->name('backend.logo');
        Route::get('/edit/{id}', [LogoController::class,'edit'])->name('backend.logo.edit');
        Route::post('/store', [LogoController::class, 'store'])->name('backend.logo.store');
        Route::post('/edit/{id}', [LogoController::class,'update'])->name('backend.logo.update');
    });

    Route::group(['prefix' => 'contact_info'], function () {
        Route::get('/', [ContactInfoController::class,'index'])->name('backend.contact_info');
        Route::get('/edit/{id}', [ContactInfoController::class,'edit'])->name('backend.contact_info.edit');
        Route::post('/store', [ContactInfoController::class, 'store'])->name('backend.contact_info.store');
        Route::post('/edit/{id}', [ContactInfoController::class,'update'])->name('backend.contact_info.update');
    });
});


require __DIR__.'/auth.php';
