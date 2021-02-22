<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard', function () {
    return view('frontend.home');
});


Route::get('/categories', [\App\Http\Controllers\PagesController::class ,'category']);

Route::group(['prefix'=>'admin', 'as' => 'admin.', 'middleware' => ['auth']], function (){
    Route::get('/dashboard', [DashboardController::class, 'getDashboardPage'])->name('dashboard');
    Route::resource('category', CategoryController::class);

});


require __DIR__.'/auth.php';
