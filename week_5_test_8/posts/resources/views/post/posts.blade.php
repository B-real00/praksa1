@extends('layouts.master')

@section('styles')
<style>
body {
    margin-left: 0 !important; 
    margin-top: 0 !important;
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
</style>
@endsection


@section('title', 'POSTS')

@section('content')

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
@endsection

