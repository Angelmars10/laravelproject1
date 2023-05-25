<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputNameController extends Controller
{
    //
   public function Name(Request $request){
    $name = $request -> input('inputname');
    return view('inputName',compact('name'));
   }
    
}
