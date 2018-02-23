<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Accueil</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">MemeGenerator</a>
        <a href="meme">
        <button class="boutoncreate" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-icon">Create</span>
        </button>
        </a>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">MemeGenerator
        <small>- Les dernières créations.</small>
      </h1>

	  
      <!-- Project One -->
      <div class="row">
        <div class="col-12">
        <?php foreach ($lastmemes as $key => $memes): ?>
          <a href="pic/meme/<?= $memes['name'] ?>">
          <img class="img-fluid rounded mb-3 mb-md-0" style="height:300px; width:300px; margin-top: 40px;" src="pic/meme/<?= $memes['name'] ?>" alt="<?= $memes['description'] ?>">
          </a>
          <?php endforeach ?>
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
