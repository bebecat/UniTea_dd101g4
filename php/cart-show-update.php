<?php
session_start();
$psn = $_REQUEST["psn"];
if($_REQUEST["qty"] != 0){ 
    $_SESSION["cart1"][$psn]=array("pname"=>$_REQUEST["name"],"pic"=>$_REQUEST["pic"],"price"=>$_REQUEST["price"],"qty"=>$_REQUEST["qty"]);
}

//將購物車回傳
if(isset($_SESSION["cart1"])==false){
	echo "{}";
}else{
	echo json_encode($_SESSION["cart1"]);	
}

?>
