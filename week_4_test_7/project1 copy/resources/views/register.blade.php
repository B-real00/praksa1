<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
</head>
<body>


<form method="POST" action="/register">
    {{csrf_field()}}

    <label>Name:</label><br>
    <input type="text" name="name" required="required"><br>
    <label>Lastname:</label><br>
    <input type="text" name="lastname" required="required"><br>
    <label>Email:</label><br>
    <input type="text" name="email" required="required"><br>
    <label>Password:</label><br>
    <input type="password" name="password" required="required"><br>

    <button type="submit">Register</button>

    
</form>

<a href="/users">
    <button>Go to users</button>
</a> 

<p>
    @isset($greeting)
        {{$greeting}}
    @endisset
</p>
</body>
</html>