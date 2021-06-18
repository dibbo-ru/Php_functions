<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cookies</title>
</head>

<body>


<?php 
	$name = "test_cookie";
	$value = 290;
	$time = time()+(60*60*24*7*2);
	//setcookie($name,$value,$time);
	//setcookie($name);
	//setcookie($name,NULL,$time);
	//setcookie($name,$value,time()-3600);
	
	// Recommended setting
	setcookie($name,NULL,time()-3600);
?>

<pre><?php 

	//print_r($_COOKIE);
?></pre>


<?php
	$test = isset($_COOKIE["test_cookie"]) ? $_COOKIE["test_cookie"] : "" ;

	echo $test;
 ?>


</body>
</html>