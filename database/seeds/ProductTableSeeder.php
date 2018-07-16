<?php

use Illuminate\Database\Seeder;
use App\product;



class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i <20 ;$i++) {
            product::create([

                'title' => 'Esprit Ruffle Shirt'.$i,
                'main_pic' => 'product-01',
                'description' => 'Nulla '.$i.' eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.',
                'showedprice' => '$50.64',
                'price'=>'50.64',
                'slug' => 'Esprit_Ruffle_Shirt'.$i,
                'quantity' => $i,
                'sec_pic' => 'product-min-01',
                'third_pic'=>'product-02'


            ])->category()->attach(1);

            $product = product::find($i);
            $product->category()->attach(2);

            $product =product::find($i);
            $product->colour()->attach(2);

            $product =product::find($i);
            $product->size()->attach(4);


        }

        product::create([

            'title' => 'Herschel supply',
            'main_pic' => 'product-02',
            'description' => 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.',
            'showedprice' => '$10.64',
            'price'=>'10.64',
            'slug'=>'Herschel_supply',
            'quantity' => '3',
            'third_pic'=>'product-02',
            'sec_pic'=>'product-02'



        ]);



        product::create([

            'title' => 'Only Check Trouser',
            'main_pic' => 'product-03',
            'description' => 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.',
            'showedprice' => '$126.64',
            'price'=>'126',
            'slug'=>'Only_Check_Trouser',
            'quantity' => '3',
            'third_pic'=>'product-02',
            'sec_pic'=>'product-02'



        ]);



        product::create([

            'title' => 'Classic Trench Coat',
            'main_pic' => 'product-04',
            'description' => 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.',
            'price'=>'200.64',
            'showedprice' => '$200.64',
            'slug'=>'Classic_Trench_Coat',
            'quantity' => '5',
            'third_pic'=>'product-02',
            'sec_pic'=>'product-03'



        ]);



        product::create([

            'title' => 'Front Pocket Jumper',
            'main_pic' => 'product-05',
            'description' => 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.',
            'showedprice' => '$136.64',
            'price'=>'136.64',
            'slug'=>'Front_Pocket_Jumper',
            'quantity' => '3',
            'third_pic'=>'product-02',
            'sec_pic'=>'product-02'



        ]);
    }
}
