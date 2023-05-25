<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    
    public function loginVerification(){
      
        return view('login');
    }
 
    
    
    public function loginVerification2(){
        return view('dashboard');
    }
}

