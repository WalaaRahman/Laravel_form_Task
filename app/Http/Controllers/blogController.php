<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\validationController;

class blogController extends Controller
{
    //
    public function create(){
        return view('blog');
    }


    public function store(Request $request){
        
    $validate = new validationController;

        $title    =  $request -> title;
        $content  =  $request -> content;
        if(! $validate->validator($title,'empty')){
            echo "* Title Required ";
        }
        
    }
}
