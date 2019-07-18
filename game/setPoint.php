<?php
    session_start();
    // $memId = $_REQUEST["memId"];
    // $memPsw = $_REQUEST["memPsw"];

    $errMsg = "";
    try{
        $dsn = "mysql:host=localhost;port=3306;dbname=dd101g4;charset=utf8";

        $user = "root";
        $password = "";

        $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
        $pdo = new PDO($dsn, $user, $password, $options);

        $memPoint = 100;
        $memId = $_REQUEST["memId"];
        
        // Update 資料表 set 欄位1 = 欄位1 + 值 where 欄位2 = 值
        $sql = "update member set memPoints = memPoints + :memPoint where memId = :memId";

        $memPoints = $pdo->prepare($sql); // 編譯指令
        $memPoints->bindValue(":memPoint", $memPoint); // point 代入資料
        $memPoints->bindValue(":memId", $memId); // 代入資料
        $memPoints->execute();
        // echo 'ok';
    }catch(PDOException $e){
        echo "FailMsg:", $e->getMessage(), "<br>";
        echo "FailNbr:", $e->getLine(), "<br>";
    }
?>