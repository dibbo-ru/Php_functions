<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	$page = "Aston villa";
	$query = "find us more";
	$link1 = "/club/".rawurlencode($page)."?query=".urlencode($query);
	
	echo $link1;
?>
</body>
</html>