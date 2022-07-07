<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AddUserController;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;

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

Route::get('redirects', 'App\Http\Controllers\LoginController@index')->name('home');


Route::get('/', function () {
    return redirect ('/login');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    // Route::get('/admin', function () {return view('dashboard');})->name('dashboard');
    Route::get('/admin/adduser', [AddUserController::class, 'index'])->name('adduser');
    Route::post('/admin/adduser', [AddUserController::class, 'addUser'])->name('adduser');
    Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile.show');
    Route::get('/admin/dashboard', function () {return view ('dashboard');})->name('dashboard');
    Route::get('/user/logistics', function () {return view ('dashboard');})->name('logistics');
    Route::get('/user/finance', function () {return view ('dashboard');})->name('finance');
    Route::get('/user/core', function () {return view ('dashboard');})->name('core');
    Route::get('/user/hr', function () {return view ('dashboard');})->name('hr');
});
