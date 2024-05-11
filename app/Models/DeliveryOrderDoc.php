<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryOrderDoc extends Model
{
    use HasFactory;

    public function deliveryorderdocdetails()
    {
        return $this->hasMany(deliveryorderdocdetail::class);
    }

    public function buyerinfo()
    {
        return $this->belongsTo(buyerinfo::class);
    }

    public function sellerinfo()
    {
        return $this->belongsTo(SellerInfo::class);
    }
}
