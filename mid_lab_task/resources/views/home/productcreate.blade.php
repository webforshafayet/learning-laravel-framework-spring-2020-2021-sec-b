<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Product</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>Insert Product</h1>

    <form method="post"  enctype="multipart/form-data">
    	@csrf
		<fieldset>
			<legend>Add</legend>
			<table>
				<tr>
					<td>Product name:</td>

					<td><input type="text" name="productname" value="{{old('productname')}}"></td>
				</tr>
				<tr>
					<td>Catagory</td>

					<td><input type="text" name="catagory" value="{{old('catagory')}}"></td>
				</tr>
				<tr>
					<td>Unit price</td>
					<td><input type="text" name="unitprice" value="{{old('unitprice')}}"></td>

				</tr>

				<tr>
					<td>details</td>
					<td><input type="text" name="details" value="{{old('details')}}"></td>
				</tr>

                <tr>

					<td>status</td>
					<td>
						<select name='status'>
							<option value="exist"> Exist </option>
							<option value="Upcoming"> Upcoming </option>
						</select>
					</td>
				</tr>
                <tr>
					<td>Image</td>
					<td>
						<input type="file" name="myfile">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
			</table>
		</fieldset>
	</form>

    @foreach($errors->all() as $err)
    {{$err}} <br>
@endforeach

</body>
</html>
