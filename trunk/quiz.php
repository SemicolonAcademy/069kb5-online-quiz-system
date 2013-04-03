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
#footerpan{width:800px;margin:0px auto;}
#logo{width:500px; height:90px;}
#footerdown{background-color:AAA5A5;padding-top:10px;}
#image1{width:200px;height:290px;float:right;}
#userarea{width:310px;height:400p;}
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
</div>
</div>

<div id="headerpan">

<font size="6">Welcome</font> to the information era! <p>Various categories as subjects are defined in this site based on which you can test your ability.
 You can select your desired subject for which 10 questions are been provided each of <b>10 points</b>. The way of answering the question is select/click 
 the right option been provided to you on the screen. You will have <b>60 seconds</b> to answer the question. In case of not being able to answer in 
 <b>60 seconds</b> time interval, you will lose the points and next question will be assigned. 
 <div id="image1">
<img src="images/image1.png" id="image1"/>
</div>
 <div id="userarea">
<h3><u><b>Test Yourself! Jump Start</u></b></h3>
The only way joining the interesting onine quiz is to register. To register, you are kindly requested to fill uo the following form.<br>
<abbr title="Fill up the form to register">
<table>
<form method="POST" action="testpage.php">
<tr><td>Username:-</td><td><input type="text" size="30" name="name"/></td></tr>
<tr><td>E-Mail:-</td><td><input type="text" size="30" name="email"/></td></tr>
<tr><td>Password:-</td><td><input type="password" size="30" name="password"/></td>
<td><input type="submit" value="Register" /></td></tr>
</form>
</table></abbr>
<font size=5>Already member!</font> You need to log in your profile<br>
<abbr title="Fill up the form to Log in">
<table>
<form method="POST" action="testpage.php">
<tr><td>Username:-</td><td><input type="text" size="30" name="username"/></td></tr>
<tr><td>Password:-</td><td><input type="password" size="30" name="password"/></td>
<td><input type="submit" value="Log In" /></td></tr>
</form>
</table></abbr></div>
</div><br><br>
<div id="footerdown">
<div id="footerpan">
<center>
<a href="quiz.php">
<input type="button" value="Home" name="home" class="footerbutton"/></a>
<a href="aboutus.php">
<input type="button" value="About Us" name="aboutus" class="footerbutton"/></a>
<a href="contact.php">
<input type="button" value="Contact" name="contact" class="footerbutton"/></a>
<a href="developer.php">
<input type="button" value="Developer" name="developer" class="footerbutton"/></a>
<a href="privacy.php">
<input type="button" value="Privacy" name="privacy" class="footerbutton"/></a>
<br>
&copy Copyright DREZON.com Pvt. Ltd.	<br>All Rights Reserved
</center></div></div>
</div>
</body>
</html>