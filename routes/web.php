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

@include_once('admin_web.php');

Route::get('/', function() {
  return view('welcome');
});

Route::get('/signup', function() {
  return view('user_access.signup');
});

Route::get('/shop', function() {
  return view('shop');
});

Route::get('/test', function() {
  return view('test');
});

Route::get('/game-page', function() {
  return view('game-page');
});


//Route::get('/', function () {
//    return redirect()->route('index');
//})->name('/');

//Route::prefix('starter-kit')->group(function () {
//    Route::view('index', 'admin.color-version.index')->name('index');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
