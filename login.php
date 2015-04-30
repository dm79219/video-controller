<?php
require_once "core.inc.php";
?>
<html>
<head>
	<title>Get your videos trimmed instantaneously</title>
	<link href="public.css" rel="stylesheet" type="text/css">
	<style>
	*{
		margin: 0;
		padding: 0;
        color:white;
        font-style:initial;
        font-family: Arial, Helvetica, sans-serif;
	 }
	
	 div#q{
	  	color:#009688;
	  	
	  	padding-left: 4cm;
	  	padding-bottom: 1cm;
	  	padding-top: 1cm;
	  	background-color: #F0F4C3;

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
    background-color:#B388FF;
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
	<header style="margin-bottom:30px;margin-top:20px;margin-left:45px;font-size:50px;">
	<p style="color:#0277BD;">Login 
		</p>
		
	</header>
	<div id="form">
		<form class="commonForm" id="session-form" method="post" action="login_validate.php" accept-charset="utf-8">
      <fieldset>
        <div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='pmROGTCvtAIsbTqHPfdO9xD67He86Mbt' /></div>
        <p><label for="id_username">Username:</label> <input id="name_user" type="text" placeholder="username" name="username" maxlength="30" /></p>
<p><label for="id_password">Password:</label> <input type="password" placeholder="password" name="password" id="id_password" /></p>
        <div class="submitCont">
          <input type="submit" value="Log in" />
        </div>
      </fieldset>
    </form>
	</div>	
	<footer>
	</footer>
</body>
</html>
