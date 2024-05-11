<?php

use App\Models\DeliveryOrderDoc;
use App\Models\DeliveryOrderDocDetail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

//Index
Route::get('/', function () {
    //$items=DeliveryOrderDocDetail::all();

    //dd($items);

    return view('docsapp.index');
});

//Create
Route::get('/create', function () {
    $dodocs = DeliveryOrderDoc::all()->count() + 1;
    $digit = 6 - Str::length("{$dodocs}");
    $zeros = Str::repeat("0", $digit);
    $donum = "{$zeros}{$dodocs}";

    //dd($donum);

    return view('docsapp.create');
});
