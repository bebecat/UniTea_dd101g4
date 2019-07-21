<?php
    session_start();
    // if(isset($_SESSION["memId"])!=true){
    //     $_SESSION["memId"] = null;
    // }
    $errMsg = "";
    try {
        // 連接資料庫 //
        require_once("connectBooks.php");
        // 參賽者資料庫查詢 //
        $sqlserch = "select cm.attendNo, cm.memId, c.workNo, c.prodName, c.prodPrice, c.imgPath, cm.vote, 
        (SELECT COUNT(*) FROM message m where m.workNo = c.workNo) as count
                from contestmember cm
                join custprod c
                on(c.workNo = cm.workNo)
                where c.attend = 1
                order by cm.attendDate desc
                limit 8";
        $works = $pdo->query($sqlserch); 
        $workRows = $works->fetchAll(PDO::FETCH_ASSOC);

        // 排名資料庫查詢 //
        $sqlrank =  "select cm.attendNo, cm.memId, c.workNo, c.prodName, c.prodPrice, c.imgPath, cm.vote
        from contestmember cm
        join custprod c
        on(c.workNo = cm.workNo)
        order by vote desc
        limit 3";
        $ranks = $pdo->query($sqlrank); 
        $rankRows = $ranks->fetchAll(PDO::FETCH_ASSOC);

        // 會員登入後判斷已讚愛心 //
        $memNo = "";
        if(isset($_SESSION["memNo"])){
            $memNo = $_SESSION["memNo"];
        }else{
            $memNo = "memId";
        };
        // echo $memNo;
        $sqllike = "select * from likes where memId = $memNo";
        $likes = $pdo->query($sqllike);
        // $likes->bindValue(":memId", $_SESSION["memNo"]);
        // $likes->execute();
        $likes_row = $likes->fetchALL(PDO::FETCH_ASSOC);
        $likes_arr = array();
        for($i=0; $i<count($likes_row); $i++){
             array_push($likes_arr, $likes_row[$i]["workNo"]);
        };
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
    <link rel="stylesheet" href="css/contest2.css">
    <link rel="stylesheet" href="css/h_f_becca.css">
    <link rel="stylesheet" href="css/machine.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <style>
    .nav_content a:nth-child(2) li{
      color: #de8384;
        background-position: 30% -1%;
        background-size: 70%;
        background-repeat: no-repeat;
        background-image: url(../scss/img/h_f_img/header-squirrel.png);
        }
    </style>
</head>

<body>
    <div class="contest_wrapper">
        <?php 
        require_once("memberLogin.php");
        
        ?>
        <?php 
        require_once("header.php");
        
        ?>

        <!-------------排行 ---------------->
        <section class="rank_container_blue">
            <div class="clouds">
                <img src="scss/img/contest/cloud.png" alt="cloud">
                <img src="scss/img/contest/cloud.png" alt="cloud">
                <img src="scss/img/contest/cloud.png" alt="cloud">
            </div>
            <div class="rank_wrap">
                <div class="stage_wrap">
                    <div class="flag">
                        <img src="scss/img/contest/stage_flag_l.png" alt="flag">
                        <img src="scss/img/contest/stage_flag_r.png" alt="flag">
                    </div>
                    <div class="stage">
                        <img src="scss/img/contest/stage.png" alt="stage">
                    </div>
                </div>
                <div class="content">
                    <div id="month">
                        <h3>
                        <div class="dropdown">
                            <form>
                                <select name="ranking" id="ranking">
                                    <option value="2019_6">6月排行</option>
                                    <option value="2019_5">5月排行</option>
                                    <option value="2019_4">4月排行</option>
                                    <option value="2019_3">3月排行</option>
                                </select>
                            </form>
                        </div>
                        </h3>
                    </div>
                    <div class="wrap_box">
                        <div class="box">
                            <div class="pic">
                                <img src="<?php echo $rankRows[1]["imgPath"]?>" alt="product">
                            </div>
                            <div class="txt">
                                <p><?php echo $rankRows[1]["prodName"]?></p>
                                <img src="scss/img/contest/heart.png" alt="heart">
                                <span><?php echo $rankRows[1]["vote"]?></span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="pic">
                                <img src="<?php echo $rankRows[0]["imgPath"]?>" alt="product">
                            </div>
                            <div class="txt">
                                <p><?php echo $rankRows[0]["prodName"]?></p>
                                <img src="scss/img/contest/heart.png" alt="heart">
                                <span><?php echo $rankRows[0]["vote"]?></span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="pic">
                                <img src="<?php echo $rankRows[2]["imgPath"]?>" alt="product">
                            </div>
                            <div class="txt">
                                <p><?php echo $rankRows[2]["prodName"]?></p>
                                <img src="scss/img/contest/heart.png" alt="heart">
                                <span><?php echo $rankRows[2]["vote"]?></span>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </section>

        <!-------------參加鈕 ---------------->
        <section class="attend_container">
            <div class="green">
                <div class="squr">
                    <img src="scss/img/contest/body.png" alt="squirrel">
                    <img src="scss/img/contest/tail.png" alt="squirrel">
                    <img src="scss/img/contest/wood.png" alt="wood">
                </div>
                <div class="time01 tree_d">
                    <img src="scss/img/contest/stree.png" alt="tree">
                </div>
                <div class="sign_wrap">
                    <div class="rule">
                        <div class="time03 sign">
                            <div class="txt">
                                <p>參賽立即享有100點數</p>
                                <p>此外</p>
                                <p>冠軍獎勵1000點數</p>
                                <p>亞軍獎勵800點數</p>
                                <p>季軍獎勵500點數</p>
                            </div>
                        </div>
                        <div class="time01 squr_s">
                            <img src="scss/img/contest/squr.png" alt="squirrel">
                            <!-- <img src="scss/img/contest/rleg.png" alt="leg">
                            <img src="scss/img/contest/lleg.png" alt="leg"> -->
                        </div>
                    </div>
                    <div id="keypoint"></div>
                    <div class="btn_wrap">
                        <a href="location:location">
                            <p id="btn">前往參賽</p>
                        </a>
                    </div>
                    <div class="time02 flower_wrap">
                        <img src="scss/img/contest/person.png" alt="person">
                        <img src="scss/img/contest/treeS.png" alt="stone">
                    </div>
                </div>
            </div>
            <div id="go_contest" style="display:none">
                <ul id="your_work">
                    <li>
                        <span id="close_go_contest">X</span>
                    </li>
                    <li>
                        <div class="contest_pic"><img src="scss/img/contest/basket.png" alt="basket"></div>
                        <div class="contest_name">非常美麗</div>     
                        <div><button>參加</button></div>
                    </li>
                </ul>
            </div>
        </section>
        <!-------------參賽作品 ---------------->
        <section class="work_container">
            <div id="voters">
                <h3>
                    激烈參賽中
                </h3>
            </div>
            <div class="mat">

                <div class="votes_wrap">
                    <div class="filter">
                        <button name="newest" id="newest">最新</button>
                        <button name="popular" id="popular">最多讚</button>
                    </div>

                    <div class="votes_prods">
                    <?php 
                        foreach($workRows as $i => $workRow){
                    ?>
                        <div class="box">
                            <span class="like" style="display:none"><?php echo $workRow["workNo"];?></span>
                            <div class="pic">
                                <img src="<?php echo $workRow["imgPath"]?>" alt="product">
                            </div>
                            <div class="txt">
                                <p><?php echo $workRow["prodName"]?></p>
                                <div class="inner_txt">
                                    <img class="heart" src="<?php if(in_array($workRow["workNo"],$likes_arr)){ 
                                    echo "scss/img/contest/heart.png";}else{ 
                                    echo "scss/img/contest/empty_heart.png";}?>"
                                    alt="heart">
                                    <span><?php echo $workRow["vote"]?></span>
                                    <img class="chat" src="scss/img/contest/comment-regular.png" alt="msg">
                                    <span><?php echo $workRow["count"]?></span>
                                    
                                </div>
                            </div>
                        </div>
                    <?php 
                        }
                    ?>  
                    </div>
      
                <div class="pagination">
                    <a class="front" href="#">&laquo;</a>
                    <a href="#" style="display:none;"></a>
                    <!-- <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a> -->
                    <a class="rear" href="#">&raquo;</a>
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

        </section>

        <!-------------機器人 ---------------->
        <?php
        require_once("machineBOT.php")
        ?>
    </div>
    <!-- <script src="js/login.js"></script> -->
    <script src="js/scroll.js"></script>
    <script src="js/contest.js"></script>
    <script src="js/machine.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/ScrollMagic.min.js"></script>
    <script src="js/debug.addIndicators.min.js"></script>
    <script src="js/animation.gsap.min.js"></script>
    <script src="js/h_f_becca.js"></script>
    <script src="js/login.js"></script>
    <script>
    </script>
</body>

</html>