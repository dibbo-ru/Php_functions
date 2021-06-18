<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Constant</title>
</head>

<body>

First: <?php 
	define("HEIGHT", 10);
	echo HEIGHT;
?>

<?php // can't be changed
//HEIGHT=HEIGHT+3;
//echo HEIGHT;

?>
<hr>
Second: <?php // can't be redefined.

define("HEIGHT", 15);
	echo HEIGHT;
?>
</body>
</html>