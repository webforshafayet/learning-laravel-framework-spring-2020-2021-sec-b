<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit  Product</title>
</head>
<body>
    <h1>Edit  Product, {{ $user['id'] }}</h1>

    <form method="post">
    	@csrf
		<fieldset>
			<legend>Edit Product</legend>
			<table>
				<tr>
					<td>Product name</td>
					<td><input type="text" name="productname" value="{{$user['productname']}}"></td>
				</tr>
				<tr>
					<td>Catagory</td>
					<td><input type="text" name="catagory" value="{{ $user['catagory'] }}"></td>
				</tr>
				<tr>
					<td>Unit price</td>
					<td><input type="text" name="unitprice" value="{{ $user['unitprice'] }}"></td>
				</tr>
                <tr>
					<td>details</td>
					<td><input type="text" name="details" value="{{ $user['details'] }}"></td>
				</tr>



                <tr>

					<td>status</td>
					<td>
						<select name='status'>
							<option value="exist" @if($user['status'] == 'exist') selected @endif > Exist </option>
							<option value="Upcoming"  @if($user['status'] == 'Upcoming') selected @endif > Upcoming </option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
