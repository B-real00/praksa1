@extends('layouts.master')

@section('title', 'Edit Posts')

@section('content')

<h1>Edit YOUR post</h1>
<form method="POST" action="/posts/{{ $post->id }}">

    @csrf

    <p>Title:</p>
    <input type="text" name="title" placeholder="Title" required value="{{ $post->title }}">
    
    <p>Content:</p>
    <textarea type="text" name="content"placeholder="Content" required >{{ $post->content }}</textarea>

    <p><button type="submit">UPDATE</button>
   
</form>
<a href="/posts">
    <button>Back</button>
</a>

@endsection
    
