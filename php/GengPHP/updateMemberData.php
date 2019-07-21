<?php
session_start();
$response = array();
// $_SESSION["memId"] = "90004";
// unset($_SESSION["memId"]);
if (isset($_SESSION["memId"])) {
    // already login
    if (
        isset($_REQUEST["m_name"]) && isset($_REQUEST["pwd"]) &&
        isset($_REQUEST["sex"]) && isset($_REQUEST["tel"]) && isset($_REQUEST["addr"])
    ) {
        // has update member data
        try {
            require_once("connectBooks.php"); //建立與資料庫溝通設定
            $sql = "update member set memName=:n, password=:pwd, gender=:sex,
            tel=:t, address=:addr where memId=:memId"; //對mysql下指令
            $member = $pdo->prepare($sql);
            $member->bindValue(":memId", $_SESSION["memId"]);
            $member->bindValue(":n", $_REQUEST["m_name"]);
            $member->bindValue(":pwd", $_REQUEST["pwd"]);
            $member->bindValue(":sex", $_REQUEST["sex"]);
            $member->bindValue(":t", $_REQUEST["tel"]);
            $member->bindValue(":addr", $_REQUEST["addr"]);
            $member->execute(); //執行指令

            if ($member) {
                // update success
                $response["success"] = "1";
                $response["mesg"] = "";
                // update session
                $_SESSION["memName"] = $_REQUEST["name"];
                $_SESSION["address"] = $_REQUEST["addr"];
            } else {
                $response["success"] = "0";
                $response["mesg"] = "資料庫錯誤" . $member->errorInfo();
            }
        } catch (PDOException $e) {
            $response["success"] = "0";
            $response["mesg"] = "資料庫意外錯誤";
        }
    } else {
        $response["success"] = "0";
        $response["mesg"] = "資料不齊全";
    }
} else {
    $response["success"] = "0";
    $response["mesg"] = "未登入";
}
echo json_encode($response);
