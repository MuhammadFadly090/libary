<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; 


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Resource route untuk CRUD buku
Route::apiResource('books', BookController::class);
