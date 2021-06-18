<?php ob_start(); ?>
<?php 
function redirect_to($location){
	header("Location: ".$location);
	exit;
}

redirect_to("hello_world.php");

/*$logged_in = $_GET["logged_in"];
if($_GET["logged_in"] == 1){
	redirect_to("hello_world.php");
	}
else{
redirect_to("http://www.asif4u.com");
	}*/
		
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Redirect</title>
</head>

<body>
	<h4>Redirect page</h4>
</body>
</html>
<?php ob_end_flush(); ?>