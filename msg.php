<?php
session_start();
// if( isset($_SESSION["show"])!=""){
//     echo json_encode($_SESSION["show"]);
// }else{
// 	echo "{}";
// }
    $errMsg = "";
    try {
        require_once("./php/connectDB.php");
        $id = $_GET['id'];
        $worksql = "select r.memName, r.memPhoto, m.workNo, c.prodName, c.prodPrice, c.imgPath, m.vote, m.attendNo, m.memId
        from contestmember m
        join custprod c
        on(c.workNo = m.workNo)
        join member r
        on(m.memId = r.memId)
        where m.workNo = '$id' and c.attend = 1
        ";
        $work = $pdo->query($worksql); 
        $workRow = $work->fetchAll(PDO::FETCH_ASSOC);

        // if(isset($_POST['member_msg'])){
        //     $id = $_GET['id'];
        //     $member_msg = $_REQUEST['member_msg'];
        //     $attendNo = $workRow[0]["attendNo"];
        //     // $memId = $_SESSION['memId'];
        //     $addsql = "INSERT INTO message(workNo, attendNo, memId, msgCont)
        //     VALUES('$id', '$attendNo', '90005', '$member_msg')";
        //     $affectedRow = $pdo->exec($addsql); 
        // }

        $msgsql = "select co.msgNo, r.memName, r.memPhoto, m.workNo, co.pubdate, co.msgCont 
        from message co
        join member r
        on(co.memId = r.memId)
        join contestmember m
        on(co.attendNo = m.attendNo)
        where co.workNo = '$id'
        order by pubdate desc 
        ";
        // $msgsql = "select co.msgNo, r.memName, r.memPhoto, m.workNo, c.prodName, c.prodPrice, c.imgPath, m.vote, co.pubdate, co.msgCont 
        // from contestmember m
        // join custprod c
        // on(c.workNo = m.workNo)
        // join member r
        // on(m.memId = r.memId)
        // join message co
        // on(co.workNo = c.workNo)
        // where m.workNo = '$id' and c.attend = 1;
        // ";
        $msg = $pdo->query($msgsql); 
        $msgRows = $msg->fetchAll(PDO::FETCH_ASSOC);
        
    } catch (PDOException $e) {
        echo "錯誤 : ", $e -> getMessage(), "<br>";
        echo "行號 : ", $e -> getLine(), "<br>";
    }
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>野餐趣 | 美籃票選</title>
    <link rel="shortcut icon" href="scss/img/h_f_img/rwd-logo.png">
    <link rel="stylesheet" href="css/msg.css">
    <link rel="stylesheet" href="css/h_f_becca.css">
    <link rel="stylesheet" href="css/machine.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/h_f_becca.js"></script>
    <script src="js/login.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
</head>

<body>
    <div class="contest_wrapper">
    <?php 
        require_once("memberLogin.php");
        require_once("header.php");
        ?>
        <div id="comment_window">
            <div class="box">
                <div class="pic">
                    <img src="<?php echo $workRow[0]["imgPath"]?>" alt="product">
                </div>
                <div class="txt">
                    <p><?php echo $workRow[0]["prodName"]?></p>
                    <div class="inner_txt">
                        <div class="price">價格:<span><?php echo $workRow[0]["prodPrice"]?></span><span>元</span></div>
                        <img class="heart" src="scss/img/contest/heart.png" alt="heart">
                        <span><?php echo $workRow[0]["vote"]?></span>
                    </div>
                </div>
            </div>
            <div id="comment_wrap" class="comment_wrap">
                <!--打字留言 -->
                <div id="comment_box" class="comment_box">
                    <div id="mem" class="mem">
                        <div class="pic">
                            <img id="mem_pic" src="<?php ?>" alt="member">
                        </div>
                        <span id="mem_name" class="name">
                        <?php ?>
                        </span>
                    </div>
                    <form class="comment">
                    <input type="text" id="comment" placeholder="請輸入留言" name="msgCont" required>
                        <input type="hidden" style="display:none" class="secret_id" name="workNo" value="<?php echo $workRow[0]["workNo"]?>" >
                        <input type="hidden" style="display:none"  name="attendNo" value="<?php echo $workRow[0]["attendNo"]?>" >
                        <input type="hidden" style="display:none"  name="memId" value="<?php echo $workRow[0]["memId"]?>" >
                        <button type="button" style="cursor:pointer"; id="send">送出</button>                    
                    </form>
                </div>
                <!--複製用 -->
                <div class="comment_leave" style="display: none">
                    <div class="mem">
                        <div class="pic">
                            <img id="msg_pic" src="<?php echo $workRow[0]["memPhoto"]?>" alt="member">
                        </div>
                        <span id="msg_name" class="name">
                        <?php echo $workRow[0]["memName"]?>
                        </span>
                    </div>
                    <div class="msg">
                        <p id="msg"></p>
                        <button class="report">檢舉</button>
                        <ul class="report_card">
                            <li class="violence">語言暴力</li>
                            <li class="dirty">色情相關</li>
                            <li class="ad">廣告留言</li>
                        </ul>
                    </div>
                </div>
                <?php 
                    if(isset($msgRows)!==true){
                     echo "";                        
                    }else{
                        foreach($msgRows as $i => $msgRow){
                ?>
                <!--顯示留言 -->
                <div class="comment_leave">
                    <div class="mem">
                        <div class="pic">
                            <img id="msg_pic" src="<?php echo $msgRow["memPhoto"]?>" alt="member">
                        </div>
                        <span id="msg_name" class="name">
                        <?php echo $msgRow["memName"]?>
                        </span>
                    </div>
                    <div class="msg">
                        <p id="msg"><?php echo $msgRow["msgCont"]?></p>
                        <button type="button" class="report">檢舉</button>
                        <ul class="report_card">
                            <li class="violence">語言暴力</li>
                            <li class="dirty">色情相關</li>
                            <li class="ad">廣告留言</li>
                        </ul>
                        <span style="display:none;"><?php echo $msgRow["msgNo"]?></span>
                    </div>
                </div>
                <?php 
                        }
                    }
                ?> 
            </div>
            <footer class="footer_wrapper">
                <ul>
                    <li>電話:02-2665-1234</li>
                    <li>Email:picnic@picnic.com</li>
                    <li>地址:新北市板橋區-野餐路4號</li>
                </ul>
                <div class="copy">Copyright©2019</div>
            </footer>
        </div>
        <script src="js/sweetalert.js"></script>
        <script src="js/msg.js"></script>

</body>

</html>