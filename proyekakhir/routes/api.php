<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;

// Auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Middleware auth
Route::middleware('auth:sanctum')->group(function () {

    // Produk
    Route::post('/produk', [ProdukController::class, 'create']);
    Route::get('/produk', [ProdukController::class, 'read']);
    Route::get('/produk/{id}', [ProdukController::class, 'show']); // optional single produk
    Route::put('/produk/{id}', [ProdukController::class, 'update']);
    Route::delete('/produk/{id}', [ProdukController::class, 'delete']);

    // Kategori
    Route::post('/kategori', [KategoriController::class, 'create']);
    Route::get('/kategori', [KategoriController::class, 'read']);
    Route::get('/kategori/{id}', [KategoriController::class, 'show']); // optional single kategori
    Route::put('/kategori/{id}', [KategoriController::class, 'update']);
    Route::delete('/kategori/{id}', [KategoriController::class, 'delete']);

    // Pelanggan
    Route::post('/pelanggan', [PelangganController::class, 'create']);
    Route::get('/pelanggan', [PelangganController::class, 'read']);
    Route::get('/pelanggan/{id}', [PelangganController::class, 'show']); // optional single pelanggan
    Route::put('/pelanggan/{id}', [PelangganController::class, 'update']);
    Route::delete('/pelanggan/{id}', [PelangganController::class, 'delete']);
});
