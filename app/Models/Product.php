<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use HasFactory;
    
    protected $guarded = [];

    protected $appends = ['formatted_price', 'formatted_hot_price'];
  

    function category(){
        return $this->belongsTo(Category::class);
    }

    
    function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
    }
 

    function images(){
        return $this->hasMany(Image::class)->orderby('index', 'desc');
    }

    function indeximage(){
        
        return $this->hasOne(Image::class)->where('index', 1)->withDefault([
            'path' => $this->images()->count() > 0 ? $this->images()->first()->path : '/assets/images/products/no-image.jpg',
            'index' => 1
        ]);
    }

   function getFormattedPriceAttribute() {
         return formatPrices($this->attributes['price']); // number_format()
    }

    function getFormattedHotPriceAttribute() {
        return $this->attributes['hot_price'] ? formatPrices($this->attributes['hot_price']) : false;
    }
 
}
