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

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::post('/logout', [App\Http\Controllers\Backend\AuthController::class, 'logout'])->name('logout');
Route::get('/langganan', [FrontendController::class, 'langganan'])->name('langganan');
Route::get('/program', [FrontendController::class, 'program'])->name('program');

Route::get('/learning-path', [FrontendController::class, 'learning'])->name('learning-path');

Route::get('/home', [FrontendController::class, 'home'])->name('home');

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/langganan', [FrontendController::class, 'langganan'])->name('langganan');
Route::get('/program', [FrontendController::class, 'program'])->name('program');
Route::get('/learning-path', [FrontendController::class, 'learning'])->name('learning-path');
Route::get('/home', [FrontendController::class, 'home'])->name('home');
Route::get('/tentang', [FrontendController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [FrontendController::class, 'kontak'])->name('kontak');
Route::get('/webdevelopment', [FrontendController::class, 'webdevelopment'])->name('webdevelopment');
Route::get('/soalhtml', [FrontendController::class, 'soalhtml'])->name('soalhtml');
Route::get('/soalcss', [FrontendController::class, 'soalcss'])->name('soalcss');
Route::get('/loginUser', [FrontendController::class, 'loginUser'])->name('loginUser');
Route::get('/registerUser', [FrontendController::class, 'registerUser'])->name('registerUser');



Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard-admin', [App\Http\Controllers\Backend\AdminController::class, 'index'])->name('admin.index');
    //configuration
    Route::controller(App\Http\Controllers\Backend\ConfigurationController::class)->group(function () {
        Route::get('/dashboard-admin/configuration', 'index')->name('configuration.index');
        Route::post('/dashboard-admin/configuration', 'createOrUpdate')->name('configuration.store');
    });
    //hero
    Route::controller(App\Http\Controllers\Backend\HeroController::class)->group(function () {
        Route::get('/dashboard-admin/hero', 'index')->name('hero.index');
        Route::post('/dashboard-admin/hero', 'createOrUpdate')->name('hero.store');
    });

    //superiority
    Route::controller(\App\Http\Controllers\Backend\SuperiorityController::class)->group(function () {
        Route::get('/dashboard-admin/superiority', 'index')->name('superiority.index');
        Route::post('/dashboard-admin/superiority', 'createOrUpdate')->name('superiority.store');
    });
    //superiorityImage
    Route::controller(\App\Http\Controllers\Backend\SuperiorityImageController::class)->group(function () {
        Route::get('/dashboard-admin/superiorityImage', 'index')->name('superiorityImage.index');
        Route::post('/dashboard-admin/superiorityImage', 'store')->name('superiorityImage.store');
        Route::put('/dashboard-admin/superiorityImage/{id}', 'update')->name('superiorityImage.update');
        Route::delete('/dashboard-admin/superiorityImage/destroy/{id}', 'destroy')->name('superiorityImage.destroy');
    });

    //why
    Route::controller(\App\Http\Controllers\Backend\WhyController::class)->group(function () {
        Route::get('/dashboard-admin/why', 'index')->name('why.index');
        Route::post('/dashboard-admin/why', 'createOrUpdate')->name('why.store');
    });
    //whyUs
    Route::controller(\App\Http\Controllers\Backend\WhyUsController::class)->group(function () {
        Route::get('/dashboard-admin/whyUs', 'index')->name('whyUs.index');
        Route::post('/dashboard-admin/whyUs', 'store')->name('whyUs.store');
        Route::put('/dashboard-admin/whyUs/{id}', 'update')->name('whyUs.update');
        Route::delete('/dashboard-admin/whyUs/destroy/{id}', 'destroy')->name('whyUs.destroy');
    });

    //categoryServices
    Route::controller(\App\Http\Controllers\Backend\CategoryServiceController::class)->group(function () {
        Route::get('/dashboard-admin/categoryService', 'index')->name('categoryService.index');
        Route::post('/dashboard-admin/categoryService', 'store')->name('categoryService.store');
        Route::put('/dashboard/categoryService/{id}', 'update')->name('categoryService.update');
        Route::delete('/dashboard/categoryService/destroy/{id}', 'destroy')->name('categoryService.destroy');
    });
    //service
    Route::resource('/dashboard-admin/service', \App\Http\Controllers\Backend\ServiceController::class);

    Route::controller(App\Http\Controllers\Backend\AdminController::class)->group(function () {
        Route::get('/dashboard-admin/avatars', 'avatars')->name('admin.avatars');
        Route::get('/dashboard-admin/buttons', 'buttons')->name('admin.buttons');
        Route::get('/dashboard-admin/grid-system', 'gridSytem')->name('admin.grid-system');
        Route::get('/dashboard-admin/panels', 'panels')->name('admin.panels');
        Route::get('/dashboard-admin/notifications', 'notifications')->name('admin.notifications');
        Route::get('/dashboard-admin/simple-line-icons', 'simpleLineIcons')->name('admin.simple-line-icons');
        Route::get('/dashboard-admin/sweet-alert', 'sweetAlert')->name('admin.sweet-alert');
        Route::get('/dashboard-admin/font-awesome-icons', 'fontAwesomeIcons')->name('admin.font-awesome-icons');
        Route::get('/dashboard-admin/typography', 'typography')->name('admin.typography');
        Route::get('/dashboard-admin/sidebar-style-2', 'sidebarStyle2')->name('admin.sidebar-style-2');
        Route::get('/dashboard-admin/icon-menu', 'iconMenu')->name('admin.icon-menu');
        Route::get('/dashboard-admin/forms', 'forms')->name('admin.forms');
        Route::get('/dashboard-admin/tables', 'tables')->name('admin.tables');
        Route::get('/dashboard-admin/data-tables', 'dataTables')->name('admin.data-tables');
        Route::get('/dashboard-admin/google-maps', 'googleMaps')->name('admin.google-maps');
        Route::get('/dashboard-admin/jsvectormap', 'jsvectormap')->name('admin.jsvectormap');
        Route::get('/dashboard-admin/charts', 'charts')->name('admin.charts');
        Route::get('/dashboard-admin/sparkline', 'sparkline')->name('admin.sparkline');
        Route::get('/dashboard-admin/widgets', 'widgets')->name('admin.widgets');
    });
});
