<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HTML Encode</title>
</head>

<body>
<?php 
	$linktext = "<click> & Learn more";
?>

<a href=""><?php //echo htmlspecialchars($linktext); ?></a>
<a href=""><?php echo htmlentities($linktext); ?></a>

</body>
</html>