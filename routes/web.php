<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\ChangePasswordController;

use App\Http\Controllers\BookflipMultiController;
use App\Http\Controllers\BookflipMulti2Controller;
use App\Http\Controllers\BookflipMulti3Controller;
use App\Http\Controllers\BookflipMulti4Controller;
use App\Http\Controllers\BookflipMulti5Controller;

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
Route::get('/flipbook', [BookController::class, 'flipBook'])->name('flipbook');
Route::get('/flipbook2', [BookController::class, 'flipbook2'])->name('flipbook2');
Route::get('/flipbook3', [BookController::class, 'flipbook3'])->name('flipbook3');
Route::get('/flipbook4', [BookController::class, 'flipbook4'])->name('flipbook4');
Route::get('/flipbook5', [BookController::class, 'flipbook5'])->name('flipbook5');
    
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

    // Dashboard Admin ( Account Management )
    Route::get('/account', [AdminController::class, 'accountManagement'])->name('account.management');  
    Route::delete('/account/delete/{id}', [AdminController::class, 'deleteAccount'])->name('delete.account');

    // Dashboard Admin ( Admin Profile )
    Route::get('/profile/edit', [ProfileAdminController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile/update', [ProfileAdminController::class, 'updateProfile'])->name('profile.update');

    // Dashboard Admin ( Change Password )

    Route::get('/profile/change-password', [ChangePasswordController::class, 'changePassword'])->name('change-password');
    Route::put('/profile/change-password/update', [ChangePasswordController::class, 'updatePassword'])->name('change-password.update');

    // Dynamic Flipbook ( Dashboard Admin )
    
    Route::get('/flipbook', [AdminController::class, 'flipbookAdmin'])->name('flipbookAdmin');  
    Route::get('/flipbook2', [AdminController::class, 'flipbookAdmin2'])->name('flipbookAdmin2');  
    Route::get('/flipbook3', [AdminController::class, 'flipbookAdmin3'])->name('flipbookAdmin3');  
    Route::get('/flipbook4', [AdminController::class, 'flipbookAdmin4'])->name('flipbookAdmin4');  
    Route::get('/flipbook5', [AdminController::class, 'flipbookAdmin5'])->name('flipbookAdmin5');  

    Route::get('/create', [BookflipMultiController::class, 'create'])->name('create');
    Route::get('/create2', [BookflipMulti2Controller::class, 'create2'])->name('create2');
    Route::get('/create3', [BookflipMulti3Controller::class, 'create3'])->name('create3');
    Route::get('/create4', [BookflipMulti4Controller::class, 'create4'])->name('create4');
    Route::get('/create5', [BookflipMulti5Controller::class, 'create5'])->name('create5');

    Route::post('/store', [BookflipMultiController::class, 'store'])->name('post');
    Route::post('/store2', [BookflipMulti2Controller::class, 'store2'])->name('post2');
    Route::post('/store3', [BookflipMulti3Controller::class, 'store3'])->name('post3');
    Route::post('/store4', [BookflipMulti4Controller::class, 'store4'])->name('post4');
    Route::post('/store5', [BookflipMulti5Controller::class, 'store5'])->name('post5');

    Route::get('/edit/{bookflip}', [BookflipMultiController::class, 'edit'])->name('edit');
    Route::get('/edit2/{bookflip}', [BookflipMulti2Controller::class, 'edit2'])->name('edit2');
    Route::get('/edit3/{bookflip}', [BookflipMulti3Controller::class, 'edit3'])->name('edit3');
    Route::get('/edit4/{bookflip}', [BookflipMulti4Controller::class, 'edit4'])->name('edit4');
    Route::get('/edit5/{bookflip}', [BookflipMulti5Controller::class, 'edit5'])->name('edit5');

    Route::put('/update/{bookflip}', [BookflipMultiController::class, 'update'])->name('update');
    Route::put('/update2/{bookflip}', [BookflipMulti2Controller::class, 'update2'])->name('update2');
    Route::put('/update3/{bookflip}', [BookflipMulti3Controller::class, 'update3'])->name('update3');
    Route::put('/update4/{bookflip}', [BookflipMulti4Controller::class, 'update4'])->name('update4');
    Route::put('/update5/{bookflip}', [BookflipMulti5Controller::class, 'update5'])->name('update5');

    Route::delete('/delete', [BookflipMultiController::class, 'delete'])->name('delete');
    Route::delete('/delete2', [BookflipMulti2Controller::class, 'delete2'])->name('delete2');
    Route::delete('/delete3', [BookflipMulti3Controller::class, 'delete3'])->name('delete3');
    Route::delete('/delete4', [BookflipMulti4Controller::class, 'delete4'])->name('delete4');
    Route::delete('/delete5', [BookflipMulti5Controller::class, 'delete5'])->name('delete5');

    // Dynamic Page ( Dashboard Admin )

    Route::post('/page/remove', [BookflipMulti2Controller::class, 'remove'])->name('page.remove');

});

// Logout 
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
