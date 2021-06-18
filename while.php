<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>While Loop</title>
</head>

<body>
<?php 
	$count = 1;
	while($count<=10){
		if($count == 6){
			echo "SIX, ";
			}
		else{
			echo "{$count},";
		}
		$count++;
		}
	echo "<br>".$count;

?>
</body>
</html>