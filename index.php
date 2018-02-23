<?php

include("connection.php"); 

$BASE_URL = "http://localhost/projets/memegenerator/";

if (!isset($_GET['route']) || empty($_GET['route']))
{
   $route = 'home';
}

else {
   $route = $_GET['route'];
}    

switch ($route) {
   case 'home':
       include("controllers/memesController.php");
       break;

   default:
       include("controllers/".$route."Controller.php");
       break;
}

?>