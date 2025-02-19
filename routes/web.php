<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\CategoryServiceController;
use App\Http\Controllers\Backend\ConfigurationController;
use App\Http\Controllers\Backend\HeroController;
use App\Http\Controllers\Backend\OurProgramController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\WhyController;
use App\Http\Controllers\Backend\WhyUsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Backend\Superiority;
use App\Http\Controllers\Backend\SuperiorityController;
use App\Http\Controllers\Backend\SuperiorityImage;
use App\Http\Controllers\Backend\SuperiorityImageController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;
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

Route::get('/welcome', [AdminController::class, 'LoginPage'])->name('LoginPage');
Route::post('/welcome', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/langganan', [FrontendController::class, 'langganan'])->name('langganan');
Route::get('/program', [FrontendController::class, 'program'])->name('program');
Route::get('/learning-path', [FrontendController::class, 'learning'])->name('learning-path');
Route::get('/tentang', [FrontendController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [FrontendController::class, 'kontak'])->name('kontak');
Route::get('/soalhtml', [FrontendController::class, 'soalhtml'])->name('soalhtml');
Route::get('/soalcss', [FrontendController::class, 'soalcss'])->name('soalcss');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::post('/', [FrontendController::class, 'sendEmail'])->name('contact.send');

Route::controller(UserController::class)->group(function () {
    Route::get('/registerUser', 'pageRegisterUser')->name('pageRegisterUser'); 
    Route::post('/registerUser', 'registerUser')->name('registerUser');
    Route::get('/loginUser', 'pageLoginUser')->name('pageLoginUser'); 
    Route::post('/loginUser', 'loginUser')->name('loginUser'); 

    Route::post('/logoutUser', 'logoutUser')->name('logoutUser'); 
});

Route::middleware(['checkUser'])->group(function () {
    Route::get('/learning-path/{categoryId}', [FrontendController::class, 'webdevelopment'])->name('learning-path.id');

});

Route::middleware(['auth:admin'])->group(function () {
    // Configuration routes
    Route::controller(ConfigurationController::class)->group(function () {
        Route::get('/dashboard-admin/configuration', 'index')->name('configuration.index');
        Route::post('/dashboard-admin/configuration', 'createOrUpdate')->name('configuration.store');
    });

    // Hero routes
    Route::controller(HeroController::class)->group(function () {
        Route::get('/dashboard-admin/hero', 'index')->name('hero.index');
        Route::post('/dashboard-admin/hero', 'createOrUpdate')->name('hero.store');
    });

    // Superiority routes
    Route::controller(SuperiorityController::class)->group(function () {
        Route::get('/dashboard-admin/superiority', 'index')->name('superiority.index');
        Route::post('/dashboard-admin/superiority', 'createOrUpdate')->name('superiority.store');
    });

    // SuperiorityImage routes
    Route::resource('/dashboard-admin/superiorityImage', SuperiorityImageController::class);

    // Why routes
    Route::controller(WhyController::class)->group(function () {
        Route::get('/dashboard-admin/why', 'index')->name('why.index');
        Route::post('/dashboard-admin/why', 'createOrUpdate')->name('why.store');
    });

    // WhyUs routes
    Route::resource('/dashboard-admin/whyUs', WhyUsController::class);

    // CategoryService routes
    Route::resource('/dashboard-admin/categoryService', CategoryServiceController::class);
    // Service routes
    Route::resource('/dashboard-admin/service', ServiceController::class);

    //program
    Route::resource('/dashboard-admin/ourProgram', OurProgramController::class);

    //team
    Route::resource('/dashboard-admin/team', TeamController::class);

    // Admin dashboard routes
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard-admin', 'index')->name('admin.index');
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