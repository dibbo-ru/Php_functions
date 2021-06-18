<?php 
function hello(){
	echo "Hello World";
	}

function redirect_to($location){
	header("Location: ".$location);
	exit;
}

?>