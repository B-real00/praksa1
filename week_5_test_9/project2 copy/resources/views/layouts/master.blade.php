<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    @yield('scripts')
    <title>@yield('title')</title>
</head>
<body>
    
    <div class="main">
        @yield('header')
        
        <div class="row">
            @yield('menu')
            <div class="menu col-12">
                <ul>
                    <li><a href="/">Home</a> </li>
                    <li><a href="/gift">B-day Gift</a> </li>
                    <li><a href="/travel">Travel</a></li>
                    <li><a href="/movie">Fav Movie</a></li>
                    <li><a href="/hobby">Hobby</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/quiz">Quiz</a></li>
                </ul>   
            </div>
            @yield('content')
            <div class="side col-6 col-s-9">
              
            </div>
        </div>
        
        <div class="footer">
            <div>Bilja  <span id="date"></span></div>
            <script src="js/date.js"></script>
        </div> 
    </div>  
</body>
</html>