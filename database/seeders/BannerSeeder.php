<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner = new Banner();
        $banner->title = 'Welcome To  Thewayshop';
        $banner->description = 'See how your users experience your website in realtime or view  trends to see any changes in performance over time.';
        $banner->image = 'banner-01.jpg';
        $banner->save();

    }
}
