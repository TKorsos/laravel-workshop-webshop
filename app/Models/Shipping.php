<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $appends = ['formatted_price'];

        function getFormattedPriceAttribute() {
         return formatPrices($this->attributes['price']); // number_format()
    }
}
