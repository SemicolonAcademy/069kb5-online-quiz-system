<html><head><title></title></head>
<style type="text/css">
#wrapper{margin:0 auto;padding:0;background-color:efefef;background-image:"images/image1.png";}
#headerpan{margin:0px auto;padding-top:10px;}
#image1{width:200px;height:290px;float:right;}
#bodypan{margin:0px auto;margin-top:20px;}
</style>
<body>
<div id="wrapper">
<?php include("name.php");?>
<div id="headerpan">
<font size="6">History</font>
</div>

<div id="bodypan"><center>
<table cellspacing=3 cellpadding=3 border=0>
<tr>
<td width=5>ID</td>
<td width=400>Question</td>
<td width=40>Answer</td>
<td width=40>Option1</td>
<td width=40>Option2</td>
<td width=40>Option3</td>
<td width=40>Option4</td>
<td width=80>Action</td>
</tr>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("drezon");
$query="select * from `history`";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result)){
?>
<tr>
<td width=5><font size=1><?php echo $row["id"];?></td>
<td width=400><font size=1><?php echo $row['question'];?></font></td>
<td width=40><font size=1><?php echo $row["answer"];?></font></td>
<td width=40><font size=1><?php echo $row["option1"];?></font></td>
<td width=40><font size=1><?php echo $row["option2"];?></font></td>
<td width=40><font size=1><?php echo $row["option3"];?></font></td>
<td width=40><font size=1><?php echo $row["option4"];?></font></td>
<td width=80><font size=1>
<a href="actions/view.php?id=<?php echo $row["id"];?>">View</a>|
<a href="actions/edit.php?id=<?php echo $row["id"];?>">Edit</a>|
<a href="actions/delete.php?id=<?php echo $row["id"];?>">Delete</a></font>
</td>
</tr>
<?php
}
mysql_close($con);
?>
<tr><td></td><td><a href="actions/add.php"><input type="button" value="Add new Content"/></a></td></tr>
</table>
</center>
</div>
</div>
</body>
</html>