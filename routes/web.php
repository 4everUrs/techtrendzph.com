<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesController;

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
    return redirect ('/login');
});

Route::group(['middleware'=>['auth']],function(){

    Route::get('/admin/adduser', [RoutesController::class, 'index'])->name('adduser');
    Route::post('/admin/adduser', [RoutesController::class, 'addUser'])->name('adduser');
    
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('dashboard');
});
