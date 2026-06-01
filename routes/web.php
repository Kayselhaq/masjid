<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/profil', [PageController::class, 'profil']);
Route::get('/kegiatan', [PageController::class, 'kegiatan']);
Route::get('/kegiatan/{id}', function ($id) {
    return "Detail kegiatan ID: " . $id;
});
Route::get('/kegiatan/{id}', [PageController::class, 'detailKegiatan']);
Route::get('/pengumuman', [PageController::class, 'pengumuman']);
Route::get('/keuangan', [PageController::class, 'keuangan']);
Route::get('/galeri', [PageController::class, 'galeri']);
Route::get('/pengumuman/{id}', [PageController::class, 'detailPengumuman']);
Route::get('/donasi', [PageController::class, 'donasi']);
Route::get('/export-keuangan', [PageController::class, 'exportKeuangan']);