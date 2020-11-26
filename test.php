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
	$id=$_GET['id'];
    $t =  array();

    if(empty($t)) {

      $q = "select quiz.id_q,questions.* from quiz,questions where quiz.id_q=questions.id_quiz and quiz.id_q = ".$id;
      $query = mysqli_query($db,$q);
    while($res = mysqli_fetch_array($query)){


          $t[] = array("id"=>$res['id_question'],"id_quiz"=>$res['id_quiz'],"question"=>$res['Question'],"rep1"=>$res['Reponse1'],"rep2"=>$res['Reponse2'],"rep3"=>$res['Reponse3'],"rep4"=>$res['Reponse4'],"repc"=>$res['Reponsec']);

    }}

    $arrlength=count($t);

if($_SESSION['x']<$arrlength-1){


    // If upload button is clicked ...
    if (isset($_POST['submit'])) {



    //  $answer = mysqli_real_escape_string($db, $_POST['rep']);
      $answer = $_POST['rep'];
if (isset($answer) && $answer == $t[$_SESSION['x']]["repc"]) {

$_SESSION['score'] +=1;

}
else {
    echo 'Incorrect';
}


$_SESSION['x'] +=1;



    }
}
else{
  $sqli = "
INSERT INTO `result`(`id_result`, `id_user`, `id_quiz`, `Score`)
 VALUES (NULL,".$_SESSION['idcompte'].",".$id.",".$_SESSION['score'].");	";
            // execute query
        mysqli_query($db, $sqli);

$_SESSION['score'] = 0;
$_SESSION['x'] = 0;
    		echo "<script type='text/javascript'>document.location.replace('resultat.php');</script>";
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
        <h3 class="panel-title"><h1>Saisie les informations des Questions d'un Quizz <?php echo $_SESSION['score'].' '.$_SESSION['x'].' '.$arrlength; ?></h1></h3></div>
            <div class="panel-body">
                <form method="post" action="#">
                    <table class="table table-hover">

                      <tr>
                        <td style="width:15%;">Question</td>
                        <td><input type="text" name="question" class="form-control" value="<?php echo $t[$_SESSION['x']]["question"];  ?>" readonly required=""></td>
                      </tr>
                      <tr>
                        <td style="width:15%;"><?php echo $t[$_SESSION['x']]["rep1"];  ?> </td>
                        <td><input type="radio" name="rep" class="form-control" value="<?php echo $t[$_SESSION['x']]["rep1"];  ?>"></td>
                      </tr>
                      <tr>
                        <td style="width:15%;"><?php echo $t[$_SESSION['x']]["rep2"];  ?></td>
                        <td><input type="radio" name="rep" class="form-control" value="<?php echo $t[$_SESSION['x']]["rep2"];  ?>"></td>
                      </tr>
                      <tr>
                        <td style="width:15%;"><?php echo $t[$_SESSION['x']]["rep3"];  ?></td>
                        <td><input type="radio" name="rep" class="form-control" value="<?php echo $t[$_SESSION['x']]["rep3"];  ?>"></td>
                      </tr>
                      <tr>
                        <td style="width:15%;"><?php echo $t[$_SESSION['x']]["rep4"];  ?></td>
                        <td><input type="radio" name="rep" class="form-control" value="<?php echo $t[$_SESSION['x']]["rep4"];  ?>"></td>
                      </tr>


                      <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit" class="btn btn-primary" value="Submit"/></td>
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
