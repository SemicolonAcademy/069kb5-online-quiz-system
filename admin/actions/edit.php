<html><head><title></title></head>
<body>
<?php
$id=$_POST['id'];
$con=mysql_connect("localhost","root","");
mysql_select_db("drezon");
$sql="SELECT * FROM `HSTORY` WHERE `id`=$id";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
echo $row['id'];
echo $row['question'];

?>
<h3>Editing question</h3>
<form action="../history.php" method="POST">
<table cellspacing=5 cellpadding=5 width=800>
<tr>
<td>ID</td>
<td><input type="text" size=5 name="id" value="<?php echo $row['id'];?>"/></td></tr><tr>
<td>Question</td>
<td><input type="text" size=130 name="question"/></td></tr><tr>
<td>Answer</td>
<td><input type="text" size=50 name="answer"/></td></tr><tr>
<td>Option1</td>
<td><input type="text" size=50 name="option1"/></td></tr><tr>
<td>Option2</td>
<td><input type="text" size=50 name="option2"/></td></tr><tr>
<td>Option3</td>
<td><input type="text" size=50 name="option3"/></td></tr><tr>
<td>Option4</td>
<td><input type="text" size=50 name="option4"/></td></tr>
<tr><td><input type="submit" value="Change"/></td></tr>
</table></form>

</body></html>