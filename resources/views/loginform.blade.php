<html>
    <head>
        <title>LOGIN FORM</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <center>
            <form method="POST" action="{{ route('loginform') }}">
            @csrf
            <br>
            <h1>LOGIN </h1
            <label for="username">username: </label><br><br>
             <input type="text" id="username" name="username" required/><br><br>
             <label for="password">password: </label><br><br>
             <input type="password" name="password" id="password" required/><br>
            
            <br><input type="submit" value="Login"/><br><br>
            </form></br>

            @if($errors->any())
            <div style="color:red;">
            {{ $errors->first() }}
            </div>
            @endif

   
        </center>
       
    </body>
     </html>
