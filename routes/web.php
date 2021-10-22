<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\UserController;

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
    return redirect()->route('backend.login');
});

Route::prefix('backend')->name('backend.')->group(function() {
    Route::middleware(['guest'])->group(function(){
        Route::get('/', function () {
            return redirect()->route('backend.login');
        })->name('root');
        Route::get('/login', [UserController::class, 'login'])->name('login');
        Route::post('/login', [UserController::class, 'doLogin'])->name('doLogin');
    });
    Route::middleware(['auth'])->group(function() {
        Route::get('/home', [UserController::class, 'home'])->name('home');
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    });
});

