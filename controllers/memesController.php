<?php

global $db; 
        
$results = $db->query("SELECT * FROM generatedmeme GROUP BY id DESC LIMIT 6");

$lastmemes = $results->fetchAll();

include("views/memesView.php"); 

?>