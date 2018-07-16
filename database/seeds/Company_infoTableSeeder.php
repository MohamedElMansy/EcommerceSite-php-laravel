<?php

use Illuminate\Database\Seeder;
use App\company;

class Company_infoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        company::create([

            'address' => 'Center 8th floor, 379 Hudson St, New York, NY 10018 US',
            'phone' => '+1 800 12368791',
            'sale_support' => 'contact@example.com'


            ]);
    }
}
