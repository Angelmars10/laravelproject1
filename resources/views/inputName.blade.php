
<html>
<head>
 @vite(['resources/sass/app.scss', 'resources/js/app.js'])
	
	<title>NAME</title>

</head>
<body>
	<center>
        <br><br>
            

	<br><br>
	<form method="POST" action="/inputName">
        @csrf
		<label for="inputName">Enter Name: </label>
		<input type="test" id="inputname" name="inputname" required/><br><br>

		<input type="submit" name="submit" />
		</form>
        <br>
        <p style ="color:red;">{{$name}}</p>
</body>
	</center>

</html>