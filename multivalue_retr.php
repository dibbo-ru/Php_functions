<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Return multivalue</title>
</head>

<body>
<?php 
	function add_subt($var1,$var2){
		$add = $var1+$var2;
		$subt = $var1-$var2;
		return array($add, $subt);
		}

	list($add, $subt) = add_subt(10,3);

	echo "Add: ".$add."<br>" ;
	echo "Subt: ".$subt."<br>" ;
?>
</body>
</html>