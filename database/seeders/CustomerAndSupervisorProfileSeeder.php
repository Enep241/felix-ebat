<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

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
        $random = User::create([
            'name' => Str::random(10),
            'login' => Str::random(10),
            'email' => Str::random(10).'@localhost.com',
            'password' => Hash::make('password'),
        ]);
        $random->assignRole('customer');
        // default customer 
        $tartampion = User::create([
            'name' => 'tartampion',
            'login' => 'tartampion',
            'email' => 'tartampion@localhost.com',
            'password' => Hash::make('tartampion'),
        ]);
        $tartampion->assignRole('customer');

        // default supervisor 
        $felix = User::create([
            'name' => 'DJEMBI Felix Telly',
            'login' => 'supervisor',
            'email' => 'supervisor@localhost.com',
            'password' => Hash::make('tartampion'),
        ]);
        $felix->assignRole('supervisor');
    }
}
