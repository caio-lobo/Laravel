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
        //
        // DB::table("users")->insert([
        //     'name'=>'Caio Lobo',
        //     'email'=>"caio@lobo.com",
        //     'password'=>Hash::make('123')
        // ]);
        DB::table("users")->insert([
            'name'=>'Pepa Pig',
            'email'=>"pepa@pig.com",
            'password'=>Hash::make('123')
        ]);
    }
}
