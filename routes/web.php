<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;

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

Route::get('/', function () {
    return view('MobileReviews/index');
});
Route::get('/index', function () {
    return view('MobileReviews/index');
});
Route::get('/description', function () {
    return view('MobileReviews/description');
});

Route::get('/about', function () {
    return view('MobileReviews/about');
});

Route::get('/contact', function () {
    return view('MobileReviews/contact');
});

Auth::routes();

Route::get('/home', [blogController::class, 'index']);
Route::get('/getCategory', [blogController::class, 'getCat']);
