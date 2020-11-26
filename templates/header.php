<nav class="navbar navbar-expand-lg navbar-dark bg-primary">


			<a class="navbar-brand" href="#"> <img src="img/logo.png" style="width:70px;height:40px; " alt=""/></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" >
				<span class="navabr-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">

						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="index.php"><i class="fa fa-home"></i> Accueil </a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="photoshop.php"> Photoshop </a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href=tutoriel.php> Tutoriel </a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="outil.php"> Outils </a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="about.php"> A propos </a>
							</li>
						</ul>
							<ul class="navbar-nav" style="margin-left:50%">
					<?php		if(!isset($_SESSION['email'])) {
   ?>

<li class="nav-item active" >
								<a class="nav-link" href="login.php"><i class="fa fa-user"></i> Login</a>
							</li>
								<li class="nav-item active">
								<a class="nav-link" href="inscription.php"><i class="fa fa-user"></i> Inscription</a>
							</li><?php  }else{ ?>

<li class="nav-item active" >
<a class="nav-link" href="login.php"><i class="fa fa-user"></i> <?php
if(session_status()==2){

echo " ".$_SESSION['Nom']." ".$_SESSION['Prenom']." ";

}else{

	session_start();
	echo " ".$_SESSION['Nom']." ".$_SESSION['Prenom']." ";
} ?></a>
</li>
<li class="nav-item active" >
<a class="nav-link" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
</li>
	<?php						}

?>

							<li class="nav-item active" >
								<a class="nav-link" href="login.php"><i class="fa fa-user"></i> Login</a>
							</li>
								<li class="nav-item active">
								<a class="nav-link" href="inscription.php"><i class="fa fa-user"></i> Inscription</a>
							</li>
						</ul>
					<div>

			</nav>
