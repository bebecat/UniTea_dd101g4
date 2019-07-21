<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/cart_2.css" />
    <link rel="stylesheet" href="css/h_f_becca.css" />
    <link rel="stylesheet" href="css/login.css">
    <title>趣野餐｜ 買起來</title>
    <link rel="SHORTCUT ICON" href="./scss/img/h_f_img/rwd-logo.png" />
   
<style>
.trash,button{
  cursor:pointer;
}
</style>

  </head>

  <body>
    <div class="cart_wrapper">
    <?php
         require_once("header.php");
         require_once("memberLogin.php");
      ?>
    
      <div class="cart_container">
          <div class="mem_detail_p_mobile">
              <div class="steps">
                <figcaption class="step1_fillin ">
                  <img src="./scss/img/cart/fill_b.png" alt="cart_step1" />
                  <figure>STEP1<br />資料填寫</figure>
                </figcaption>
                <div class="arrow">
                  <img src="./scss/img/cart/cart_arrow1.png" alt="arrow" />
                </div>
                <figcaption class="step2_comform pay_step">
                  <img src="./scss/img/cart/check_b.png" alt="cart_step2" />
                  <figure>STEP2<br />確認訂單</figure>
                </figcaption>
                <div class="arrow">
                  <img src="./scss/img/cart/cart_arrow1.png" alt="arrow" />
                </div>
                <figcaption class="step3_complete">
                  <img src="./scss/img/cart/finish_b.png" alt="cart_step3" />
                  <figure>STEP3<br />購物完成</figure>
                </figcaption>
              </div>
            </div>
        <div class="wrap">
          <span id="memId_hide" style="display:none;">
          <?php 
              echo $_SESSION['memId'];
          ?>
          </span>
          <div class="prods_content">
            <div class="prods_buy">
              <h3 class="title">購物小車車</h3>
              <ul>
                <li>
                  
                  <div>商品圖</div>
                  <div>品項</div>
                  <div>單價</div>
                  <div>數量</div>
                  <div>小計</div>
                  <div>刪除</div>
                </li>
                <div id="package">
                <div id="show"></div>
                <?php
                if (isset($_SESSION["cart1"]) == false ) {

                  // echo "<center style='padding:50px'>尚無購物資料</center>";
                  $total=0;
                } else {
                  $total=0;
                  foreach($_SESSION['cart1'] as $i=>$value){
                  $total += $_SESSION["cart1"][$i]["price"]*$_SESSION["cart1"][$i]["qty"];
                ?>
  
              <form>
                <li>
                  <div>
                    <img src="<?php echo $_SESSION['cart1'][$i]['pic']; ?>" alt="prod" />
                  </div>
                  <div>
                    <h2><?php echo $_SESSION["cart1"][$i]["pname"]; ?></h2>
                  </div>
                  <div>
                    <p class="price"><?php echo $_SESSION["cart1"][$i]["price"]; ?></p>
                  </div>
                  <div class="btn_qty_box" id="addQty">
            
                    <input class="qty_minus" type="button" value="-" />
                    <input type="text" name="qty" value="<?php echo $_SESSION["cart1"][$i]["qty"] ?>" style="width:30px;height:30px;margin:10px;text-align:center;font-size:18px;">
                    <input class="qty_plus" type="button" value="+" />
                    <input type="hidden" name="pic" value="<?php echo $_SESSION["cart1"][$i]["pic"]?>">	
                    <input type="hidden" name="psn" value="<?php echo $i; ?>">
                    <input type="hidden" name="name" value="<?php echo $_SESSION["cart1"][$i]["pname"]?>">
                    <input type="hidden" name="price" value="<?php echo $_SESSION["cart1"][$i]["price"]?>">	
              
                  </div>
                  <div>
                    <p class="subtotal"><?php echo $_SESSION["cart1"][$i]["price"]*$_SESSION["cart1"][$i]["qty"]; ?></p>
                  </div>
                  <div class="trash">
                   <span style="display:none;" class="trashId"><?php echo $i; ?></span>
                   <!-- <input type="hidden" value="delete"> -->
                   <img src="./scss/img/cart/trash.png" alt="<?php echo $i; ?>" />
                    <!-- cart1第i個unset -->
                  </div>
                </li>
                </form>
                <?php
                }
                ?>
                <?php
                }
                ?>
                </div>
              </ul>
            </div>

            <div class="inform">
              <div class="info">
                <div class="know">
                  <!-- <p>＊凡購買超過1000元可享免運折扣</p> -->
                  <p>＊本公司只有貨到付款服務</p>
                  <!-- <p>＊客製商品搭配官方商品95折</p> -->
                </div>
                <div class="ship_info">
                  <div class="buyer">
                    <p id="mem_name"></p>
                    <p id="tel"></p>
                    <p id="address"></p>
                  </div>
                  <div class="receiver">
                    <p id="mem_name"></p>
                    <p id="tel"></p>
                    <p id="address"></p>
                  </div>
                  <div class="ship_way">
                    <!-- <p>貨到付款</p> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="total">
              <div class="total_wrap">

                <ul>
                  <li>總金額$</li>
                  <li id="total"><?php echo $total ?></li>
                </ul>
              </div>
            </div>
          </div>


        <div class="cart_bottom">
          <button class="back"  onclick="javascript:location.href='pdListT.php'" style="color:green;padding:10px 20px">繼續購物</button>
          <button class="next" id="next1"  onclick="javascript:location.href='cartT2_new.php'">開始結帳</button>
        </div>
      </div>

    </div>
    <footer class="footer_wrapper">
        <ul>
          <li>電話:02-2665-1234</li>
          <li>Email:picnic@picnic.com</li>
          <li>地址:新北市板橋區-野餐路4號</li>
          <li class="copy">Copyright©2019</li>
        </ul>
      </footer>
  
    <script src="js/cartT2.js"></script>
    <script src="js/login.js"></script>
    <!-- <script src="js/addToCart.js"></script> -->
    <script>

    </script>
  </body>
</html>
