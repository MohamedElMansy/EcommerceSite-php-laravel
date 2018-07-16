<?php

use Illuminate\Database\Seeder;
use App\size;
class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        size::create([
            'title' => 'S'
        ]);

        size::create([
            'title' => 'X'
        ]);

        size::create([
            'title' => 'XL'
        ]);

        size::create([
            'title' => '2XL'
        ]);
    }
}
