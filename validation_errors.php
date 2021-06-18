<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Validations</title>
</head>

<body><?php 

$errors = array();
// --------------------------Presence

$value = "";

if(!isset($value) || empty($value)){
	$errors["Presence"] = "Data field can't be blank";
}

// --------------------------string length

$value = "as";
$min = 3;
if(strlen($value) < $min){
	$errors["strlen"] = "Value is too short";
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

<pre><?php //print_r($errors)?></pre>

<?php 
	function form_errors($errors = array()){
		$output = "";
		if(!empty($errors)){
			$output  .= "<div class=\"error\" >";
			$output .= "Please fix the following errors";
			$output .= "<ul>";
			foreach($errors as $key => $error){
				$output .= "<li>".$error."</li>";	
			} 
			$output .= "<ul>";
			$output .= "</div>";
			
			return $output;
		}
	}
?>

<?php echo form_errors($errors)?>


</body>
</html>