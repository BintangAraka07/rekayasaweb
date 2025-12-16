<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/produk/create', [ProdukController::class, 'create']);
    Route::get('/produk/read', [ProdukController::class, 'read']);
    Route::put('/produk/update', [ProdukController::class, 'update']);
    Route::delete('/produk/delete', [ProdukController::class, 'delete']);

    Route::post('/kategori/create', [KategoriController::class, 'create']);
    Route::get('/kategori/read', [KategoriController::class, 'read']);
    Route::put('/kategori/update', [KategoriController::class, 'update']);
    Route::delete('/kategori/delete', [KategoriController::class, 'delete']);

    Route::post('/pelanggan/create', [PelangganController::class, 'create']);
    Route::get('/pelanggan/read', [PelangganController::class, 'read']);
    Route::put('/pelanggan/update', [PelangganController::class, 'update']);
    Route::delete('/pelanggan/delete', [PelangganController::class, 'delete']);
});
