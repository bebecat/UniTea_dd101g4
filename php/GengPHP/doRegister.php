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
        // 準備sql命令: 判斷資料庫是否存在帳號
        $sql = "select account from member where account = :acc";
        $member = $pdo->prepare($sql);
        $member->bindValue(":acc", $account);
        // 執行sql命令
        $member->execute();

        if (member) {
            // 查詢成功
            if ($member->rowCount() > 0) {
                // 帳號存在
                $response["success"] = "0";
                $response["mesg"] = "帳號已存在";
            } else {
                // 帳號不存在 => 新增帳號
                date_default_timezone_set("Asia/Taipei");
                $now = date("Y-m-d H:i:s");
                $memName = '新用戶';
                // 準備sql命令: 寫入資料庫
                $sql = "insert into member (memName, memPhoto, account, password,
                gender, tel, address, age, birthday, email, memPoints, AccStatus,
                CreateDate, lastModiDate) values ('$memName', '', :acc, :psw, '0', '', '',
                0, '', '', 0, 1, '$now', '$now')";
                $member = $pdo->prepare($sql);
                // 塞入參數  /從前端送過來的資料
                $member->bindValue(":acc", $account);
                $member->bindValue(":psw", $psw);
                $member->execute();

                // 判斷sql命令執行結果
                if ($member) {
                    // 成功寫入資料庫

                    // 取得寫入資料的編號（會員編號）
                    $memId = $pdo->lastInsertId();
                    // 寫入 session
                    $_SESSION["memId"] = $memId;
                    $_SESSION["memName"] = $memName;
                    $_SESSION["memPhoto"] = "";
                    $_SESSION["address"] = "";

                    // 回傳資料給 js
                    $response["success"] = "1";
                    $response["mesg"] = "" . $memRow["memName"];
                } else {
                    $response["success"] = "0";
                    $response["mesg"] = "寫入資料庫錯誤";
                }
            }
        } else {
            // 查詢失敗
            $response["success"] = "0";
            $response["mesg"] = "資料庫錯誤";
        }
    } catch (PDOException $e) {
        $response["success"] = "0";
        $response["mesg"] = "資料庫意外錯誤: " . $e->getMessage();
    }
} else {
    $response["success"] = "0";
    $response["mesg"] = "請輸入帳號密碼";
}

echo json_encode($response);
