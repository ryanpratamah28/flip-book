<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [BookController::class, 'homePage'])->name('homepage');
Route::get('/flipbook', [BookController::class, 'flipbook'])->name('flipbook');

Route::middleware('isGuest')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login/auth', [AdminController::class, 'loginAuth'])->name('login.auth');
});

Route::middleware('isLogin')->prefix('/dashboard/admin')->group(function () {    
    Route::get('/register', [AdminController::class, 'register'])->name('register.page');
    Route::post('/register/input', [AdminController::class, 'registerAccount'])->name('register.input');

    Route::get('/home', [AdminController::class, 'dashboardAdmin'])->name('dashboardAdmin');  
    Route::get('/flipbook', [AdminController::class, 'flipbookAdmin'])->name('flipbookAdmin');  
    Route::get('/profile', [AdminController::class, 'profileAdmin'])->name('profileAdmin');

    Route::get('/account', [AdminController::class, 'accountManagement'])->name('account.management');  
    Route::get('/account/edit/{id}', [AdminController::class, 'editAccount'])->name('edit.account');
    Route::patch('/account/update/{id}', [AdminController::class, 'updateAccount'])->name('update.account');
    Route::delete('/account/delete/{id}', [AdminController::class, 'deleteAccount'])->name('delete.account');

});

Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/error', [AdminController::class, 'error'])->name('error');
Route::get('/errorVerif', [AdminController::class, 'errorVerif'])->name('error.verif');
