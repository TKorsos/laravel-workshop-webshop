<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    //
     protected $guarded = [];

    function products() {
        return $this->hasMany(Product::class);
    }

        function getPublicImageAttribute(){
        return $this->attributes["image"] ? $this->attributes["image"] : '/assets/images/products/no-image.jpg';
    }
}
