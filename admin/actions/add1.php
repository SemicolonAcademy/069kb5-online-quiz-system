<?php
$id=$_POST["id"];
$question=$_POST["question"];
$answer=$_POST["answer"];
$option1=$_POST["option1"];
$option2=$_POST["option2"];
$option3=$_POST["option3"];
$option4=$_POST["option4"];
//echo $id;

$con=mysql_connect("localhost","root","");
mysql_select_db("drezon");
$query="INSERT INTO `history` (`id`, `question`, `answer`, `option1`, `option2`, `option3`, `option4`) VALUES ('$id', '$question', '$answer', '$option1', '$option2', '$option3', '$option4')";
$result=mysql_query($query);
mysql_close($con);

header("location:../history.php");
?>