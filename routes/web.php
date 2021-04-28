<?php

use App\Http\Controllers\LowonganController;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\DospemController;
use App\Http\Controllers\SpvController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApplyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [LowonganController::class, 'AllLowongan']);

Route::resource('detail', ApplyController::class);


Route::group(['middleware' => 'auth'], function () {
    Route::resource('profile', ProfileController::class);
    // Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    // Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('profile/edit', [ProfileController::class, 'update'])->name('profile.update');
});

Route::group(['middleware' => 'is_depart'], function () {
    Route::get('depart/home', [DepartController::class, 'departHome'])->name('depart.home');
    //CRUD Users
    Route::resource('users', UserController::class);
    //List Mahasiswa
    Route::get('depart/mahasiswa', [DepartController::class, 'listMhs']);
    Route::get('depart/mahasiswa/{id}', [DepartController::class, 'show']);
    //List Lowongan
    Route::get('depart/lowongan', [LowonganController::class, 'index'])->name('depart.lowongan');
});

Route::group(['middleware' => 'is_mitra'], function () {
    Route::get('mitra/home', [MitraController::class, 'mitraHome'])->name('mitra.home');
    //CRUD Lowongan
    Route::resource('lowongan', LowonganController::class);
});

Route::group(['middleware' => 'is_dospem'], function () {
    Route::get('dospem/home', [DospemController::class, 'dospemHome'])->name('dospem.home');
});

Route::group(['middleware' => 'is_supervisor'], function () {
    Route::get('supervisor/home', [SpvController::class, 'supervisorHome'])->name('supervisor.home');
});

Route::group(['middleware' => 'is_mahasiswa'], function () {
    Route::get('mahasiswa/home', [MhsController::class, 'mahasiswaHome'])->name('mahasiswa.home');
    //Lowongan
    Route::get('apply', [ApplyController::class, 'apply'])->name('lowongan.apply');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
