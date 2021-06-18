<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Processing</title>
</head>

<body>

<pre><?php 
print_r($_POST); 
	

// Form submission detection

if(isset($_POST["submit"])){
	echo "<br>Form successfully submitted." ;
	
// Setting default value
	if(isset($_POST["username"])){
		$username = $_POST["username"];
	}
	else{
		$username = "";
		}
	if(isset($_POST["password"])){
		$password = $_POST["password"];
	}
	else{
		$password = "";
		}
		
// Setting default value using ternary operator
// boolean test ?  value if true  : value if false 

	$username = isset($_POST["username"]) ? $_POST["username"] : "" ;
	$password = isset($_POST["password"]) ? $_POST["password"] : "" ;		
}


else{
		$username = "";
		$password = "";
echo "<br>{$username}: {$password}";
	
}



?></pre>
</body>
</html>