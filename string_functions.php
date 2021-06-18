<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>String Functions</title>
</head>

<body>

	<?php 
	$a = "this boy wants to go ";
	$b = "to park after 2 hours. ";	
	$c  = $a;
	$c .= $b;
	
	echo $c;
	?>
    <br>
    
    <strong>LowerCase:</strong> <?php echo strtolower($c)?><br>
    <strong>UpperCase:</strong> <?php echo strtoupper($c)?><br>
    <strong>UpperCase First:</strong> <?php echo ucfirst($c)?><br>
    <strong>UpperCase Word:</strong> <?php echo ucwords($c)?><br>
    <hr>
    <strong>Length:</strong> <?php echo strlen($c)?><br>
    <strong>Find:</strong> <?php echo strstr($c,"park")?><br>
    <strong>Trim:</strong> <?php echo "A".trim(" B C D ")."E"?><br>
    <strong>Replace:</strong> <?php echo str_replace("park", "school", $c)?>
    <hr>
    <strong>Repeat:</strong> <?php echo str_repeat($c, 2)?><br>
    <strong>SubStrings:</strong> <?php echo substr($c, 5,10)?><br>
    <strong>String Position:</strong> <?php echo strpos($c,"park")?><br>
    <strong>Char Position:</strong> <?php echo strchr($c,"b")?><br>
    
    <br>

</body>
</html>