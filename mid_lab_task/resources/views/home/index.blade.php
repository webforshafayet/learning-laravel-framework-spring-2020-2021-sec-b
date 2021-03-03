<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
   <!-- <h1>Welcome home! {{ $name }}  </h1>-->
    <h1>Welcome home! {{ session('username') }} </h1>
    <a href="/home/create">Create user</a> |
    <a href="/home/userlist">View user list</a> |

    <a href="/logout">logout</a>
    <br><br><br><br>

    <a href="/home/productcreate">Insert new product</a> |
    <a href="/home/productlist">View product list</a> |
    {{--  <br>{{ $id }} --}}
    <br>


</body>
</html>
