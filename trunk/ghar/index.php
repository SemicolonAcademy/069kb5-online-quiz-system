<html>
<head><title>ghar</title></head>
<style type="text/css">
#wrapper{background-color:#fff}
#header{background-color:#eee;background-image:url('test.png');}
#body{margin:0 AUTO;width:800px;}
#footer{background-image:url('test.png');margin:0px AUTO;}
.limiter{width:800px;margin:0px AUTO;}
.button{width:110px; background-image:url('test.png');}
</style>
<script type="text/javascript">
function delete_sure(){
if(confirm("are u sure to delete?")){
return true;
}
else{
return false;
}
}
</script>
<body bgcolor="efefef">
<div id="wrapper">
<div id="header">
<div class="limiter">
<img src="rabeen.jpg" height="100" width="300">
</img>
<img src="address.png" height="100" width="300" align="right">
</img>
<div id="nav"><center>
<table cellspacing=0 width=800 border=0><tr><td>
<input type="button"value="Home" class="button"></button>  <input type="button"value="Services" class="button"></button>  <input type="button"value="Office" class="button"></button> 
 <input type="button"value="About Us" class="button"></button>  <input type="button"value="Services" class="button"></button> <input type="button"value="Contact" class="button"></button> 
<input type="button"value="Our Works" class="button"></button></td></tr></table></center>
</div></div>
</div><hr>
<div id="body">
<div id="image">
</div>
<div id="text">
<p><h3> The table below is extracted from table test and query users from php myadmin</h3></p>
<table cellspacing=0 border=0 width=600>
<tr>
<td>ID</td>
<td>Username</td>
<td>Password</td>
<td>E-Mail</td>
<td>Action</td>
</tr>
<?php
$con=mysql_connect("localhost","root","");

mysql_select_db("test");
$sql="select * from `users`";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row["id"];?></td>
<td><?php echo $row["username"];?></td>
<td><?php echo $row["password"];?></td>
<td><?php echo $row["email"];?></td>
<td> <a onclick="return delete_sure();" href="action\user_delete.php?id=<?php echo $row["id"];?>">Delete</a> |
 <a href="user_delete.php<?php echo $id=$row["id"];?>">Update</a> |
 <a href="user_delete.php<?php echo $id=$row["id"];?>">Create</a> 
</td>
</tr>
<?php }
mysql_close($con);
?></table>
</div>
<hr>
<div id="footer">
<div class="limiter"><center>
<input type="button"value="Home" class="button"></button>
<input type="button"value="About Us" class="button"></button>
<input type="button"value="Developer" class="button"></button>
</center></div></div>
</div>
</div>
</body>
</html>