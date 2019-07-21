<?php
session_start();

// $memId = $_SESSION["memId"];

// if($_REQUEST["memId"] != 0){ 
//     $_SESSION["cart1"][$psn]=array("pname"=>$_REQUEST["name"],"pic"=>$_REQUEST["pic"],"price"=>$_REQUEST["price"],"qty"=>$_REQUEST["qty"]);
// }

// //將購物車回傳
// if(isset($_SESSION["cart1"])==false){
// 	echo "{}";
// }else{
// 	echo json_encode($_SESSION["cart1"]);	
// }
$_SESSION['memId'] = 90006;
$memId = $_SESSION['memId'];
$buildDate= date("Y-m-d");


try{
	require_once("../connectBooks.php");

	$pdo->beginTransaction();
	//寫進明細
	$sql="INSERT INTO orderlist VALUES (null, :memId, :checkSatus, :totalPrice, :buildDate, null, :sendName, :sendAddress, :sendTel) " ;

	$orderlist = $pdo->prepare($sql);
	$orderlist -> bindValue(":memId",$memId);
	$orderlist -> bindValue(":checkSatus",0);
	$orderlist -> bindValue(":totalPrice",$_REQUEST['allTotal']);
	$orderlist -> bindValue(":buildDate",$buildDate);
	$orderlist -> bindValue(":sendName",$_REQUEST['sendN']);
	$orderlist -> bindValue(":sendAddress",$_REQUEST['sendAddress']);
	$orderlist -> bindValue(":sendTel",$_REQUEST['sendTel']);
	

	$orderlist -> execute();


	$orderNo =$pdo->lastInsertId();

	// echo $orderNo;
	//寫進detail
	$sql="INSERT INTO orderdetail VALUES (:prodNo,:volume,:price,$orderNo,null,:workNo)" ;

	$orderdetails = $pdo->prepare($sql);
	foreach($_SESSION['cart1'] as $i=>$value){
		$orderdetails->bindValue(':prodNo',$i);
		$orderdetails->bindValue(':volume',$_SESSION["cart1"][$i]["qty"]);
		$orderdetails->bindValue(':price',$_SESSION["cart1"][$i]["price"]);
		$orderdetails->bindValue(':workNo',null);
		// $orderdetails->bindValue(':sendPerson','小k');
		// $orderdetails->bindValue(':sendTel',111111);
		$orderdetails->execute();
	}
	$pdo->commit();
	unset($_SESSION['cart1']);
	echo $orderNo;
	
	}catch(PDOException $e){
	  echo "錯誤：",$e->getMessage(),"<br>";
	  echo "行號：",$e->getLine(),"<br>";
	}

	

?>