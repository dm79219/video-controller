<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		if (!empty($_POST["url"]) && !empty($_POST["start"]) && !empty($_POST["end"])) {
			$temp_url=$_POST["url"];
			$temp_url=substr($temp_url, strpos($temp_url, "=") + 1);
			$url='https://www.youtube.com/embed/';
			$url.=$temp_url;
			$start=$_POST["start"];
			$end=$_POST["end"];
			$url.='?start='.$start.'&amp;end='.$end;
			?>
			<a href="
			<?php
			echo $url;?>">link</a>
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