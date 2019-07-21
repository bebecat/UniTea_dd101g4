<?php
session_start();
$psn=$_REQUEST["psn"];

unset($_SESSION['cart1'][$psn]);
if(isset($_SESSION['cart1'])==false){
    echo "{}";
}else{
    echo json_encode($_SESSION['cart1']);
}

?>