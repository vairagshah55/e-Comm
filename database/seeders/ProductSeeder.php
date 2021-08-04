<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('products')->insert([
                'name'=> 'Samsung Computer',
                'price'=>'10000',
                'description'=>'5th generatiom super computer ',
                'category'=>'Computer',
                'gallery'=>'capture.png'
               
        ]);
    }
}
