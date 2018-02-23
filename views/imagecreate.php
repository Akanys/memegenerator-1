<?php

header("Content-type: image/jpeg");

$image = imagecreatefromjpeg($_POST["image"]);
$white = imagecolorallocate($image, 255, 255, 255);
$red = imagecolorallocate($image,  249, 11, 11 );
$angle = 0;
$size = 100;
$x= 50;
$y= 125;
$xx= 400;
$yy= 750;
$text1 = $_POST["texteHaut"];
$text2 = $_POST["texteBas"];

// Définir la variable d'environnement pour GD

putenv('GDFONTPATH='.realpath('.'));

// Nommez la police à utiliser (Notez l'absence de l'extension .ttf)

$impact = "../font/impact.ttf";

$texte1=imagettftext($image,$size,$angle,$x,$y,$white,$impact,$text1);

$texte2=imagettftext($image,$size,$angle,$xx,$yy,$red,$impact,$text2);

imagejpeg($image);

?>