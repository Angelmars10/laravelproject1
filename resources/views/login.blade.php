
<html>
<head>
 @vite(['resources/sass/app.scss', 'resources/js/app.js'])
	
	<title>LOGIN</title>

</head>
<body>
	<center>
        <br><br>
            

	<br><br>
	<form method="POST" action="/dashboard">
        @csrf
		<label for="login">username: </label>
		<input type="text" id="username" name="admin" required/><br><br>
		<label for="login">password: </label>
		<input type="password" id="password" name="password" required/><br><br>

		<input type="submit" name="submit" />
		</form>
        <br>
        
</body>
	</center>

</html>