<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/tours', [MainController::class, 'tours'])->name('tours');

Route::get('/cars', [MainController::class, 'cars'])->name('cars');

Route::get('/sales', [MainController::class, 'sales'])->name('sales');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/contact_us', [MainController::class, 'contact_us'])->name('contact_us');

Route::get('/tour_order/{id}', [MainController::class, 'tour_order'])->name('tour_order');

Route::get('/car_order/{id}', [MainController::class, 'car_order'])->name('car_order');

Route::post('/contact_us', [MainController::class, 'call_me'])->name('call_me');

Route::get('/db/{id1}/{id2}', [MainController::class, 'db'])->name('db');