<?php

namespace App\Http\Controllers;

use App\banner;
use App\blog;
use App\category;
use App\product;
use App\slider;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    function index()
    {

        //show sliders from database
        $banners = banner::get();

        //get banners from database and send to index
        $sliders = slider::get();

        //get list of products


        $products=product::with('category')->inRandomOrder()->take(12)->get();

        //get categories
        $categories= category::all();

        //get blogs from database
        $blogs= blog::get();


        return view('index')->with([
            'sliders' => $sliders,
            'banners'=> $banners,
            'products' => $products,
            'categories' => $categories,
            'blogs' => $blogs

            ]);







    }



}
