<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminHomeController;


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




Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/gallery',[GalleryController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/admin/index',[AdminHomeController::class,'index']);













// Route::get('/', function () {
//     return view('frontend.index');
// });

// Route::get('/gallery', function () {
//     return view('frontend.gallery');
// });


// Route::get('/about', function () {
//     return view('frontend.about');
// });

// Route::get('/contact', function () {
//     return view('frontend.contact');
// });

// Route::get('/cause', function () {
//     return view('frontend.causes');
// });