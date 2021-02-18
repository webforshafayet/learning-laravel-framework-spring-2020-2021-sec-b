<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h1>Login Page</h1>
	<form method="post">
{{-- token verify --}}
        {{-- @csrf --}}      {{-- to generate token which is his own  ------ --}}

        {{csrf_field()}}         {{-- to generate token which is his own   --}}
        <input type="hidden" name="_token" value="{{csrf_token()}}" >       {{-- to generate token which is his own --}}
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>

	</form>
    {{session('msg')}}
    {{-- to declare invalid pasword username msg from logincontroller   --}}
</body>
</html>
