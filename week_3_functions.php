<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function Documentation</title>
</head>
<body>
<?php


echo "<h3>\$_SERVER:</h3>
 je superglobalna varijabla (tj. uvijek je dostupna bezobzira na fu-ju, file...) predstavlja array koji sadrzi informacije,
 kreirane od strane servera tipa header, path, protocol, info o korisniku...</p>";

echo "--'REQUEST_METHOD'
vraca informacije o metodi koja je koristena na stranici tip GET, POST, PUT....";

echo "<p>--'PATH_INFO' 
se odnosi na zahtjeve u putanji koji dolaze poslije imena fajla u URL-u.";

echo "<h3>\$_GET:</h3>";
echo "je array naziva varijabli i vrijednosti poslanih GET metodom koje su prikazane u URL i vidljive svima. Koristi se kad zelimo da uzmemo vec postojece podatke.";

echo "<h3>\$_POST:</h3>";
echo "je array naziva varijabli i vrijednosti poslanih POST metodom. Informacije poslane na ovaj nacin nisu vidljive i koristi se kad zelimo da posaljemo neke informacije. ";

echo "<p> explode() 
<br>vraca array string-ova, pri cemu je string isprekidan pomocu zadanih parametara tipa ' ', '.'...";

echo "<p> trim() 
<br>vraca string sa uklanjenim prazanim prostorom ili dr. karakterima s pocetka i kraja stringa";

echo "<p> json_encode() 
<br> koristi se za prikazivanje PHP vrijednosti u JSON formatu -(objekat, array), ako stoji true encodova ce u array";

echo "<p> json_decode()
<br> pretvara JSON string u PHP objekat ili array, ima opcioni drugi argument ukoliko koji ima vrijednost true pretvara u arrray. "; 

echo "<p>file_get_contents() 
<br> vraca tj ispisuje sadrzaj iz file kao string. Moze za parametar da ima ukljucenu putanju predstavljenu kao string i sa true parametrom.";

echo "<p> file_put_contents() 
<br> upisuje sadrzaj u file";

echo "<p> include_once()
<br> uzima sav sadrzaj iz imenovanog file-a i kopira u file koji poziva include izraz, ukoliko file nije pronadjen nece 
prijaviti gresku i nastavice s izvrsavanjem";

echo "<p> is_array() 
<br> provjerava da li je varijabla array ili ne, vraca true ili false";

echo "<p> count()
<br> vraca broj elemenata u jednom array-u (moze da broji i u objektu)"; 

echo "<p> empty() 
<br> provjerava da li varijabla ima vrijednost, vraca false ukoliko varijabla postoji i ima vrijednost koja nije 0, prazan string, '0' u suprotnom true. ";

echo "<p> error_log()
<br> posalji neku error pruku negdje"; 

echo "<p> switch()
<br> izraz slican if, koristi se u slucaj kad zelimo da poredimo istu varijablu s vise razlicitih vrijednosti.";

echo "<p> print_r() 
<br> prikazuje informacija o varijablama  citljeve ljudima npr. string bez navodnika, nema tipa informacije.. ";

echo "<p> var_dump()
<br> prikazuje vrijednost/tip varijable";

echo "<p>foreach
<br> je loop koji se koristi za prolazak kroz array, pri cemu vodi racuna o duzini array-a";

echo "<p>unset()
<br> se koristi za brisanje vrijable, pojedinacnih elementa array-a pomocu kljuca.";

echo "<p> file_exists() 
<br> provjerava da li postoji file ili direktorijum pri cemu vraca true ili u protivnom false";

echo "<p> http_response_code()
<br> kad zelim da uzmemo ili postavimo HTTP kod odgovora, ako nema parametara uzima se trenutni statusni vazi obrnuto.";

?> 
</body>
</html>
<?php

