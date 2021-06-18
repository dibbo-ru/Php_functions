<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Array Pointer</title>
</head>

<body>

<?php $a = array(1, 234, 50, 34, 56, 89,786); ?>

<?php echo "1: ".current($a)."<br>"; ?>

<?php next($a);?>
<?php echo "2: ".current($a)."<br>"; ?>

<?php next($a);?>
<?php next($a);?>
<?php echo "3: ".current($a)."<br>"; ?>

<?php prev($a);?>
<?php echo "4: ".current($a)."<br>"; ?>

<?php reset($a);?>
<?php echo "5: ".current($a)."<br>"; ?>

<?php end($a);?>
<?php echo "6: ".current($a)."<br>"; ?>

<?php $ages = array(1, 234, 50, 34, 56, 89,786); ?>
<?php 
		// Similar to foreach loop.
		
		while($age = current($ages)){
			echo $age.", ";
			next($ages);
			}

?>

















</body>
</html>