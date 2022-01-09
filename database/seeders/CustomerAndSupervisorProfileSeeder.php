<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomerAndSupervisorProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // random customer 
        DB::table('users')->insert([
            'name' => Str::random(10),
            'login' => Str::random(10),
            'email' => Str::random(10).'@localhost.com',
            'password' => Hash::make('password'),
        ]);
        // default customer 
        DB::table('users')->insert([
            'name' => 'tartampion',
            'login' => 'tartampion',
            'email' => 'tartampion@localhost.com',
            'password' => Hash::make('tartampion'),
        ]);
        // default supervisor 
        DB::table('users')->insert([
            'name' => 'DJEMBI Felix Telly',
            'login' => 'supervisor',
            'email' => 'supervisor@localhost.com',
            'password' => Hash::make('tartampion'),
        ]);
    }
}
