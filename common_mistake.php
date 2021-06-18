<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Common problem</title>
</head>

<body>

<!--Access HTML Page-->
<h2>HTML Working</h2>

<?php 
// Access php Page
//phpinfo(); 

?>

<?php 

	//missing semicolon;
	//missing })];
	//$myvar vs $myVar;
	// mistake by = vs ==;
	
	$count = 1;
	while($count <= 10){
		echo "{$count},";
		$count++;
	}
?>

</body>
</html>