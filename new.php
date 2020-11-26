<?php

include 'db.php';
$q = "select quiz.id_q,questions.* from quiz,questions where quiz.id_q=questions.id_quiz and quiz.id_q = 4";
$query = mysqli_query($con,$q);
$t =  array();
$x = 0;
while($res = mysqli_fetch_array($query)){


      $t[] = array("id"=>$res['id_question'],"id_quiz"=>$res['id_quiz'],"question"=>$res['Question'],"rep1"=>$res['Reponse1'],"rep2"=>$res['Reponse2'],"rep3"=>$res['Reponse3'],"rep4"=>$res['Reponse4'],"repc"=>$res['Reponsec']);

}

$arrlength=count($t);

for($x=0;$x<$arrlength;$x++)
  {
  echo $t[$x]["id"].' '.$t[$x]["id_quiz"].' \n'.$t[$x]["question"].'\n '.$t[$x]["rep1"].'\n '.$t[$x]["rep2"].' \n'.$t[$x]["rep3"].' \n'.$t[$x]["rep4"].'\n '.$t[$x]["repc"].' ';
  }


 ?>




 <!-- End video Area -->
