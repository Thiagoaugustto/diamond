<?php

use Illuminate\Database\Seeder;
use App\Entities\PedidoProdutos;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        PedidoProdutos::create([
        	'user_id'  => '1',
            'status' => 'RE'           
        ]);
    }
}
