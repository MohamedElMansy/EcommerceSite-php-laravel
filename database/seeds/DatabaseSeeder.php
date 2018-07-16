<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(sliderTableSeeder::class);
        $this->call(BannerTableSeeder::class);
        $this->call(ColourTableSeeder::class);
        $this->call(SizeTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(Company_infoTableSeeder::class);

    }
}
