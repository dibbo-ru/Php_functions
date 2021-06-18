<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Global</title>
</head>

<body>
<?php 
		/*$scope = "Outside";  // global scope
		
		function test(){
			$scope = "Inside";  // local scope
			}
			
		echo "1:".$scope."<br>";	
		test();
		echo "2 :".$scope."<br>";*/	
?>

<?php 
		$scope = "Outside";  // global scope
		
		function test(){
			global $scope;
			echo "2: ".$scope."<br>";	
			$scope = "Inside";  // local scope
			}
			
		echo "1:".$scope."<br>";	
		test();
		echo "3:".$scope."<br>";	
?>
</body>
</html>