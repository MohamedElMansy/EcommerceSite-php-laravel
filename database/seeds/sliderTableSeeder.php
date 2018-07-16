<?php

use Illuminate\Database\Seeder;
use App\slider;


class sliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        slider::create([
            'title' => 'Men Collection 2018',
            'slug' => 'men-slide',
            'description' => 'New Season',
            'pic' => 'slide-02',
            'link'=>'/Mencollection'


        ]);

        slider::create([
            'title' => 'Women Collection 2018',
            'slug' => 'Women-slide',
            'description' => 'New Season',
            'pic' => 'slide-01',
            'link'=>'/Womencollection'


        ]);
    }
}
