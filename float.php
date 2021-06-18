<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>float</title>
</head>

<body>
<?php echo $float = 3.2?><br>
<?php echo $float = 3.2+7?><br>
<?php echo $float = 4/3?><br>
<?php //echo $float = 4/0?><br>

<?php //echo round($float, 1)?><br>
<?php //echo ceil($float)?><br>
<?php //echo floor($float)?><br>

<?php $integer =3; ?>

<?php echo "Is {$integer} integer?". is_int($integer); ?><br>
<?php echo "Is {$float} integer?". is_int($float); ?><br>
<br>
<?php echo "Is {$integer} float?". is_float($integer); ?><br>
<?php echo "Is {$float} float?". is_float($float); ?><br>
<br>
<?php echo "Is {$integer} numeric?". is_numeric($integer); ?><br>
<?php echo "Is {$float} numeric?". is_numeric($float); ?><br>
<br>
</body>
</html>