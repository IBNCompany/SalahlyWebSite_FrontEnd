<?php

use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\BlogSectionsController;
use App\Http\Controllers\Admin\UsersController;
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
Route::get('',HomeController::class)->name('home');
Route::get('settings' , [SettingsController::class , 'get'])->name('settings');
Route::post('settings' , [SettingsController::class , 'set']);

Route::resource('blog-sections' , BlogSectionsController::class);
Route::resource('blogs' , BlogsController::class);
Route::resource('users' , UsersController::class);
Route::get('users/{id}/toggle' , [UsersController::class , 'toggleSuper'])->name('users.toggle-super');