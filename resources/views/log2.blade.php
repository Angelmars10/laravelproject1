<!DOCTYPE html>

<html>
<head>
 @vite(['resources/sass/app.scss', 'resources/js/app.js'])
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	
</head>
<body>
	<center>
        <br><br>
            
	<h1 style="color:skyblue">로그인</h1>
	<br><br>
	<form method="POST" >
		<label>USERNAME: </label>
		<input type="text" name="usernamefield">
		<p></p>
		<label>PASSWORD: </label>
		<input type="password" name="passwordInputfield">
		<p></p>
		<button type="submit" name="submit_button">LOGIN</button>
		</form>
</body>
	</center>

</html>