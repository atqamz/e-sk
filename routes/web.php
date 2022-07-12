<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;

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
    return redirect('/dashboard');
})->middleware('auth');

Route::get('/signin', [SignInController::class, 'index'])->name('login')->middleware('guest');
Route::post('/signin', [SignInController::class, 'authenticate']);
Route::post('/signout', [SignInController::class, 'unauthenticate']);

Route::get('/signup', [SignUpController::class, 'index'])->middleware('guest');
Route::post('/signup', [SignUpController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "Dashboard"
    ]);
})->middleware('auth');

Route::resource('/dashboard/surats', SuratController::class)->middleware('auth');
