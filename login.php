<?php

          $mail=array();

           if(empty($_POST['email']) ){}
    else
    {
    	 $login=$_POST['email'];
        $pwd=$_POST['pass'];
         $bdd = new PDO('mysql:host=localhost;dbname=quiz;charset=utf8', 'root', '');
         $reponse=$bdd->query('select * from users');
         $test=true;
		session_start();
         while ($data = $reponse->fetch())
         { // session_start();session_destroy();
         	$mail[]=$data['Email'];

         	if($login==$data['Email'] && $pwd==$data['Password'])

         	{	$_SESSION['con']=1;
			$_SESSION['idcompte']=$data['id_user'];
         		$_SESSION['email']=$data['Email'];
            $_SESSION['score']=0;
            $_SESSION['x']=0;
				$_SESSION['Nom']=$data['Nom'];
				$_SESSION['Prenom']=$data['Prenom'];
         		$_SESSION['permission']=$data['permission'];
         		if($data['permission']=='admin'){
         		echo "<script type='text/javascript'>document.location.replace('admin.php');</script>";
         		}else{
					if($data['permission']=='user'){
						echo "<script type='text/javascript'>document.location.replace('menu.php');</script>";
					}
         		//$test=false;
         	}
		 }}
               if($test==true)
              {

                echo '<center><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <div class="alert-danger"><strong>Erreur!</strong>email ou mot de passe sont incorrect</div></center>';
              }

    }


		?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login - Quizz</title>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/ico" href="img/logo.png" />
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
	<!-- Navbar -->
 <?php include_once("./templates/header.php");?>

 <br><br>
			<div class="container">
			<div class="card mx-auto" style="width: 35rem;">
				<img class="card-img-top mx-auto" style="width:60%" src="./img/login.png" alt="Login Icon">
				<div class="card-body">
					<h4 class="card-title"></h4>
					<form action="#" method="post">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" name="email" required=""  pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Enter email">

			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" name="pass" required=""  placeholder="Password">
			  	<small id="p_error" class="form-text text-muted"></small>
			  </div>
			  <button  class="btn btn-primary" name="login"><i class="fa fa-lock">&nbsp;</i>Login</button>
			 <span><a href="inscription.php">Inscription</a></span>
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


	</body>
</html>
