<?php

namespace App\Http\Controllers;

use App\company;
use App\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function show()
    {
        $company_info=company::get();

        return view('contact')->with([
            'company_info' => $company_info
        ] );
    }

    function send(Request $request){

        $email=$request->email;
        $message=$request->message;

        $send_message = contact::create([
            'email'=> $email,
            'message' => $message,
        ]);

        if ($send_message){

            echo 'done';
        }
        else
        {
            echo 'error';
        }

//        return redirect()->route('contact');
    }
}
