<?php session_start(); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Session</title>
</head>

<body>

<?php 
	$_SESSION["username"] = "Asif";
echo $_SESSION["username"]
?>
</body>
</html>