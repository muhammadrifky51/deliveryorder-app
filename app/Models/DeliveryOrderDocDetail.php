<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryOrderDocDetail extends Model
{
    use HasFactory;

    protected $fillable = ["delivery_order_doc_id", "item_id", "ItemQty", "Image"];

    public function items()
    {
        return $this->belongsToMany(item::class);
    }

    public function deliveryorderdoc()
    {
        return $this->belongsTo(deliveryorderdoc::class, "delivery_order_doc_id", "id");
    }
}
