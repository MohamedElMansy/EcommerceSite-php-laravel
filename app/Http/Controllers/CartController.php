<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    function show()
    {
        return view('shoping-cart');
    }

    function store(Request $request)
    {
       Cart::add($request->id,$request->title,1,$request->price,['size' => $request->sizetitle ,'color' => $request->colorname])->associate('App\product');

        return redirect()->route('cart.index')->with('success_message','product added to your cart');
    }


    function destroy($id)
    {
        Cart::remove($id);
        return redirect()->route('cart.index')->with('success_message','product removed from your cart');
    }

    function emptycart()
    {
        Cart::destroy();
        return redirect()->route('cart.index');
    }
}
