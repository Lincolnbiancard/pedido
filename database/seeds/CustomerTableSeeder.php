<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
 
    public function run()
    {
        DB::table('customers')->insert(
        [
            [
                'name' => 'Mario Augusto',
                'cpf' => '38954769321',
            ],
            [
                'name' => 'Fatima Bernardes',
                'cpf' => '89657413952',
            ],
            [
                'name' => 'Marina Ruy Barbosa',
                'cpf' => '896287413925',
            ],
            
        ]
    );
    }
}
