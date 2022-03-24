<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Auto'
        ]);

        DB::table('categories')->insert([
            'name' => 'Beauty and Fitness'
        ]);

        DB::table('categories')->insert([
            'name' => 'Entertainment'
        ]);

        DB::table('categories')->insert([
            'name' => 'Food and Dining'
        ]);

        DB::table('categories')->insert([
            'name' => 'Health'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sports'
        ]);

        DB::table('categories')->insert([
            'name' => 'Travel'
        ]);
    }
}
