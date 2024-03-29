<?php
include_once 'api_variables.php';

// provjerava da li je zahtjev array ili koliko ima elemenata
if (!is_array($request) || count($request) == 0) {
    error('Poziv nije u formi (/services.php/articles[/123])', 400);
}

//provjeri koja je metoda, da li je broj elemenata manji od 2 / da li je zahtjev prazan
if (($method == 'PUT' || $method == 'DELETE') && 
    (count($request) < 2 || empty($request[1])))  {
    error('Za PUT i DELETE metode, id artikla je obavezan (/services.php/articles/:articleId)', 405);
}

// provjerava da li je jedna od poslanih metoda u array && da li je input array || nema elemenata
if (in_array($method, ['POST', 'PUT']) && (!is_array($input) || count($input) == 0)) {
    error('Za PUT i POST metode obavezno je slanje podataka', 405);
}

// var uzima vrijednost prvog zahtjeva
$service = $request[0];
if ($service !== 'articles') {
    error('Podrzavamo samo articles servis (/services.php/articles)', 404);
}

error_log("called method: {$method} with service {$service}");

switch ($method) {
    case 'GET':
        get(count($request) >= 2 ? $request[1] : null);
        break;
    case 'POST':
        post($input);
        print_r($input);
        break;
    case 'PUT':
        put($request[1], $input);
        break;
    case 'DELETE':
        delete($request[1]);
        break;
    default:
        error('invalid API method, allowed are GET, POST, PUT and DELETE!', 405);
}

function get($articleId = null) {
    $articles = getData();
    
    if ($articles == null || count($articles) == 0) { 
        error('Article not found', 404);    
    }

    if ($articleId === null) {
        return respond($articles);
    }
    foreach ($articles as $article) {
        if ($article->id == $articleId) {
            respond($article);
        }
    }
    error('Article not found', 404);
}


function post($article) {
    $articles = getData();

    if (!is_array($articles))
        $articles = [];

    $articles[] = $article;

    saveData($articles);

    respond(false, 200);
}

function put($articleId, $article) {

   /**
    * Potrebno je prvo pokupiti sve postojece article iz "baze" (articles.json),
    *
    * Nakon toga potrebno je provjeriti da li je korisnik poslao ID article-a koji zeli da updatuje/promjeni
    *
    * Kada smo sigurni da imamo ID , potrebno je da nadjemo taj article i zamjenimo ga sa novim poslanim podacima.
    *
    * Pomoc :
    * Da bi izbrisali article iz niza mozete koristit unset() metodu.
    * npr. unset($articles[0]) - izbrisi prvi clan niza.
    *
    * Da bi ubacili novi clan unutar niza mozete to uraditi ovako
    * npr. $articles[] = $updatedArticle
    *
    * P.S.
    * Mozete naci dobar dio koda koji vam je potreban za ovo u metodama koje vec postoje.
    * Takodje ako zapnete pisite na slack slobodno.
    *
    * May the force be with you !
    */
    $articles = getData();

    if ($articles == null || count($articles) == 0) { 
        error('Article not found', 404);    
    }

    if($articleId === null) {
        error ('Missing article ID', 404);
    }
    
    foreach ($articles as $key=> $oldArticle) {
        if ($oldArticle->id == $articleId){
            $articles[$key] = $article;
            saveData($articles);
            respond(false, 201);
            break;
        }
        
    }
    error('Article not found', 404); 
}


function delete($articleId) {

    $articles = getData();

    if ($articles == null || count($articles) == 0) {
        error('Article not found', 404);
    }

    foreach ($articles as $key => $currentArticle) {
        if ($currentArticle->id == $articleId) {
            unset($articles[$key]);
            saveData($articles);
            respond(false, 200);
            break;
        }
    }

    error('Article not found', 404);
}


function getData() {
    global $dbFile;
    // ako file nepostoji vrati gresku
    if (!file_exists($dbFile)) {
        error('db file not exist', 500);
    }
     // uzmi sadrzaj file i decoduj iz JSON u PHP
    return json_decode(file_get_contents($dbFile));
}


function saveData($data) {
    global $dbFile;

    if (!file_exists($dbFile)) {
        error('db file not exist', 500);
    }

    file_put_contents($dbFile, json_encode($data));
}


function respond($result, $code = 200) {
    http_response_code($code);
    
    if ($result) {
        echo json_encode($result);
    }
    exit();
}

function error($message, $code) {
    http_response_code($code);
    
    if (!$message)
        $message = 'Internal error.';
    echo json_encode(['error' => $message]);

    exit();
}
