<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business')->insert([
            'name' => Str::random(10),
            'telephone' => Str::random(10),
            'address' => Str::random(10),
            'zip_code' => Str::random(10),
            'city' => Str::random(10),
            'state' => Str::random(10),
            'description' => Str::random(10),
        ]);
    }
}
