@extends('layouts.master')

@section('title', 'Favourite Movie')

@section('scripts')
<link rel="stylesheet" href="style/movie.css">
<script src="js/hide-movie.js"></script>
@endsection

@section('header')

<div class="header">
    <h1>Favourite Movie</h1>
</div>

@endsection


@section('content')
<div class="about col-6 col-s-9">
    <h1>The Harry Potter Saga (2001 - 2011)</h1>
    <h3>Story about friendship, love and bravery</h3>
    <p>
        Harry Potter is a British-American film series based on the eponymous novels by author J. K. Rowling. 
        The series is distributed by Warner Bros. and consists of eight fantasy films, 
        beginning with Harry Potter and the Philosopher's Stone (2001) and culminating with 
        Harry Potter and the Deathly Hallows – Part 2 (2011).
    </p>
    <p>
        It is a story about The Boy Who Lived. Story is following lives of young boy named Harry Potter young wizard, 
    and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry. 
    The three of them are struggling against Lord Voldemort, a dark wizard who intends to become immortal, 
    overthrow the wizard governing body known as the Ministry of Magic and subjugate all wizards and Muggles (non-magical people).
    </p>
    <div class="movie-list">
        <ul>
            <li><a href="https://www.imdb.com/title/tt0241527/" target="_blank">Harry Potter and the Sorcerer's Stone (2001)</a> 7.6 <i class="fas fa-star"></i></li>
            <li><a href="https://www.imdb.com/title/tt0295297/?ref_=ttls_li_tt" target="_blank">Harry Potter and the Chamber of Secrets (2002)</a> 7.4 <i class="fas fa-star"></i></li>
            <li><a href="https://www.imdb.com/title/tt0304141/?ref_=ttls_li_tt" target="_blank" >Harry Potter and the Prisoner of Azkaban (2004)</a> 7.9 <i class="fas fa-star"></i></li>
            <li><a href="https://www.imdb.com/title/tt0330373/?ref_=ttls_li_tt" target="_blank" >Harry Potter and the Goblet of Fire (2005)</a> 7.7 <i class="fas fa-star"></i></li>
            <li><a href="https://www.imdb.com/title/tt0373889/?ref_=ttls_li_tt" target="_blank" >Harry Potter and the Order of the Phoenix (2007)</a> 7.5 <i class="fas fa-star"></i></li>
            <li><a href="https://www.imdb.com/title/tt0417741/?ref_=ttls_li_tt" target="_blank" > Harry Potter and the Half-Blood Prince (2009)</a> 7.6 <i class="fas fa-star"></i></li>
            <li><a href="https://www.imdb.com/title/tt0926084/?ref_=ttls_li_tt" target="_blank" > Harry Potter and the Deathly Hallows: Part 1 (2010)</a> 7.7 <i class="fas fa-star"></i></li>
            <li><a href="https://www.imdb.com/title/tt1201607/?ref_=ttls_li_tt" target="_blank" >Harry Potter and the Deathly Hallows: Part 2 (2011)</a> 8.1 <i class="fas fa-star"></i></li>
        </ul>
    </div>
    <div class="cast">
        Cast
        <ul>
            <li>Daniel Radcliffe as Harry Potter</li>
            <li>Emma Watson as Hremione Granger</li>
            <li>Rupert Grint as Ron Weasley</li>
        </ul>
    </div>
    <div class="quest">
        <h3>What genre is this movie?</h3>
        <div class="entry">
            <input id="user" type="text" name="genre">                    
            <input id="btn" type="button" value="Submit" onclick="showAnswer()">
            <p id="message"></p>
        </div>
        <script src="../js/hide-movie.js"></script>
    </div>
</div>
<div class="trailer col-6 col-s-9">
    <iframe src="https://www.youtube.com/embed/gHe3sul7C_E" frameborder="0" allowfullscreen></iframe>
</div>
<div class="bottom col-12 col-s-12">
    <div class="quote">
        <cite>When something exceeds your ability to understand how it works, it sort of becomes magical. -Jony Ive</cite>
    </div>
</div>

@endsection