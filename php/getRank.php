<?php
    $errMsg = "";
    try {
        require_once("connectDB.php");
        $months = $_REQUEST["month"];

        $sqlrank =  "select cm.attendNo, cm.memId, c.workNo, c.prodName, c.prodPrice, c.imgPath, cm.vote, cm.attendDate
        from contestmember cm
        join custprod c
        on(c.workNo = cm.workNo)
        where (month(cm.attendDate)= :months)
        order by vote desc
        limit 3";

        $months_rank = $pdo->prepare($sqlrank);
        $months_rank->bindValue(":months", $months);
        $months_rank->execute();
        $months_ranks = $months_rank->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($months_ranks);
        // while($month_rank = $months_rank->fetchObject()){
        //     echo "<div class='box'>
        //             <div class='pic'>
        //                 <img src='$month_rank->imgPath' alt='product'>
        //             </div>
        //             <div class='txt'>
        //                 <p>$month_rank->prodName</p>
        //                 <img src='scss/img/contest/heart.png' alt='heart'>
        //                 <span>$month_rank->vote</span>
        //             </div>
        //         </div>
        //         ";
        // }

    } catch (PDOException $e) {
        echo "錯誤 : ", $e -> getMessage(), "<br>";
        echo "行號 : ", $e -> getLine(), "<br>";
    }
?> 