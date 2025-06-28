<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    //
    protected $guarded = [];

    protected $appends = ['product_details_json'];

    function setProductDetailsJsonAttribute($value) {
        $this->attributes["product_details_json"] = json_encode($value);
    }

        function getProductDetailsJsonAttribute() {
         return json_decode($this->attributes["product_details_json"]);
    }
}
