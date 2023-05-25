<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class electionController extends Controller
{
    public function Election(Request $request){
        $age= $request -> input('age');
        return view('election',compact('age'));
    }
}
