<?php

if(isset($_FILES['pic']))
{
    $dossier = 'C:\wamp64\www\projets\memegenerator\pic\ ';
    $fichier = basename($_FILES['pic']['name']);
    
    // Vérification du type de fichier

    $extensions = array('.png', '.gif', '.jpg', 'jpeg');
    $extension = strrchr($_FILES['pic']['name'], '.');

    if(!in_array($extensions, $extensions))
    {
        $erreur = 'Fichier non autorisé';
    }

    // Vérification de la taille du fichier

    $taille_maxi = 100000000;

    $taille = $_FILES['pic']['tmp_name'];

    if($taille>$taille_maxi)

    {
        $erreur = 'Fichier trop volumineux';
    }

    // Nom de fichier formater

    $fichier = strtr($fichier,
        'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
        'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
    $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);


    if(move_uploaded_file($_FILES['pic']['tmp_name'], $dossier . $fichier)) // TRUE
    { 

        $description = "Une nouvelle image pour votre meme";
        $envoi = $db->query("INSERT INTO blankmeme(name, description) VALUES('$fichier', '$description')");
        $id = $db->lastInsertId();
              
        include("views/uploadView.php");
        
    }
    else // FALSE
    {
        echo 'Echec de l\'upload !';
    }
}


?>