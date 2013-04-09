<?php
$id=$_GET["id"];

$con=mysql_connect("localhost","root","");
mysql_select_db("drezon");
$query="delete from `history` where `id`=$id";
$result=mysql_query($query);
mysql_close($con);
header("location:../history.php");
?>