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
<title>Databases Delete</title>
</head>

<body>
<?php 
// Normally comes from POST request(From form)
$id = 7;
$menu_name = "Delete me";
$position = 4;
$visible = 1;

// 2. Perform database query-------------------
$query  = "DELETE FROM subjects ";
$query .= "WHERE id = {$id} ";
$query .= "LIMIT 1";

$result = mysqli_query($connection, $query);
	// Test if there ws an error
	if($result && mysqli_affected_rows($connection) == 1){ 
	// redirect_to(somepage.php);
		echo "Success";
	}
	else{
		// Subject delete failed
		die("Database query failed.".mysqli_error($connection)); 
	}
?>

</body>
</html>

<?php 

//  5. Close Database connection-------------------

mysqli_close($connection);
?>