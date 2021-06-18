<?php require_once("included_function.php") ?>
<?php require_once("validation_functions.php") ?>
<?php 
$errors = array();
$message  = "";
if(isset($_POST["submit"])){
	// Form successfully submitted
		$username = $_POST["username"];
		$password = $_POST["password"];
		// Validations
		
		$field_required = array("username","password");
		foreach($field_required as $field){
			$value = trim($_POST[$field]);
			if(!has_presence($value)){
			$errors[$field] = ucfirst($field)." can't be blank";
			}
		}
		
		// Using an assoc. array
		$field_with_max_length = array("username" => 30, "password" => 8);
		validate_max_length($field_with_max_length);
		
		if(empty($errors)){
			if($username == "asif" && $password == "pass"){
				// successfulley logged in 
				redirect_to("hello_world.php") ;
			}
			else{	
				// Log in failed
				$message  = "Username/Password don't match";
			}
		}
}
else{
		$username = "";
		$message  = "Please log in";

	}
	
	?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form</title>
</head>

<body>
		<?php echo $message ?>
		<?php echo form_errors($errors)?>
		<form action="form_with_validation.php" method="post">
        	Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username) ?>"><br>
        	Password: <input type="password" name="password" value=""><br>
        	<br>
        	<input type="submit" name="submit" value="Submit">
        </form>


</body>
</html>