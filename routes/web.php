<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\FrontEnd\BlogController;
use App\Http\Controllers\FrontEnd\BlogSectionsController;
use App\Http\Controllers\FrontEnd\SiteMapController;
use App\Models\Blog;
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

Route::view('', 'welcome')->name('home');
Route::view('terms', 'terms');
Route::view('about', 'about');
Route::view('privacy', 'privacy');

Route::prefix('provider')->group(function () {
    Route::view('terms', 'provider.terms');
    Route::view('about', 'provider.about');
    Route::view('privacy', 'provider.privacy');
});

Route::prefix('blog-sections')->as('sections.')->controller(BlogSectionsController::class)->group(function () {
    Route::get('' , 'index')->name('index');
    Route::get('{section:slug}' , 'show')->name('show');
});

Route::get('read/{blog:slug}' , BlogController::class)->name('show_a_blog');

Route::get('sitemap.xml' , SiteMapController::class);

Route::view('login' , 'auth.login')->name('login');
Route::post('login' , AuthController::class);