<?php 
$errMsg = "";
try {
    require_once("connectbook.php");
    $sql = "select * from activity where activityNo = :acNo";
    $activityInfor = $pdo->prepare( $sql );
    $activityInfor->bindValue(":acNo", $_REQUEST["acNo"]);
    $activityInfor->execute();
    $inforRow = $activityInfor->fetch(PDO::FETCH_ASSOC);
    $info = array("activityNo" => $inforRow["activityNo"],
    	"activityName" => $inforRow["activityName"],
        "activityImg" => $inforRow["activityImg"],
        "activityPrice" => $inforRow["activityPrice"],
        "activityDescribe" => $inforRow["activityDescribe"],
        "activityPlace" => $inforRow["activityPlace"],
        "activitylDate" => $inforRow["activitylDate"]);
    // echo json_encode($infoRow);
    echo json_encode($info);
} catch (PDOException $e) {
    $errMsg .= "錯誤 : ".$e -> getMessage()."<br>";
    $errMsg .= "行號 : ".$e -> getLine()."<br>";
    echo $errMsg;
} ;
?>