<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Page</title>
</head>
<body>
    <table>
    <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Password</th>
    </tr>

    @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->lastname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td><a href="edit/{{$user->id}}"><button>Edit</button></a></td>
            <td><a href="destroy/{{$user->id}}"><button>Delete</button></a></td>
        </tr>
    @endforeach
    </table>
    <a href='/register'>
        <button>Go to Register</button>
    </a>
    
</body>
</html>