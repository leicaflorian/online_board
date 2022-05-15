<?php

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

Route::get('/', function () {
  return view('welcome');
});

Route::get('/search', function () {
  return view('welcome');
})->name('search');

\Illuminate\Support\Facades\Auth::routes([
  'register' => false,
  'reset'    => false,
  'verify'   => false,
]);

Route::get('/google-login', [\App\Http\Controllers\GoogleAuthController::class, "redirectToProvider"]);
Route::get('/callback', [\App\Http\Controllers\GoogleAuthController::class, "handleProviderCallback"]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
