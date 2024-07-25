<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\AllUserController;

use App\Http\Controllers\QuoteController;

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorController;
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

Route::get('/cache-clear', function () {
    Artisan::call('optimize:clear');
    Artisan::call('view:cache');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    return 'Cache Cleared';
});
Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage Linked';
});

Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('loginForm');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('forgot-password', [LoginController::class, 'showForgetPwdForm'])->name('forgotPwdForm');
    Route::post('forget-password', [DashboardController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('reset-password/{token}', [DashboardController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [DashboardController::class, 'submitResetPasswordForm'])->name('reset.password.post');
    Route::post('register', [DashboardController::class, 'creates'])->name('register');


    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('logout',  [LoginController::class, 'logout'])->name('logout');
        //Route::get('login', [DashboardController::class,'login'])->name('login');
        Route::resource('siteSetting', SiteSettingController::class);


        Route::get('profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
        Route::post('profiles', [DashboardController::class, 'saveProfile'])->name('profile.save');
        Route::get('passwords', [DashboardController::class, 'password'])->name('dashboard.password');
        Route::post('change-password', [DashboardController::class, 'changePassword'])->name('password.save');



        Route::put('contact/status/{contact}', [ContactController::class, 'status'])->name('contact.status');
        Route::resource('contact', ContactController::class);
        Route::put('doctor/status/{doctor}', [DoctorController::class, 'status'])->name('doctor.status');
        Route::resource('doctor', DoctorController::class);
    });
});
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
