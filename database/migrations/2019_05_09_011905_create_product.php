<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduct extends Migration
{
    
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->float('price', 10, 2);
            $table->string('bar_code');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
