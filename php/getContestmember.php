<?php

    $errMsg = "";
    try {
        require_once("connectDB.php");

        if(isset($_GET["newest"])){
            $sqlserch = "select cm.attendNo, cm.memId, c.workNo, c.prodName, c.prodPrice, c.imgPath, cm.vote
            from contestmember cm
            join custprod c
            on(c.workNo = cm.workNo)
            where c.attend = 1
            order by attendDate desc";
            $works = $pdo->query($sqlserch); 
            $workRows = $works->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($workRows);
        }
        if(isset($_GET["popular"])){
            $sqlserch = "select cm.attendNo, cm.memId, c.workNo, c.prodName, c.prodPrice, c.imgPath, cm.vote
            from contestmember cm
            join custprod c
            on(c.workNo = cm.workNo)
            order by vote desc";
            $works = $pdo->query($sqlserch); 
            $workRows = $works->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($workRows);
        }

    } catch (PDOException $e) {
        echo "錯誤 : ", $e -> getMessage(), "<br>";
        echo "行號 : ", $e -> getLine(), "<br>";
    }
?> 