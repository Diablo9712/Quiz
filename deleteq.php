<?php

include 'db.php';

$id = $_GET['id'];
$q= "delete quiz from quiz where id_q = $id ";

$query = mysqli_query($con,$q);
if($query){
header("location:quiz.php");
}
else
{
	echo "<script>alert('Erreur de Suppression');</script>";
}
?>
