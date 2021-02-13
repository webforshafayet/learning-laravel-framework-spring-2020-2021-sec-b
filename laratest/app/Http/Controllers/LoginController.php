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

        //echo $req -> username."<br>";
        //echo $req -> password;

         //echo "posted";

         if($req->username == "" || $req->password == ""){
            echo "null submission";
        }elseif($req->username == $req->password){
            return redirect('/home');
        }else{

            echo "invalid user";
            return redirect('/login');
        }
    }


}


