
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dynamic Text</title>
</head>

<body>
	<?php /* Single line comment 
		  	sample text */
	?>
	<?php echo "Hello World!!"; ?><br>
	<?php echo "Hello"." World!!"; ?><br>
	<?php echo 2+3; ?><br>
    
    <?php 
	if(!empty($errors)){
		echo "<div class=\"error\" >";
		echo "please fix the followin errors";
		echo "<ul>";
		foreach($errors as $key => $error){
			echo "<li>".$error."</li>";	
		} 
		echo "<ul>";
		echo "</div>";
	}
	
	
	?>
</body>
</html>
