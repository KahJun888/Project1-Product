<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbcController;
use App\Http\Controllers\BrandmmstController;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

//Route::get('/abc', function () {
//    return view('abc');
//});

Route::get('/abc', [AbcController::class, 'abcFunc']);
Route::resource('brand', BrandmmstController::class);
Route::resource('brand1', BrandmmstController::class);

Route::resource('product', ProductController::class);