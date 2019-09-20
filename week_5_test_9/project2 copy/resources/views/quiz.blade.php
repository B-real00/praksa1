@extends('layouts.master')

@section('title', 'Quiz')

@section('scripts')
<link rel="stylesheet" href="style/quiz.css">
<script src="js/java_quiz.js"></script> 
@endsection

@section('header')
<div class="header">
    <h1>Quiz</h1>
</div>
@endsection

@section('content')
<div class="quiz col-12 col-s-12">
<form >
    <h1>What have you learnd about Me, so far?</h1> 
    <div class="question">
        <h3>My favourite type of shoes?</h3>
        <input type="radio" name="question0" value="wrong">boots<br/>
        <input type="radio" name="question0" value="wrong">flip-flops<br/>
        <input type="radio" name="question0" value="correct">sneakers<br/>
    </div>
    <div class="question">   
        <h3>What is my favourite color is?</h3>
        <input type="radio" name="question1" value="wrong">black<br/>
        <input type="radio" name="question1" value="correct">yellow<br/>
        <input type="radio" name="question1" value="wrong">white<br/>
        <input type="radio" name="question1" value="wrong">pink<br/>
    </div>   
    <div class="question">
        <h3>Do I, love sports?</h3>
        <input type="radio" name="question2" value="wrong">maybe<br/>
        <input type="radio" name="question2" value="wrong">kind of<br/>
        <input type="radio" name="question2" value="correct">of course<br/>
    </div>
    <div class="question">
        <h3>Favourite movie character?</h3>
        <input type="radio" name="question3" value="wrong">Yoda<br/>
        <input type="radio" name="question3" value="wrong">Roki<br/>
        <input type="radio" name="question3" value="wrong">Smurfette<br/>
        <input type="radio" name="question3" value="correct">Harry<br/>
    </div>
    <div class="question">
        <h3>Person of Respect?</h3>
        <input type="radio" name="question4" value="correct">Dalai Lama<br/>
        <input type="radio" name="question4" value="wrong">Buzz Lightyear<br/>
        <input type="radio" name="question4" value="wrong">Donald Duck<br/>
        <input type="radio" name="question4" value="wrong">Noone<br/>
    </div>    
    <button type="submit" value="Check results" onclick="returnScore()">Check Results</button>  
</form>      
</div>
<div class="bottom col-12 col-s-12">
    <div class="quote">
        <cite>The more you are motivated by love, the more fearless and free your action will be. -Dalai Lama</cite>
    </div> 
</div>
@endsection