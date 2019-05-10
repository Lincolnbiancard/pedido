<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('products')->insert(
        [
            [
                'name' => 'Cafeteira Eletrica Eletrolux',
                'price' => 299.90,
                'bar_code' => '8952179334529987',
            ],
            [
                'name' => 'Notebook Dell Vostro 17" i7 8 ger',
                'price' => 2999.99,
                'bar_code' => '2884948742299557',
            ],
            [
                'name' => 'Maquina de lavar Brastemp 20kg',
                'price' => 1255,
                'bar_code' => '8897741166887',
            ],
            [
                'name' => 'Iphone X Octacore Silver',
                'price' => 6999.90,
                'bar_code' => '88722698236547',
            ],
            [
                'name' => 'Mouse Razer DeathAdder x5',
                'price' => 599.90,
                'bar_code' => '877569921489669',
            ],
            [
                'name' => 'Ventilador Mondial Black Edition',
                'price' => 299.90,
                'bar_code' => '789651234789',
            ],
        ]
    );
    }
}
