<html>
    <head>
    
  
    <title>Conditional Page</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
    <body>
        <br>
    <h1 style="color:skyblue">This is the Condition Page</h1>
@if(strlen($name)>0)
True: The length of Angelwin is < 23
@else
False: The length of Hannah is < 22
@endif


</body>


</html>
