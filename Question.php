<?php
 session_start();

 if(!isset($_SESSION['email'])) {
    header("Location: login.php");
 }
?>

<?php
    // Create database connection
   // $db = mysqli_connect("localhost", "root", "", "shopp");
$db = mysqli_connect("localhost", "root", "", "quiz");
    // Initialize message variable


    // If upload button is clicked ...
    if (isset($_POST['submit'])) {
      // Get image name

      // Get text
      $ques = mysqli_real_escape_string($db, $_POST['question']);
      $repf = mysqli_real_escape_string($db, $_POST['rep1']);
      $reps = mysqli_real_escape_string($db, $_POST['rep2']);
      $rept = mysqli_real_escape_string($db, $_POST['rep3']);
      $repfo = mysqli_real_escape_string($db, $_POST['rep4']);
      $repc = mysqli_real_escape_string($db, $_POST['correct']);
      $quiz = mysqli_real_escape_string($db, $_POST['quizz']);




$sqli = "
INSERT INTO `questions` (`id_question`, `id_quiz`, `Question`, `Reponse1`, `Reponse2`, `Reponse3`, `Reponse4`, `Reponsec`) VALUES (NULL, '$quiz', '$ques', '$repf', '$reps', '$rept', '$repfo', '$repc');	";
          // execute query
      mysqli_query($db, $sqli);


  echo "<script type='text/javascript'>alert('Bien Ajouter');</script>";

    }




mysqli_close($db);


  ?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>

  <link rel="shortcut icon" href="img/fav.png">

  <!-- Site Title -->
  <title>Question - Quizz</title>

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


    <!-- <div class="container">
      <div class="jumbotron">
          <h1>Gestion des Comptes  <small>Restaurant</small></h1>

      </div>
     </div>

     --><br><br><br>

     <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-12">
            <div class="panel panel-default" style="border: 1px solid black;border-radius:6px;">
          <div class="panel-headding" style="    background-color: #007bff;    border-radius: 6px;padding-left:20%;padding-bottom:5px;padding-top:5px;"><!--  Panel heading without title-->
        <h3 class="panel-title"><h1>Saisie les informations des Questions d'un Quizz</h1></h3></div>
            <div class="panel-body">
                <form method="post" action="#">
                    <table class="table table-hover">
                      <tr>
                        <td>Selectionner Quizz</td>
                        <td>
                          <select name="quizz" class="form-control" >
                            <?php
                            include 'db.php';
                            $qq = "select * from quiz ";
                            $quer = mysqli_query($con,$qq);
                            while($r = mysqli_fetch_array($quer)){

                            ?>
                            <option value=<?php echo $r['id_q'];?> ><?php echo $r['nomQuiz'];?></option>

                            <?php
                            }

                            ?>
                          </select>
                      </tr>
                      <tr>
                        <td>Question</td>
                        <td><input type="text" name="question" class="form-control" placeholder="Saisie Votre Question " required=""></td>
                      </tr>
                      <tr>
                        <td>Reponse 1 </td>
                        <td><input type="text" name="rep1" class="form-control" placeholder="Saisie Votre 1er Choix " required=""></td>
                      </tr>
                      <tr>
                        <td>Reponse 2</td>
                        <td><input type="text" name="rep2" class="form-control" placeholder="Saisie Votre 2eme Choix " required=""></td>
                      </tr>
                      <tr>
                        <td>Reponse 3</td>
                        <td><input type="text" name="rep3" class="form-control" placeholder="Saisie Votre 3eme Choix " required=""></td>
                      </tr>
                      <tr>
                        <td>Reponse 4</td>
                        <td><input type="text" name="rep4" class="form-control" placeholder="Saisie Votre 4eme Choix " required=""></td>
                      </tr>
<tr>
                        <td>Reponse correcte</td>
                        <td><input type="text" name="correct" class="form-control" placeholder="Saisie Reponse correcte" required=""></td>
                      </tr>

                      <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit" class="btn btn-primary" value="Ajouter"/></td>
                      </tr>
                    </table>
                </form>
            </div>
        </div>
        </div><br><br>
        <div class="col-md-3"></div>
      </div>

     </div>


     <br><br>

     <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-12">
        <h3 align="center">La Liste des Questions</h3><br>
            <table class="table table-striped table-hover table-bordered">
              <tr class="bg-dark text-white text-center">
                <th>#</th>
                <th>Quizz</th>
                <th>Question</th>
                <th>Reponse 1</th>
                <th>Reponse 2</th>
                <th>Reponse 3</th>
                <th>Reponse 4</th>
                <th>Reponse Correcte</th>

                <th>&nbsp;</th>
                <th>&nbsp;</th>
              </tr>
              <?php
              include 'db.php';
              $q = "select * from questions qu,quiz q where qu.id_quiz = q.id_q ";
              $query = mysqli_query($con,$q);
              while($res = mysqli_fetch_array($query)){

              ?>
              <tr>
                <td><?php echo $res['id_question'];?></td>
                <td><?php echo $res['nomQuiz'];?></td>
                <td><?php echo $res['Question'];?></td>
                <td><?php echo $res['Reponse1'];?></td>
                <td><?php echo $res['Reponse2'];?></td>
                <td><?php echo $res['Reponse3'];?></td>
                <td><?php echo $res['Reponse4'];?></td>
                <td><?php echo $res['Reponsec'];?></td>

                <td><a href="updatequ.php?id=<?php echo $res['id_question'];?>" class="btn btn-success btn-lg pull-right">Modifier</a></td>
                <td><a href="deletequ.php?id=<?php echo $res['id_question'];?>" class="btn btn-danger btn-lg pull-right">Supprimer</a></td>


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
