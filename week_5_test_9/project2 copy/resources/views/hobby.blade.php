@extends('layouts.master')

@section('title', 'Hobby')

@section('scripts')
<link rel="stylesheet" href="style/hobby.css">
@endsection

@section('header')
<div class="header">
    <h1>Hobby</h1>
</div>
@endsection


@section('content')
<div class="first-row">
    <div class="p1 col-4 col-s-9">
        <img src="photo/runing.jpg" alt="running">
    </div>
    <div class="col-4 col-s-9">
        <img src="photo/biking.jpg" alt="biking">
    </div>
    <div class="p2 col-4 col-s-9">
        <img src="photo/reading.jpg" alt="reading">
    </div>
</div>
<div class="second-row">
    <div class="col-4 col-s-9">
        <img src="photo/movies.jpg" alt="movies">
    </div>
    <div class="col-4 col-s-9">
        
        <img src="photo/rollers.jpg" alt="roling">
    </div>
    <div class="col-4 col-s-9">
        <img src="photo/baking.jpg" alt="baking">
    </div>
</div>
<div class="third-row">
    <div class="p1 col-4 col-s-9">
        <img src="/photo/walking.jpg" alt="walking">
    </div>
    <div class="col-4 col-s-9">
        <img src="/photo/tennis.jpg" alt="tenis">
    </div>
    <div class="p2 col-4 col-s-9">
        <img src="/photo/puzzles.jpg" alt="puzzles">
    </div>
</div>
<div class="bottom col-12 col-s-12">
    <div class="quote">
        <cite>He who is not courageous enough to take risks will accompish nothing in life. -Muhammad Ali</cite>
    </div>
</div>

@endsection