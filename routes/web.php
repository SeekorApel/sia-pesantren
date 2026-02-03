<?php

use App\Http\ControllersistrasiPendaftaranController;
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
Route::prefix('jenjangPendidikan')->name('jenjangPendidikan.')->group(function () {
    Route::get('', [App\Http\Controllers\System\JenjangPendidikanMadrasah\JenjangPendidikanMadrasahController::class, 'index'])->name('index');
    Route::get('getData', [App\Http\Controllers\System\JenjangPendidikanMadrasah\JenjangPendidikanMadrasahController::class, 'getData'])->name('getData');
    Route::post('store', [App\Http\Controllers\System\JenjangPendidikanMadrasah\JenjangPendidikanMadrasahController::class, 'store'])->name('store');
    Route::post('update', [App\Http\Controllers\System\JenjangPendidikanMadrasah\JenjangPendidikanMadrasahController::class, 'update'])->name('update');
    Route::post('destroy', [App\Http\Controllers\System\JenjangPendidikanMadrasah\JenjangPendidikanMadrasahController::class, 'destroy'])->name('destroy');
});

Route::prefix('tingkatMadrasah')->name('tingkatMadrasah.')->group(function () {
    Route::get('', [App\Http\Controllers\System\TingkatKelasMadrasah\TingkatKelasMadrasahController::class, 'index'])->name('index');
    Route::get('getData', [App\Http\Controllers\System\TingkatKelasMadrasah\TingkatKelasMadrasahController::class, 'getData'])->name('getData');
    Route::post('store', [App\Http\Controllers\System\TingkatKelasMadrasah\TingkatKelasMadrasahController::class, 'store'])->name('store');
    Route::post('update', [App\Http\Controllers\System\TingkatKelasMadrasah\TingkatKelasMadrasahController::class, 'update'])->name('update');
    Route::post('destroy', [App\Http\Controllers\System\TingkatKelasMadrasah\TingkatKelasMadrasahController::class, 'destroy'])->name('destroy');
});

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
