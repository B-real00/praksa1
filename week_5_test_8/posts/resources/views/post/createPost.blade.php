@extends('layouts.master')

@section('title', 'Creat Posts')

@section('content')
<h1>Leave YOUR comment here</h1>


<form method="POST" action="/posts">
    @csrf
    
    <p>Title:</p>
    <input type="text" name="title" placeholder="Title" required >
    <p>Content:</p>
    <textarea type="text" name="content" placeholder="Content" required ></textarea>

    <p><button type="submit">ADD</button>
</form>


<a href="/posts">
    <button>Back</button>
</a>   
@endsection