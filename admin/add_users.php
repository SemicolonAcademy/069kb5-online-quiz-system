<?php 
session_start();
$name=$_SESSION['reg_name'];
$password=$_SESSION['reg_password'];
$email=$_SESSION['reg_email'];

$con=mysql_connect("localhost","root","");
mysql_select_db("drezon");
$sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES (NULL, '$name', '$password', '$email');";
$result=mysql_query($sql);
header("Location:../index.php");
/*
echo $name."<br>";
echo $password."<br>";
echo $email;
*/
?>
