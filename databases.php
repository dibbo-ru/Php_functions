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
<title>Databases</title>
</head>

<body>
<?php 
// 2. Perform database query-------------------
$query  = "SELECT * ";
$query .= "FROM subjects ";
$query .= "WHERE visible=1 ";
$query .= "ORDER BY position ASC ";
$result = mysqli_query($connection, $query);
	// Test if there ws an error
	if(!$result){ die("Database query failed."); }
?>

<!--3. Use returned data (if any)--------------------->
		<?php while($subject = mysqli_fetch_assoc($result)){
            // Output from each row
        ?>
        <li><?php echo $subject["menu_name"]."(".$subject["id"].") <br>"; ?></li>
        <?php } ?>
        
        <?php 
        // 4 Release returned data-----------------
            mysqli_free_result($result);
        ?>

</body>
</html>

<?php 

//  5. Close Database connection-------------------

mysqli_close($connection);
?>