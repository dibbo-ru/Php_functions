<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Validations</title>
</head>

<body><?php 

// --------------------------Presence

$value = "A";

if(!isset($value) || empty($value)){
	echo "Presence: Validation failed<br>";
}

// --------------------------string length

$value = "asw";
$min = 3;
if(strlen($value) < $min){
	echo "String length: Validation failed<br>";
}

// --------------------------Type

$value = "1";

if(!is_string($value)){
	echo "Type-String: Validation failed<br>";
}

// --------------------------Inclusion in set

$value = "2";
$set = array("1", "2", "3");
if(!in_array($value, $set)){
	echo "Inclusion in set: Validation failed<br>";
}

// --------------------------Uniqueness
		// Uses a database to check uniqueness

		
// --------------------------format checking		
$value = "myemail@mail.com"	;
if(!preg_match("/@/", $value)){
	echo "Format checking: Validation failed<br>";
}

?>


</body>
</html>