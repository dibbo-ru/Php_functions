<?php 

//  1. Create a database connection-------------------

$dbhost = "localhost";
$dbuser = "asif";
$dbpass = "pass1";
$dbname = "cycle_world";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Connection varification
if(mysqli_connect_errno()){
	die("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
	
	}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Databases Update</title>
</head>

<body>
<?php 
// Normally comes from POST request(From form)
$id = 5;
$menu_name = "Delete me";
$position = 4;
$visible = 1;

// 2. Perform database query-------------------
$query  = "UPDATE subjects SET ";
$query .= "menu_name = '{$menu_name}', ";
$query .= "position = {$position}, ";
$query .= "visible = {$visible} ";
$query .= "WHERE id = {$id} ";

$result = mysqli_query($connection, $query);
	// Test if there ws an error
	if($result && mysqli_affected_rows($connection) == 1){ 
	// redirect_to(somepage.php);
		echo "Success";
	}
	else{
		// Subject creation failed
		die("Database query failed.".mysqli_error($connection)); 
	}
?>

</body>
</html>

<?php 

//  5. Close Database connection-------------------

mysqli_close($connection);
?>