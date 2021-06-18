<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Type Juggling and Type Casting</title>
</head>

<body>
<h4>Type Juggling</h4>

<?php $count = "2 types" ;?>

Type: <?php echo gettype($count); ?>

<?php $count+=3; ?><br>
Type: <?php echo gettype($count); ?><br>

<?php $pens = "I have ".$count." pens"; ?>
Pen: <?php echo gettype($pens); ?>
<hr>

<h4>Type Casting</h4>

<?php settype($count, "string")?>
Type: <?php echo gettype($count); ?><br>



<?php $count2 = (integer) $count?>
Type: <?php echo gettype($count2); ?><br><hr>



<?php 	$test1 = 3;
		$test2 =3;	?>
        
        
<?php settype($test1, "string")?>
Test1: <?php echo gettype($test1); ?><br>

<?php (string) $test2 ?>
Test2: <?php echo gettype($test2); ?><br>


</body>
</html>