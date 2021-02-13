<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        return view('login.index'); 
    }
    public function test(){

        return view('login.test'); 
    }

    public function verify(Request $req){
         
        echo $req -> username."<br>";
        echo $req -> password;

         echo "posted";
    }

     
}


 