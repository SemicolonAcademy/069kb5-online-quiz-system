<html><head><title>Welcome</title></head>
<style type="text/css">
#wrapper{margin:0 auto;padding:0;background-color:efefef;background-image:"images/image1.png";}
#headertop{background-color:BFBDF9;padding-top:5px;height:120px;}
#toppan{width:800px;margin:0px auto;}
#nav{width:590px;height:30px;margin:0px auto;float:right;}
.button{width:110px; height:30px;background-color:BFBDF9;}
.footerbutton{width:75px; height:20px;background-color:AAA5A5;}
#headerpan{width:800px;margin:0px auto;padding-top:10px;}
#footerdown{margin-top:1px;}
#footerpan{width:800px;margin:0px auto;}
#logo{width:500px; height:90px;}
#footerdown{background-color:AAA5A5;padding-top:10px;}
#image1{width:200px;height:290px;float:right;}
#uesrarea
 .userarea[type="text"],
      .userarea[type="password"] {
        font-size: 16px;
        height: 10px;
        margin-bottom: 15px;
        padding: 7px 9px;
		}
</style>
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

<font size="8">Welcome</font><span> to the information era! <p>Various categories as subjects are defined in this site based on which you can test your ability.
 </span><span>You can select your desired subject for which 10 questions are been provided each of <b>10 points</b>. The way of answering the question is select/click 
 the right option been provided to you on the screen. You will have </span><b><span>60 seconds</b> to answer the question. In case of not being able to answer in 
 <b>60 seconds</b> time interval, you will lose the points and next question will be assigned.</span></b> 
 <div id="image1">
<img src="images/image1.png" id="image1"/>
</div>
 <div class="userarea" id="userarea">
 
		
<h3><u><b>Test Yourself! Jump Start</u></b></h3>
<font size=5>Already member!</font>Log In


<form method="POST" action="testpage.php">
<input type="text" class="input-block-level" placeholder="Email OR Phone" size=30 max length=35>
</br>
Need an account?<a href="newuser.php">Register Now!</a></br></br>
<input type="text" class="input-block-level" placeholder="Password" size=30 max length=35></br>
<a href="forgetpass.php">I've Forget My Password?</a></br></br>

<abbr title="Fill up the form to Log in">

<td><align="centre"><input type="submit" value="Log In" /></td></tr>
</abbr></form></div>

</div><br><br>
<?php	
	ob_start();
	session_start();
	
	
	$username = $_POST['username'];	
	$password = $_POST['password'];		
	
	if ($_POST['submit']) {		
		
		if ($username !="" && $password !=""){
		
			$password = md5($_POST['password']);		
			$con = mysql_connect("localhost", "root", "");        
			
			mysql_select_db("drezon");        		
			
			$sql = "select * from `users` where `username` = '$username' and `password` = '$password'";
			
			$result = mysql_query($sql);				
			
			$count_result = mysql_num_rows($result);
			
			if ($count_result == 1 ) {
				
				//$success = "Login Success!";			
				//echo "Login Success!";			
				
				//set session	
				$_SESSION['login'] = 1;
				$_SESSION['username'] = $username;
				
				//redirect to database
				header ("location: testpage.php");
				
				
			}else {
			
				$error =  "Login failed!";
				//echo "Login failed!";
			}
		} else {
			$error = "Please provide username & password!";
			//echo "Please provide username & password!";
		}
	}	
?>

<div id="footerdown">
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



<a href="privacy.php">
<input type="button" value="Privacy" name="privacy" class="footerbutton"/></a>
<br>
&copy Copyright DREZON.com Pvt. Ltd.	<br>All Rights Reserved
</center></div></div>
</div>
</body>
</html>