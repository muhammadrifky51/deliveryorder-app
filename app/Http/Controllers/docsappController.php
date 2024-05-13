<?php

namespace App\Http\Controllers;

use App\Models\BuyerInfo;
use App\Models\DeliveryOrderDoc;
use App\Models\DeliveryOrderDocDetail;
use App\Models\Item;
use DateTime;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class docsappController extends Controller
{
    public function index()
    {
        $items = DeliveryOrderDoc::all();
        return view('docsapp.index', [
            'listdoc' => $items
        ]);
    }

    public function create()
    {
        $dodocs = DeliveryOrderDoc::all()->last()->id + 1;
        $digit = 6 - Str::length("{$dodocs}");
        $zeros = Str::repeat("0", $digit);
        $donum = "{$zeros}{$dodocs}";

        return view('docsapp.create', [
            'docnum' => $donum,
        ]);
    }

    public function store()
    {
        $errmsg = [];
        $items = [];
        $itemqty = [];

        $buyername = request('buyername');
        if ($buyername == null) {
            $errmsg['buyername'] = "Buyer name cannot be blank";
        } else {
            $buyeralreadyexist = BuyerInfo::where('Name', '=', $buyername)->first();
            if (request('buyeraddress') == null and $buyeralreadyexist == null) {
                $errmsg['buyeraddress'] = "Cannot find the Buyer Name. Please input at least address 1 if you want to add new buyer.";
            }
        }

        if (request("PONumber") == null) {
            $errmsg["PONumber"] = "Please input PO Number";
        }

        $date = request('datepicker');
        $d = DateTime::createFromFormat('m/d/Y', $date);

        if ($date == null) {
            $errmsg['datepicker'] = "Date cannot be blank";
        } elseif ($d && $d->format('m/d/Y') === $date) {
            "well, do nothing here";
        } else {
            $errmsg['datepicker'] = "Select date from Date Picker";
        }

        if (request('items1') == "Select Item") {
            $items1 = null;
        } else {
            $items1 = request('items1');
            array_push($items, $items1);
            if (request('itemqty1') == null) {
                $errmsg['itemqty1'] = "Please input the quantity";
            } else {
                $itemqty[$items1] = request('itemqty1');
            }
        }
        if (request('items2') == "Select Item") {
            $items2 = null;
        } else {
            $items2 = request('items2');
            array_push($items, $items2);
            if (request('itemqty2') == null) {
                $errmsg['itemqty2'] = "Please input the quantity";
            } else {
                $itemqty[$items2] = request('itemqty2');
            }
        }
        if (request('items3') == "Select Item") {
            $items3 = null;
        } else {
            $items3 = request('items3');
            array_push($items, $items3);
            if (request('itemqty3') == null) {
                $errmsg['itemqty3'] = "Please input the quantity";
            } else {
                $itemqty[$items3] = request('itemqty3');
            }
        }
        if (count($items) === 0) {
            $errmsg['items'] = "Please input at least 1 item";
        } elseif (count($items) > count(array_unique($items))) {
            $errmsg['items'] = "Items cannot be duplicate";
        }
        $validation = FacadesValidator::make(request()->all(), ['buyernumber' => ["regex:/^((\(021\)|))([0-9]){6,10}$|^$/"]]);

        if (request('buyernumber') == null) {
            "I won't do nothing here, just beginner stuff who don't know negation on php";
        } else {
            if ($validation->fails()) {
                $errmsg['buyernumber'] = "Wrong phone number format";
            }
        }
        if (count($errmsg) > 0) {
            throw ValidationException::withMessages($errmsg);
        }

        //Update Buyer 
        if ($buyeralreadyexist == null) {
            BuyerInfo::create([
                'Name' => $buyername,
                'Address1' => request('buyeraddress'),
                'Address2' => request('buyeraddress2'),
                'PhoneNumber' => request('buyernumber')
            ]);
        }

        //Update Delivery Order Document
        DeliveryOrderDoc::create([
            'buyer_info_id' => BuyerInfo::where('Name', '=', $buyername)->first()->id,
            'seller_info_id' => 1,
            'DONumber' => request('DONumber'),
            'PONumber' => request('PONumber'),
            'DeliveryDate' => $d->format('Y-m-d'),
            'DocNotes' => request('notes')
        ]);

        $docsid = DeliveryOrderDoc::where('DONumber', "=", request('DONumber'))->first()->id;

        foreach ($items as $item) {
            DeliveryOrderDocDetail::create([
                'delivery_order_doc_id' => $docsid,
                'item_id' => Item::where('ItemDesc', '=', $item)->first()->id,
                'ItemQty' => $itemqty[$item]
            ]);
        }

        return redirect("/");
    }
}
