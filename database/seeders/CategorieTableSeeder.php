<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            'name' => "Foot"
        ]);

        DB::table('categories')->insert([
            'name' => "Ligue 1",
            'parent_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => "Premier League",
            'parent_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => "Bundesliga",
            'parent_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => "Liga",
            'parent_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => "People"
        ]);
        DB::table('categories')->insert([
            'name' => "Economie"
        ]);

    }
}
