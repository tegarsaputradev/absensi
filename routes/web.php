<?php

namespace App\Http\Controllers\ouput;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\input\LoginController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\EditUserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\input\AbsensiController;
use App\Http\Controllers\input\RegisterController;
use App\Http\Controllers\input\JurnalKantorController;
use App\Http\Controllers\input\JurnalLuarSekolahController;
use App\Http\Controllers\input\JurnalKelasController;
use App\Http\Controllers\input\JurnalAlquranController;
use App\Http\Controllers\input\JurnalEkstraController;
use App\Http\Controllers\output\AbsensiKehadiranController;
use App\Http\Controllers\output\JurnalKantorKelasController;
use App\Http\Controllers\output\kelas\JurnalKelas7Controller;
use App\Http\Controllers\output\kelas\JurnalKelas8Controller;
use App\Http\Controllers\output\kelas\JurnalKelas9Controller;
use App\Http\Controllers\output\OutputJurnalAlquranController;
use App\Http\Controllers\output\OutputJurnalEkstraController;
use App\Http\Controllers\DataJKAdanJLSController;

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


/*
Component
*/

// Profil
Route::get('/', [ProfilController::class, 'index'])->middleware('auth');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('is_admin');
Route::post('/register', [RegisterController::class, 'register'])->middleware('is_admin');

// Edit User
Route::get('/edit-user', [EditUserController::class, 'index'])->middleware('is_admin');

// Edit User Password
Route::get('/edit-user-password/{username}', [EditUserController::class, 'edit_password'])->middleware('is_admin');
Route::post('/edit-user-password/{username}', [EditUserController::class, 'update_password'])->middleware('is_admin');

// Get Data User
Route::get('/edit-user/{username}', [EditUserController::class, 'get_data'])->middleware('is_admin');

// Delete Data User
Route::get('/edit-user/delete/{username}', [EditUserController::class, 'delete_data'])->middleware('is_admin');

// Update Data User
Route::post('/edit-user/{username}', [EditUserController::class, 'update_data'])->middleware('is_admin');

// Logout
Route::get('/logout', [LoginController::class, 'keluar'])->middleware('auth');

// Signature
Route::get('/signature', [SignatureController::class, 'index'])->middleware('is_admin');

// Get Data Signature
Route::get('/signature/{kelas}', [SignatureController::class, 'get_data'])->middleware('is_admin');

// Get Data Tahun Ajaran
Route::get('/tahun-ajaran/{id}', [SignatureController::class, 'get_data_tahun_ajaran'])->middleware('is_admin');

// Update Data Signature
Route::post('/signature/{id}', [SignatureController::class, 'update_data'])->middleware('is_admin');

// Update Data Tahun Ajaran
Route::post('/tahun-ajaran/{id}', [SignatureController::class, 'update_tahun_ajaran'])->middleware('is_admin');



/*
Input
*/


// Kehadiran Absensi
Route::get('/absensi', [AbsensiController::class, 'index'])->middleware('auth');
Route::post('/absensi', [AbsensiController::class, 'store'])->middleware('auth');

// Jurnal Kantor
Route::get('/jurnal-kantor', [JurnalKantorController::class, 'index'])->middleware('auth');
Route::post('/jurnal-kantor', [JurnalKantorController::class, 'store'])->middleware('auth');

// Jurnal Kelas
Route::get('/jurnal-kelas', [JurnalKelasController::class, 'index'])->middleware('auth');
Route::post('/jurnal-kelas', [JurnalKelasController::class, 'store'])->middleware('auth');

// Jurnal Luar Sekolah
Route::get('/jurnal-luar-sekolah', [JurnalLuarSekolahController::class, 'index'])->middleware('auth');
Route::post('/jurnal-luar-sekolah', [JurnalLuarSekolahController::class, 'store'])->middleware('auth');

// Jurnal Al-Quran
Route::get('/jurnal-alquran', [JurnalAlquranController::class, 'index'])->middleware('auth');
Route::post('/jurnal-alquran', [JurnalAlquranController::class, 'store'])->middleware('auth');

// Jurnal Ekstra
Route::get('/jurnal-ekstrakurikuler', [JurnalEkstraController::class, 'index'])->middleware('auth');
Route::post('/jurnal-ekstrakurikuler', [JurnalEkstraController::class, 'store'])->middleware('auth');



/*
Output
*/

// Data Jurnal Kantor dan Jurnal Luar Sekolah
Route::get('/data-jka&jls', [JurnalKantorKelasController::class, 'index']);

// Data Absensi
Route::get('/data-absensi', [AbsensiKehadiranController::class, 'index']);

// Data Jurnal Kelas 7
Route::get('/data-jurnal-kelas-7', [JurnalKelas7Controller::class, 'index']);

// Data Jurnal Kelas 8
Route::get('/data-jurnal-kelas-8', [JurnalKelas8Controller::class, 'index']);

// Data Jurnal Kelas 9
Route::get('/data-jurnal-kelas-9', [JurnalKelas9Controller::class, 'index']);

// Data Jurnal Al-Quran
Route::get('/data-jurnal-alquran', [OutputJurnalAlquranController::class, 'index']);

// Data Jurnal Ekstrakurikuler
Route::get('/data-jurnal-ekstra', [OutputJurnalEkstraController::class, 'index']);