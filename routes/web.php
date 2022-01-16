<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
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

Route::group(['namespace' => 'Login', 'prefix' => 'login', 'as' => 'login::'], function() {
    Route::get('/',[LoginController::class,'index'])->name('index');
    Route::post('/',[LoginController::class,'login'])->name('login');
});

Route::group(['middleware' => ['admin']],function (){
    Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin::'], function() {
        Route::get('/logout',[LoginController::class,'logout'])->name('logout');

        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

        Route::group(['namespace' => 'Users', 'prefix' => 'users', 'as' => 'users::'], function() {
            Route::get('/',[UserController::class,'index'])->name('index');
            Route::get('/create',[UserController::class,'create'])->name('create');
            Route::post('/create',[UserController::class,'store'])->name('store');
            Route::get('/edit/{user}',[UserController::class,'edit'])->name('edit');
            Route::put('/edit/{user}',[UserController::class,'update'])->name('update');
            Route::delete('/delete/{user}',[UserController::class,'destroy'])->name('destroy');
            Route::get('/{user}',[UserController::class,'view'])->name('view');
        });
    });
});
