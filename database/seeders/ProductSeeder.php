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
            'title' => 'Easy',
            'description' => 'Cotton Shirt',
            'quantity' => '6',
            'price' => '1500',
            'category_id' =>'1',
        ]);
    }
}
