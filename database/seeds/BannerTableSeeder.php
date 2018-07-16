<?php

use Illuminate\Database\Seeder;
use App\banner;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        banner::create([
            'title' => 'Women',
            'season' => 'Spring 2018',
            'pic' => 'banner-01',
            'link' => '/shop'
        ]);

        banner::create([
            'title' => 'Men',
            'season' => 'Spring 2018',
            'pic' => 'banner-02',
            'link' => '/shop'
        ]);

        banner::create([
            'title' => 'Accessories',
            'season' => 'New Trend',
            'pic' => 'banner-03',
            'link' => '/shop'
        ]);
    }
}
