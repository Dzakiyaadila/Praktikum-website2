<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/terbaru', [BookController::class, 'terbaru']); 
Route::get('/books/filter', [BookController::class, 'filter']); 