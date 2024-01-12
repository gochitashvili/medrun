<?php

use App\Livewire\Pages\Category;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\SellerProfile;
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

Route::get('/', Home::class);
Route::get('/category', Category::class)->name('category');
Route::get('/seller', SellerProfile::class)->name('seller');
