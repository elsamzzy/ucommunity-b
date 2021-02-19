<?php

use App\Http\Controllers\Admin\AdminLoggingController;
use App\Http\Controllers\Admin\AdminRegisteringController;
use App\Http\Controllers\Admin\AdminRegisterSuccessController;
use App\Http\Controllers\Admin\Dash\BalanceController;
use App\Http\Controllers\Admin\Dash\DeactivateController;
use App\Http\Controllers\Admin\Dash\SettingsController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PersonalInformationController;
use App\Http\Controllers\Auth\SuccessController;
use App\Http\Controllers\Dash\AntiSuccessController;
use App\Http\Controllers\Dash\BankSuccessController;
use App\Http\Controllers\Dash\AntiLandryController;
use App\Http\Controllers\Dash\BankController;
use App\Http\Controllers\Dash\ImfController;
use App\Http\Controllers\Dash\ImfSuccessController;
use App\Http\Controllers\Dash\SendController;
use App\Http\Controllers\Dash\SupportController;
use App\Http\Controllers\Dash\TaxController;
use App\Http\Controllers\Dash\TaxSuccessController;
use App\Http\Controllers\Dash\TransCodeController;
use App\Http\Controllers\Dash\TransCodeSuccessController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/user/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/personal', [PersonalInformationController::class, 'index'])->name('Personal Information');
Route::post('/personal', [PersonalInformationController::class, 'store']);

Route::get('/success', [SuccessController::class, 'index'])->name('success');

Route::middleware('auth')->group(function() {
    Route::get('/send', [SendController::class, 'index'])->name('send');
    Route::post('/send', [SendController::class, 'store']);

    Route::get('/bank', [BankController::class, 'index'])->name('bank');
    Route::post('/bank', [BankController::class, 'store']);
    Route::get('/bank/success', [BankSuccessController::class, 'index'])->name('bank_success');

    Route::get('/tax', [TaxController::class, 'index'])->name('tax');
    Route::post('/tax', [TaxController::class, 'store']);
    Route::get('/tax/success', [TaxSuccessController::class, 'index'])->name('tax_success');

    Route::get('/transcode', [TransCodeController::class, 'index'])->name('transcode');
    Route::post('/transcode', [TransCodeController::class, 'store']);
    Route::get('/transcode/success', [TransCodeSuccessController::class, 'index'])->name('transcode_success');

    Route::get('/imf', [ImfController::class, 'index'])->name('imf');
    Route::post('/imf', [ImfController::class, 'store']);
    Route::get('/imf/success', [ImfSuccessController::class, 'index'])->name('imf_success');

    Route::get('/antilaundry', [AntiLandryController::class, 'index'])->name('antilaundry');
    Route::post('/antilaundry', [AntiLandryController::class, 'store']);
    Route::get('/antilaundry/success', [AntiSuccessController::class, 'index'])->name('antilaundry_success');

    Route::get('/support', [SupportController::class, 'index'])->name('support');
});

Route::get('/admin/login', [AdminLoggingController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AdminLoggingController::class, 'store']);

Route::get('/admin/register', [AdminRegisteringController::class, 'index'])->name('admin.register');
Route::post('/admin/register', [AdminRegisteringController::class, 'store']);

Route::get('/admin/success', [AdminRegisterSuccessController::class, 'index'])->name('admin.success');

Route::post('/logout', [LogoutController::class, 'store'])->name('admin.logout');
Route::post('/balance/{user}', [BalanceController::class, 'store'])->name('balance');

Route::post('/activate/{user}', [DeactivateController::class, 'activate'])->name('activate');
Route::post('/deactivate/{user}', [DeactivateController::class, 'deactivate'])->name('deactivate');

Route::get('/admin', [\App\Http\Controllers\Admin\Dash\HomeController::class, 'index'])->name('dashboard');

Route::get('/admin/settings', [SettingsController::class, 'index'])->name('admin.settings');
Route::post('/admin/settings', [SettingsController::class, 'store']);

Route::get('/supporter', [App\Http\Controllers\Dash\SupportController::class, 'sendEmail']);




