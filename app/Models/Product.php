<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'name', 'price', 'bar_code'];

    public $timestamps = false;

    public function Orders() { 
        return $this->hasMany('App\Models\Orders'); //Product pertence a vários Orders
    }
}
