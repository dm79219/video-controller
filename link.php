<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		if (!empty($_POST["url"]) && !empty($_POST["start"]) && !empty($_POST["end"])) {
			$url=$_POST["url"];
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