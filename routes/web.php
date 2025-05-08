<?php

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
    return redirect()->route('login');
});

// Route::get('/' , function(){
//     return redirect()->route('register');
// });

Auth::routes();

    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
    Route::get('/manage/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('manageuser.index');
   Route::post('/manage/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('manageuser.index');

});

Route::group(['middleware' => 'user', 'prefix' => 'user'], function () {
    Route::get('/', [App\Http\Controllers\User\UserController::class, 'index'])->name('index');

});
