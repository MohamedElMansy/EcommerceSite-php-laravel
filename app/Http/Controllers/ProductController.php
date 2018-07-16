<?php

namespace App\Http\Controllers;

use App\colour;
use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show($slug)
    {
        $products =product::with('colour')->with('size')->where('slug',$slug)->get();

        $ranproducts =product::inrandomorder()->take(8)->get();

        return view('product-detail')->with(
            [   'products' => $products,
                'ranproducts' =>$ranproducts

            ]);
    }
}
