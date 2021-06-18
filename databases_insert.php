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
<title>Databases Insert</title>
</head>

<body>
<?php 
// Normally comes from POST request(From form)
$menu_name = "New' Subject";
$position = (int) 4;
$visible = (int) 1;

// Only for all string
$menu_name = mysqli_real_escape_string($connection, $menu_name);

// 2. Perform database query-------------------
$query  = "INSERT INTO subjects ( ";
$query .= "menu_name, position, visible ";
$query .= ") VALUES ( ";
$query .= "'{$menu_name}', {$position}, {$visible} ";
$query .= ")";

echo $query."<br>";


$result = mysqli_query($connection, $query);
	// Test if there ws an error
	if($result){ 
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