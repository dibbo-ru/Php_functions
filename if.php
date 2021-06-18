<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>If Statement</title>
</head>

<body>
<?php 
$a = 2;
$b = 3;

if($a>$b){
	echo "a is greater than b.";
	}
if($a<$b){
	echo "a is less than b.";
	}
	
$new_user = true;

if($new_user){
	echo "<br> Welcome to our site";
	}
	
	
$c = 30;
$d = 5;
$result = 0;

if($d>0){
	$result = $c/$d;
	}
	echo "<br>".$result;
?>
</body>
</html>