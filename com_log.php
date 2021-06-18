<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ElseIf Statement</title>
</head>

<body>
<?php 
// Comparison operator
// ==,===,>, <,>=, <=, <>,!=, !==

// Logical operator
// (and) && , (or)|| , (Not) !

$a = 3;  //integer
$b = "3";  // string

if($a==$b || $a===$b){
	echo "a is equal to b, and they are not identical.";
	}
	
	
	
/*if($a==$b || $a===$b){
   echo "a is less than b.";
	}*/

$d = 5;
if(!isset($d)){
	
	echo "<br>".$d=4;
	}
echo "<br>".$d;

// don't ignore 0 or 0.0

$quantity ="";
if(empty($quantity) && !is_numeric($quantity)){
	echo "<br>Please enter a quantity";
	}
	
	

?>
</body>
</html>