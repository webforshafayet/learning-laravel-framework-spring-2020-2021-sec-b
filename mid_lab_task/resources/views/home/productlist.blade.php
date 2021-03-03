<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product List</title>
</head>
<body>

    <h1>Product list</h1>
    <a href="/home">Back</a> |
    <a href="/logout">logout</a>

    <br>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Product name</td>
            <td>Catagory</td>
            <td>Unit price</td>
            <td>details</td>
            <td>status</td>
            <td>Action</td>
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['userid'] }}</td>
            <td>{{ $list[$i]['productname'] }}</td>
            <td>{{ $list[$i]['catagory'] }}</td>
            <td>{{ $list[$i]['unitprice'] }}</td>
            <td>{{ $list[$i]['details'] }}</td>
            <td>{{ $list[$i]['status'] }}</td>
            <td>
                <a href="/home/productedit/{{ $list[$i]['userid'] }}">Edit</a> |
                <a href="/home/productdelete/{{ $list[$i]['userid'] }}">Delete</a> |
                <a href="/home/productdetails/{{ $list[$i]['userid'] }}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
</body>
</html>
