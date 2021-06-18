<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Define a function</title>
</head>

<body>

<?php 

function new_function(){
	echo "Hello World!<br>";
	}
	
new_function();	

function new_function2($word){
	echo "Hello {$word}!<br>";
	}
	
new_function2("World");	
new_function3("Asif");	

function new_function3($word){
	echo "Hello {$word}!<br>";
	}
	
?>
</body>
</html>