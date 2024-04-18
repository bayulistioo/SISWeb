<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RegistrasiAccountController;
use App\Http\Controllers\Siswa\SiswaController;
use App\Http\Controllers\WaliCalonSiswa\WaliCalonSiswaController;

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
/*
 Default route
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*
 For role admin
*/
Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('beranda', [AdminController::class, 'index'])->name('admin.index');
    Route::get('pendaftar_account', [RegistrasiAccountController::class, 'index'])->name('registrasi.index');
    Route::put('update_status/{id}/{status}', [RegistrasiAccountController::class, 'updateStatus'])->name('update.status');
});


/*
 For role wali calon siswa
*/
Route::prefix('wali_calon')->middleware(['auth', 'auth.wali_calon'])->group(function () {
    Route::get('beranda', [WaliCalonSiswaController::class, 'index'])->name('wali.index');
});


/*
 For role siswa
*/
Route::prefix('siswa')->middleware(['auth', 'auth.siswa'])->group(function () {
    Route::get('beranda', [SiswaController::class, 'index'])->name('siswa.index');
});

Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
