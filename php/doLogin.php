<?php
session_start();
$response = array();
// $_SESSION["memId"] = "90003";
if (isset($_REQUEST["account"]) && isset($_REQUEST["psw"])) {
    $account = $_REQUEST["account"];
    $psw = $_REQUEST["psw"];
    // already login
    try {
        // 對資料庫連線
        require_once("connectBooks.php");
        $sql = "select * from member where account=:acc";
        // 準備sql命令
        $member = $pdo->prepare($sql);
        // 塞入參數  /從前端送過來的資料
        $member->bindValue(":acc", $account);
        // 執行sql命令
        $member->execute();
        // 判斷sql命令執行結果

        if ($member && $member->rowCount() > 0) { //找不到
            //取回一筆資料
            $memRow = $member->fetch(PDO::FETCH_ASSOC);
            if ($memRow["password"] == $psw) {

                $_SESSION["memId"] = $memRow["memId"];
                $_SESSION["memName"] = $memRow["memName"];
                $_SESSION["memPhoto"] = $memRow["memPhoto"];
                $_SESSION["address"] = $memRow["address"];

                $response["success"] = "1";
                $response["mesg"] = "" . $memRow["memName"];
            } else {
                $response["success"] = "0";
                $response["mesg"] = "帳號密碼不合";
            }
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
    $response["mesg"] = "請輸入帳號密碼";
}
echo json_encode($response);
