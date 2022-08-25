<?php
    include '../db.php';
    
    $filteredAlbums = [];

    if(!empty($_GET['genre'])){
        $genre = $_GET['genre'];
        foreach($albums as $album){
            if($album['genre'] === $genre){
                $filteredAlbums[] = $album;
            }
        }
    } else {
        $filteredAlbums = $albums;
    }

    header('Content-Type: application/json');
    echo json_encode($filteredAlbums);  