@extends('layouts.master')
@section('title')


@section('menu')

@section('title', 'Bilja Home')

@section('header')

<div class="header">
    <h1>Bilja Home</h1>
</div>

@endsection


@section('content')

<div class="side col-6 col-s-9">
    <img src="photo/cover.jpg" alt="Cover Photo Bilja">
</div>

<div class="content col-6 col-s-9">
    <h2><b>Biljana Popović</b></h2>
    <h3>
        That what makes you different makes you special.
    </h3>
    <p>Born on January, 21</p>
    <p><a href="mailto:biljica.popovic@gmail.com">e-mail me</a> </p> 
</div>

<div class="bottom col-12 col-s-12">
    <div class="cv"> 
        <a href="CV-Europass-EN.pdf" target="_blank">CV</a>
    </div>
    <div class="quote">
        <cite>Once you stop learning, you start dying. -Albert Einstein</cite>
    </div>
</div>
@endsection

