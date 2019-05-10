<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'id_customer', 'id_product', 'quantity','date', 'total'];

    public $timestamps = false;

    public function customer()
    {        
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }

    public function products()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }

}
