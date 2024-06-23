<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ItemPesananController;
use App\Http\Controllers\TransaksiPembayaranController;
use App\Models\TransaksiPembayaran;

Route::get('/', function () {
    return view('landing_page');
});

Route::controller(PelangganController::class)->group(function () {
        Route::get('/pelanggan', 'index')->name('pelanggan');
        Route::get('/pelanggan/create', 'create')->name('pelanggan.create');
        Route::post('/pelanggan/store', 'store')->name('pelanggan.store');
        Route::get('/pelanggan/{id}/edit', 'edit');
        Route::put('/pelanggan/{id}/update', 'update');
        Route::delete('/pelanggan/{id}/delete', 'destroy');
    });
;

Route::controller(PesananController::class)->group(function () {
    Route::get('/pesanan', 'index')->name('pesanan');
    Route::get('/pesanan/create', 'create')->name('pesanan.create');
    Route::post('/pesanan/store', 'store')->name('pesanan.store');
    Route::get('/pesanan/{id}/edit', 'edit');
    Route::put('/pesanan/{id}/update', 'update');
    Route::delete('/pesanan/{id}/delete', 'destroy');
});

Route::controller(ItemPesananController::class)->group(function () {
    Route::get('/item_pesanan', 'index')->name('item_pesanan');
    Route::get('/item_pesanan/create', 'create')->name('item_pesanan.create');
    Route::post('/item_pesanan/store', 'store')->name('item_pesanan.store');
    Route::get('/item_pesanan/{id}/edit', 'edit');
    Route::put('/item_pesanan/{id}/update', 'update');
    Route::delete('/item_pesanan/{id}/delete', 'destroy');
});

Route::controller(TransaksiPembayaranController::class)->group(function () {
    Route::get('/transaksi_pembayaran', 'index')->name('transaksi_pembayaran');
    Route::get('/transaksi_pembayaran/create', 'create')->name('transaksi_pembayaran.create');
    Route::post('/transaksi_pembayaran/store', 'store')->name('transaksi_pembayaran.store');
    Route::get('/transaksi_pembayaran/{id}/edit', 'edit');
    Route::put('/transaksi_pembayaran/{id}/update', 'update');
    Route::delete('/transaksi_pembayaran/{id}/delete', 'destroy');
});

Route::get('/login', function () {
    return view('login');
});