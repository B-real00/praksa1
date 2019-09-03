<?php
// uzima metodu koja je koristen
$method = $_SERVER['REQUEST_METHOD'];

// info u URL koje dolaze poslije imena file
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));

// uzima sadrzaj file na zadanoj putanji i pretvara JSON format u PHP
$input = json_decode(file_get_contents('php://input'), true);

// putanja do JSON file-a
$dbFile = './articles.json';

$articleParams = [
    'id' => 'number',
    'name' => 'string',
    'body' => 'string',
    'link' => 'string'
];