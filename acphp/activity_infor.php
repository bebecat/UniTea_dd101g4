<?php 
//抓取活動資訊並回傳到前端vue
//ob_start();
//session_start();
$errMsg = "";
try {
    require_once("connectBooks.php");
    $sql = "select * from activity where activityNo=:acNo";
    $acty_infor = $pdo->prepare( $sql );
    $acty_infor->bindValue(":acNo", $_REQUEST["acNo"]);
    $acty_infor->execute();
    $infor_row = $acty_infor->fetch(PDO::FETCH_ASSOC);
    return 
} catch (PDOException $e) {
    $errMsg .= "錯誤 : ".$e -> getMessage()."<br>";
    $errMsg .= "行號 : ".$e -> getLine()."<br>";
} 
?>