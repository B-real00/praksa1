@extends('layouts.master')

@section('title', 'Gallery')


@section('scripts')
<link rel="stylesheet" href="style/gallery.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection

@section('header')
<div class="header">
    <h1>Gallery</h1>
</div>

@endsection

@section('content')
<div class="container-fluid flex-grow-1 d-flex flex-column">
    <div class="col-md-9 mx-auto">
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            <li data-target="#carousel-example-1z" data-slide-to="3"></li>
            <li data-target="#carousel-example-1z" data-slide-to="4"></li>
            <li data-target="#carousel-example-1z" data-slide-to="5"></li>
            <li data-target="#carousel-example-1z" data-slide-to="6"></li>
            <li data-target="#carousel-example-1z" data-slide-to="7"></li>
            <li data-target="#carousel-example-1z" data-slide-to="8"></li>
            <li data-target="#carousel-example-1z" data-slide-to="9"></li>
            <li data-target="#carousel-example-1z" data-slide-to="10"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
            <img class="d-block w-100" src="photo/photo/ali.jpg" alt="Muhammad Ali">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="photo/photo/coco.jpg" alt="Gabrielle Bonheur 'Coco' Chanel">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="photo/photo/steve.jpg" alt="Steve Jobs">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="photo/photo/pharrel.jpg" alt="Pharrel Williams">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="photo/photo/dala.jpg" alt="Dalai Lama">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="photo/photo/yoda 2.jpg" alt="Yoda">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="photo/photo/lewis.jpg" alt="Lewis Hamilton">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="photo/photo/ive.jpg" alt="Jony ive">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="photo/photo/neil.jpg" alt="Neil Armstrong">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="photo/photo/novak.jpg" alt="Novak Djokovic">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="photo/photo/albert.jpg" alt="Albert Einstein">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
</div>
<div class="bottom col-12 col-s-12">
    <div class="quote">
        <cite>There is a time for work, and a time for love. That leaves no other time. -Coco Chanel</cite>
    </div>
</div>

@endsection