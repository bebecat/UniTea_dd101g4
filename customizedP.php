<?php
session_start();
// $_SESSION['UserName'] = 'my';
?>
<?php
$errMsg = "";

try {
    require_once("connectBooks.php");

    $sql = "select * from custDecor where materialClass = 1";
    $sql2 = "select * from custDecor where materialClass = 2";
    $decoPrice = "select * from materalprice";
    $decorations = $pdo->query($sql);
    $decorations2 = $pdo->query($sql2);
    $decorationsRows = $decorations->fetchAll(PDO::FETCH_ASSOC);
    $decorationsRows2 = $decorations2->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $errMsg .=  $e->getMessage() . "<br>";
    $errMsg .=  $e->getLine() . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="css/customizedP.css" />
    <link rel="stylesheet" href="css/h_f_becca.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/login.css">
    <!-- <link rel="stylesheet" href="css/odometer-theme-car.css" /> -->
    <!-- <script src="js/countUp.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.1.0/fabric.all.min.js">
    </script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="js/cust.js"></script>
    <style>
    .nav_content a:nth-child(1) li{
      color: #de8384;
        background-position: 30% -1%;
        background-size: 70%;
        background-repeat: no-repeat;
        background-image: url(../scss/img/h_f_img/header-squirrel.png);
        }
    </style>
    <!-- <script src="js/countUp.min.js"></script> -->
    <!-- <script src="js/odometer.min.js"></script> -->
    <!-- <script src="js/html2canvas.min.js"></script> -->

</head>

<body>
    <?php
    require("memberLogin.php");
    require_once("header.php");
    ?>
    <div class="cust_wrapper">
        <section class="cust_container">
            <!-- 客製頁標題 -->
            <!-- <div class="cust_title">
                            <img src="scss/img/Customization/custTitle.png" alt="" />
                        </div> -->
            <!-- 客製頁step -->
            <div class="cust_step_icon">
                <div class="step1 step_icon">
                    <img src="scss/img/Customization/step_icon_1_2.png" alt="customized_step1" />
                </div>
                <div class="step_arrow">
                    <img src="scss/img/Customization/step_arrow.png" alt="step_arrow" />
                </div>
                <div class="step2 step_icon">
                    <img src="scss/img/Customization/step_icon_2_1.png" alt="customized_step2" />
                </div>
                <div class="step_arrow">
                    <img src="scss/img/Customization/step_arrow.png" alt="step_arrow" />
                </div>
                <div class="step3 step_icon">
                    <img src="scss/img/Customization/step_icon_3_1.png" alt="customized_step3" />
                </div>
                <div class="step_arrow">
                    <img src="scss/img/Customization/step_arrow.png" alt="step_arrow" />
                </div>
                <div class="step4 step_icon">
                    <img src="scss/img/Customization/step_icon_4_1.png" alt="customized_step4" id="logOut" />
                </div>
            </div>
            <div class="cust_content_box">
                <!-- 客製頁標題 -->
                <div class="cust_title">
                    <div class="cust_title_balloon">
                        <div class="cust_title_balloon_content">
                            <img src="scss/img/Customization/cust_title_balloon_green.png" alt="氣球標題" />
                            <p>客</p>
                        </div>
                    </div>
                    <div class="cust_title_balloon">
                        <div class="cust_title_balloon_content">
                            <img src="scss/img/Customization/cust_title_balloon_red.png" alt="氣球標題" />
                            <p>製</p>
                        </div>
                    </div>
                    <div class="cust_title_balloon">
                        <div class="cust_title_balloon_content">
                            <img src="scss/img/Customization/cust_title_balloon_yellow.png" alt="氣球標題" />
                            <p>野</p>
                        </div>
                    </div>
                    <div class="cust_title_balloon">
                        <div class="cust_title_balloon_content">
                            <img src="scss/img/Customization/cust_title_balloon_green.png" alt="氣球標題" />
                            <p>餐</p>
                        </div>
                    </div>
                    <div class="cust_title_balloon">
                        <div class="cust_title_balloon_content">
                            <img src="scss/img/Customization/cust_title_balloon_red.png" alt="氣球標題" />
                            <p>籃</p>
                        </div>
                    </div>
                    <!-- <img src="scss/img/Customization/custTitle.png" alt="" /> -->
                </div>
                <!-- 客製頁客製區域 -->
                <div class="cust_content">
                    <!-- 左邊餐籃區域 -->
                    <div class="cust_picnic_basket">
                        <!-- 設定餐籃名字 -->
                        <div class="set_basket_name_container">
                            <div class="set_basket_name">
                                <input type="text" maxlength="6" minlength="1" placeholder="請輸入1~6個字" id="import_name" />
                                <input type="button" value="確認" id="check_name" />
                            </div>
                            <p class="basket_name" id="cust_basket_name">請設定您的餐籃名字</p>
                            <p class="basket_name" id="set_basket_name"></p>
                        </div>
                        <!-- 野餐籃大圖片區 -->
                        <div class="big_picnic_basket_container" id="big_picnic_basket_container">
                            <img src="" alt="" class="cust_decoration_img" id="cust_decoration_img1" />
                            <img src="" alt="" class="cust_decoration_img" id="cust_decoration_img2" />
                            <img src="" alt="" class="cust_decoration_img" id="cust_decoration_img3" />
                            <img src="" alt="" class="cust_decoration_img" id="cust_decoration_img4" />
                            <img src="scss/img/Customization/basket01.png" alt="big_picnic_basket_img" id="big_picnic_basket_img" />
                        </div>
                        <!-- 野餐籃價格區 -->
                        <div class="cust_basket_price">
                            <p>
                                <b>餐籃價格：<span id="total_price" class="odometer odometer-auto-theme jumbo">200</span>&nbsp元</b>
                            </p>
                        </div>
                        <!-- 照片旋轉放刪除的icon區 -->
                        <!-- <div class="cust_decoration_controller">
                                        <img src="scss/img/Customization/zoom_icon.png" alt="zoom_btn" />
                                        <img src="scss/img/Customization/zoom_out_icon.png" alt="zoom_out_btn" />
                                        <img src="scss/img/Customization/left_rotation_icon.png" alt="left_rotation" />
                                        <img
                                            src="scss/img/Customization/right_rotation_icon.png"
                                            alt="right_rotation"
                                        />
                                        <img src="scss/img/Customization/delete_icon.png" alt="delete_btn" />
                                    </div> -->
                    </div>
                    <!-- 控制裝飾放大縮小旋轉區 -->
                    <div class="cust_decoration_controller">
                        <img src="scss/img/Customization/zoom_icon.png" alt="zoom_btn" class="ctrl_btns" />
                        <img src="scss/img/Customization/zoom_out_icon.png" alt="zoom_out_btn" class="ctrl_btns" />
                        <img src="scss/img/Customization/left_rotation_icon.png" alt="left_rotation" class="ctrl_btns" />
                        <img src="scss/img/Customization/right_rotation_icon.png" alt="right_rotation" class="ctrl_btns" />
                        <img src="scss/img/Customization/delete_icon.png" alt="delete_btn" class="ctrl_btns" />
                    </div>
                    <!-- 右邊配件選擇區域 -->
                    <div class="cust_choose_area">
                        <!-- 第一步選擇餐籃 -->
                        <div class="cust_choose_box">
                            <div class="cust_choose_area_title">
                                <h4 id="cust_step_title">STEP1&nbsp點擊選擇野餐籃</h4>
                            </div>
                            <ul class="cust_basket_choose_area" id="web_basket_choose_area">
                                <li class="cust_basket_items item default_basket">
                                    <figure>
                                        <img src="scss/img/Customization/basket01.png" alt="野餐籃1" />
                                        <figcaption>
                                            <h4>餐籃1</h4>
                                            <p>NTD:<span class="basket_price">200</span>元</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="cust_basket_items item">
                                    <figure>
                                        <img src="scss/img/Customization/basket02.png" alt="野餐籃2" />
                                        <figcaption>
                                            <h4>餐籃2</h4>
                                            <p>NTD:<span class="basket_price">250</span>元</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="cust_basket_items item">
                                    <figure>
                                        <img src="scss/img/Customization/basket03.png" alt="野餐籃3" />
                                        <figcaption>
                                            <h4>餐籃3</h4>
                                            <p>NTD:<span class="basket_price">300</span>元</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="cust_basket_items item">
                                    <figure>
                                        <img src="scss/img/Customization/basket04.png" alt="野餐籃4" />
                                        <figcaption>
                                            <h4>餐籃4</h4>
                                            <p>NTD:<span class="basket_price">350</span>元</p>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                            <ul class="cust_basket_choose_area owl-carousel owl-theme" id="mobile_basket_choose_area">
                                <li class="cust_basket_items item default_basket">
                                    <figure>
                                        <img src="scss/img/Customization/basket01.png" alt="野餐籃1" />
                                        <figcaption>
                                            <h4>餐籃1</h4>
                                            <p>NTD:<span class="basket_price">200</span>元</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="cust_basket_items item">
                                    <figure>
                                        <img src="scss/img/Customization/basket02.png" alt="野餐籃2" />
                                        <figcaption>
                                            <h4>餐籃2</h4>
                                            <p>NTD:<span class="basket_price">250</span>元</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="cust_basket_items item">
                                    <figure>
                                        <img src="scss/img/Customization/basket03.png" alt="野餐籃3" />
                                        <figcaption>
                                            <h4>餐籃3</h4>
                                            <p>NTD:<span class="basket_price">300</span>元</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="cust_basket_items item">
                                    <figure>
                                        <img src="scss/img/Customization/basket04.png" alt="野餐籃4" />
                                        <figcaption>
                                            <h4>餐籃4</h4>
                                            <p>NTD:<span class="basket_price">350</span>元</p>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                            <div class="cust_step_button_area">
                                <div class="button_area_left">
                                </div>
                                <div class="button_area_right">
                                    <input type="button" value="下一步" />
                                </div>
                            </div>
                        </div>
                        <!-- 第二步選擇顏色 -->
                        <div class="cust_choose_box">
                            <div class="cust_choose_area_title">
                                <h4 id="cust_step_title">STEP2&nbsp點擊選擇餐籃顏色</h4>
                            </div>
                            <ul class="cust_basket_choose_color" id="web_choose_color">
                                <li>
                                    <div class="color_box color_blue"></div>
                                    <!-- <p>淡藍</p> -->
                                </li>
                                <li>
                                    <div class="color_box color_green"></div>
                                    <!-- <p>淡藍</p> -->
                                </li>
                                <li>
                                    <div class="color_box color_purple"></div>
                                    <!-- <p>淡藍</p> -->
                                </li>
                                <li>
                                    <div class="color_box color_yellow"></div>
                                    <!-- <p>淡藍</p> -->
                                </li>
                                <li>
                                    <div class="color_box color_orange"></div>
                                    <!-- <p>淡藍</p> -->
                                </li>
                                <li>
                                    <div class="color_box color_pink"></div>
                                    <!-- <p>淡藍</p> -->
                                </li>
                            </ul>
                            <ul class="cust_basket_choose_color owl-carousel owl-theme" id="mobile_choose_color">
                                <li>
                                    <div class="color_box color_blue"></div>
                                    <!-- <p>淡藍</p> -->
                                </li>
                                <li>
                                    <div class="color_box color_green"></div>
                                    <!-- <p>淡藍</p> -->
                                </li>
                                <li>
                                    <div class="color_box color_purple"></div>
                                    <!-- <p>淡藍</p> -->
                                </li>
                                <li>
                                    <div class="color_box color_yellow"></div>
                                    <!-- <p>淡藍</p> -->
                                </li>
                                <li>
                                    <div class="color_box color_orange"></div>
                                    <!-- <p>淡藍</p> -->
                                </li>
                                <li>
                                    <div class="color_box color_pink"></div>
                                    <!-- <p>淡藍</p> -->
                                </li>
                            </ul>
                            <div class="cust_step_button_area">
                                <div class="button_area_left">
                                    <input type="button" value="上一步" />
                                </div>
                                <div class="button_area_right">
                                    <input type="button" value="下一步" />
                                </div>
                            </div>
                        </div>
                        <!-- 第三部選擇餐籃裝飾品 -->
                        <div class="cust_choose_box">
                            <div class="cust_choose_area_title">
                                <h4 id="cust_step_title">STEP3&nbsp點擊選擇餐籃裝飾</h4>
                            </div>
                            <div class="cust_basket_choose_decoration web_choose_decoration" id="style-6">
                                <div class="cust_decoration_tab">
                                    <p class="cust_bow_tab">蝴蝶結</p>
                                    <p class="cust_flower_tab">花朵</p>
                                </div>
                                <div id="cust_decoration_bow">
                                    <?php
                                    foreach ($decorationsRows as $i => $decorationsRow) {
                                        ?>
                                        <div class="cust_decoration_items bows">
                                            <img src="<?php echo $decorationsRow["imgPath"] ?>" alt="<?php echo $decorationsRow["imgAlt"] ?>" />
                                            <p><?php echo $decorationsRow["materialName"] ?></p>
                                            <p>NTS:<span class="decr_price"><?php echo $decorationsRow["materialPrice"] ?></span></p>
                                        </div>
                                    <?php } ?>

                                </div>
                                <div id="cust_decoration_flower">
                                    <?php
                                    foreach ($decorationsRows2 as $i => $decorationsRow2) {
                                        ?>
                                        <div class="cust_decoration_items">
                                            <img src="<?php echo $decorationsRow2["imgPath"] ?>" alt="<?php echo $decorationsRow2["imgAlt"] ?>" />
                                            <p><?php echo $decorationsRow2["materialName"] ?></p>
                                            <p>NTS:<span class="decr_price"><?php echo $decorationsRow2["materialPrice"] ?></span></p>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="cust_basket_choose_decoration mobile_choose_decoration " id="style-7">
                                <div class="cust_decoration_tab">
                                    <p class="cust_bow_tab">蝴蝶結</p>
                                    <p class="cust_flower_tab">花朵</p>
                                </div>
                                <div id="cust_decoration_bow_mobile" class=" owl-carousel owl-theme">
                                    <div class="cust_decoration_items bows">
                                        <img src="scss/img/Customization/Bow1.png" alt="1" />
                                        <p>紅啾啾</p>
                                        <p>NTS:<span class="decr_price">10</span></p>
                                    </div>
                                    <div class="cust_decoration_items bows">
                                        <img src="scss/img/Customization/Bow2.png" alt="2" />
                                        <p>黃色太陽</p>
                                        <p>NTS:<span class="decr_price">10</span></p>
                                    </div>
                                    <div class="cust_decoration_items bows">
                                        <img src="scss/img/Customization/Bow3.png" alt="3" />
                                        <p>小紫蝶</p>
                                        <p>NTS:<span class="decr_price">10</span></p>
                                    </div>
                                    <div class="cust_decoration_items bows">
                                        <img src="scss/img/Customization/Bow4.png" alt="4" />
                                        <p>波波綠</p>
                                        <p>NTS:<span class="decr_price">20</span></p>
                                    </div>
                                    <div class="cust_decoration_items bows">
                                        <img src="scss/img/Customization/Bow5.png" alt="5" />
                                        <p>藍絲絨</p>
                                        <p>NTS:<span class="decr_price">20</span></p>
                                    </div>
                                    <div class="cust_decoration_items bows">
                                        <img src="scss/img/Customization/Bow6.png" alt="6" />
                                        <p>粉紅佳人</p>
                                        <p>NTS:<span class="decr_price">20</span></p>
                                    </div>
                                    <div class="cust_decoration_items bows">
                                        <img src="scss/img/Customization/Bow7.png" alt="7" />
                                        <p>咖啡豆</p>
                                        <p>NTS:<span class="decr_price">30</span></p>
                                    </div>
                                    <div class="cust_decoration_items bows">
                                        <img src="scss/img/Customization/Bow8.png" alt="8" />
                                        <p>清新紫羅蘭</p>
                                        <p>NTS:<span class="decr_price">30</span></p>
                                    </div>
                                    <div class="cust_decoration_items bows">
                                        <img src="scss/img/Customization/Bow9.png" alt="9" />
                                        <p>橙果香氛</p>
                                        <p>NTS:<span class="decr_price">30</span></p>
                                    </div>
                                </div>
                                <div id="cust_decoration_flower_mobile" class=" owl-carousel owl-theme">
                                    <div class="cust_decoration_items">
                                        <img src="scss/img/Customization/flw10.png" alt="10" />
                                        <p>紅啾啾</p>
                                        <p>NTS:<span class="decr_price">10</span></p>
                                    </div>
                                    <div class="cust_decoration_items">
                                        <img src="scss/img/Customization/flw11.png" alt="11" />
                                        <p>黃色太陽</p>
                                        <p>NTS:<span class="decr_price">10</span></p>
                                    </div>
                                    <div class="cust_decoration_items">
                                        <img src="scss/img/Customization/flw12.png" alt="12" />
                                        <p>小紫蝶</p>
                                        <p>NTS:<span class="decr_price">10</span></p>
                                    </div>
                                    <div class="cust_decoration_items">
                                        <img src="scss/img/Customization/flw13.png" alt="13" />
                                        <p>波波綠</p>
                                        <p>NTS:<span class="decr_price">20</span></p>
                                    </div>
                                    <div class="cust_decoration_items">
                                        <img src="scss/img/Customization/flw14.png" alt="14" />
                                        <p>藍絲絨</p>
                                        <p>NTS:<span class="decr_price">20</span></p>
                                    </div>
                                    <div class="cust_decoration_items">
                                        <img src="scss/img/Customization/flw15.png" alt="15" />
                                        <p>粉紅佳人</p>
                                        <p>NTS:<span class="decr_price">20</span></p>
                                    </div>
                                    <div class="cust_decoration_items">
                                        <img src="scss/img/Customization/flw16.png" alt="16" />
                                        <p>咖啡豆</p>
                                        <p>NTS:<span class="decr_price">30</span></p>
                                    </div>
                                    <div class="cust_decoration_items">
                                        <img src="scss/img/Customization/flw17.png" alt="17" />
                                        <p>清新紫羅蘭</p>
                                        <p>NTS:<span class="decr_price">30</span></p>
                                    </div>
                                    <div class="cust_decoration_items">
                                        <img src="scss/img/Customization/flw18.png" alt="18" />
                                        <p>橙果香氛</p>
                                        <p>NTS:<span class="decr_price">30</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="cust_step_button_area">
                                <div class="button_area_left">
                                    <input type="button" value="上一步" />
                                </div>
                                <div class="button_area_right">
                                    <input type="button" value="客製完成" id="canvasGo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form method="post" accept-charset="utf-8" id="form1">
                <input name="hidden_data" id='hidden_data' type="hidden" />
                <input name="cust_name_data" id='cust_name_data' type="hidden" />
                <input name="cust_price_data" id='cust_price_data' type="hidden" />
            </form>
            <canvas id="canvas" width="525px" height="525px"></canvas>
            <div class="canvas_disnone">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 525 525" style="enable-background:new 0 0 525 525;" xml:space="preserve" id="svg0" class="svgnone">
                    <path class="st0" d="M3.6,198.58c0,2.56-0.09,4.56,0.01,6.54c1.33,25.79,2.53,51.59,4.07,77.37c1.52,25.61,3.3,51.2,5.13,76.79
		c0.63,8.76,0.83,8.96,9.61,9.86c18.55,1.9,37.1,3.94,55.7,5.24c40.05,2.79,80.12,5.37,120.2,7.61
		c43.58,2.44,87.18,4.56,130.79,6.51c32.96,1.47,65.94,2.32,98.9,3.77c7.32,0.32,13.46-1.63,18.88-6.2
		c16.04-13.53,32.52-26.61,47.81-40.94c9.64-9.03,17.66-19.85,25.97-30.22c1.86-2.32,2.61-6.12,2.62-9.24
		c0.16-45.33,0.11-90.66,0.11-135.99c0-1.81,0-3.61,0-6.03c-3.32,0-6.3-0.21-9.23,0.05c-3.59,0.32-5.14-0.88-6.11-4.58
		c-3-11.39-9.96-19.43-21.59-22.8c-10.6-3.08-17.27,0.51-19.97,11.17c-1.29,5.1-1.71,10.41-2.61,16.16c-2.06,0-4.18,0-6.31,0
		c-101.82,0-203.65,0.19-305.47-0.18c-17.7-0.06-34.8,1.58-51.54,7.31c-5.59,1.91-11.41,3.15-17.77,4.87
		c0.48-3.32,0.94-5.9,1.21-8.5c0.81-7.84,1.16-15.68-2.43-23.03c-2.8-5.73-7.39-8.79-13.91-8.84c-6.14-0.04-9.27,3.89-11.65,8.71
		c-1.09,2.22-2.18,4.62-2.46,7.03c-1.14,9.73-2.28,19.48-2.74,29.26c-0.17,3.74-1.27,5.13-4.7,6.07
		C32.02,190.25,18,194.42,3.6,198.58z" />
                </svg>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 525 525" style="enable-background:new 0 0 525 525;" xml:space="preserve" id="svg1" class="svgnone">
                    <path class="st0" d="M3.6,198.58c0,2.56-0.09,4.56,0.01,6.54c1.33,25.79,2.53,51.59,4.07,77.37c1.52,25.61,3.3,51.2,5.13,76.79
		c0.63,8.76,0.83,8.96,9.61,9.86c18.55,1.9,37.1,3.94,55.7,5.24c40.05,2.79,80.12,5.37,120.2,7.61
		c43.58,2.44,87.18,4.56,130.79,6.51c32.96,1.47,65.94,2.32,98.9,3.77c7.32,0.32,13.46-1.63,18.88-6.2
		c16.04-13.53,32.52-26.61,47.81-40.94c9.64-9.03,17.66-19.85,25.97-30.22c1.86-2.32,2.61-6.12,2.62-9.24
		c0.16-45.33,0.11-90.66,0.11-135.99c0-1.81,0-3.61,0-6.03c-3.32,0-6.3-0.21-9.23,0.05c-3.59,0.32-5.14-0.88-6.11-4.58
		c-3-11.39-9.96-19.43-21.59-22.8c-10.6-3.08-17.27,0.51-19.97,11.17c-1.29,5.1-1.71,10.41-2.61,16.16c-2.06,0-4.18,0-6.31,0
		c-101.82,0-203.65,0.19-305.47-0.18c-17.7-0.06-34.8,1.58-51.54,7.31c-5.59,1.91-11.41,3.15-17.77,4.87
		c0.48-3.32,0.94-5.9,1.21-8.5c0.81-7.84,1.16-15.68-2.43-23.03c-2.8-5.73-7.39-8.79-13.91-8.84c-6.14-0.04-9.27,3.89-11.65,8.71
		c-1.09,2.22-2.18,4.62-2.46,7.03c-1.14,9.73-2.28,19.48-2.74,29.26c-0.17,3.74-1.27,5.13-4.7,6.07
		C32.02,190.25,18,194.42,3.6,198.58z" />
                </svg>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 525 525" style="enable-background:new 0 0 525 525;" xml:space="preserve" id="svg2" class="svgnone">
                    <path class="st0" d="M3.6,198.58c0,2.56-0.09,4.56,0.01,6.54c1.33,25.79,2.53,51.59,4.07,77.37c1.52,25.61,3.3,51.2,5.13,76.79
		c0.63,8.76,0.83,8.96,9.61,9.86c18.55,1.9,37.1,3.94,55.7,5.24c40.05,2.79,80.12,5.37,120.2,7.61
		c43.58,2.44,87.18,4.56,130.79,6.51c32.96,1.47,65.94,2.32,98.9,3.77c7.32,0.32,13.46-1.63,18.88-6.2
		c16.04-13.53,32.52-26.61,47.81-40.94c9.64-9.03,17.66-19.85,25.97-30.22c1.86-2.32,2.61-6.12,2.62-9.24
		c0.16-45.33,0.11-90.66,0.11-135.99c0-1.81,0-3.61,0-6.03c-3.32,0-6.3-0.21-9.23,0.05c-3.59,0.32-5.14-0.88-6.11-4.58
		c-3-11.39-9.96-19.43-21.59-22.8c-10.6-3.08-17.27,0.51-19.97,11.17c-1.29,5.1-1.71,10.41-2.61,16.16c-2.06,0-4.18,0-6.31,0
		c-101.82,0-203.65,0.19-305.47-0.18c-17.7-0.06-34.8,1.58-51.54,7.31c-5.59,1.91-11.41,3.15-17.77,4.87
		c0.48-3.32,0.94-5.9,1.21-8.5c0.81-7.84,1.16-15.68-2.43-23.03c-2.8-5.73-7.39-8.79-13.91-8.84c-6.14-0.04-9.27,3.89-11.65,8.71
		c-1.09,2.22-2.18,4.62-2.46,7.03c-1.14,9.73-2.28,19.48-2.74,29.26c-0.17,3.74-1.27,5.13-4.7,6.07
		C32.02,190.25,18,194.42,3.6,198.58z" />
                </svg>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 525 525" style="enable-background:new 0 0 525 525;" xml:space="preserve" id="svg3" class="svgnone">
                    <path class="st0" d="M3.6,198.58c0,2.56-0.09,4.56,0.01,6.54c1.33,25.79,2.53,51.59,4.07,77.37c1.52,25.61,3.3,51.2,5.13,76.79
		c0.63,8.76,0.83,8.96,9.61,9.86c18.55,1.9,37.1,3.94,55.7,5.24c40.05,2.79,80.12,5.37,120.2,7.61
		c43.58,2.44,87.18,4.56,130.79,6.51c32.96,1.47,65.94,2.32,98.9,3.77c7.32,0.32,13.46-1.63,18.88-6.2
		c16.04-13.53,32.52-26.61,47.81-40.94c9.64-9.03,17.66-19.85,25.97-30.22c1.86-2.32,2.61-6.12,2.62-9.24
		c0.16-45.33,0.11-90.66,0.11-135.99c0-1.81,0-3.61,0-6.03c-3.32,0-6.3-0.21-9.23,0.05c-3.59,0.32-5.14-0.88-6.11-4.58
		c-3-11.39-9.96-19.43-21.59-22.8c-10.6-3.08-17.27,0.51-19.97,11.17c-1.29,5.1-1.71,10.41-2.61,16.16c-2.06,0-4.18,0-6.31,0
		c-101.82,0-203.65,0.19-305.47-0.18c-17.7-0.06-34.8,1.58-51.54,7.31c-5.59,1.91-11.41,3.15-17.77,4.87
		c0.48-3.32,0.94-5.9,1.21-8.5c0.81-7.84,1.16-15.68-2.43-23.03c-2.8-5.73-7.39-8.79-13.91-8.84c-6.14-0.04-9.27,3.89-11.65,8.71
		c-1.09,2.22-2.18,4.62-2.46,7.03c-1.14,9.73-2.28,19.48-2.74,29.26c-0.17,3.74-1.27,5.13-4.7,6.07
		C32.02,190.25,18,194.42,3.6,198.58z" />
                </svg>

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
    </div>
    <script src="js/login.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 2
                }

            }
        })
    </script>
    
</body>

</html>