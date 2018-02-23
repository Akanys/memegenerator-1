<?php

global $db; 
        
    $dossier = 'C:\wamp64\www\projets\memegenerator\pic\ ';
    $results = $db->query("SELECT * FROM blankmeme WHERE id='1'");
    $thumbnails = $db->query("SELECT * FROM blankmeme GROUP BY id LIMIT 8");

    $thumb = $thumbnails->fetchAll();
    $meme = $results->fetch();

include("views/memeView.php"); 

?>