<?php

include 'db.php';

$id = $_GET['id'];
$q= "delete questions from questions where id_question = $id ";

$query = mysqli_query($con,$q);
if($query){
header("location:question.php");
}
else
{
	echo "<script>alert('Erreur de Suppression');</script>";
}
?>
