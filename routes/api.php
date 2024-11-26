<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Api\bukuController;

Route::get('/user', function (Request $request) {

    return $request->user();
})->middleware('auth:sanctum');

Route::get('/buku', [BukuController::class, 'index'])->name('bukuApi.index');