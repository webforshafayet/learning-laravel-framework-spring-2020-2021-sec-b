<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function index(){

        return view('login.index'); 
    }
    public function test(){

        return view('login.test'); 
    }

    public function verify(){

         echo "posted";
    }

     
}


 