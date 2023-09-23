<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('/user')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('user.create');
    Route::post('/newAccount',[UserController::class, 'store'])->name('user.register');
    Route::get('/delete', [UserController::class, 'deleteManager'])->name('user.delete');
    Route::get('/edit', [UserController::class, 'editManager'])->name('user.edit');
});
