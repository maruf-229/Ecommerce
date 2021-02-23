<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'title' => Str::random(10),
            'description' =>  Str::random(1000),
            'quantity' => rand(1,1000),
            'price' => rand(1,10000),
            'category_id' => rand(1,3),
        ]);
    }
}
