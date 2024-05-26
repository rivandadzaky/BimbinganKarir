<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PoliController;

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

Route::get('/', function (){
    return view('welcome');
})->middleware('auth');

Route::get('/dokterpage', function (){
    return view('dokterpage');
});

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