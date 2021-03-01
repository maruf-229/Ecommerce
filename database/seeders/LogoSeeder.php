<?php

namespace Database\Seeders;

use App\Models\Logo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logo = new Logo();
        $logo->image = 'logo.png';
        $logo->save();
    }
}
