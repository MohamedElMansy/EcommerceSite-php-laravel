<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function show(Request $request)
    {

// category check
        if (request()->category){

            $products=product::with('category')->whereHas('category', function ($query){
                $query->where('title',request()->category);
            });

            $categories=category::all();

        }
        else{


            //get list of products

            $products=product::with('category');

            //get categories
            $categories=category::all();
        }

// filter ( newness , high to low order , low to high and price range )
        if (request()->sort == 'new'){
            $products=$products->orderBy('created_at')->paginate(12);
        }

//order low to high
        elseif (request()->sort == 'low_high'){

            $products=$products->orderBy('price')->paginate(12);
        }
//order high to low
        elseif (request()->sort == 'high_low'){

            $products=$products->orderBy('price','desc')->paginate(12);
        }

        //price range
        elseif (request()->sort == 'low'){
            $products = $products
                ->groupBy('price')
                ->having('price', '<', 50)
                ->paginate(12);

        }
        elseif (request()->sort == 'mid'){
            $products = $products->groupBy('price')
                ->having('price','<',200)
                ->having('price','>',50)
                ->paginate(12);

        }

        elseif (request()->sort == 'high'){
            $products = $products->groupBy('price')
                ->having('price', '>', 200)
                ->paginate(12);

        }

        //search button
        elseif (request()->input('query')){

            $query = $request->input('query');


            $products=product::where('title','like',"%$query%")->paginate(12);




        }


        else {
            $products = $products->inrandomorder()->paginate(12);
        }




        return view('product')->with([
            'products' => $products ,
            'categories' => $categories,
        ]) ;

    }

}
