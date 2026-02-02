<?php

use App\Http\Controllers\AdministrasiPendaftaranController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\AsramaController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\TingkatKelasQuranController;
use App\Http\Controllers\GelombangTestController;
use App\Http\Controllers\KelasQuranController;
use App\Http\Controllers\TingkatKelasKitabController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.layoutAdmin');
});

//Master
Route::prefix('master')->name('master.')->group(function () {
    Route::resource('pengurus', controller: PengurusController::class);
    Route::resource(name: 'asrama', controller: AsramaController::class);
    Route::resource(name: 'kamar', controller: KamarController::class);
    Route::resource('tingkat-kelas-quran', controller: TingkatKelasQuranController::class);
    Route::resource('kelas-quran', controller: KelasQuranController::class);
    Route::resource('tingkat-kelas-kitab', controller: TingkatKelasKitabController::class);
});

Route::resource(
    'administrasi-pendaftaran',
    AdministrasiPendaftaranController::class
)->names('administrasi.pendaftaran');

Route::prefix('gelombang-test')->name('gelombang.test.')->group(function () {
    Route::get('/gelombang-1', [GelombangTestController::class, 'gelombang1View'])->name('gelombang1');
    Route::resource('gelombang-test', controller: GelombangTestController::class);
});
