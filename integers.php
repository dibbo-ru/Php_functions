<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Integers</title>
</head>

<body>
	<?php 
		$a = 3;
		$b = 4;
	?>
    
Basic Math: <?php echo ((1+2+$a)*$b)/2-5; ?><br>

Absolute Value: <?php echo abs(0-300); ?><br>
Exponential: <?php echo pow(2,8); ?><br>
Squart Root: <?php echo sqrt(100); ?><br>
Modulo: <?php echo  fmod(20,7); ?><br>
Random:	 <?php echo rand(); ?><br>
Random (min, max):	 <?php echo rand(1,100); ?><br>
<hr>

+=:	 <?php $b+=4; echo $b; ?><br>
-=:	 <?php $b-=4; echo $b; ?><br>
*=:	 <?php $b*=4; echo $b; ?><br>
/=:	 <?php $b/=4; echo $b; ?><br>
<hr>
Increment:	 <?php $b++; echo $b; ?><br>
Decrement:	 <?php $b--; echo $b; ?><br>

<hr>

<?php echo 1 + "3 boats" ?>

</body>
</html>