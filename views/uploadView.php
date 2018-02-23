<!DOCTYPE html>
        <html lang="en">
        
          <head>
        
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
        
            <title>MemeGenerator</title>
        
            <!-- Bootstrap core CSS -->
            <link href="<?=$BASE_URL?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
            <!-- Custom styles for this template -->
            <link href="<?=$BASE_URL?>/css/1-col-portfolio.css" rel="stylesheet">
        
          </head>
        
          <body>
        
            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
              <div class="container">
                <a class="navbar-brand" href="<?=$BASE_URL?>">MemeGenerator</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                </div>
              </div>
            </nav>
        
            <!-- Page Content -->
            <div class="container">
        
              <!-- Page Heading -->
              <h1 class="my-4">Création de votre meme
              </h1>
        
              
              <!-- Project One -->
              <div class="row tout">
                <div class="col-md-7">
                  <img class="img-fluid rounded mb-3 mb-md-0" src="<?=$BASE_URL?>pic/ <?= $fichier ?>" alt="<?= $description ?>">
                </div>
                <div class="col-md-5 informations">
                  <form  method="post" action="views/imagecreate.php"  >

                    <input type="hidden" name="image" value="<?php echo $dossier?><?=$fichier?>")>

                    <label for="texteHaut">Texte du haut</label><input id="texteHaut" type="texte" name="texteHaut"></br>

                    <label for="texteBas">Texte du bas</label><input type="texte" type="texte" name="texteBas"></br>

                    <input type="submit" name="envoi" vaue="envoyer">

                  </form>
                </div>
        
                </div>
              </div>
              <!-- /.row -->
              <hr>
        
            </div>
            <!-- /.container -->
        
            <!-- Footer -->
            <footer class="py-5 bg-dark">
              <div class="container">
              <p class="m-0 text-center text-white">Benjamin | Rémi | Jean-Christophe | Quentin</p>
              </div>
              <!-- /.container -->
            </footer>
        
            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
          </body>
        
        </html>