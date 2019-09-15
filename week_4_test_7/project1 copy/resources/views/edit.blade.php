<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
</head>
<body>




<form method="POST" action="{{route('update.user', $user->id)}}">
    {{csrf_field()}}

    <label>Name:</label><br>
    <input type="text" name="name" value="{{$user->name}}"><br>
    <label>Lastname:</label><br>
    <input type="text" name="lastname" value="{{$user->lastname}}" ><br>
    <label>Email:</label><br>
    <input type="text" name="email" value="{{$user->email}}"><br>
    
    <button type="submit">Save</button>

    
</form>

  
</body>
</html>