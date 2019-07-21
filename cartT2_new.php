<?php 
session_start();  
$_SESSION['memId'] = 90006;
$_SESSION['memName'] = "小b";
$memId = $_SESSION['memId'];


try{
require_once("connectBooks.php");
$sql="SELECT * 
from member 
where memId = :memId";
$member = $pdo->prepare($sql);

$member -> bindValue(":memId",$memId);
$member -> execute();

$memberRow = $member->fetch(PDO::FETCH_ASSOC);

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
    <link rel="stylesheet" href="css/cart_2.css" />
    <link rel="stylesheet" href="css/cart_2_step2.css" />
    <link rel="stylesheet" href="css/h_f_becca.css" />
    <link rel="stylesheet" href="css/login.css">
    <title>趣野餐｜ 買起來</title>
    <link rel="SHORTCUT ICON" href="./scss/img/h_f_img/rwd-logo.png" />
   
<style>
.trash{
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
            
                </li>
                
                <?php
                // if (isset($_SESSION["cart1"]) == false) {
                //   echo "<center style='padding:50px'>尚無購物資料</center>";
                // } else {
                  $total=0;
                foreach($_SESSION['cart1'] as $i=>$value){

           
                  $total += $_SESSION["cart1"][$i]["price"]*$_SESSION["cart1"][$i]["qty"];
                ?>

                <li>
                  <div>
                    <img src="<?php echo $_SESSION['cart1'][$i]['pic']; ?>" alt="prod" />
                  </div>
                  <div class="pd_name" >
                    <h2 ><?php echo $_SESSION["cart1"][$i]["pname"]; ?></h2>
                  </div>
                  <div>
                    <p class="price"><?php echo $_SESSION["cart1"][$i]["price"]; ?></p>
                  </div>
                  <div class="btn_qty_box" id="addQty">
                  <form>
                    <input readonly type="text" name="qty" value="<?php echo $_SESSION["cart1"][$i]["qty"] ?>" style="width:30px;height:30px;margin:10px;text-align:center;font-size:18px;border:none;outline:none;background-color:transparent;">
                    <input type="hidden" name="pic" value="<?php echo $_SESSION["cart1"][$i]["pic"]?>">	
                    <input type="hidden" name="psn" value="<?php echo $i; ?>">
                    <input type="hidden" name="name" value="<?php echo $_SESSION["cart1"][$i]["pname"]?>">
                    <input type="hidden" name="price" value="<?php echo $_SESSION["cart1"][$i]["price"]?>">	
                  </form>
                  </div>
                  <div>
                    <p class="subtotal"><?php echo $_SESSION["cart1"][$i]["price"]*$_SESSION["cart1"][$i]["qty"]; ?></p>
                  </div>
                </li>
             
                <?php
                }
                ?>

              </ul>
            </div>

            <div class="inform">
              <div class="info">
                <div class="know">
                  <!-- <p>＊凡購買超過1000元可享免運折扣</p> -->
                  <p>＊本公司只提供貨到付款服務</p>
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
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="total">
              <div class="total_wrap">
                <ul>
                  <li>商品金額</li>
                  <li id="total"><?php echo $total ?></li>
                </ul>

                <ul>
                  <li>點數折扣</li>
                  <li id="point_discount">0</li>
                </ul>
 
                <ul>
                  <li>總金額</li>
                  <li id="allTotal"></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- b-start增加//增加 -->
        <div class="mem_detail">    
          <div class="steps ">             
            <figcaption class="step1_fillin pay_step">
              <img src="./scss/img/cart/fill_b.png" alt="cart_step1" />
              <figure>STEP1<br />資料填寫</figure>
            </figcaption>
            <div class="arrow">
              <!-- <img src="./scss/img/cart/cart_arrow1.png" alt="arrow" /> -->
            </div>
            <figcaption class="step2_comform">
              <img src="./scss/img/cart/check_b.png" alt="cart_step2" />
              <figure>STEP2<br />確認訂單</figure>
            </figcaption>
            <div class="arrow">
              <!-- <img src="./scss/img/cart/cart_arrow1.png" alt="arrow" /> -->
            </div>
            <figcaption class="step2_comform">
              <img src="./scss/img/cart/finish_b.png" alt="cart_step3" />
              <figure>STEP3<br />購物完成</figure>
            </figcaption>
          </div>
          <div class="mem_info"> 
            <!-- 第二步 -->
              <ul class="order_address">
                <li><h3>訂購人</h3></li>
                <li>
                  姓名：
                  <span id="order_name"><?php echo $memberRow['memName'];?></span>
                </li>
                <li>
                  電話：
                  <span id="order_tel"><?php echo $memberRow['tel'];?></span>
                </li>
                <li>
                地址：
                  <span id="order_address"><?php echo $memberRow['address'];?></span>
                </li>
              </ul>
            <form>
              <ul class="send_address">
                <li><h3>收件人</h3></li>
                <li class="same_buyer">
                  <input type="checkbox" id="same_buyer" />
                  <label for="same_buyer">
                    同訂購人
                    </label>
                </li>
                <li >
                  <label>姓名：</label>
                  <input type="text" id="send_name" name="send_name" style="padding:5px" required />
                </li>
                <li >
                  <label>電話：</label>
                  <input
                    type="tel"
                    placeholder="0912-123-456"
                    style="padding:5px"
                    id="send_tel"
                    name="send_tel"
                    required
                  />
                </li>
                <li >
                    <label>地址：</label>
                    <input name="send_address" id="send_address" type="text" style="padding:5px" required>
                  </li>
              </ul>
            </form>  
            <div class="pay_method">
              <h3>付款方式</h3>
              <span>貨到付款</span>
            </div>
            <div class="discount_use">
              <h3>使用點數折抵</h3>
              <div class="picnic_coin">
                <input type="checkbox" id="use_point" />
                <input type="number" id="point" style="padding:5px" value="0" max="<?php echo $total ?>" min="0" />
                <span style="font-size:10px;color:#777">請輸入您要使用的點數<br>目前點數為<?php echo $memberRow['memPoints'];?><br>最多可輸入<?php echo $total ?>(10點抵1元)</span>
              </div>
            </div>
          </div>
          </div>
        </div>
 
        <div class="cart_bottom">
          <button class="previous" id="previous">上一步</button>
          <button id="step_next" class="next">下一步</button>
        </div>

      </div>

      <div id="comfirm_box">
          <h3>STEP 2 確認訂單</h3>
          <form action="">
            <div class="buy_info">
              <ul class="order_address">
                <li  class="order_person">訂購人</li>
                <li>
                  姓名： 
                <span id="last_or_name"></span>
                </li>
                <li>
                  電話：
                  <span  id="last_or_tel"></span>
                </li>
                <li>
                  地址：
                  <span  id="last_or_address"></span>
                </li>
              </ul>
              <ul class="send_address">
                <li class="order_person">收件人</li>
                <li>
                  姓名：
                  <span  id="last_se_name"></span>
                </li>
                <li>
                 電話：
                 <span  id="last_se_tel"></span>
                </li>
                <li>
                  地址：
                  <span id="last_se_address">  </span>
                </li>
              </ul>
              <ul class="total">
                <li class="total_price">總金額$<span id="dealPrice"></span></li>
              </ul>
            </div>
            <li class="notice">請確認填寫資料是否無誤,無誤請按確認結帳</li>
          </form>
  
          <div class="cart_bottom">
              <button id="cancel" class="previous" style="color:green;padding:10px 20px" onclick="javascript:location.href='cartT.php'">取消</button>
              <button id="confirm_Pay" class="next">確認結帳</button>
          </div>
      </div>

      <div id="finish_lightBox">
        <div class="txt">
            <h3>STEP 3 確認完成</h3>
            <p>恭喜完成訂單!</p>
            <p>您的訂單編號為<span id="order_no"></span></p>
        </div>
        <div class="cart_bottom">
          <button class="previous" onclick="javascript:location.href='pdList.php'">繼續購物</button>
          <button id="go_contest" class="next">前往選美</button>
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
    </div>
  
    <script src="js/cartT2.js"></script>
    <script src="js/login.js"></script>
    <script>
    </script>
  </body>
</html>
