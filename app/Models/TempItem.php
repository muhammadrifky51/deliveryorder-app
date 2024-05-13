<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempItem extends Model
{
    protected $fillable = ["item_id", "ItemQty"];
}
