<?php
 session_start();

 if(!isset($_SESSION['email'])) {
    header("Location: login.php");
 }
?>



<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>

  <link rel="shortcut icon" href="img/fav.png">

  <!-- Site Title -->
  <title>Resultat - Quizz</title>

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
    <link rel="icon" type="image/ico" href="img/logo.png" />
  </head>
  <body>

     <?php include_once("./templates/headerx.php");?>

     <br><br>
   <div class="container">
      <div class="jumbotron">
          <h1>Bienvenu M.  <small><?php echo $_SESSION['Nom'].' '.$_SESSION['Prenom'];?></small></h1>

      </div>
      <div class="row">

        <div class="col-md-4 text-center col-sm-6 col-xs-6">
                    <div class="thumbnail product-box">
                      <a href="compte.php">   <img src="img/user.png" style="width:160px; height:250px;">
                      </a>
                        <div class="caption">
                            <h3><a href="compte.php">Utilisateurs </a></h3>
                            <p><a href="compte.php" name="add_to_cart" pid="2" style="float:right;" id="product" class="btn btn-primary btn-xs">Passer</a>
</p>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-4 text-center col-sm-6 col-xs-6">
                            <div class="thumbnail product-box">
                              <a href="quiz.php">   <img src="img/quizz.jpg" style="width:160px; height:250px;">
                              </a>
                                <div class="caption">
                                    <h3><a href="quiz.php">Quizz </a></h3>
                                    <p><a href="quiz.php" name="add_to_cart" pid="2" style="float:right;" id="product" class="btn btn-primary btn-xs">Passer</a>
        </p>
                                </div>
                            </div>
                        </div>
                <!-- /.col -->
                <div class="col-md-4 text-center col-sm-6 col-xs-6">
                            <div class="thumbnail product-box">
                              <a href="question.php">   <img src="img/question.png" style="width:160px; height:250px;">
                              </a>
                                <div class="caption">
                                    <h3><a href="question.php">Questions </a></h3>
                                    <p><a href="question.php" name="add_to_cart" pid="2" style="float:right;" id="product" class="btn btn-primary btn-xs">Passer</a>
        </p>
                                </div>
                            </div>
                        </div>

      </div>
     </div>

     <br><br><br>


     <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-12">
        <h3 align="center">La Liste des Utilisateurs</h3><br>
            <table class="table table-striped table-hover table-bordered">
              <tr class="bg-dark text-white text-center">
                <th>#</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>CIN</th>
                <th>Adresse</th>
                <th>Telephone</th>
              </tr>
              <?php
              include 'db.php';
              $q = "select * from users";
              $query = mysqli_query($con,$q);
              while($res = mysqli_fetch_array($query)){

              ?>
              <tr>
                <td><?php echo $res['id_user'];?></td>
                <td><?php echo $res['Nom'];?></td>
                <td><?php echo $res['Prenom'];?></td>
                <td><?php echo $res['CIN'];?></td>
                <td><?php echo $res['Adresse'];?></td>
                <td><?php echo $res['Tel'];?></td>
              </tr>
              <?php
              }

              ?>
            </table>
        </div>
        <div class="col-md-2"></div>
      </div>
     </div><br><br><br>
     <?php include_once("./templates/footer.php");?>

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
