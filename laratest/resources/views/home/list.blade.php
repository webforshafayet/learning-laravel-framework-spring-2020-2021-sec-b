@extends('layout/main')
@section('title')
USER LIST :: ABC.com
@endsection


@section('page_title')
<h1>User list</h1>
@endsection



@section('nav_bar')
<a href="/home">Back</a> |
<a href="/logout">logout</a>
@endsection


@section('main_content')

    <h1>User list</h1>
    <a href="/home">Back</a> |
    <a href="/logout">logout</a>

    <br>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>USERNAME</td>
            <td>PASSWORD</td>
            <td>TYPE</td>
            <td>Action</td>
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['userid'] }}</td>
            <td>{{ $list[$i]['name'] }}</td>
            <td>{{ $list[$i]['email'] }}</td>
            <td>{{ $list[$i]['username'] }}</td>
            <td>{{ $list[$i]['password'] }}</td>
            <td>{{ $list[$i]['type'] }}</td>
            <td>
                <a href="/home/edit/{{ $list[$i]['userid'] }}">Edit</a> |
                <a href="/home/delete/{{ $list[$i]['userid'] }}">Delete</a> |
                <a href="/home/details/{{ $list[$i]['userid'] }}">Details</a>
            </td>
        </tr>
        @endfor
    </table>

