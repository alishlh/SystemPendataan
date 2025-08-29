<?php

use App\Http\Controllers\Admin\AgenController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExitDataController;
use App\Http\Controllers\Admin\GrubController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Rute untuk tamu (guest)
// Rute untuk tamu (guest)
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/sign-in', [AuthController::class, 'login'])->name('login.submit');
});

// Rute untuk pengguna yang terautentikasi
Route::group(['middleware' => 'auth'], function () {
    // Rute logout  
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/user', [DashboardController::class, 'user'])->name('user.dashboard');

    // Rute untuk Agen
    Route::prefix('admin/agens')->name('admin.agens.')->group(function () {
        Route::get('/', [AgenController::class, 'index'])->name('index');
        Route::get('/create', [AgenController::class, 'create'])->name('create');
        Route::post('/', [AgenController::class, 'store'])->name('store');
        Route::get('/{agen}', [AgenController::class, 'show'])->name('show');
        Route::get('/{agen}/edit', [AgenController::class, 'edit'])->name('edit');
        Route::put('/{agen}', [AgenController::class, 'update'])->name('update');
        Route::delete('/{agen}', [AgenController::class, 'destroy'])->name('destroy');
    });

    // Rute untuk Grub
    Route::prefix('admin/grubs')->name('admin.grubs.')->group(function () {
        Route::get('/', [GrubController::class, 'index'])->name('index');
        Route::get('/create', [GrubController::class, 'create'])->name('create');
        Route::post('/', [GrubController::class, 'store'])->name('store');
        Route::get('/{grub}', [GrubController::class, 'show'])->name('show');
        Route::get('/{grub}/edit', [GrubController::class, 'edit'])->name('edit');
        Route::put('/{grub}', [GrubController::class, 'update'])->name('update');
        Route::delete('/{grub}', [GrubController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('admin/users')->name('admin.users.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('create');
        Route::post('/', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('store');
        Route::get('/{user}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('show');
        Route::get('/{user}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('edit');
        Route::put('/{user}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('update');
        Route::delete('/{user}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('destroy');
    });


    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('exit-data', [ExitDataController::class, 'index'])->name('exit-data.index');
        Route::get('exit-data/{grub_id}', [ExitDataController::class, 'indexdetail'])->name('exit-data.indexdetail');
        Route::get('exit-data/{grub_id}/create', [ExitDataController::class, 'create'])->name('exit-data.create');
        Route::post('exit-data/{grub_id}', [ExitDataController::class, 'store'])->name('exit-data.store');
        Route::get('exit-data/{grub_id}/{id}/edit', [ExitDataController::class, 'edit'])->name('exit-data.edit');
        Route::put('exit-data/{grub_id}/{id}', [ExitDataController::class, 'update'])->name('exit-data.update');
        Route::delete('exit-data/{grub_id}/{id}', [ExitDataController::class, 'destroy'])->name('exit-data.destroy');
        Route::get('/grubs/{exitData}/print-ticket', [ExitDataController::class, 'printTicket'])
            ->name('exit-data.printTicket');
    });
});

// Rute autentikasi bawaan Laravel
Auth::routes();
