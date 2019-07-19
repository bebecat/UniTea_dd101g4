<?php 
//報名活動
//ob_start();
session_start();
if(isset($_SESSION["memId"]) === false){
	header("location:login.html");//傳到登入畫面
}else{
	$memId = $_SESSION["memId"];
	$joinDate = date("Y-m-d");
	$errMsg = "";
	try {
	    require_once("connectBooks.php");
    	$pdo->beginTransaction();
	    $sql = "insert into `activityJoinList` (`activityNo`,`memId`,`joinlDate`)value (:acNo,:memId,:joinDate) ";
	    $acty_infor = $pdo->prepare( $sql );
	    $acty_infor->bindValue(":acNo", $_REQUEST["acNo"]);
	    $acty_infor->bindValue(":memId", $memId);
	    $acty_infor->bindValue(":joinDate", $joinDate);
	    $acty_infor->execute();
	    $pdo->commit();
	} catch (PDOException $e) {
		$pdo->rollBack();
	    $errMsg .= "錯誤 : ".$e -> getMessage()."<br>";
	    $errMsg .= "行號 : ".$e -> getLine()."<br>";
	    echo $errMsg;
	}	
}
 
?>