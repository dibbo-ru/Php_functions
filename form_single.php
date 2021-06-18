<?php require_once("included_function.php") ?>
<?php 

if(isset($_POST["submit"])){
	// Form successfully submitted
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		if($username == "asif" && $password == "pass"){
			// successfulley logged in 
			redirect_to("hello_world.php") ;
		}
		else{	
			// Log in failed
			$message  = "There are some errors";
		}
}
else{
		$username = "";
		$password = "";
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
		<form action="form_single.php" method="post">
        	Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username) ?>"><br>
        	Password: <input type="password" name="password" value=""><br>
        	<br>
        	<input type="submit" name="submit" value="Submit">
        </form>


</body>
</html>