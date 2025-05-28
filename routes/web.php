<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\ManageuserController;
// use App\Http\Controllers\User\ManageuserController; 

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
    Route::get('/manage/users', [App\Http\Controllers\Admin\ManageuserController::class, 'index'])->name('manageuser.index');
   // Route::get('/manage/users/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('manageuser.create');

Route::post('/manage/users/create', [App\Http\Controllers\Admin\ManageuserController::class, 'store'])->name('manageuser.create');
Route::get('/manage/users/create', [App\Http\Controllers\Admin\ManageuserController::class, 'create'])->name('manageuser.create');
Route::get('/manageuser/{id}/edit', [App\Http\Controllers\Admin\ManageuserController::class, 'edit'])->name('manageuser.edit');
Route::put('/manageuser/{id}', [App\Http\Controllers\Admin\ManageuserController::class, 'update'])->name('manageuser.update');
Route::delete('/manageuser/{id}', [App\Http\Controllers\Admin\ManageuserController::class, 'destroy'])->name('manageuser.destroy');
Route::get('/manageuser/{id}', [App\Http\Controllers\Admin\ManageuserController::class, 'show'])->name('manageuser.show');
// Route::get('/', [App\Http\Controllers\User\ManageuserController::class, 'index'])->name('index');


});

Route::group(['middleware' => 'user', 'prefix' => 'user'], function () {
    Route::get('/', [App\Http\Controllers\User\UserController::class, 'index'])->name('index');
     Route::get('/', [App\Http\Controllers\User\UserController::class, 'index'])->name('incidents');
});
