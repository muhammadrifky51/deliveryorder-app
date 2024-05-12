<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ["UnitPrices", "ItemDesc"];

    public function deliveryorderdocdetails()
    {
        return $this->belongsToMany(DeliveryOrderDocDetail::class);
    }

    public function deliveryorderdocs()
    {
        return $this->belongsToMany(DeliveryOrderDoc::class, "delivery_order_doc_details");
    }
}
