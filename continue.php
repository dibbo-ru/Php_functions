<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Continue</title>
</head>

<body>


<h4>For Loop</h4>
<?php 
	for($count = 1;$count<=10;$count++){
			if($count % 2 != 0){ 
				continue; 
				} 
			echo "{$count},";
		}

?>

<h4>While Loop</h4>
<?php 
	// Infinity loop
	$count = 1;
	while($count<=10){
		if($count == 5){
			$count++; 
			continue; 
			} 
		echo "{$count},";
		$count++;
		}
?>
<h4>Loop Jumping</h4>
<?php for($count = 1;$count<=5;$count++){
			if($count == 3){ continue; } 
			for($count2 = 1;$count2<=5;$count2++){
				if($count2 == 3){ continue(2); } 
				echo "{$count}-{$count2}<br>";
			}
		}
		?>
</body>
</html>