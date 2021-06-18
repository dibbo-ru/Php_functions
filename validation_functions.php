<?php 
// --------------------------Presence

function has_presence($value){
return isset($value) && $value !== "";
}

// --------------------------string length

function has_min_length($value, $min){
	return strlen($value) > $min;
}

function has_max_length($value, $max){
	return strlen($value) < $max;
}

function validate_max_length($field_with_max_length){
	// Using an assoc. array
		global $errors;
		foreach($field_with_max_length as $field => $max){
			$value = trim($_POST[$field]);
			if(!has_max_length($value, $max)){
			$errors[$field] = ucfirst($field)." is too long";
			}
		}
	
	}



// --------------------------Inclusion in set

function has_inclusion_in($value, $set){
 return in_array($value, $set);
} 
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