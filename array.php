<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<pre>
	<?php 
		$a = array(1, 34, 56,89,786);
		print_r($a);
		echo "<br>".$a[3]; 
	?>
    <br>
    <hr>
    <?php 
		$b = array(1, "boat", 56,"Dog",786);
		print_r($b);
		$b[3] = "cat";
		$b[4] = 1000;
		$b[] = "goat";
		print_r($b);
		
	?>
    <hr>
    <?php 
		$c = array(1, "boat", 56,"Dog",array("A","B","C"));
		print_r($c);
		$c[4] = "Cold";
		print_r($c);	
	?>
    <?php //$d = array["A","B","C"];
		//print_r($d);
	?>
</pre>
</body>
</html>