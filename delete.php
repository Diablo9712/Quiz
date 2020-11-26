<?php

include 'db.php';

$id = $_GET['id'];
$q= "delete users from users where id_user = $id ";

$query = mysqli_query($con,$q);
if($query){
header("location:Compte.php");
}
else
{
	echo "<script>alert('Erreur de Suppression');</script>";
}
?>
