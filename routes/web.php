<?php

use App\Http\Controllers\HomeController;
<<<<<<< HEAD
use App\Http\Controllers\UserController;
use App\Http\Controllers\Web\AuthController;
=======
>>>>>>> f0fd4cfbde9a5a741236c84333dcf50f8473af48
use App\Http\Controllers\Web\ProductController;
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

Route::get('/', function () {
    // return response()->json(['message' => 'Hello Worldddd!']);
});
<<<<<<< HEAD
Route::get('/create-user', [UserController::class, 'createUser']);
Route::get('login', [AuthController::class, 'formLogin'])->name('form_login');
Route::post('login', [AuthController::class, 'login'])->name('login');


Route::group(['prefix' => 'products', 'middleware' => 'check_user', 'as' => 'products.'], function () {
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
    Route::put('/{product}', [ProductController::class, 'update'])->name('update');
    Route::get('/{product}', [ProductController::class, 'show'])->name('show');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    
});
=======
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store'); 
Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show'); 
>>>>>>> f0fd4cfbde9a5a741236c84333dcf50f8473af48
