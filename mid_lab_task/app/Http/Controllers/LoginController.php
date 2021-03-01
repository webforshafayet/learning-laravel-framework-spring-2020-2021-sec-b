<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use app\Models\User;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;
class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }
    public function test(){

        return view('login.test');
    }

    public function verify(Request $req){



        $user = DB::table('user_table')
        ->where('password', $req->password)
        ->where('username', $req->username)
        ->get();


        if($req->username == "" || $req->password == ""){
            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }

        elseif(count($user) > 0 )
        {



            $req->session()->put('username', $req->username);
            return redirect('/home');
        }else{

            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
    }


}


