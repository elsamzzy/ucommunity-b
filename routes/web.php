<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Dashboard\EachUserController;
use App\Http\Controllers\Auth\ConfirmAccount;
use App\Http\Controllers\Auth\ResendVerificationEmailController;
use App\Http\Controllers\Auth\SuccessController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\SettingsController;
use App\Http\Controllers\Dashboard\SuccessID;
use App\Http\Controllers\Dashboard\TransactionsController;
use App\Http\Controllers\Dashboard\VerifyID;
use App\Http\Controllers\Landing\ContactUsController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', function () {
    return view('landing.index');
})->name('home');

Route::get('/about', function () {
    return view('landing.about');
})->name('about');

Route::get('/services', function () {
    return view('landing.services');
})->name('services');

Route::get('/gallery', function () {
    return view('landing.gallery');
})->name('gallery');

Route::get('/contact', [ContactUsController::class, 'index'])->name('contact');
Route::post('/contact', [ContactUsController::class, 'store']);

Route::middleware('success.registered')->get('/success', [SuccessController::class, 'index'])->name('success');

Route::get('/confirm/{token}', [ConfirmAccount::class, 'store'])->name('confirm.token');
Route::get('/confirm/success', [ConfirmAccount::class, 'index'])->name('confirm.success');

Route::get('/resend', [ResendVerificationEmailController::class, 'index'])->name('resend');
Route::post('/resend', [ResendVerificationEmailController::class, 'relogin']);
Route::get('/resend/confirm', [ResendVerificationEmailController::class, 'store'])->name('resend.confirm');

Route::get('verify/ID', [VerifyID::class, 'index'])->name('verify.id');
Route::post('verify/ID', [VerifyID::class, 'store']);

Route::get('verify/success', [SuccessID::class, 'index'])->name('verify.success');

Route::prefix('dashboard/')->name('dashboard.')->middleware(['confirm.email', 'auth', 'verify.id'])->group(function() {
    Route::get('', [IndexController::class, 'index'])->name('index');
    Route::post('', [IndexController::class, 'store']);
    Route::get('transactions', [TransactionsController::class, 'index'])->name('transactions');
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::post('contact', [ContactController::class, 'store']);
    Route::get('settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('settings', [SettingsController::class, 'store']);
});

Route::prefix('admin/')->name('admin.')->group(function() {
    Route::middleware('guest')->group(function() {
        Route::get('register', [RegisterController::class, 'index'])->name('register');
        Route::post('register', [RegisterController::class, 'store']);
        Route::get('login', [LoginController::class, 'index'])->name('login');
        Route::post('login', [LoginController::class, 'store']);
    });

    Route::prefix('dashboard/')->name('dashboard.')->middleware(['confirm.email', 'auth'])->group(function() {
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('', [\App\Http\Controllers\Admin\Dashboard\IndexController::class, 'index'])->name('index');
        Route::get('/user/{user:id}', [EachUserController::class, 'index'])->name('eachuser');
        Route::post('/user/{user:id}', [EachUserController::class, 'store']);
        Route::post('/user/{user:id}/balance', [EachUserController::class, 'balance'])->name('eachuser.balance');
        Route::get('settings', [\App\Http\Controllers\Admin\Dashboard\SettingsController::class, 'index'])->name('settings');
        Route::post('settings', [\App\Http\Controllers\Admin\Dashboard\SettingsController::class, 'store']);
    });
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
