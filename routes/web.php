<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', 'UserController@register');
Route::get('/user', 'UserController@show_user');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, 'index'])->middleware('admin')->name('admin.index');
Route::post('/add/category', [AdminController::class, 'store_category'])->middleware('admin')->name('admin.store_category');
Route::post('/add/item', [AdminController::class, 'store_item'])->middleware('admin')->name('admin.store_item');
Route::post('/add/order', [AdminController::class, 'store_order'])->middleware('admin')->name('admin.store_order');
Route::post('/add/customer', [AdminController::class, 'store_customer'])->middleware('admin')->name('admin.store_customer');
