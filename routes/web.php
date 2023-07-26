<?php

use App\Http\Controllers\Admin\CampBenefitController;
use App\Http\Controllers\Admin\CampController as AdminCamp;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;
use App\Http\Controllers\Admin\UserController as AdminUserController;

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
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('prototype-admin', function(){
    return view('layouts.admin.app');
});

Route::get('/auth/redirect', [UserController::class, 'google'])->name('auth-redirect');
Route::get('/auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('auth-callback');

Route::get('payment/success', [CheckoutController::class, 'midtransCallback']);
Route::post('payment/success', [CheckoutController::class, 'midtransCallback']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('checkout-success', [CheckoutController::class, 'success'])->name('checkout.success')->middleware('ensureUserRole:user');
    Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout.create')->middleware('ensureUserRole:user');
    Route::post('checkout/{camp}', [CheckoutController::class, 'store'])->name('checkout.store')->middleware('ensureUserRole:user');

    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('dashboard/checkout/invoice/{checkout}', [CheckoutController::class, 'invoice'])->name('user.checkout.invoice');

    Route::prefix('user/dashboard')->namespace('User')->name('user.')->middleware('ensureUserRole:user')->group(function(){
        Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');
    });

    Route::prefix('admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function(){
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');

        Route::resource('/camp', AdminCamp::class, ['names'=>'camp']);
        Route::resource('/camp-benefit', CampBenefitController::class, ['names'=>'camp-benefit']);
        Route::get('/users', [AdminUserController::class, 'index'])->name('user');
        Route::delete('/users/{user}', [AdminUserController::class, 'destroy'])->name('user.destroy');
        Route::get('report/checkout', [AdminCheckout::class, 'index'])->name('report.checkout');
        Route::post('report/checkout', [AdminCheckout::class, 'filterCheckout'])->name('report.checkout.filter');
        Route::get('report/checkout/export-pdf', [AdminCheckout::class, 'pdfCheckout'])->name('report.checkout.export-pdf');

        Route::post('/checkout/{checkout}', [AdminCheckout::class, 'update'])->name('checkout.update');
    });
});

require __DIR__.'/auth.php';
