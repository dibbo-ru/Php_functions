<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>For Loop</title>
</head>

<body>
<h4>While Loop</h4>
<?php 
	$count = 1;
	while($count<=10){
		echo "{$count},";
		$count++;
		}
?>

<hr>
<h4>For Loop</h4>
<?php 

	for($count = 1;$count<=10;$count++){
			echo "{$count},";
		}

?>
<hr>

<?php for($a = 20; $a>0; $a--){
	if($a % 2 == 0){
		echo "{$a} = even number<br>";
		}
	else{
		echo "{$a} = odd number<br>";
		}
	}
	
	
	?>
</body>
</html>