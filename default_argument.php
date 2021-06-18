<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php 
	function hello_world($hello="Hello", $world="World", $punc="!!!"){
	$output = "{$hello} {$world} {$punc}<br>";
	return $output;
	}
	
	echo hello_world(NULL, "World","!!!");
?>

</body>
</html>