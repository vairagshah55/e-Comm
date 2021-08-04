<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name'=> 'Jaynam shah',
                'email'=> 'Jaynamshah55@gmail.com',
                'password'=>Hash::make('jaynam@123')
        ]);
    }
}