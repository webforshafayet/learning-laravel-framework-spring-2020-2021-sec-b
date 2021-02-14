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
            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }elseif($req->username == $req->password){

            // $req->session()->put('username', $req->username); //put data in session
            // $req->session()->put('password', $req->password);
            // $req->session()->get('username');
            // $req->session()->get('password');

            //$req->session()->has('name');// return true or false


           // echo  $req->session()->get('username'); // print username after login
           //echo  $req->session()->get('password');

           // echo  $req->session()->forget('username');// destroy only username
             //$req->session()->flush(); // destroy all data password username


              /* $req->session()->flash('msg', 'Invalid user info...');// flash data works for single time
            $req->session()->flash('error', 'Bad request error...');// when another call happen
            $req->session()->get('msg');
            $req->session()->keep('msg'); // for 2nd time use for flash data
            $req->session()->get('msg'); */
            //$req->session()->reflash();// for all flash data keep will be called
            //$req->session()->pull('name'); // all type of data will be cut off or deleted
            $req->session()->put('username', $req->username);
            return redirect('/home');
        }else{

            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
    }


}


