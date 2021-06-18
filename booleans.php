<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 


	$a = true;
	$b = false;
	
	echo "A: ".$a."<br>";
	echo "B: ".$b."<br>";
	
	echo "A: ".is_bool($a)."<br>";
	echo "B: ".is_bool($b)."<br>";

?>
<br>
<?php 
	$number = 3;
	if(is_float($number)){ 
	echo "This is float number. ";}

?>
</body>
</html>