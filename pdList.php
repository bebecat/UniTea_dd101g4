<?php
session_start(); 

$errMsg="";
try{
  require_once("connectBooks.php");
  $sql="select * 
  from officialprod";
  $products = $pdo->query($sql);
	$prodRows = $products->fetchAll(PDO::FETCH_ASSOC);

  $popularSql="
  select * 
  from officialprod 
  where prodPopular=:prodPopular";
  $popular=$pdo->prepare($popularSql);
  $popular->bindValue(":prodPopular",1);
  $popular->execute();

// $popularItem=$popular->fetch(PDO::FETCH_ASSOC);

}catch(PDOException $e){
  echo "錯誤：",$e->getMessage(),"<br>";
  echo "行號：",$e->getLine(),"<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>趣野餐｜ 野餐周邊</title>
    <link rel="SHORTCUT ICON" href="./scss/img/h_f_img/rwd-logo.png" />
    <link rel="stylesheet" href="./css/machine.css" />
    <link rel="stylesheet" href="./css/h_f_becca.css" />
    <link rel="stylesheet" href="./css/pdList-1.css" />
    <link rel="stylesheet" href="css/login.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/h_f_becca.js"></script>
    <script src="js/machine.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/ScrollMagic.min.js"></script>
    <script src="js/debug.addIndicators.min.js"></script>
    <script src="js/animation.gsap.min.js"></script>
    <style>
       
    .toggleItem{
    display:none;
    }
    .nav_content a:nth-child(3) li{
      color: #de8384;
  background-position: 30% -1%;
  background-size: 70%;
  background-repeat: no-repeat;
  background-image: url(../scss/img/h_f_img/header-squirrel.png);
    }
  </style>
  </head>
  <body>
    <div class="pdP_wrapper">
      <!-- navbar -->
      <?php
      require_once("header.php");
      require_once("memberLogin.php");
      ?>
 

      <?php 
            require_once("machineBOT.php");
      ?>

      <!-- 內文開始 -->
      <section class="pdP_hero_container">

      <div class="cloud">
          <img src="./scss/img/pdImg/pd/clioud01.png" alt="cloud" />
        </div>
        <div class="parallax_3d">
          <div class="parallax_3d_inner">
            <h3 class="recommend_title">
              今日<span class="good">好</span>推薦
            </h3>
            <?php
            while($popularRow = $popular -> fetch(PDO::FETCH_ASSOC)){
        ?> 
            <div class="pdP_recommend_card">
              <a href="javascript"
                ><img
                  src="<?php echo $popularRow["PicPath"]; ?>"
                  alt="pd_recommend"
                />
                <h2><?php echo $popularRow["ProdName"] ;?></h2>
              </a>
            </div>
            <?php 
            }
            ?>
          </div>
        </div>
        <div class="sun">
          <img src="./scss/img/pdImg/pd/sun.png" alt="sun" />
        </div>

      </section>
       <!-- pdlist -->
      <section class="pdP_pdlist_container">
        <div class="butterfly_bg secen_02">
          <img src="./scss/img/pdImg/bg/butterfly_bg.png" alt="bg" />
        </div>
        <ul class="filter">
          <li class="title">篩選：</li>
          <a href="javascipt:"
            ><li class="all_filter filter_color" id="all_filter">
              <img src="./scss/img/pdImg/pd/pd_filter_all.png" alt="mat" />
              <h2 class="pd_location">全商品</h2>
            </li>
          </a>
          <a href="javascipt:"
            ><li class="mat_filter filter_color" id="mat_filter">
              <input type="hidden" name="mat_filter">
              <img src="./scss/img/pdImg/pd/filter_mat.png" alt="mat" />
              <h2 class="pd_loca">野餐墊</h2>
            </li></a
          >
          <a href="javascipt:"
            ><li class="fork_filter filter_color" id="fork_filter">
            <input type="hidden"  name="fork_filter">
              <img src="./scss/img/pdImg/pd/filter_spoon.png" alt="fork" />
              <h2 class="pd_loca">餐具</h2>
            </li></a
          >
          <a href="javascipt:"
            ><li class="box_filter filter_color" id="box_filter">
            <input type="hidden" name="box_filter">
              <img src="./scss/img/pdImg/pd/filter_box.png" alt="box" />
              <h2 class="pd_loca">分裝配備</h2>
            </li></a
          >
          <div id="keypoint02"></div>

        </ul>
        <div id="pd_card_container" class="pd_card_container" >
          <!-- // -->

         <?php
         //跑cook商品
         foreach($prodRows as $i => $prodRow){
         
          // 檢查商品是否已在購物車中，若是，則數量以購物車中的為主
          $psn = $prodRow["ProdNo"];
          if( isset($_SESSION["cart"]) && isset($_SESSION["cart"][$psn])){
            $qty = $_SESSION["cart"][$psn]["qty"];
          }else{
            $qty = 1;
          }
        ?> 

          <div class="pd_card_content col-1 col-1md" id="pdCard">
              <div class="dicorateBox">
                <div class="baby">
                  <img src="./scss/img/pdImg/pd/card_baby.png" alt="baby" />
                </div>
                <div class="nuts">
                  <img src="./scss/img/pdImg/pd/card_nuts.png" alt="nuts" />
                </div>
              </div>
              <div class="card_content col-1 col-1md ">
                <h2 class="title"><?php echo $prodRow["ProdName"]; ?></h2>
                <div class="pic">
                  <img src="<?php echo $prodRow["PicPath"]; ?>" alt="pd" />
                </div>
                <ul class="txt">
                  <li class="discrib"><?php echo $prodRow["ProdDesc"]; ?></li>
                  <li class="price">$<?php echo $prodRow["ProdPrice"];?></li>
                </ul>
                <form class="btn_qty_container" action="">
                  <input type="hidden" class="prod_btn_id" name="psn"  value="<?php echo $prodRow["ProdNo"] ?>">
                  <ul>
                    <li class="btn_qty_box" id="addQty">
                      <input class="qty_minus" type="button" value="-" />
                      <input type="text" name="qty" value="<?php echo $qty?>" style="width:30px;height:30px;margin:10px;text-align:center;font-size:18px;">
                      <input class="qty_plus" type="button" value="+" />
                    </li>
                    <li  class="btn_submit_box" id="<?php echo $prodRow["ProdNo"]; ?>">
                      加入購物車
                      <input class="add_to_cart" name="psn" type="hidden" value="<?php echo $prodRow["ProdNo"];?>">
                      <input  type="hidden" name="name" value="<?php echo $prodRow["ProdName"]; ?>" >
                      <input  type="hidden" name="price" value="<?php echo $prodRow["ProdPrice"]; ?>" >
                      <input  type="hidden" name="pic" value="<?php echo $prodRow['PicPath']; ?>">
                       <input type='hidden' name='qty' value='<?php echo $qty?>' class="qty"/>
                    </li>
                  </ul>
                </form>
              </div>
          </div>
          <?php
          }
          ?>
          <div id="keypoint01"></div>





        <!-- <div class="see_more" action="">
          <button id="toggle_see_more" class="see_btn">查看更多</button>
        </div> -->
      </section>

      <div class="pd_cute_bg"></div>

      <!-- 客製頁  -->
      <section class="pd_Customize_container" id="pd_cus">
        <!-- <div id="keypoint"></div> -->

        <div class="fly_animal secen_01" id="moveFly">
          <img src="./scss/img/pdImg/pd/animal.png" alt="animal" />
        </div>
        <div class="pd_Customize_box">
          <div class="left">
            <!-- <div class="bg">
                    <img src="./scss/img/pdImg/pd/pd_ciecleL.png" alt="bg" />
                  </div> -->
            <div class="pic_dl">
              <img src="./scss/img/pdImg/pd/pd_ribbon.png" alt="dr" />
            </div>
          </div>
          <div class="middle">
            <img src="./scss/img/pdImg/pd/pd_circleM.png" alt="bg" />
            <div class="txt">
              凡購客製野餐籃，即可享商品優惠<br />
              一起去野餐吧！
            </div>
            <div class="pd_cus_box">
              <img src="./scss/img/pdImg/pd/pd_cus_basket.png" alt="cus" />
              <div class="decorate">
                <div class="dr">
                  <img src="./scss/img/pdImg/pd/pd_ribbon_1.png" alt="dr" />
                </div>
                <div class="dl">
                  <img src="./scss/img/pdImg/pd/pd_ribbon.png" alt="dl" />
                </div>
              </div>
            </div>
            <a href="customizedP.html"
              ><span class="go_to_cus">前往客製頁</span></a
            >
          </div>
          <div class="right">
            <!-- <div class="bg">
                    <img src="./scss/img/pdImg/pd/pd_circleR.png" alt="bg" />
                  </div> -->
            <div class="pic_dr">
              <img src="./scss/img/pdImg/pd/pd_ribbon_1.png" alt="dl" />
            </div>
          </div>
        </div>
      </section>

      <footer class="footer_wrapper">
        <ul>
          <li>電話:02-2665-1234</li>
          <li>Email:picnic@picnic.com</li>
          <li>地址:新北市板橋區-野餐路4號</li>
          <li class="copy">Copyright©2019</li>
        </ul>
      </footer>
      <script src="js/teacherCart2.js"></script>
      <script src="js/login.js"></script>
    </div>

    <script>
      // new Vue({
      //   el: "#addQty",
      //   data: {
      //     count: 0
      //   }
      // });
      //start_ajax

    </script>
  </body>
</html>
