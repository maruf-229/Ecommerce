<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/' , [PagesController::class,'index'])->name('frontend.home');
Route::get('/categories', [PagesController::class ,'category'])->name('frontend.category');
Route::get('/products', [PagesController::class,'product'])->name('frontend.category.product');



Route::group(['prefix'=>'admin', 'as' => 'admin.', 'middleware' => ['auth']], function (){
    Route::get('/dashboard', [DashboardController::class, 'getDashboardPage'])->name('dashboard');
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class,'index'])->name('backend.category');
        Route::get('/create', [CategoryController::class, 'create'])->name('backend.category.create');
        Route::get('/edit/{id}', [CategoryController::class,'edit'])->name('backend.category.edit');
        Route::post('/store', [CategoryController::class, 'store'])->name('backend.category.store');
        Route::post('/edit/{id}', [CategoryController::class,'update'])->name('backend.category.update');
        Route::post('/delete/{id}', [CategoryController::class,'delete'])->name('backend.categories.delete');
    });
    Route::resource('product', ProductController::class);
});


require __DIR__.'/auth.php';
