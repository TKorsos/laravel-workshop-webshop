<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use HasFactory;

    protected $guarded = [];

    #protected $fillable = ['field1'];

 

    function products() {
        return $this->hasMany(Product::class);
    }

    function getPublicImageAttribute(){
        return $this->attributes["image"] ? $this->attributes["image"] : '/assets/images/products/no-image.jpg';
    }

  
}
