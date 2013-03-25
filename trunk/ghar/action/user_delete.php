<?php
$id=$_GET["id"];
//echo $id;
$con=mysql_connect("localhost","root","");
mysql_select_db("test");
$sql="delete from `users` where `id`=$id";
$result=mysql_query($sql);
header("location:../index.php");
?>