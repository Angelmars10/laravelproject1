<html>
    <head>
        <title>
            VERIFIER
        </title>
        <center>
            <h2> ELECTION AGE VERIFIER</h2>
            <br><br>
        <form method = "POST" action="/election">
            @csrf
            <label for="inputAge">Enter Name: </label>
		<input type="number" min=1 id="age" name="age" required/><br><br>
        <input type="submit" name="submit_button" value="Check Age"/>

</form>
<br>
@if(($age)== 0)
Please enter your age
@elseif (($age)< 14)
Your are not eligible to Vote
@elseif(($age) < 18)
Your are eligible to Sk Vote
@else
Your eligible to Vote in National Election
@endif
</center>

    </head>
</html>
