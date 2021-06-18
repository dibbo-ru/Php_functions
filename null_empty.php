<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Null Empty</title>
</head>

<body>

<?php 
	$v1 = NULL;
	$v2 = "";
	echo "V1: ".is_null($v1)."<br>";
	echo "V2: ".is_null($v2)."<br>";
	echo "V3: ".is_null($v3)."<br> <hr>";
	
	echo "V1: ".isset($v1)."<br>";
	echo "V2: ".isset($v2)."<br>";
	echo "V3: ".isset($v3)."<br><hr>";
?>

<?php // Empty: "", null, 0, 0.0, "0", false, array()?>

<?php 
	$v3 = "0";
	echo "V1: ".empty($v1)."<br>";
	echo "V2: ".empty($v2)."<br>";
	echo "V3: ".empty($v3)."<br>";


?>
</body>
</html>