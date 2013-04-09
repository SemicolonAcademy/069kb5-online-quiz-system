<html><head><title></title></head>
<body>
<?php
$id=$_GET["id"];
$con=mysql_connect("localhost","root","");
mysql_select_db("drezon");
$query="select * from `history` where id=$id";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result)){
echo "<table cellspacing=5 cellpadding=5 width=1000 border=0><tr>";
echo "<td width=100>ID</td><td>".$row["id"]."</td></tr>";
echo "<td width=100>Question</td><td>".$row["question"]."</td></tr>";
echo "<td width=100>Answer</td><td>".$row["answer"]."</td></tr>";
echo "<td width=100>Option1</td><td>".$row["option1"]."</td></tr>";
echo "<td width=100>Option2</td><td>".$row["option2"]."</td></tr>";
echo "<td width=100>Option3</td><td>".$row["option3"]."</td></tr>";
echo "<td width=100>Option4</td><td>".$row["option4"]."</td></tr>";
echo "</table>";
}
mysql_close($con);
?>

<a href="../history.php"><input type="button" value="Back"/></a>;
</body></html>

