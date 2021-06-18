<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Break</title>
</head>

<body>

<?php 
	for($count = 1;$count<=10;$count++){
			if($count == 5){ 
				break; 
				} 
			echo "{$count},";
		}

?>
<h4>Loop Jumping</h4>
<?php for($count = 1;$count<=5;$count++){
			if($count == 3){ continue; } 
			for($count2 = 1;$count2<=5;$count2++){
				if($count2 == 3){ break(2); } 
				echo "{$count}-{$count2}<br>";
			}
		}
		?>

</body>
</html>