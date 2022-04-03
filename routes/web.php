<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuthController;

Route::get('/', [RuthController::class, 'index']);
Route::get('/chapter/{chapter_number}', [RuthController::class, 'displayChapter']);
Route::get('/all-chapters', [RuthController::class, 'displayAllChapters']);