<?php
session_start();
$response = array();
$response["num"] = 0;
$response["exist"] = "";

if(isset($_REQUEST['pno']) && isset($_REQUEST['num']) && isset($_REQUEST['name']) && isset($_REQUEST['price']) && isset($_REQUEST['pic'])   ) {
    if (isset($_SESSION["cart1"])) {
        $prods = $_SESSION["cart1"];
        $ses_len = count($prods);
        $exist = false;
        for ($i = 0;$i < $ses_len;$i++) {
            if ($prods[$i]["pno"] == $_REQUEST['pno']) {
                $exist = true;
                break;
            }
        }
        if (!$exist) {
            $prod = array();
            $prod["pno"] = $_REQUEST['pno'];
            $prod["num"] = $_REQUEST['num'];
            $prod['price']=$_REQUEST['price'];
            $prod['name']=$_REQUEST['name'];
            $prod['pic']=$_REQUEST['pic'];
            array_push($_SESSION["cart1"], $prod);
            $response["exist"] = "n";
        } else {
            $response["exist"] = "y";
        }
    } else {
        $_SESSION["cart1"] = array();
        $prod = array();
        $prod["pno"] = $_REQUEST['pno'];
        $prod["num"] = $_REQUEST['num'];
        $prod['price']=$_REQUEST['price'];
        $prod['name']=$_REQUEST['name'];
        $prod['pic']=$_REQUEST['pic'];
        array_push($_SESSION["cart1"], $prod);
        $response["exist"] = "n";
    }
}

$response["num"] = count($_SESSION["cart1"]);
echo json_encode($response);

// header("location:cart.php");
?>