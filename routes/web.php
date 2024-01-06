<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\KeunggulanController;
use App\Http\Controllers\PrestasiNonController;
use App\Http\Controllers\PrestasiclientController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\ProgramUnggulanController;
use App\Http\Controllers\StrukturOrganisasiController;

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

// client akses
Route::get('/',[HomeController::class, 'index']);

Route::get('/pendaftaran',[HomeController::class, 'pendaftaran']);
Route::post('/pendaftaransiswa',[ProgramController::class, 'pendaftaranStore']);

Route::get('/kurikulum',[KurikulumController::class, 'index']);
Route::get('/keunggulan',[KeunggulanController::class, 'index']);
Route::get('/prestasi',[PrestasiclientController::class, 'index']);
Route::get('/strukturorganisasi',[StrukturOrganisasiController::class, 'index']);
Route::get('/agenda',[AgendaController::class, 'index']);
Route::get('/ekstrakulikuler',[EkstrakulikulerController::class, 'index']);
Route::get('/fasilitas',[FasilitasController::class, 'index']);

// admin akses
Route::middleware('auth')->group(function(){

    Route::get('/dashboard',[DashboardController::class, 'index']);
    Route::get('/logout',[AuthController::class, 'logout']);

    // PENDAFTARAN
    Route::get('/siswamendaftar',[ProgramController::class, 'siswamendaftar']);
    Route::get('/siswamendaftar/{id}',[ProgramController::class, 'show']);
    Route::get('/cetak-pendaftaran',[ProgramController::class, 'CetakPendaftaran']);

    Route::get('/siswamendaftar-delete/{slug}',[ProgramController::class, 'delete']);
    Route::get('/siswamendaftar-destroy/{slug}',[ProgramController::class, 'destroy']);

    // PROGRAM UNGGULAN
    Route::get('/program-unggulan',[ProgramUnggulanController ::class, 'index']);
    Route::get('/program-unggulan-add',[ProgramUnggulanController ::class, 'add']);
    Route::post('/program-unggulan-add',[ProgramUnggulanController ::class, 'store']);
    Route::get('/program-unggulan-edit/{slug}',[ProgramUnggulanController ::class, 'edit']);
    Route::post('/program-unggulan-edit/{slug}',[ProgramUnggulanController ::class, 'update']);
    Route::get('/program-unggulan-delete/{slug}',[ProgramUnggulanController ::class, 'delete']);
    Route::get('/program-unggulan-destroy/{slug}',[ProgramUnggulanController ::class, 'destroy']);

    // VIDEOS
    Route::get('/videos',[VideoController ::class, 'index']);

    // PRESTASI AKADEMIK
    Route::get('/prestasi-akademik',[PrestasiController ::class, 'index']);
    Route::get('/prestasi-akademik-add',[PrestasiController ::class, 'add']);
    Route::post('/prestasi-akademik-add',[PrestasiController ::class, 'store']);
    Route::get('/prestasi-akademik-edit/{slug}',[PrestasiController ::class, 'edit']);
    Route::post('/prestasi-akademik-edit/{slug}',[PrestasiController ::class, 'update']);
    Route::get('/prestasi-akademik-delete/{slug}',[PrestasiController ::class, 'delete']);
    Route::get('/prestasi-akademik-destroy/{slug}',[PrestasiController ::class, 'destroy']);

    // PRESTASI NON AKADEMIK
    Route::get('/prestasi-non-akademik',[PrestasiNonController ::class, 'index']);
    Route::get('/prestasi-non-akademik-add',[PrestasiNonController ::class, 'add']);
    Route::post('/prestasi-non-akademik-add',[PrestasiNonController ::class, 'store']);
    Route::get('/prestasi-non-akademik-edit/{slug}',[PrestasiNonController ::class, 'edit']);
    Route::post('/prestasi-non-akademik-edit/{slug}',[PrestasiNonController ::class, 'update']);
    Route::get('/prestasi-non-akademik-delete/{slug}',[PrestasiNonController ::class, 'delete']);
    Route::get('/prestasi-non-akademik-destroy/{slug}',[PrestasiNonController ::class, 'destroy']);

    // GALLERY
    Route::get('/gallery',[GalleryController::class, 'index']);
    Route::get('/gallery-add',[GalleryController ::class, 'add']);
    Route::get('/gallery-edit/{slug}',[GalleryController ::class, 'edit']);
    Route::post('/gallery-edit/{slug}',[GalleryController ::class, 'update']);
    Route::post('/gallery-add',[GalleryController ::class, 'store']);
    Route::get('/gallery-delete/{slug}',[GalleryController ::class, 'delete']);
    Route::get('/gallery-destroy/{slug}',[GalleryController ::class, 'destroy']);

    // STRUKTUR ORGANISASI
    Route::get('/struktur',[StrukturController::class, 'index']);
    Route::get('/struktur-add',[StrukturController ::class, 'add']);
    Route::post('/struktur-add',[StrukturController ::class, 'store']);
    Route::get('/struktur-edit/{slug}',[StrukturController ::class, 'edit']);
    Route::post('/struktur-edit/{slug}',[StrukturController ::class, 'update']);
    Route::get('/struktur-destroy/{slug}',[StrukturController ::class, 'destroy']);

});

Route::middleware('only_guest')->group(function(){
    Route::get('/login',[AuthController::class, 'login'])->name('login');
    // Route::get('/register',[AuthController::class, 'register']);
    Route::post('/login',[AuthController::class, 'authenticating']);
});


