<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\ChangePasswordController;

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

// User page
Route::get('/', [BookController::class, 'homePage'])->name('homepage');
Route::get('/flipbook', [BookController::class, 'flipbook'])->name('flipbook');
    
Route::middleware('isGuest')->group(function () {
    // Login 
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login/auth', [AdminController::class, 'loginAuth'])->name('login.auth');
});

Route::middleware('isLogin')->prefix('/dashboard/admin')->group(function () {    
    // Register
    Route::get('/register', [AdminController::class, 'register'])->name('register.page');
    Route::post('/register/input', [AdminController::class, 'registerAccount'])->name('register.input');

    // Dashboard Admin ( Path )
    Route::get('/home', [AdminController::class, 'dashboardAdmin'])->name('dashboardAdmin');  
    Route::get('/flipbook', [AdminController::class, 'flipbookAdmin'])->name('flipbookAdmin');  

    // Dashboard Admin ( Account Management )
    Route::get('/account', [AdminController::class, 'accountManagement'])->name('account.management');  
    Route::delete('/account/delete/{id}', [AdminController::class, 'deleteAccount'])->name('delete.account');

    // Dashboard Admin ( Admin Profile )
    Route::get('/profile/edit', [ProfileAdminController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile/update', [ProfileAdminController::class, 'updateProfile'])->name('profile.update');

    // Dashboard Admin ( Change Password )

    Route::get('/profile/change-password', [ChangePasswordController::class, 'changePassword'])->name('change-password');
    Route::put('/profile/change-password/update', [ChangePasswordController::class, 'updatePassword'])->name('change-password.update');

});

// Logout 
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/error', [AdminController::class, 'error'])->name('error');
Route::get('/errorVerif', [AdminController::class, 'errorVerif'])->name('error.verif');
