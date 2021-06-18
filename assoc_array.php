<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Associative Array</title>
</head>

<body>

<pre>
	<?php $assoc = array("first_name" => "Asif", "last_name" => "Ahmed", "city" => "California");?>
    <?php print_r($assoc);?>
    <?php echo $assoc["city"];
			$assoc["city"] = "Florida";
	?>
    <?php print_r($assoc);?>
</pre>
</body>
</html>