<?php

use App\Models\BuyerInfo;
use App\Models\DeliveryOrderDoc;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

//Index
Route::get('/', function () {
    $items = DeliveryOrderDoc::all();

    //dd($items);

    //dd($items->find(1));

    //dd($cuba->find(1)->deliveryorderdoc->value('DONumber'));

    return view('docsapp.index', [
        'listdoc' => $items
    ]);
});

//Create
Route::get('/create', function () {
    $dodocs = DeliveryOrderDoc::all()->last()->id + 1;
    $digit = 6 - Str::length("{$dodocs}");
    $zeros = Str::repeat("0", $digit);
    $donum = "{$zeros}{$dodocs}";

    //dd($donum);

    return view('docsapp.create', [
        'docnum' => $donum
    ]);
});
