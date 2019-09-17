<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POSTs</title>
</head>
<style>
body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
}
table {
    width:100%;
}
tr {
    text-align: center;
}
th, td {
  padding: 15px;
  border-bottom: 1px solid #ddd;
}
button {
  background-color: grey; /* Green */
  border: none;
  color: white;
  padding: 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 9px;
}
            
</style>
<body>

<table>
    <caption><h1>Comments</h1></caption>
    <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Likes</th>
        <th></th>
        <th>Action</th>
        <th></th>
    </tr>

    @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->likes}}</td>
            <td>
                <a href="posts/{{$post->id}}/edit"><button>Edit</button></a>
            </td>

            <td>
                <form method="POST" action="posts/{{ $post->id }}">

                    @method('DELETE')
                    @csrf
                    
                    <button type="submit">Delete</button>
                </form> 
            </td>

            <td>
                <form method="GET" action="posts/{{ $post->id }}/like">
                    @csrf
                    
                    <button name="likes" type="submit">Like</button>
                </form> 
            </td>
        </tr>

    @endforeach
    </table>

    <a href="posts/create"><button>Add new Comment</button></a>
</body>
</html>
