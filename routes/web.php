<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RateController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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
    return view('index', ['products' => Product::latest()->take(6)->get()]);
})->name('home');

Route::get('products', [ProductController::class, 'index']);
Route::get('products/create', [ProductController::class, 'create']);
Route::get('products/{slug}', [ProductController::class, 'show']);
Route::post('products', [ProductController::class, 'store']);

Route::post('reviews', [ReviewController::class, 'store']);
Route::patch('reviews/{review}', [ReviewController::class, 'update']);
Route::delete('reviews/{review}', [ReviewController::class, 'destroy']);

Route::get('about', fn () => view('about'));

Route::get('contact', [ContactController::class, 'index']);
Route::post('contact', [ContactController::class, 'store']);

Route::post('rate/{id}', [RateController::class, 'store']);

require __DIR__ . '/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
