<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Foreach Loop</title>
</head>

<body>
<?php 

	$ages = array(31, 23,2, 4, 6,67,25,78);
	foreach($ages as $age){
		echo "{$age},";
		}

?>
<hr>
<?php
	$student1 = array(
					"first_name" 	=> "Aston",
					"last_name" 	=> "Smith",
					"city_name" 	=> "Montreal",
					"Zip_code" 		=> "123456",
					"roll_number" 	=> "786-876"
					);
					
	foreach($student1 as $key => $value){
		$key = ucfirst(str_replace("_"," ", $key));
		echo "<strong>{$key}</strong>:	 {$value}<br>";
		}

?>

</body>
</html>