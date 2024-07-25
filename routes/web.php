<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\AllUserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\FutureJobController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SupplyController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
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
Route::get('login', [LoginController::class,'showLoginForm'])->name('loginForm');
Route::post('login', [LoginController::class,'login'])->name('login');
Route::get('forgot-password', [LoginController::class,'showForgetPwdForm'])->name('forgotPwdForm');
Route::post('forget-password', [DashboardController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [DashboardController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [DashboardController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::post('register', [DashboardController::class,'creates'])->name('register');
Route::middleware('auth')->group(function () {
Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::post('logout',  [LoginController::class,'logout'])->name('logout');
//Route::get('login', [DashboardController::class,'login'])->name('login');
Route::resource('siteSetting', SiteSettingController::class);
Route::put('user/status/{user}',[UserController::class,'status'])->name('user.status');
Route::get('user/add-job/{user}',[UserController::class,'addJob'])->name('user.job');
Route::post('user/add-job-post/{user}',[UserController::class,'addJobPost'])->name('user.job.post');
Route::get('user/add-quote/{user}',[UserController::class,'addQuote'])->name('user.quote');
Route::post('user/add-quote-post/{user}',[UserController::class,'addQuotePost'])->name('user.quote.post');
Route::resource('user', UserController::class);
Route::put('user2/status/{user}',[User2Controller::class,'status'])->name('user2.status');
Route::get('user2/add-quote/{user}',[User2Controller::class,'addQuote'])->name('user2.quote');
Route::post('user2/add-quote-post/{user}',[User2Controller::class,'addQuotePost'])->name('user2.quote.post');
Route::get('user2/add-job/{user}',[User2Controller::class,'addJob'])->name('user2.job');
Route::post('user2/add-job-post/{user}',[User2Controller::class,'addJobPost'])->name('user2.job.post');
Route::resource('user2', User2Controller::class);
Route::put('user-all/status/{user}',[AllUserController::class,'status'])->name('user-all.status');
Route::resource('user-all', AllUserController::class);
Route::post('user-all/email', [AllUserController::class, 'sendEmail'])->name('user-all.reply');
Route::post('user/email', [UserController::class, 'sendEmail'])->name('user.reply');
Route::post('user2/email', [User2Controller::class, 'sendEmail'])->name('user2.reply');
Route::put('job/status/{job}',[JobController::class,'status'])->name('job.status');
Route::resource('job', JobController::class);
Route::put('future-job/status/{job}',[FutureJobController::class,'status'])->name('future-job.status');
Route::resource('future-job', FutureJobController::class);
Route::put('quote/status/{quote}',[QuoteController::class,'status'])->name('quote.status');
Route::put('quote/invoice/{quote}',[QuoteController::class,'invoice'])->name('quote.invoice');
Route::resource('quote', QuoteController::class);
Route::get('quote/{quote}/summary', [QuoteController::class,'downloadOrderSummary'])
    ->name('quote.summary');
Route::post('quote/email', [QuoteController::class, 'sendEmail'])->name('quote.send');
Route::put('supplier/status/{supplier}',[SupplyController::class,'status'])->name('supplier.status');
Route::resource('supplier', SupplyController::class);
Route::get('profile', [DashboardController::class,'profile'])->name('dashboard.profile');
Route::post('profiles', [DashboardController::class,'saveProfile'])->name('profile.save');
Route::get('passwords', [DashboardController::class,'password'])->name('dashboard.password');
Route::post('change-password', [DashboardController::class,'changePassword'])->name('password.save');
Route::post('invoice-status',[InvoiceController::class,'updateStatus'])->name('update.invoice.status');
Route::put('invoice/status/{invoice}',[InvoiceController::class,'status'])->name('invoice.status');
Route::resource('invoice', InvoiceController::class);
Route::get('invoice/{invoice}/summary', [InvoiceController::class,'downloadOrderSummary'])
    ->name('invoice.summary');
Route::post('invoice/email', [InvoiceController::class, 'sendEmail'])->name('invoice.send');
Route::put('contact/status/{contact}',[ContactController::class,'status'])->name('contact.status');
Route::resource('contact', ContactController::class);
Route::get('email-list', [EmailController::class,'list'])
    ->name('email.list');
Route::get('email', [EmailController::class,'index'])
    ->name('email.show');
Route::post('email', [EmailController::class,'sendEMail'])
    ->name('email.send');
    Route::delete('email-delete/{email}', [EmailController::class,'emailDelete'])
    ->name('mail.destroy');
Route::get('/export-users-csv', [UserController::class, 'exportUsersToCSV'])->name('users.export');
});
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
