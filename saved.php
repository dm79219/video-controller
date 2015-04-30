<?php
require_once"core.inc.php";
require"connect.inc.php";
?>
<html>
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
     font:#0277BD;
     background: transparent none no-repeat 0 0;
     }  
     label{
     	text-transform: uppercase;
     	font-size: 15;
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
            width: 500px;
            border: 3px solid #e9e9e0;
 			 background-color: #FFF;
 			 color: #0277BD;
			  font-size: 1.6em;
 			 padding: 5px 4px;
  			}  
  	div#top{
  		background-color:black;
  		font-size: 8px;
  		padding-bottom: 13px;
   		padding-top: 13px;
   		padding-left: 50px;
        color:red;

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
    t:hover{
    	background-color:green; 
    	background-size: 20px;
    	backgound-height:20px;
    }
    .error{
    	color:red;
    }
	</style>
   <script src="script.js"></script>
</head>
<div id="top">
	<a href="index.php" class="line">Home</a>
	<a href="faq.html" class="line" style="margin-left:20px;margin-right:20px;">FAQs</a>
	<?php
	if(!loggedin()){
		echo '<a href="signup.php" id="signup" style="color:red;">Sign up</a><a href="login.php" class="line" id="login">Login</a><br>';
	}
	if(loggedin()){
		echo '<a href="saved.php" class="line" style="margin-left:20px;margin-right:20px;">Saved videos</a><a href="logout.php" id="signup" style="color:red;">Logout</a>';
		$firstname=getuserfield('firstname');
			$lastname=getuserfield('lastname');
			echo('<span style="vertical-align:top;float:right;margin-top:0;color:white;position: relative;
					margin-right: 5px;font-size:18px;">Hello '.$firstname.'</span>');
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
		
	</header>
		<?php
		$id=$_SESSION['user_id'];
		$query="SELECT link,start_time,end_time FROM data where id= '".mysql_real_escape_string($id)."'";
		$query_run=mysql_query($query);
		$i=1;
		while($query_row=mysql_fetch_assoc($query_run)){
			$link=$query_row['link'];
			$start=$query_row['start_time'];
			$end=$query_row['end_time'];
			echo '<span style="color:#2795ee;font-size:30px;">'.$i.' <a href="'.$link.'">Link</a> '.$start.' '.$end.'</span><br>';
		}
		?>
			
	<footer>
	</footer>
</body>
</html>
