@extends('layout.main')
   <!-- <h1>Welcome home! {{ $name }}  </h1>-->
   @section('nav_bar')
    <a href="/home/create">Create user</a> |
    <a href="/home/userlist">View user list</a> |
    <a href="/logout">logout</a>
     <br>{{ $id }}
    <br>
    @endsection



@section('page_title')
<h1>Welcome home! {{ session('username') }} </h1>
@endsection



@section('title')
Home | ABC.com
@endsection

