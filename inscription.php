<?php
      // Create database connection
     // $db = mysqli_connect("localhost", "root", "", "shopp");
 $db = mysqli_connect("localhost", "root", "", "quiz");
      // Initialize message variable
//     007 090 000 34 65 3003 1003588
//skip-grant-tables-TRUE
      // If upload button is clicked ...
      if (isset($_POST['login'])) {
      	// Get image name

      	// Get text
    $nom = mysqli_real_escape_string($db, $_POST['nom']);
    $prenom = mysqli_real_escape_string($db, $_POST['prenom']);
    $cin = mysqli_real_escape_string($db, $_POST['cin']);
    $adr = mysqli_real_escape_string($db, $_POST['adresse']);
    $tel = mysqli_real_escape_string($db, $_POST['tel']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);



	$sqli = "
INSERT INTO `users` (`id_user`, `Nom`, `Prenom`, `CIN`, `Adresse`, `Tel`, `Email`, `Password`, `permission`) VALUES (NULL, '$nom',' $prenom',' $cin',' $adr',' $tel',' $email',' $pass', 'user');	";
      	// execute query
      $a =	mysqli_query($db, $sqli);
		if($a ){

    echo "<script type='text/javascript'>alert('Bien Inscrir');</script>";
  }else {
      echo "<script type='text/javascript'>alert('Erreur inscription');</script>";
  }
      }




mysqli_close($db);


    ?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>

		<link rel="shortcut icon" href="img/fav.png">

		<!-- Site Title -->
		<title>Inscription - Quizz</title>
  <link rel="icon" type="image/ico" href="img/logo.png" />
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./includes/style.css">
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script src="js/jquery-2.2.4.min.js"></script>
	  <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/main.js"></script>
	<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			 <?php include_once("./templates/header.php");?>

 <br><br>
			<div class="container">
			<div class="card mx-auto" style="width: 35rem;">
				<img class="card-img-top mx-auto" style="width:60%" src="./img/log.png" alt="Inscription Icon">
				<div class="card-body">
					<h4 class="card-title"></h4>
					<form action="#" method="post">
					  <div class="form-group">
			    <label for="exampleInputEmail1">Nom</label>
			    <input type="text" class="form-control" name="nom" required=""   placeholder="Enter Nom">

			  </div>
			    <div class="form-group">
			    <label for="exampleInputEmail1">Prenom</label>
			    <input type="text" class="form-control" name="prenom" required=""   placeholder="Enter Prenom">

			  </div>
			    <div class="form-group">
			    <label for="exampleInputEmail1">CIN</label>
			    <input type="text" class="form-control" name="cin" required=""   placeholder="Enter CIN">

			  </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Adresse</label>
        <input type="text" class="form-control" name="adresse" required=""   placeholder="Enter Adresse">

      </div>
      <div class="form-group">
      <label for="exampleInputEmail1">Telephone</label>
      <input type="text" class="form-control" name="tel" required="" pattern="[0-9]{1,15}$"   placeholder="Enter Telephone">

    </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" name="email" required=""  pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Enter email">

			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" name="pass" required=""  placeholder="Password">
			  	<small id="p_error" class="form-text text-muted"></small>
			  </div>
			  <button  class="btn btn-primary" name="login"><i class="fa fa-lock">&nbsp;</i>Inscription</button>
			 <span><a href="login.php">J'ai déjà un compte</a></span>
			</form>

				</div>

				</div>
			</div>

			<br><br><br>



			<!-- start footer Area -->
			 <?php include_once("./templates/footer.php");?>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
