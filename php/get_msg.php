<?php 
$errMsg = "";

try {
require_once("connectDB.php");
	$workNo = $_REQUEST['workNo'];
	$msgCont = $_REQUEST['msgCont'];
	$attendNo = $_REQUEST["attendNo"];
	$memId = $_REQUEST["memId"];
	$addsql = "INSERT INTO message(workNo, attendNo, memId, msgCont)
	VALUES('$workNo', '$attendNo', '$memId', '$msgCont')";
	$pdo->exec($addsql); 
} catch (PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
}

?>