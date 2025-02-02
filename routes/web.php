<?php

use App\Http\Controllers\FrontendController;
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
Route::get('/welcome', [App\Http\Controllers\Backend\AdminController::class, 'LoginPage'])->name('LoginPage');
Route::post('/welcome', [App\Http\Controllers\Backend\AuthController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\Backend\AuthController::class, 'logout'])->name('logout');

// Route::get('/', [FrontendController::class, 'index']) ->name('index');
Route::get('/', [FrontendController::class, 'home']) ->name('home');
Route::get('/langganan', [FrontendController::class, 'langganan']) ->name('langganan');
Route::get('/program', [FrontendController::class, 'program']) ->name('program');
Route::get('/learning-path', [FrontendController::class, 'learning']) ->name('learning-path');
Route::get('/home', [FrontendController::class, 'home']) ->name('home');


Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard-admin', [App\Http\Controllers\Backend\AdminController::class, 'index'])->name('admin.index');
    // Add other routes here for admin
});