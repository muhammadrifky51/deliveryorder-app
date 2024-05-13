<?php

use App\Http\Controllers\docsappController;
use Illuminate\Support\Facades\Route;

Route::get('/', [docsappController::class, 'index']);
Route::get('/create', [docsappController::class, 'create']);
Route::post('/', [docsappController::class, 'store']);
