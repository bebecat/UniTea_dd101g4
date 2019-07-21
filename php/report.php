<?php

    $errMsg = "";
    try {
        require_once("connectDB.php");
        echo $_REQUEST["report"];
        echo $_REQUEST["msgNo"];
        if($_REQUEST["report"]=="語言暴力"){
            $msgNo = $_REQUEST["msgNo"];
            $reportWhy = $_REQUEST["report"];
            $sql = "insert into messagereportlist (msgNo, reportWhy, reportStatus)
            values ($msgNo,'$reportWhy','0')";
            $works = $pdo->exec($sql); 
        }
        if($_REQUEST["report"]=="色情相關"){
            $msgNo = $_REQUEST["msgNo"];
            $reportWhy = $_REQUEST["report"];
            $sql = "insert into messagereportlist (msgNo, reportWhy, reportStatus)
            values ($msgNo,'$reportWhy','0')";
            $works = $pdo->exec($sql); 
        }
        if($_REQUEST["report"]=="廣告留言"){
            $msgNo = $_REQUEST["msgNo"];
            $reportWhy = $_REQUEST["report"];
            $sql = "insert into messagereportlist (msgNo, reportWhy, reportStatus)
            values ($msgNo,'$reportWhy','0')";
            $works = $pdo->exec($sql); 
        }



    } catch (PDOException $e) {
        echo "錯誤 : ", $e -> getMessage(), "<br>";
        echo "行號 : ", $e -> getLine(), "<br>";
    }
?> 