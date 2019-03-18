
<?php


    		$nome = (isset($_POST["exampleInputEmail1"])) ? $_POST["exampleInputEmail1"] : "";
 					   

            print $nome;

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
  			<?php
  			print $nome . "<br>";
  			print $cognome . "<br>";
  			print $indirizzo . "<br>";
  			?>
  	




    <div class="container">
  <form action="index.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="email" name="exampleInputEmail1" class="form-control" id="exampleInputEmail1" aria-describedby="nomeHelp" placeholder="Inserisci nome">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Cognome</label>
    <input type="email" name="exampleInputEmail1" class="form-control" id="exampleInputEmail1" aria-describedby="cognomeHelp" placeholder="Inserisci cognome">
    
  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Indirizzo</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   <small id="emailHelp" class="form-text text-muted">Deve contenere la via, il numero civico e il cap</small>
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
