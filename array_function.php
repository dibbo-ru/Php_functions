<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Array function</title>
</head>

<body>

	<?php $a = array(1, 34, 2,27, 45, 56,89,786); ?>
    Count: <?php echo count($a);?><br>
    Count: <?php echo max($a);?><br>
    Count: <?php echo min($a);?><br>
    Count: 
    <pre>
	Sort: <?php sort($a); print_r($a);?><br>
	Rev: <?php rsort($a); print_r($a);?><br>
	Implode: <?php echo $b = implode("*",$a); ?><br>
	Explode: <?php print_r(explode("*",$b));?><br>
	In_array: <?php echo in_array(34,$a); // Supply only T/F ?><br>
	In_array: <?php echo in_array(37,$a); // Supply only T/F ?><br>
   
    </pre>
</body>
</html>