<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Return from function</title>
</head>

<body>
<?php 
	function add($var1,$var2){
		$sum = $var1+$var2;
		return $sum;
		}

	$result1 = add(4,5);
	$result2 = add(4,$result1);
	echo $result2 ;
?>
</body>
</html>