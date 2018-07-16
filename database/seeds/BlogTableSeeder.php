<?php

use Illuminate\Database\Seeder;
use App\blog;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


            blog::create([

                'title' => '8 Inspiring Ways to Wear Dresses in the Winter',
                'description' => 'Duis ut velit gravida nibh bibendum commodo. Suspendisse pellentesque mattis augue id euismod. Interdum et male-suada fames',
                'pic' => 'blog-01',
                'slug' => 'Inspiring_Ways_to_Wear_Dresses',
                'categories'=>'StreetStyle, Fashion, Couple'
            ]);

        blog::create([

            'title' => 'The Great Big List of Men’s Gifts for the Holidays',
            'description' => 'Duis ut velit gravida nibh bibendum commodo. Suspendisse pellentesque mattis augue id euismod. Interdum et male-suada fames',
            'pic' => 'blog-02',
            'slug' => 'Men’s_Gifts_for_the_Holidays',
            'categories'=>'StreetStyle, Fashion'
        ]);


        blog::create([

            'title' => '5 Winter-to-Spring Fashion Trends to Try Now',
            'description' => 'Duis ut velit gravida nibh bibendum commodo. Suspendisse pellentesque mattis augue id euismod. Interdum et male-suada fames',
            'pic' => 'blog-03',
            'slug' => 'Winter_to_Spring_Fashion',
            'categories'=>'Fashion, Couple'
        ]);


    }
}
