<html><head><title></title></head>
<style type="text/css">
#wrapper{margin:0 auto;padding:0;background-color:efefef;background-image:"images/image1.png";}
#headertop{background-color:BFBDF9;padding-top:5px;height:120px;}
#toppan{width:800px;margin:0px auto;}
#nav{width:590px;height:30px;margin:0px auto;float:right;}
.button{width:110px; height:30px;background-color:BFBDF9;}
.footerbutton{width:75px; height:20px;background-color:AAA5A5;}
#headerpan{width:800px;margin:0px auto;padding-top:10px;}
#footerdown{margin-top:1px;}
#footerpan{width:800px;margin:0px auto;margin-top:20px;}
#logo{width:500px; height:90px;}
#footerdown{background-color:AAA5A5;}
.subjectsleft{width:380px;float:left;height:50px;margin:10px;}
.subjectsright{width:380px;float:right;height:50px;margin:10px;}
#subjectname{width:800px;margin:0px auto;margin-top:20px;}
#bodypan{width:800px;margin:0px auto;margin-top:20px;}
hr{width:800px;}
#scoretable{width:550px; margin:0px auto;background-color:dddddd;}
</style>
<script type="text/javascript">
function sure(){
if(confirm("Are you sure to start the quiz?")){
return true;}
else
{
return false;}
}
</script>
<body>
<div id="wrapper">
<div id="headertop">
<div id="toppan">
<img src="images/drezon quiz.png" id="logo"></img>
</div>
<div id="nav">
<a href="quiz.php">
<input type="button" value="Home" name="home" class="button"/></a>
<a href="aboutus.php">
<input type="button" value="About Us" name="aboutus" class="button"/></a>
<a href="contact.php">
<input type="button" value="Contact" name="contact" class="button"/></a>
<a href="Our Team.php">
<input type="button" value="Our Team" name="Our Team" class="button"/></a>
</div>
</div>

<div id="headerpan">

The following reqresents the criteria or subjects for which you click any of them to start quiz.<br>
<div id="subjectname">
<abbr title="Click button to choose your subject">
<a href="subjects/history.php" onclick="return sure();">
<input type="button" class="subjectsleft" value="History" name="history"/></a>
<a href="subjects/geography.php" onclick="return sure();">
<input type="button" class="subjectsright" value="Geography"name="geography"/></a>
<a href="subjects/political.php" onclick="return sure();">
<input type="button" class="subjectsleft" value="Political" name="political"/></a>
<a href="subjects/scientific.php" onclick="return sure();">
<input type="button" class="subjectsright" value="Scientific" name="scientific"/></a>
<a href="subjects/sports.php" onclick="return sure();">
<input type="button" class="subjectsleft" value="Sports" name="sports"/></a>
<a href="subjects/media.php" onclick="return sure();">
<input type="button" class="subjectsright" value="Media" name="media"/></a>
<a href="subjects/gk.php" onclick="return sure();">
<input type="button" class="subjectsleft" value="General Knowledge" name="gk"/></a>
<a href="subjects/technical.php" onclick="return sure();">
<input type="button" class="subjectsright" value="Technical" name="technical"/></a></abbr>
</div>
</div><hr>
<div id="bodypan">
<center>
<?php
$username=$_POST["username"];//from log in data
$name=$_POST["name"];//from register data
echo "Hello <font size=5>";
if($username=='\0')//problem is here. correct it
{echo $name;}
else{
echo $username;}
echo "</font><br>Welcome to your database.";?>
<abbr title="Your Score Board">
<table cellspacing=5 border=0 id="scoretable">
<tr><td> <u><b><center><h3>The table represents the score obtained by you throughout.</h3></center></u></b></td></tr>
<tr><td><b><u>Category</u></b></td><td><b><u>Score</u></b></td></tr>
<tr><td>History</td><td>Score</td></tr>
<tr><td>Geography</td><td>Score</td></tr>
<tr><td>Technical</td><td>Score</td></tr>
<tr><td>Political</td><td>Score</td></tr>
<tr><td>Scientific</td><td>Score</td></tr>
<tr><td>Sports</td><td>Score</td></tr>
<tr><td>Media</td><td>Score</td></tr>
<tr><td>General Knowledge</td><td>Score</td></tr></table></abbr>
</center>
</div>


<div id="footerdown">
<?php 
//here the footer needs to be allocated al owest part but the table which is to represent the score if allocated at last. this needs to be corrected
?>
<div id="footerpan">
<center>
<a href="quiz.php">
<input type="button" value="Home" name="home" class="footerbutton"/></a>
<a href="aboutus.php">
<input type="button" value="About Us" name="aboutus" class="footerbutton"/></a>
<a href="contact.php">
<input type="button" value="Contact" name="contact" class="footerbutton"/></a>
<a href="Our Team.php">
<input type="button" value="Our Team" name="Our Team" class="footerbutton"/></a>
<a href="developer.php">
<input type="button" value="Developer" name="developer" class="footerbutton"/></a>
<a href="privacy.php">
<input type="button" value="Privacy" name="privacy" class="footerbutton"/></a>
<br>
&copy Copyright DREZON.com Pvt. Ltd.	<br>
All Rights Reserved
</center></div></div>

</div>
</body>
</html>