@extends('layouts.master')
@section('title', 'Gift')


@section('scripts')
<link rel="stylesheet" href="style/b-day.css">
<script src="js/countdown.js"></script>
@endsection

@section('header')

<div class="header">
    <h1>Birthday Gift</h1>
</div>

@endsection

@section('content')

<div class="side col-6 col-s-9">
    <img src="photo/gift.jpg" alt="Gift Photo">
</div>
<div class="content col-6 col-s-9">
    <div id="element"><h2>Days until big day</h2></div>
    <div class="count">
        <p id="timer">
            <span id="timer-days"></span> DAY(S)
            <span id="timer-hours"></span> HOUR(S)
            <span id="timer-mins"></span> MINS(S)
            <span id="timer-secs"></span> SECS(S)
        </p>  
    </div> 
    <p>Alexander McQueen</p>
    <p><a href="https://www.alexandermcqueen.com/ba/alexandermcqueen/oversized-sneaker_cod11643824xe.html#dept=wsnkrsshs_spl" class="button" target="_blank">Buy Now</a></p> 
    <p>Shop 13</p>
    <div class="mapouter">
        <div class="gmap_c">  
            <iframe width="60%" height="55%" id="gmap_canvas" src="https://maps.google.com/maps?q=SHOP%2013%20TAUCHLAUBEN%207A%20%201010%20VIENNA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            </iframe>
        </div>
    </div>
</div> 
<div class="bottom col-12 col-s-12">
    <div class="quote">
        <cite>
            Don't wait for the stars to align, reach up and rearrange them
            the way you want... create your own constellation. -Pharrell Williams
        </cite>   
    </div> 
</div> 
@endsection  