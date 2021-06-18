<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Strings</title>
</head>

<body>
	<?php echo "Hello World!!"?><br>
	<?php echo 'Hello World!!'?><br>
    <?php 
		$a = "Hello";
		$b = "World!!";
		
		$c = $a." ".$b;
		echo $c;
	?><br>
    <?php 
	echo "{$c}again";
	?>

</body>
</html>
