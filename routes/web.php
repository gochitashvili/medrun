<?php

use App\Livewire\Pages\Articles;
use App\Livewire\Pages\Article;
use App\Livewire\Pages\Category;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\ProductDetails;
use App\Livewire\Pages\SellerProfile;
use App\Livewire\Pages\ServiceDetails;
use App\Livewire\Pages\ServiceProviders;
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
Route::get('/articles', Articles::class)->name('articles');
Route::get('/article', Article::class)->name('article');
Route::get('/seller', SellerProfile::class)->name('seller');
Route::get('/service-details', ServiceDetails::class)->name('service-details');
Route::get('/service-providers', ServiceProviders::class)->name('service-providers');
Route::get('/product-details', ProductDetails::class)->name('product-details');
