<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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


Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('welcome');
});
    //login and register
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'auth']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'regis']);
});

Route::middleware('auth')->group(function(){
    Route::get('profile', [UserController::class, 'profile'])->middleware('Only_client');
    Route::get('dashboard', [AdminController::class, 'index'])->middleware('Only_admin');
    
    //user controller
    Route::get('user', [AdminController::class, 'users'])->middleware('Only_admin');
    Route::get('users-registered', [AdminController::class, 'usersRegistered'])->middleware('Only_admin');
    Route::get('users-detail/{slug}', [AdminController::class, 'usersDetail'])->middleware('Only_admin');
    Route::get('users-approve/{slug}', [AdminController::class, 'usersApprove'])->middleware('Only_admin');
    Route::get('users-ban/{slug}', [AdminController::class, 'usersBan'])->middleware('Only_admin');
    Route::get('users-banned', [AdminController::class, 'usersBanned'])->middleware('Only_admin');
    Route::get('users-Restore/{slug}', [AdminController::class, 'usersRestore'])->middleware('Only_admin');
    //end user controller

    //category
    Route::get('category', [AdminController::class, 'categories'])->middleware('Only_admin');
    Route::get('category-add', [AdminController::class, 'categoriesAdd'])->middleware('Only_admin');
    Route::post('category-add', [AdminController::class, 'categoriesStore'])->middleware('Only_admin');
    Route::get('category-edit/{slug}', [AdminController::class, 'categoriesEdit'])->middleware('Only_admin');
    Route::put('category-edit/{slug}', [AdminController::class, 'categoriesUpdate'])->middleware('Only_admin');
    Route::get('category-delete/{slug}', [AdminController::class, 'categoriesDestroy']);
    //endcategory

    //Book
    Route::get('/books', [AdminController::class, 'books'])->middleware('Only_admin');
    Route::get('book-add', [AdminController::class, 'booksAdd'])->middleware('Only_admin');
    Route::post('book-add', [AdminController::class, 'booksStore'])->middleware('Only_admin');
    Route::get('book-edit/{slug}', [AdminController::class, 'booksEdit'])->middleware('Only_admin');
    Route::put('book-edit/{slug}', [AdminController::class, 'booksUpdate'])->middleware('Only_admin');
    Route::get('book-delete/{slug}', [AdminController::class, 'booksDestory'])->middleware('Only_admin');
    //endBook

    Route::get('rent', [AdminController::class, 'rent'])->middleware('Only_admin');
    Route::get('logout', [AuthController::class, 'logout']);
});
