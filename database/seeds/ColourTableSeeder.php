<?php

use Illuminate\Database\Seeder;
use App\colour;


class ColourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        colour::create([
            'name' => 'Black'
        ]);

        colour::create([
            'name' => 'Blue'
        ]);

        colour::create([
            'name' => 'Red'
        ]);

        colour::create([
            'name' => 'Green'
        ]);

        colour::create([
            'name' => 'Gray'
        ]);

        colour::create([
            'name' => 'White'
        ]);
    }
}
