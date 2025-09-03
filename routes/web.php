<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

Route::get('/register', function () {
    return view('register');
})->name('register.get');
Route::post('/register', [UserController::class, 'register'])->name('register.post');

Route::get('/login', function () {
    return view('login');
})->name('login.get');
Route::post('/login', [UserController::class, 'login'])->name('login.post');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard')->middleware('auth');

Route::get('/deep', [UserController::class, 'deepPage'])->name('deep-page')->middleware(['can:isAdmin']); //using gate as middleware

//middleware

// middleware is the gatekeeper who control who can enter the route
// where as the guard and policy is the user-role system who decide who can do which operation.
// types: 1. route middleware 2. group middleware 3. global middleware.
// steps: 1. make middleware 2.


Route::middleware('isValidUser')->group(function () {
    //
});


Route::get('/season', [TestController::class, 'index'])->name('season.get');

Route::get('store-season', [TestController::class, 'storeSeason'])->name('season.store');

Route::get('delete-season', [TestController::class, 'deleteSeason']);


Route::get('/posts', [PostController::class, 'index']);
