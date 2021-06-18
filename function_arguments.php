<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Function Argument</title>
</head>

<body>

<?php 
	/*function hello_world($hello, $world, $punc){
	echo "{$hello} {$world} {$punc}<br>";
	}
	
	$name = "Hello";
	hello_world($name, "World", NULL);*/
?>

<br>
<?php 
	function hello_world($hello, $world, $punc){
	$output = "{$hello} {$world} {$punc}<br>";
	return $output;
	}
	
	$name = "Hello";
	echo hello_world($name, "World", NULL);
?>
</body>
</html>