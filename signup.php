<?php
require_once "core.inc.php";
require "connect.inc.php";
?><html>
<head>
	<title>Get your videos trimmed instantaneously</title>
	<style>
	*{
		margin: 0;
		padding: 0;
        border: aqua;
        color:white;
        font-style:initial;
        font-family: Arial, Helvetica, sans-serif;
	 }
	p {
    margin-top: 60px;
    margin-bottom: 10px;
    margin-right: 150px;
    margin-left: 140px;
    font-family: "Times New Roman", Times, serif;
    color:#0277BD;
      }
     s{
    margin-top: 60px;
    margin-bottom: 10px;
    margin-right: 150px;
    margin-left: 17px;
     }
    fieldset {
     height: 5em;
     padding-left: 150px;
     color: #607D8B;
     font:#B388FF;;
     background: transparent none no-repeat 0 0;
     }  
     label{
     	text-transform: uppercase;
     	font-size: 20px;
     	font-family: "Times New Roman", Times, serif;
     	color:#0277BD;

          }
	
	 div#q{
	  	color:#009688;
	  	
	  	padding-left: 4cm;
	  	padding-bottom: 1cm;
	  	padding-top: 1cm;
	  	background-color: #F0F4C3;

	  }
	  div#contact{
	  	color:#B9F6CA;
	  }
	  body{
	  		  }
	div#timeBoxes{    
	  float: left;
      display: inline;
       }  
       input {
            width: 150px;
            border: 3px solid #e9e9e0;
 			 background-color: #FFF;
 			 color: honeydew;
			  font-size: 20px;
 			 padding: 5px 4px;
  			}  
  	div#top{
  		background-color:black;
  		font-size: 8px;
  		padding-bottom: 13px;
   		padding-top: 13px;
   		padding-left: 50px;
        font-color:#009687;

  	}	
  	a:link{
  		text-decoration: none;
  		font-size: 18px;
  		padding: 10px;
  	}
  	#signup:hover{
  		border-bottom: 3px solid red;
  	}
    .line:hover {
    border-bottom: 3px solid white;
        }
    input#s:hover {
    background:#2795ee;
    color: white;
    }
    input[type=submit] {
	border-radius: 3px;
	padding: 10px 20px;
	background:-webkit-linear-gradient(top,white,lightblue);
	border: none;
	color:#607D8B;
	font-size: .9em;
	font-weight: 700;
	cursor: pointer;
	margin-left:5px
	}
	</style>
   
</head>
<div id="top">
	<a href="index.php" class="line">Home</a>
	<a href="faq.php" class="line" style="margin-left:20px;margin-right:20px;">FAQs</a>
	<?php
	if(!loggedin()){
		echo '<a href="signup.php" id="signup" style="color:red;">Sign up</a><a href="login.php" class="line" id="login">Login</a><br>';
	}
	if(loggedin()){
		header('Location:index.php');
	}?>
</div>
<style type="text/css">
video{
	position: absolute;
	z-index: -1;
	min-height: 100%;
	min-width: 100%;
	width: auto;
	height: auto;
	background: url(background.png);
	background-size: cover;
}
</style>
<video autoplay poster="background.png">
	<source src="video.ogv" type="video/ogv"/>
	<source src="video.webm" type="video/webm">
	<source src="video.mp4" type="video/mp4">
</video>
<body>
	<header style="margin-bottom:30px;margin-top:20px;font-size:50px;">
	<p>	Sign up to explore 
		<br></p>
		
	</header>
		<form action="validate.php" method="post">
		<fieldset id="one">
			<div id="timeBoxes">
		<b>	<label for="startURL">Name</label><br><b>
			<input id="startURL" type="text" name="FirstName" placeholder="First name" style="color:#64B5F6;" required>
			:
			<input id="startURL" type="text" name="MiddleName" placeholder="Middle name" style="color:#64B5F6;">
			:
			<input id="startURL" type="text" name="LastName" placeholder="last name" style="color:#64B5F6;" required>
            </div>
		</fieldset>
		<fieldset id="two">
			<label>Date of Birth
			</label><br>
			<div id="timeBoxes">
			<input id="date" type="number" name="date" placeholder="dd" maxlength="2" style="color:#64B5F6;margin-top:5px;font-size:20;width:50px;height:35px";>
			:
			<input id="month" type="number" name="month" placeholder="mm" maxlength="2" required style="color:#64B5F6;font-size:20;width:50px;height:35px";>	
			:
			<input id="year" type="number" name="year" placeholder="yyyy" maxlength="4" required style="color:#64B5F6;font-size:20;width:80px;height:35px";>	
		</div>
		</fieldset>
		<fieldset id="three">
			<label>E-mail
			</label><br>
			<div id="timeBoxes">
			<input id="email" type="text" name="Email" placeholder="email" maxlength="50"style="color:#64B5F6;margin-top:5px;font-size:20;width:300px;height:35px";>
		</div>
		</fieldset>
		<fieldset id="four">
			<label>password
			</label><br>
			<div id="timeBoxes">
			<input id="password" type="password" name="pass" placeholder="password" maxlength="50"style="color:#64B5F6;margin-top:5px;font-size:20;width:300px;height:35px";>
		</div>
		</fieldset>
		<fieldset id="five">
			<label>confirm password
			</label><br>
			<div id="timeBoxes">
			<input id="c-password" type="password" name="con_pass" placeholder="password" maxlength="50"style="color:#64B5F6;margin-top:5px;font-size:20;width:300px;height:35px";>
		</div>
		</fieldset>
		<fieldset id="six">
		<input type="submit" id="s" name="submit" style="margin-left:-1px;width:150px;height:40px;border-radius:45px;font-size:17px;"  value="Sign Up">
	    </fieldset>
		</form>
			
	<footer>
	</footer>
</body>
</html>
