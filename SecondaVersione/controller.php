<?php
    include '../db.php';
    
    /* $filteredAlbums = [];

    if(!empty($_GET['genre'])){
        $genre = $_GET['genre'];
        $albums = 
    } else {
        $albums = $db->query("SELECT * FROM albums");
    } */
    header('Content-Type: application/json');
    echo json_encode($albums);  