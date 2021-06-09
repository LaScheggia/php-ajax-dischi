<?php

include __DIR__ . "/data/db.php";

$authors = [];
$genres = [];
$albums = empty($_GET['genre']) || $_GET['genre'] === 'all' ||  empty($_GET['author']) || $_GET['author'] === 'all'? $database : [];



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
    if($album['genre'] === $_GET['genre'] &&  $album['author'] === $_GET['author']){
      $albums[] = $album;
    }
  }

}


$response = [
  'albums' => $albums,
  'genres' => $genres,
  'authors' => $authors
];



header('Content-Type: application/json');

echo json_encode($response);

?>