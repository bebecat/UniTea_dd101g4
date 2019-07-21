<?php
session_start();
$response = array();
// $_SESSION["memId"] = "90003";
if (isset($_REQUEST["account"]) && isset($_REQUEST["psw"]) && isset($_REQUEST["name"]) && isset($_REQUEST["tel"]) && isset($_REQUEST["address"])) {
    $account = $_REQUEST["account"];
    $psw = $_REQUEST["psw"];
    $name = $_REQUEST["name"];
    $tel = $_REQUEST["tel"];
    $address = $_REQUEST["address"];

    // echo $account, $psw, $name, $tel, $address;

    // already login
    try {
        // 對資料庫連線
        require_once("connectBooks.php");
        // 準備sql命令: 判斷資料庫是否存在帳號
        $sql = "select * from member where account = :acc";
        $member = $pdo->prepare($sql);
        $member->bindValue(":acc", $account);
        // 執行sql命令
        $member->execute();

        if ($member) {
            // 查詢成功
            if ($member->rowCount() > 0) {
                // 帳號存在
                $response["success"] = "0";
                $response["mesg"] = "帳號已存在";
            } else {
                // 帳號不存在 => 新增帳號
                date_default_timezone_set("Asia/Taipei");
                $now = date("Y-m-d H:i:s");
                // $memName = '新用戶';
                // 準備sql命令: 寫入資料庫
                $sql = "insert into member (memName, memPhoto, account, password,
                gender, tel, address, age, birthday, email, memPoints, AccStatus,
                CreateDate, lastModiDate) values (:name, '', :acc, :psw, '0', :tel, :address,
                0, '', '', 0, 1, '$now', '$now')";
                $member = $pdo->prepare($sql);
                // 塞入參數  /從前端送過來的資料
                $member->bindValue(":name", $name);
                $member->bindValue(":acc", $account);
                $member->bindValue(":psw", $psw);
                $member->bindValue(":tel", $tel);
                $member->bindValue(":address", $address);
                $member->execute();

                // 判斷sql命令執行結果
                if ($member) {
                    // 成功寫入資料庫

                    // 取得寫入資料的編號（會員編號）
                    $memId = $pdo->lastInsertId();
                    // 寫入 session
                    $_SESSION["account"] = $account;
                    $_SESSION["memName"] = $name;
                    $_SESSION["memId"] = $memId;
                    $_SESSION["password"] = $psw;
                    $_SESSION["tel"] = $tel;
                    $_SESSION["address"] = $address;
                    // $_SESSION["memPhoto"] = $memRow["memPhoto"];
                    // $_SESSION["memPhoto"] = "";

                    // 回傳資料給 js
                    $response["success"] = "1";
                    $response["mesg"] = "";
                    // $response["errorMag"] = "" . $psw;
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
