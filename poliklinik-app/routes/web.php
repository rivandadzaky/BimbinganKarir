<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\JadwalPeriksaController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\DaftarPoliController;



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

Route::get('/',function(){
  return view('index');
});

Route::get('/welcome', function (){
    return view('welcome');
})->middleware('auth');

Route::get('/dokterpage', function (){
    return view('dokterpage');
});

Route::get('/pasienmenu', function (){
  return view('pasienmenu');
})->middleware('auth');


// login dan register admin
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');


Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
// login dan register admin


//login dan register dokter
Route::get('/logindokter', [LoginController::class, 'logindokter'])->name('logindokter');
Route::post('/logindokterproses', [LoginController::class, 'logindokterproses'])->name('logindokterproses');

Route::get('/registerdokter', [LoginController::class, 'registerdokter'])->name('registerdokter');
Route::post('/registerdokters', [LoginController::class, 'registerdokters'])->name('registerdokters');


// login dan register dokter


//login dan register pasien
Route::get('/loginpasien', [LoginController::class, 'loginpasien'])->name('loginpasien');
Route::post('/loginpasienproses', [LoginController::class, 'loginpasienproses'])->name('loginpasienproses');

Route::get('/registerpasien', [LoginController::class, 'registerpasien'])->name('registerpasien');
Route::post('/registerpasiens', [LoginController::class, 'registerpasiens'])->name('registerpasiens');


// login dan register pasien

// tambah data obat
Route::get('/obat',[ObatController::class, 'obat'])->name('obat');
Route::post('/insertobat',[ObatController::class, 'insertobat'])->name('insertobat');
Route::get('/tampilobat/{id}',[ObatController::class, 'tampilobat'])->name('tampilobat');
Route::post('/editobat/{id}',[ObatController::class, 'editobat'])->name('editobat');
Route::get('/hapusobat/{id}',[ObatController::class, 'hapusobat'])->name('hapusobat');
    
// tambah data obat


// tambah data dokter
Route::get('/dokter',[DokterController::class, 'dokter'])->name('dokter');
Route::post('/insertdokter',[DokterController::class, 'insertdokter'])->name('insertdokter');
Route::get('/tampildokter/{id}',[DokterController::class, 'tampildokter'])->name('tampildokter');
Route::post('/editdokter/{id}',[DokterController::class, 'editdokter'])->name('editdokter');
Route::get('/hapusdokter/{id}',[DokterController::class, 'hapusdokter'])->name('hapusdokter');
// tambah data dokter

// tambah data pasien
Route::get('/pasien',[PasienController::class, 'pasien'])->name('pasien');
Route::post('/insertpasien', [PasienController::class, 'insertpasien'])->name('insertpasien');
Route::get('/tampilpasien/{id}', [PasienController::class, 'tampilpasien'])->name('tampilpasien');
Route::post('/editpasien/{id}', [PasienController::class, 'editpasien'])->name('editpasien');
Route::get('/hapuspasien/{id}', [PasienController::class, 'hapuspasien'])->name('hapuspasien');
// tambah data pasien

// tambah data poli
Route::get('/poli',[PoliController::class,'poli'])->name('poli');
Route::post('/insertpoli',[PoliController::class,'insertpoli'])->name('insertpoli');
Route::get('/tampilpoli/{id}',[PoliController::class,'tampilpoli'])->name('tampilpoli');
Route::post('/editpoli/{id}',[PoliController::class,'editpoli'])->name('editpoli');
Route::get('/hapuspoli/{id}',[PoliController::class,'hapuspoli'])->name('hapuspoli');
// tambah data poli

// halaman jadwal periksa
Route::get('/jadwalperiksa',[JadwalPeriksaController::class,'jadwalperiksa'])->name('jadwalperiksa');
Route::get('/tambahjadwalperiksa',[JadwalPeriksaController::class,'tambahjadwalperiksa'])->name('tambahjadwalperiksa');
Route::get('/tampiljadwal',[JadwalPeriksaController::class,'tampiljadwal'])->name('tampiljadwal');
// Route::post('/insertjadwal',[JadwalPeriksaController::class,'insertjadwal'])->name('insertjadwal');
// halaman jadwal periksa

// periksa pasien
Route::get('/periksapasien',[PeriksaController::class,'periksapasien'])->name('periksapasien');
// periksa pasien

// riwayat pasien
Route::get('/riwayatpasien',[PasienController::class,'riwayatpasien'])->name('riwayatpasien');
// riwayat pasien

// riwayat pasien
Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
Route::post('/editprofil/{id}',[ProfileController::class, 'editprofil'])->name('editprofil');
// riwayat pasien

// daftar poli
Route::get('/daftarpoli',[DaftarPoliController::class,'daftarpoli'])->name('daftarpoli');
// daftar poli