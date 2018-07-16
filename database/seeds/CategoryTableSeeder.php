<?php

use Illuminate\Database\Seeder;
use App\category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
            'title' => 'Women'
        ]);

        category::create([
            'title' => 'Men'
        ]);

        category::create([
            'title' => 'Bags'
        ]);

        category::create([
            'title' => 'Watches'
        ]);

    }
}
