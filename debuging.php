<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Debugging</title>
</head>

<body>
<?php 
	$num = 21;
	$string = "Hello";
	$array = array(1 => "Aston",2 => 25,3 => "ton");
	
	//var_dump($num);
	//var_dump($string);
	//var_dump($array);
	
	
?>

<pre>
	<?php
		print_r(get_defined_vars());
    ?>
</pre>
</body>
</html>