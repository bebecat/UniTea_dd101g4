<?php 
session_start();

if( isset($_SESSION["cart1"])){
	echo json_encode($_SESSION["cart1"]);
}else{
	echo "{}";
}

?>