<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    public function index(Request $req){





        $name="shafayet";
        $id="12";


        if($req->session()->has('username')){                   // page sequre unauthorized access
            return view('home.index', compact('id', 'name'));
        }else{
            $req->session()->flash('msg', 'invalid request...login first!');
            return redirect('/login');
        }

    }
    public function show($id){

        $user = User::find($id);
        //print_r($user);
        return view('home.details')->with('user', $user);
    }

    public function create(){

        return view('home.create');
    }


        public function store(UserRequest $req){



        if($req->hasFile('myfile')){
            $file = $req->file('myfile');

            $filename = time().".".$file->getClientOriginalExtension();
            $file->move('upload', $filename);

            $user = new User();
            $user->username = $req->username;
            $user->password = $req->password;
            $user->name     = $req->name;
           // $user->dept     = $req->dept;
            $user->type     = $req->type;
            $user->cgpa     = $req->cgpa;
            $user->profile_img     = $file->getClientOriginalName();

            $user->save();


           return redirect('/home/userlist');
        }



    }


    public function edit($id){

      $user = User::find($id);
      return view('home.edit')->with('user', $user);


        // foreach($userlist as $u){
        //     if($u['id'] == $id ){
        //         $user = $u;
        //         break;
        //     }
        // }

       // return view('home.edit')->with('id',$id);
       //$user =  ['id'=>2, 'username'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'];
        //return view('home.edit')->with('user', $user);
    }

    public function update($id, Request $req){

        //$user = ['id'=> $id, 'name'=> $req->name, 'email'=> $req->email,'password'=>$req->password];

        //updating DB or model
        $user = User::find($id);

        $user->username = $req->username;
        $user->name     = $req->name;
        $user->password = $req->password;
       // $user->dept     = $req->dept;
        $user->type     = $req->type;
        $user->save();

        return redirect('/home/userlist');
    }
    public function userlist(){

        //return view('home.list');

        //---------------------------------------------- db model userlist------------------------------------------------

        // $userlist = [
        //     ['id'=>1, 'name'=>'shafayet', 'email'=> 'shafayet@aiub.edu', 'password'=>'123'],
        //     ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
        //     ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
        // ];

        $userlist = User::all();
        //$userlist = $this->getUserlist();
        return view('home.list')->with('list', $userlist);

    }

    // public function getUserlist (){

    //     return [
    //             ['id'=>1, 'name'=>'alamin', 'email'=> 'alamin@aiub.edu', 'password'=>'123'],
    //             ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
    //             ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
    //         ];
    // }


    public function delete($id){

        $user = User::find($id);
        return view('home.delete')->with('user', $user);
    }

    public function destroy($id){

        if(User::destroy($id)){
            return redirect('/home/userlist');
        }else{
            return redirect('/home/delete/'.$id);
        }

    }

    public function registrationcreate(){

        return view('login.registration');
    }


        public function registrationstore(UserRequest $req){



        if($req->hasFile('myfile')){
            $file = $req->file('myfile');

            $filename = time().".".$file->getClientOriginalExtension();
            $file->move('upload', $filename);

            $user = new User();
            $user->username = $req->username;
            $user->password = $req->password;
            $user->name     = $req->name;
            $user->email     = $req->email;
           // $user->dept     = $req->dept;
            $user->type     = $req->type;
            $user->cgpa     = $req->cgpa;
            $user->profile_img     = $file->getClientOriginalName();

            $user->save();


            return redirect('/login');
        }



    }
}
