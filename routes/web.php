<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostDetailsController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::prefix('blog')->group(function(){
    Route::get('/',[BlogController::class,'blog'])->name('blog');
});
Route::prefix('postdetail')->group(function(){
    Route::get('/',[PostDetailsController::class,'postdetail'])->name('post_detail');
});
Route::get('/aboutus',[AboutController::class,'about'])->name('about');
Route::get('/contactus',[ContactController::class,'contact'])->name('contact');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');