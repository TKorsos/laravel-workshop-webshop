<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guarded = [];

    protected $appends = ['contact_data', 'shipping_address', 'billing_address'];
 

        function setShippingAddressAttribute($value) {
        $this->attributes["shipping_address"] = json_encode($value);
        }

        function getShippingAddressAttribute() {
         return json_decode($this->attributes["shipping_address"]);
        }

        function setBillingAddressAttribute($value) {
        $this->attributes["billing_address"] = json_encode($value);
        }

        function getBillingAddressAttribute() {
         return json_decode($this->attributes["billing_address"]);
        }

        function setContactDataAttribute($value) {
        $this->attributes["contact_data"] = json_encode($value);
        }

        function getContactDataAttribute() {
         return json_decode($this->attributes["contact_data"]);
        }

       

        function products(){
            return $this->hasMany(OrderProduct::class);
        }

        function user(){
            return $this->belongsTo(User::class);
        }
}
