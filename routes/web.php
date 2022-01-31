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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/create', function () {
    return view('pages/create');
})->middleware('auth');

Route::get('/home', function () {
    return redirect('/');
})->middleware('auth');

Route::post('/create', [App\Http\Controllers\ThingController::class, 'add'])->middleware('auth');
Route::get('/thing/{id}', [App\Http\Controllers\ThingController::class, 'show'])->middleware('auth');
Route::get('/user-to-give/{thing_id}', [App\Http\Controllers\UserController::class, 'showRecipients'])->middleware('auth');
Route::get('/give-to-user/{user_id}/{thing_id}', [App\Http\Controllers\ThingController::class, 'giveToUser'])->middleware('auth');

Route::get('/logout',function() {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Auth::routes();
