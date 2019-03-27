
<?php 

$nome = (isset($_POST["nome"])) ? $_POST["nome"] : "";
$cognome = (isset($_POST["cognome"])) ? $_POST["cognome"] : "";
$indirizzo = (isset($POST["indirizzo"])) ? $_POST["indirizzo"] : "";

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">



    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
      <div class="alert alert-primary" role="alert">
       
       <ul>

      	<?php
	  	  foreach ($_POST as $key => $value) {
	  	  	print "<li>" . $key . ": " . $value . "</li>";
	  	  }
	  	?>

	  	</ul>
    <form action="index.php" method="post">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="email" name="nome" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Inserisci il tuo nome">
    </div>
    <div class="form-group">
      <label for="cognome">Cognome</label>
      <input type="email" name="cognome" class="form-control" id="cognome" aria-describedby="cognomeHelp" placeholder="Inserisci il tuo cognome">
    </div>
     <div class="form-group">
    <label for="indirizzo">Indirizzo</label>
    <textarea name="indirizzo" class="form-control" id="indirizzo" rows="3"></textarea>
  </div>
  <small id="emailHelp" class="form-text text-muted">indirizzo di casa e numero civico</small>
    <button type="submit" class="btn btn-primary">Invia</button>
  </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>