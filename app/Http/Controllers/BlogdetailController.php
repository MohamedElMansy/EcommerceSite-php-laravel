<?php

namespace App\Http\Controllers;

use App\blog;
use App\product;
use Illuminate\Http\Request;

class BlogdetailController extends Controller
{

        function show($slug)
        {
            //selected blog
            $blogs=blog::where('slug',$slug)->get();

            //prodcuts
            $products=product::orderBy('created_at')->limit(4)->get();

            return view('blogdetail')->with([
                'blogs'=>$blogs,
                'products'=>$products,
            ]);

        }

}
