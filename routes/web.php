<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});
Route::get('/home', function () {
    return view('index');
});
Route::prefix('home')->group(function () {
    Route::get('/dashboard-2', function () {
        return view('dashboard-2.index');
    });
    Route::get('/dashboard-3', function () {
        return view('dashboard-3.index');
    });
});

Route::get('/auth/login', [LoginController::class, 'index']);
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/auth/register', [RegisterController::class, 'index']);
Route::post('/auth/register', [RegisterController::class, 'store']);

// Route::prefix('auth')->group(function () {
//     Route::get('/login', function () {
//         return view('front-pages.login.index');
//     });
//     Route::get('/register', function () {
//         return view('front-pages.register.index');
//     });
// });
Route::prefix('tables')->group(function () {
    Route::get('/static-tables', function () {
        return view('tables.static-tables.index');
    });
    Route::get('/gridjs', function () {
        return view('tables.gridjs.index');
    });
    Route::get('/tabulator', function () {
        return view('tables.tabulator.index');
    });
});

Route::get('/data-user', [UserController::class, 'index']);