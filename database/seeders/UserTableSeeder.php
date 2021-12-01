<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Saliou Tine",
            'phone' => "700000000000",
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => "Saliou Tine 8",
            'phone' => "700000000001",
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => "Saliou Tine 5",
            'phone' => "700000000002",
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => "Saliou Tine 4",
            'phone' => "700000000003",
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => "Saliou Tine 2",
            'phone' => "700000000004",
            'password' => Hash::make('password'),
        ]);

    }
}
