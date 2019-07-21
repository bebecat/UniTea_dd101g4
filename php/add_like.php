<?php 
    session_start();
    $memId = $_SESSION["memNo"];
    $workNo = $_REQUEST["workNo"];
    $errMsg="";
    try{
        require_once("connectDB.php");
        $sql = "insert into likes (memId, workNo)
        values ($memId, $workNo)";

        $likes = $pdo->exec($sql);
    }catch (PDOException $e){
        echo "錯誤：", $e -> getMessage(),"<br>";
        echo "行號：", $e -> getLine(),"<br>";
    }
?>