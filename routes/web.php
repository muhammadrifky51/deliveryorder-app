<?php

use App\Http\Controllers\docsappController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [docsappController::class, 'index']);
Route::get('/create', [docsappController::class, 'create']);
//Route::post('/', function (Request $request) {
//dd($request->all());
//    dd($request->file('imgfile1')->store('public/images'));
//});
Route::post('/', [docsappController::class, 'store']);
