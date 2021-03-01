<?php 
//session_start();
//?>
<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
</head>
<body>
		<?php

		$f= fopen("save.txt","r");
		$data=fread($f,filesize("save.txt"));
		$data_filter=explode("\n",$data);
		echo $data_filter[0];
		echo "<br>";
?>
</body>
</html>