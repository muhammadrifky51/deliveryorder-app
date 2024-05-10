<?php

use App\Models\DeliveryOrderDocDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //$items=DeliveryOrderDocDetail::all();

    //dd($items);

    return view('docsapp.index');
});

Route::get('/create',function(){
    return view('docsapp.create');
});
