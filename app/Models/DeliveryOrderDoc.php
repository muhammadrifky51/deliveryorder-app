<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryOrderDoc extends Model
{
    use HasFactory;

    protected $fillable = ["buyer_info_id", "seller_info_id", "DONumber", "PONumber", "DeliveryDate", "DocNotes"];

    public function deliveryorderdocdetails()
    {
        return $this->hasMany(deliveryorderdocdetail::class);
    }

    public function buyerinfo()
    {
        return $this->belongsTo(buyerinfo::class, "buyer_info_id", "id");
    }

    public function sellerinfo()
    {
        return $this->belongsTo(SellerInfo::class, "seller_info_id", "id");
    }

    public function items()
    {
        return $this->belongsToMany(item::class, "delivery_order_doc_details");
    }
}
