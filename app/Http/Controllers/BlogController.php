<?php

namespace App\Http\Controllers;

use App\blog;
use App\product;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function show()
    {
        //blogs from database
        $blogs=blog::paginate(2);

        //products
        $products=product::orderBy('created_at')->limit(4)->get();

        return view('blog')->with([
            'blogs'=> $blogs,
            'products' => $products
        ]);
    }


}
