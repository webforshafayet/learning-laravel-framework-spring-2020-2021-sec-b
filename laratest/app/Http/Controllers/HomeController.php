<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
          // return view('home.index');

       // return view('home.index', ['name'=> 'xyz', 'id'=>12]);


// alternative---------------------------------------------




        // return view('home.index')
        //       ->with('name', 'alamin')
        //       ->with('id', '12');
// alternative---------------------------------------------
        $name="shafayet";
        $id="12";
        //  return view('home.index')
        //          ->withName($name)
        //          ->withId($id);
// alternative---------------------------------------------
        return view('home.index', compact('id', 'name'));

    }
    public function userlist(){

        //return view('home.list');

        // db model userlist

        $userlist = [
            ['id'=>1, 'name'=>'shafayet', 'email'=> 'shafayet@aiub.edu', 'password'=>'123'],
            ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
            ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
        ];

        return view('home.list')->with('list', $userlist);

    }
}
