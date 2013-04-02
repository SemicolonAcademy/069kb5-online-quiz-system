<?php
$id = $_GET["id"];
$con=mysql_connect("localhost","root","");
mysql_select_db("drezon");
$sql = "DELETE from `history` where `id` = $id";
$result=mysql_query($sql);
header('Location:../subject_history.php');
//echo $id." is deleted";

?>
