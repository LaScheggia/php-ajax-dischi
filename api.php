<?php

include __DIR__ . "/data/db.php";

$authors = [];
$genres = [];
$albums = (empty($_GET['genre']) || $_GET['genre'] === 'all') && (empty($_GET['author']) || $_GET['author'] === 'all') ? $database : [];


foreach($database as $album){

  if(!in_array($album['genre'],$genres)){
    $genres[] = $album['genre'];
  }

  if(!in_array($album['author'],$authors)){
    $authors[] = $album['author'];
  }

}

// aggiungo l'elemento col genere corrispondete solo se l'array $albums è vuoto
if(count($albums) === 0){

  foreach($database as $album){

    if($album['author'] === $_GET['author'] && (empty($_GET['genre']) || $_GET['genre'] === 'all')){
      $albums[] = $album;

    }

    if($album['genre'] === $_GET['genre'] && (empty($_GET['author']) || $_GET['author'] === 'all')){
      $albums[] = $album;

    }
    
    if($album['genre'] === $_GET['genre'] && $album['author'] === $_GET['author']){
      $albums[] = $album;
    }
  }

}



//devo fare un triplo filtro 
// 3 if 
// se ho il genere e non ho l'autore(vuoto) allora cerca la corrispondenza tra genere
// se ho l'autore e non ho il genere(vuoto) cerco la corrispondenza per l'autore
// se nex deu due è empty allora faccio il push se genere===genere && autore===autore
//in tre filtri separati 

$response = [
  'albums' => $albums,
  'genres' => $genres,
  'authors' => $authors
];

header('Content-Type: application/json');

echo json_encode($response);

?>