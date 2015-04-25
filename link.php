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
        font-color:#009687;

  	}	
  	a:link{
  		text-decoration: none;
  		font-size: 18px;
  		padding: 10px;
  	}
  	#login:hover{
    	border-bottom: 3px solid red;
    }
    .line:hover {
    border-bottom: 3px solid white;
        }
    t:hover{
    	background-color:green; 
    	background-size: 20px;
    	background-height:20px;
    }
    #video:hover{
    	border-bottom: 3px solid blue;
    }

	</style>
   
</head>
<div id="top">
	<a href="index.html" class="line">Home</a>
	<a href="faq.html" class="line" style="margin-left:20px;margin-right:20px;">FAQs</a>
	<a href="login.html" id="login" style="color:red;">Login</a><br>
</div>
<body background="technology.jpg" height=200% width=200%>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<header style="margin-bottom:30px;margin-top:20px;font-size:50px;">
	<p>	CUT TO CHASE WITH
		<br>
		YOUTUBE TRIMMER
		<br></p>
		
	</header>

		<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		if (!empty($_POST["url"]) && (!empty($_POST["start"]) && !empty($_POST["mstart"]))&&(!empty($_POST["end"]) && !empty($_POST["mend"])) ) {
			$temp_url=$_POST["url"];
			if(strpos($temp_url,'youtube')!=false)
			{
				$temp_url=substr($temp_url, strpos($temp_url, "=") + 1);
				$url='https://www.youtube.com/embed/';
				$url.=$temp_url;
			}
			else
			{
				$url=$temp_url;
			}
			$mstart=$_POST["mstart"];
			$mend=$_POST["mend"];
			$start=$mstart*60+$_POST["start"];
			$end=$mend*60+$_POST["end"];
			$url.='?start='.$start.'&amp;end='.$end;
			?>
			<a href="
			<?php
			echo $url;?>" id="video" style="font-size:25px;color:blue;margin-left:3.6cm">Click here to play the trimmed video</a><br><br>

            <span style="margin-left:3.6cm;color:#0277BD;">Share the link on</span>
			<div class="fb-share-button"  style="margin-left:3.6px;margin-top:1cm;padding-left:3.6cm;height:20px;" data-href=<?php echo $url;?> data-layout="button"></div>
			<div class="message" style="  position: absolute;top: 326px;left: 482px;"><a href="https://www.messenger.com/" ><img src="messanger.png" height="50" width="50"></a></div>
			<div class="message" style="  position: absolute;top: 316px;left: 539px;"><a href="https://web.whatsapp.com/" ><img src="whatsapp.png" height="70" width="100"></a></div>
			<?php
			$success=true;
		} else {
			$success=false;
		}
	} else {
		$success=false;
	}
	if($success==false) {
		header("Location:index.html");
	}
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		
			
	<footer>
	</footer>
</body>
</html>

