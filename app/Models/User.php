<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $appends = ['shipping_address', 'billing_address']; 
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    function getShippingAddressAttribute(){
        return json_decode($this->attributes["shipping_address"]);
    }

      function getFullNameAttribute(){
        return $this->attributes["first_name"].' '.$this->attributes["last_name"];
    }

    function getBillingAddressAttribute(){
        return json_decode($this->attributes["billing_address"]);
    }

    function orders() {
        return $this->hasMany(Order::class);
    }

    function contacts() {
        return $this->hasMany(Contact::class);
    }
}
