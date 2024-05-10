<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryOrderDocDetail extends Model
{
    use HasFactory;

    public function items()
    {
        return $this->belongsToMany(item::class);
    }

    public function deliveryorderdoc()
    {
        return $this->belongsTo(DeliveryOrderDoc::class);
    }
}
