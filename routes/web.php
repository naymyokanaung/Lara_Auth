<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoustmersController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Finder\Iterator\CustomFilterIterator;

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

Route::group(
    ['namespace' => 'App\Http\Controllers'],
    function () {
        Route::get('/', 'HomeController@home');
        Route::get('/register', 'AuthController@register');
        Route::post('/register', 'AuthController@registration');
        Route::get('/logout', 'AuthController@logout');
        Route::get('/login', 'AuthController@login');
        Route::post('/user-login', 'AuthController@login_dd');
        Route::resource('/product', ProductController::class);
    }
);
