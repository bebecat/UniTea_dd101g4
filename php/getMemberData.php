<?php
session_start();
$response = array();
// $_SESSION["memId"] = "90004";
// unset($_SESSION["memId"]);
if (isset($_SESSION["memId"])) {
    // already login
    try {
        require_once("connectBooks.php"); //建立與資料庫溝通設定
        $sql = "select * from member where memId=:memId"; //對mysql下指令
        $member = $pdo->prepare($sql);
        $member->bindValue(":memId", $_SESSION["memId"]);
        $member->execute(); //執行指令

        if ($member && $member->rowCount() > 0) { //找不到
            //取回一筆資料
            //$memRow = $member->fetch(PDO::FETCH_ASSOC);
            $memRow = $member->fetchObject(); //取出全部資料
            $response["success"] = "1";
            $response["mesg"] = "";
            $response["res"] = $memRow;
        } else {
            $response["success"] = "0";
            $response["mesg"] = "找不到";
        }
    } catch (PDOException $e) {
        $response["success"] = "0";
        $response["mesg"] = "資料庫意外錯誤";
    }
} else {
    $response["success"] = "0";
    $response["mesg"] = "未登入";
}
echo json_encode($response);
