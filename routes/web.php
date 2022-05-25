<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jurusancontroller;
use App\Http\Controllers\dosencontroller;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\mahasiswacontroller;


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
    return view('home');
});
// Route::get('/contoh/{nama?}', function ($nama = "admin") {
//     echo "welcome, $nama";
// });
// Route::get('/contoh2', function () {
//     return view('contoh.test');
// });
// Route::get('/contoh2/home', function () {
//     return view('contoh.home');
// })-> name('home');
// Route::get('/contoh2', function () {
//     return view('contoh.test');
// })-> name('menu');
// Route::get('/contoh2/profile', function () {
//     return view('contoh.profile');
// })-> name('profile');
// Route::get('/contoh2/contact', function () {
//     return view('contoh.contact');
// })-> name('contact');
// route::get('/nilai', function () {
//     $nama = "haykal";
//     $nilai_awal = 1;
//     $nilai_batas = 10;
//     $nilai = [90,28,58,90,78,30];
//     $rata = round(collect($nilai)->avg());
//     //$rata = round(array_sum($nilai)/count($nilai));
    
//     return view('universitas.nilai', compact('nama','nilai_awal','nilai_batas','nilai','rata'));
// });
// Route::get('/mahasiswa', function () {
//     $mhs = ['budi','siti','anton','bambang','hafidh','helmi','irham'];
//     return view('universitas.mahasiswa', compact('mhs'));
// })-> name('mahasiswa');
// Route::get('/jurusan', function () {
//     $jur = ['informatika komputer','komputer akuntansi','office management','sekretaris'];
//     return view('universitas.jurusan', compact('jur'));
// })-> name('jurusan');
// Route::get('/galeri', function () {
//     return view('universitas.galeri');
// })-> name('galeri');

Route::get('/jurusan', [jurusancontroller::class, 'index']);
Route::get('/jurusan/form', [jurusancontroller::class, 'create']);
Route::post('/jurusan/store', [jurusancontroller::class, 'store']);


Route::get('/dosen', [dosencontroller::class, 'index']);
Route::get('/dosen/form', [dosencontroller::class, 'create']);
Route::post('/dosen/store', [dosencontroller::class, 'store']);


Route::get('/jurusan/edit/{id}', [jurusancontroller::class, 'edit']);
Route::put('/jurusan/{id}', [jurusancontroller::class, 'update']);
Route::delete('/jurusan/{id}', [jurusancontroller::class, 'destroy']);


Route::get('/dosen/edit/{id}', [dosencontroller::class, 'edit']);
Route::put('/dosen/{id}', [dosencontroller::class, 'update']);
Route::delete('/dosen/{id}', [dosencontroller::class, 'destroy']);

Route::get('/mahasiswa', [mahasiswacontroller::class, 'index']);
Route::get('/mahasiswa/form', [mahasiswacontroller::class, 'create']);
Route::post('/mahasiswa/store', [mahasiswacontroller::class, 'store']);

Route::get('/uploadberkas', [FileUploadController::class, 'index']);
Route::post('/proses-upload', [FileUploadController::class, 'prosesUpload']);




