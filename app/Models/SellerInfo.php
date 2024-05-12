<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerInfo extends Model
{
    use HasFactory;

    protected $fillable = ["Name", "Address1", "Address2", "PhoneNumber"];

    public function deliveryorderdoc()
    {
        return $this->hasMany(deliveryorderdoc::class);
    }
}
