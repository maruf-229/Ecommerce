<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_infos')->insert([
            'address' => ' 4/b, road-7, Block-c, Nobody housing, Mohammadpur Dhaka',
            'phone' => '01799631258',
            'email' => 'mhmaruf229@gmail.com',
        ]);
    }
}
