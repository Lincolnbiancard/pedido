<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['id', 'name', 'cpf'];

    public $timestamps = false;

    protected $table = 'customers';

    public function Orders() { 
        return $this->hasOne('App\Models\Orders'); 
    }
}

