<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerInfo extends Model
{
    use HasFactory;

    public function deliveryorderdoc()
    {
        return $this->hasMany(deliveryorderdoc::class);
    }
}
