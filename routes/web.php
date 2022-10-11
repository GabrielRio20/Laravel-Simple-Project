<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UmbrellaController;

Route::get('/', [UmbrellaController::class, 'home']);
Route::get('/t_virus', [UmbrellaController::class, 'tVirus']);
Route::get('/g_virus', [UmbrellaController::class, 'gVirus']);
Route::get('/parasite', [UmbrellaController::class, 'parasite']);

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class, 'create']) -> name('buku.create');
Route::post('/buku', [BukuController::class, 'store']) -> name('buku.store');
Route::post('/buku/delete/{id}', [BukuController::class, 'destroy']) -> name('buku.destroy');

Route::get('/buku/update/{id}', [BukuController::class, 'edit']) -> name('buku.edit');
Route::post('/buku/update/{id}', [BukuController::class, 'update']) -> name('buku.update');

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/t_virus', function () {
//     return view('t_virus');
// });
// Route::get('/g_virus', function () {
//     return view('g_virus');
// });
// Route::get('/parasite', function () {
//     return view('parasite');
// });


// Route::get('/hoo', [PhotoController::class, 'halo']);

