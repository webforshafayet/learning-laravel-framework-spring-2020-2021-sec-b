<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Product</title>
</head>
<body>
    <h1>Delete Product</h1>
    <a href="/home/productlist"> Back</a>
			<table>
				<tr>
					<td>product Name: </td>
					<td>{{$user['productname']}}</td>
				</tr>
				<tr>
					<td>Catagory</td>
					<td>{{ $user['catagory']}}</td>
				</tr>
				<tr>
					<td>Unit price:</td>
					<td>{{ $user['unitprice']}}</td>
				</tr>
                <tr>
					<td>details</td>
					<td>{{ $user['details'] }}</td>
				</tr>
				<tr>
					<td>status</td>
					<td>{{ $user['status'] }}</td>
				</tr>
				<tr>
					<td>
						<h3>Are you sure?</h3>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<form method="post">
							@csrf
							<input type="submit" name="submit" value="Confirm">
						</form>
					</td>
					<td></td>
				</tr>
			</table>
</body>
</html>
