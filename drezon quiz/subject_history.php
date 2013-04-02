<html><head><title></title></head>
<style type="text/css">
.tablerow{hover:"#efefef";}
</style>
<script type="text/javascript">
function sure(){
if(confirm("Are you sure to delete?"))
{return true;}
else { return false;}
}
</script>
<body>

<table cellspacing=5 border=0 width=800>
<tr>
<td>ID</td>
<td>Question</td>
<td>Answer</td>
<td>Option1</td>
<td>Option2</td>
<td>Option3</td>
<td>Option4</td>
<td>Admin action</td>
</tr>
<?php
$con=mysql_connect("localhost","root","");//connecting mysql
mysql_select_db("drezon");
$query="select * from `history`";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
?>
<tr class="tablerow">
<td><?php echo $row["id"];?></td>
<td><?php echo $row["question"];?></td>
<td><?php echo $row["answer"];?></td>
<td><?php echo $row["option1"];?></td>
<td><?php echo $row["option2"];?></td>
<td><?php echo $row["option3"];?></td>
<td><?php echo $row["option4"];?></td>
<td><a onclick="return sure();" href="action\user_delete.php?id=<?php echo $row["id"];?>">Delete</a>|<a href="#">Edit</a>|<a href="#">what is it</a></td>
</tr>
<?php }?></table>
<a href="action/user_add.php"><input type="button" value="Add New Item"></a>

</body></html>