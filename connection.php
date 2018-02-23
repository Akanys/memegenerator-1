<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=memegenerator', "root", "");
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>