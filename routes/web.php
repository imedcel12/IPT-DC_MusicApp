<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MusicController;

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


Route::get('/', function(){
    return view('auth.login');
});

Route::get('/log', [AuthController::class, 'loginForm'])->name('login');
Route::post('/log', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('/dashboard');
})->middleware('auth');
Route::group(['middleware'=>'auth'], function(){
Route::get('/index', [MusicController::class, 'index']);
Route::get('/edit/{mus}', [MusicController::class, 'edit']);
Route::get('/delete/{mus}', [MusicController::class, 'destroy']);
});

