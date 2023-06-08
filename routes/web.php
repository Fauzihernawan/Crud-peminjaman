<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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
    return view('hello.login.index');
});

Route::resource('/peminjaman', LaptopController::class);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authanticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);