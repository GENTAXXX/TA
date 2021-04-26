<?php

use App\Http\Controllers\LowonganController;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

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
    // Route::get('depart/users', [UserController::class, 'index']);
    // Route::get('depart/users/{id}', [UserController::class, 'show']);
    // Route::post('depart/users', [UserController::class, 'store']);
    // Route::put('depart/users/{id}', [UserController::class, 'update']);
    // Route::delete('depart/users/{id}', [UserController::class, 'destroy']);
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
    // Route::get('mitra/lowongan', [LowonganController::class, 'index']);
    // Route::get('mitra/lowongan/tambah', [LowonganController::class, 'create']);
    // Route::get('mitra/lowongan/{id}', [LowonganController::class, 'show']);
    // Route::post('mitra/lowongan', [LowonganController::class, 'store'])->name('lowongan.store');
    // Route::put('mitra/lowongan/{id}', [LowonganController::class, 'update']);
    // Route::delete('mitra/lowongan/{id}', [LowonganController::class, 'destroy']);
    // Route::get('mitra/lowongan/tambah', [LowonganController::class, 'create'])->name('lowongan.create');
    // Route::get('mitra/lowongan', [LowonganController::class, 'getLowonganById'])->name('lowongan.list');
    // Route::post('mitra/lowongan', [LowonganController::class, 'store'])->name('lowongan.store');
    // Route::get('mitra/lowongan/{id}', [LowonganController::class, 'show']);
    // Route::put('mitra/lowongan/{id}', [LowonganController::class, 'update']);
    // Route::delete('mitra/lowongan/{id}', [LowonganController::class, 'destroy']);
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
    Route::get('lowongan/apply', [LowonganController::class, 'getUserData']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
