<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //

    public function create(){
        return view('form');
    }

    public function getInfo(Request $request){
        # validate inputs

        $this-> validate($request,[
            "name" => "required",
            "email" => "required | email",
            "password" => "required | min:6",
            "address"  => "required | min:10",
            "linkedin" => "required | url",
            "gender" => "required"
        ]);

        dd("Valid Data");
    }

}
