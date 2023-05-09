<?php
	include("config.php");
	$day = strtolower(date('l'));
	$data = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM data WHERE day = '".$day."'"));
	echo $data['message'];
?>