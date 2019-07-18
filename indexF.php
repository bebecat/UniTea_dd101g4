<?php 
    session_start();
    if(isset($_SESSION["memId"])!=true){
        $_SESSION["memId"] = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/h_f_becca.css">
    <link rel="stylesheet" href="css/machine.css">
    <link rel="SHORTCUT ICON" href="./scss/h_f_img/rwd-logo.png"/>
    <link rel="stylesheet" href="js/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="js/dist/assets/owl.theme.default.min.css">
    <title>趣野餐｜ 野餐周邊</title>
</head>
<body>
    <header>
        <span id="memId_hide" style="display:none">
            <?php
                echo $_SESSION["memId"]
            ?>
        </span>

        <nav class="navbar_container">
            <input type="checkbox" id="menuBg" />
            <div class="header_cloud">
                <div class="cloudF"></div>
                <div class="cloudB"></div>
                <div class="cloudR"></div>
            </div>
            <div class="hb_box">
                <div class="logo"></div>
                <label class="hb" for="menuBg">
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    <div class="bar bar3"></div>
                </label>
            </div>
            <div class="nav_wrapper">
                <ul class="nav_content">
                    <a href="customizedP.html"><li class="cus">客製野餐籃</li></a>
                    <a href="contest.html"><li>美籃票選</li></a>
                    <a href="pdList.html"><li class="here">野餐周邊</li></a>
                    <a href="indexF.php">
                    <li class="logo">
                    <h1>趣野餐</h1>
                    </li>
                    </a>
                    <a href="activity.html"><li>野餐活動</li></a>
                    <a href="aboutus.html"><li>籃子故事</li></a>
                    <a href="game/game.php"><li>賺折扣券</li></a>
                </ul>
      
              <ul class="icon">
                <li class="hi"><?php echo $_SESSION["memName"] ?></li>
                <a href="login.php">
                    <li class="member">
                    <img
                      id="member_icon"
                      src="./scss/img/h_f_img/member.png"
                      alt="member"
                    /></li
                ></a>
                <a href="cart.html"
                  ><li class="cart">
                    <img
                      id="cart_icon"
                      src="./scss/img/h_f_img/cart.png"
                      alt="cart"
                    /></li
                ></a>
              </ul>
              <div class="clear"></div>
            </div>
          </nav>
    </header>
    
    <div class="index_wrapper">
        <section class="container_allview">
            <div class="content_main">
                <div class="content_txt">
                    <div class="box_txt">
                        <div id="itemtxt" class="item_txt">
                            <div class="txt txt_picA">
                                <img src="scss/img/GengImg/Screen01/Screen01title-1.png" alt="">
                            </div>
                            <div class="txt txt_picB">
                                <img src="scss/img/GengImg/Screen01/Screen0101-1title.png" alt="">
                            </div>
                            <div class="txt txt_picC">
                                <img src="scss/img/GengImg/Screen01/Screen01title-2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="cloudMove">
                        <div class="cloudA">
                            <img src="scss/img/GengImg/Screen01/Screen01-1cloud.png" alt="">
                        </div>
                        <div class="cloudB">
                            <img src="scss/img/GengImg/Screen01/Screen01cloud.png" alt="">
                        </div>
                    </div>
                </div>
                <div id="parallaxMove" class="content_object">
                    <div class="box_picnic">
                        <div class="item_picnic">
                            <div class="mobile_picnic">
                                <img src="scss/img/GengImg/Screen01/Screen01picnicmat01.png" alt="">
                                <div class="box_object">
                                    <div class="item_object">
                                        <div id="tweezersMove" class="object object_tweezers">
                                            <img src="scss/img/GengImg/Screen01/Screen01picnicbasket.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="picnic">
                                <img src="scss/img/GengImg/Screen01/Screen01picnicmat.png" alt="">
                                <div class="box_object">
                                    <div class="item_object">
                                        <div id="tweezersMove" class="object object_tweezers">
                                            <img src="scss/img/GengImg/Screen01/Screen01picnicbasket.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="box_smobject">
                                    <div class="item_smobject">
                                        <!-- <div id="smobjectA" class="smobject_sandwich">
                                            <img src="scss/img/GengImg/Screen01/sandwich.png" alt="">
                                        </div>
                                        <div class="smobject_apple">
                                            <img src="scss/img/GengImg/Screen01/apple.png" alt="">
                                        </div>
                                        <div id="smobjectB" class="smobject_knife">
                                            <img src="scss/img/GengImg/Screen01/knife.png" alt="">
                                        </div>
                                        <div class="smobject_vase">
                                            <img src="scss/img/GengImg/Screen01/vase.png" alt="">
                                        </div>
                                        <div class="smobject_cross">
                                            <img src="scss/img/GengImg/Screen01/cross.png" alt="">
                                        </div>
                                        <div id="smobjectC" class="smobject_jamA">
                                            <img src="scss/img/GengImg/Screen01/jamA.png" alt="">
                                        </div>
                                        <div id="smobjectD"  class="smobject_jamB">
                                            <img src="scss/img/GengImg/Screen01/jamB.png" alt="">
                                        </div> -->
                                        <div class="smobject_tomato">
                                            <img src="scss/img/GengImg/Screen01/tomato.png" alt="">
                                        </div>
                                        <div class="smobject_tota">
                                            <img src="scss/img/GengImg/Screen01/tota.png" alt="">
                                        </div>
                                        <div class="smobject_kettle">
                                            <img src="scss/img/GengImg/Screen01/Screen01kettle.png" alt="">
                                        </div>
                                        <div class="smobject_jaba">
                                            <img src="scss/img/GengImg/Screen01/jaba.png" alt="">
                                        </div>
                                        <div class="smobject_cake">
                                            <img src="scss/img/GengImg/Screen01/Screen01cake.png" alt="">
                                        </div>
                                        <div class="smobject_donut">
                                            <img src="scss/img/GengImg/Screen01/Screen01donut.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content_bgpic">
                    <div class="box_bgpic">
                        <div class="item_bgpic cA">
                            <img src="scss/img/GengImg/BG/BG-44.png" alt="">
                        </div>
                        <div class="item_bgpic cB">
                            <img src="scss/img/GengImg/BG/BG-22.png" alt="">
                        </div>
                        <div class="item_bgpic cC">
                            <img src="scss/img/GengImg/BG/BG-33.png" alt="">
                        </div>
                        <div class="gA">
                            <img src="scss/img/GengImg/BG/BG_grass1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container_inBackground">
            <section class="container_boxes">
                <div class="content_wood">
                    <div class="box_wood">
                        <img src="scss/img/GengImg/titleboard.png" alt="">
                        <div class="item_h3">
                            <h3>客製籃子外型</h3>
                        </div>
                    </div>
                    <div class="box_makeboxes">
                        <div class="item_boxes">
                            <div class="boxes">
                                <img id="pic" src="scss/img/GengImg/Screen02/Screen02basket_1.png" alt="">
                            </div>
                            <div class="shaped">
                                <div class="stepA">
                                    <p>1</p>
                                    <div class="step_txtA">
                                        <p>選擇</p>
                                    </div>
                                </div>
                                <div class="stepB">
                                    <p>2</p>
                                    <div class="step_txtB">
                                        <p>配色</p>
                                    </div>
                                </div>
                                <div class="stepC">
                                    <p>3</p>
                                    <div class="step_txtC">
                                        <p>裝飾</p>
                                    </div>
                                </div>
                                <div class="stepD">
                                    <p>4</p>
                                    <div class="step_txtD">
                                        <p>取名字</p>
                                    </div>
                                </div>
                                <div class="stepE">
                                    <p>5</p>
                                    <div class="step_txtE">
                                        <p>加價購</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_exterior">
                            <div class="exterior_card">
                                <img src="scss/img/GengImg/Screen02/Screen02-2board.png" alt="">
                                <div class="exterior_boxes">
                                    <div class="exterior_changebox">
                                        <img src="scss/img/GengImg/Screen02/Screen02-1basket.png" alt="">
                                    </div>
                                    <div class="exterior_changebox">
                                        <img src="scss/img/GengImg/Screen02/Screen02-2basket.png" alt="">
                                    </div>
                                    <div class="exterior_changebox">
                                        <img src="scss/img/GengImg/Screen02/Screen02-3basket.png" alt="">
                                    </div>
                                    <div class="exterior_changebox">
                                        <img src="scss/img/GengImg/Screen02/Screen02-4basket.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_mobileexterior">
                            <div class="mobileexterior_card">
                                <div class="mobileexterior_boxes">
                                    <div class="moblieexterior_changebox">
                                        <img src="scss/img/GengImg/Screen02/Screen02-1basket.png" alt="">
                                    </div>
                                    <div class="moblieexterior_changebox">
                                        <img src="scss/img/GengImg/Screen02/Screen02-2basket.png" alt="">
                                    </div>
                                    <div class="moblieexterior_changebox">
                                        <img src="scss/img/GengImg/Screen02/Screen02-3basket.png" alt="">
                                    </div>
                                    <div class="moblieexterior_changebox">
                                        <img src="scss/img/GengImg/Screen02/Screen02-4basket.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_btn">
                        <div class="item_gomakebtn">
                            <div class="btn_gomake">
                                <a href="customizedP.html"><p>前往客製</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="birdsMove">
                        <div class="birdsA">
                            <img src="scss/img/GengImg/Screen02/Screen02-bird.png" alt="">
                        </div>
                        <div class="birdsB">
                            <img src="scss/img/GengImg/Screen02/Screen02-bird.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="container_vote">
                <div class="content_wood">
                    <div class="box_wood">
                        <img src="scss/img/GengImg/titleboard.png" alt="">
                        <div class="item_h3">
                            <h3>選美投票</h3>
                        </div>
                    </div>
                </div>
                <div class="content_vote">
                    <div class="box_vote">
                        <div class="item_vote">
                            <div class="vote_pic">
                                <div class="vote_img">
                                    <img src="scss/img/GengImg/Screen03/Screen03-2basket.png" alt="">
                                </div>
                                <div class="vote_txt">
                                    <div class="ranking">
                                        <p><span>No.</span>2</p>
                                    </div>
                                    <div class="math">
                                        <div class="heart">
                                            <img src="scss/img/GengImg/Screen03/heart.png" alt="">
                                        </div>
                                        <p><span>65</span>票</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="crown item_vote">
                            <div class="no1 vote_pic">
                                <div class="vote_img">
                                    <img src="scss/img/GengImg/Screen03/Screen03-1basket.png" alt="">
                                </div>
                                <div class="crown_pic">
                                    <img src="scss/img/GengImg/Screen03/Screen03crown.png" alt="">
                                </div>
                                <div class="vote_txt">
                                    <div class="ranking">
                                        <p><span>No.</span>1</p>
                                    </div>
                                    <div class="math">
                                        <div class="heart">
                                            <img src="scss/img/GengImg/Screen03/heart.png" alt="">
                                        </div>
                                        <p><span>85</span>票</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_vote">
                            <div class="vote_pic">
                                <div class="vote_img">
                                    <img src="scss/img/GengImg/Screen03/Screen03-3basket.png" alt="">
                                </div>
                                <div class="vote_txt">
                                    <div class="ranking">
                                        <p><span>No.</span>3</p>
                                    </div>
                                    <div class="math">
                                        <div class="heart">
                                            <img src="scss/img/GengImg/Screen03/heart.png" alt="">
                                        </div>
                                        <p><span>50</span>票</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_votepic">
                        <div class="item_votepic">
                            <div class="votepic_land">
                                <img src="scss/img/GengImg/Screen03/Screen03land.png" alt="">
                                <div class="votepic_landtree">
                                    <div class="votepic_e04A">
                                        <img src="scss/img/GengImg/Screen03/Screen03Newe04A.png" alt="">
                                        <div class="votepic_treeA">
                                            <img src="scss/img/GengImg/Screen03/Screen03NewtreeA.png" alt="">
                                        </div>
                                    </div>
                                    <div class="votepic_e04B">
                                        <img src="scss/img/GengImg/Screen03/Screen03Newe04B.png" alt="">
                                        <div class="votepic_treeB">
                                            <img src="scss/img/GengImg/Screen03/Screen03NewtreeB.png" alt="">
                                        </div>
                                    </div>
                                    <div class="votepic_e04C">
                                        <img src="scss/img/GengImg/Screen03/Screen03Newe04B.png" alt="">
                                        <div class="votepic_treeC">
                                            <img src="scss/img/GengImg/Screen03/Screen03NewtreeB.png" alt="">
                                        </div>
                                    </div>
                                    <div class="votepic_e04D">
                                        <img src="scss/img/GengImg/Screen03/Screen03Newe04A.png" alt="">
                                        <div class="votepic_treeD">
                                            <img src="scss/img/GengImg/Screen03/Screen03NewtreeA.png" alt="">
                                        </div>
                                    </div>
                                    <div class="votepic_gAbig">
                                        <img src="scss/img/GengImg/Screen03/Screen03newbiggrassA.png" alt="">
                                        <div class="votepic_gAsm">
                                            <img src="scss/img/GengImg/Screen03/Screen03newsmallgrassA.png" alt="">
                                        </div>
                                    </div>
                                    <div class="votepic_gBbig">
                                        <img src="scss/img/GengImg/Screen03/Screen03newbiggrassA.png" alt="">
                                        <div class="votepic_gBsm">
                                            <img src="scss/img/GengImg/Screen03/Screen03newsmallgrassA.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_votebtn">
                        <div class="item_govotebtn">
                            <div class="btn_govote">
                                <a href="contest.html"><p>前往投票</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="leafMove">
                        <div class="leafA">
                            <img src="scss/img/GengImg/Screen03/Screen03-1maple.png" alt="">
                        </div>
                        <div class="leafB">
                            <img src="scss/img/GengImg/Screen03/Screen03maple.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="content_mobilevote">
                    <div class="box_mobilevote">
                        <div class="crown item_mobilevote">
                            <div class="no1 mobilevote_pic">
                                <img src="scss/img/GengImg/Screen03/Screen03circle.png" alt="">
                                <div class="mobilevote_img">
                                    <img src="scss/img/GengImg/Screen03/Screen03-1basket.png" alt="">
                                </div>
                                <div class="crown_pic">
                                    <img src="scss/img/GengImg/Screen03/Screen03crown.png" alt="">
                                </div>
                                <div class="mobilevote_txt">
                                    <div class="mobilevote_ranking">
                                        <p><span>No.</span>2</p>
                                    </div>
                                    <div class="mobilemath">
                                        <div class="mobileheart">
                                            <img src="scss/img/GengImg/Screen03/heart.png" alt="">
                                        </div>
                                        <p><span>65</span>票</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_mobilevote">
                            <div class="mobilevote_picA">
                                <img src="scss/img/GengImg/Screen03/Screen03circle.png" alt="">
                                <div class="mobilevote_imgA">
                                    <img src="scss/img/GengImg/Screen03/Screen03-2basket.png" alt="">
                                </div>
                                <div class="mobilevote_txt">
                                    <div class="mobilevote_ranking">
                                        <p><span>No.</span>2</p>
                                    </div>
                                    <div class="mobilemath">
                                        <div class="mobileheart">
                                            <img src="scss/img/GengImg/Screen03/heart.png" alt="">
                                        </div>
                                        <p><span>65</span>票</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mobilevote_picB">
                                <img src="scss/img/GengImg/Screen03/Screen03circle.png" alt="">
                                <div class="mobilevote_imgB">
                                    <img src="scss/img/GengImg/Screen03/Screen03-3basket.png" alt="">
                                </div>
                                <div class="mobilevote_txt">
                                    <div class="mobilevote_ranking">
                                        <p><span>No.</span>2</p>
                                    </div>
                                    <div class="mobilemath">
                                        <div class="mobileheart">
                                            <img src="scss/img/GengImg/Screen03/heart.png" alt="">
                                        </div>
                                        <p><span>65</span>票</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_votepic">
                        <div class="item_votepic">
                            <div class="votepic_land">
                                <img src="scss/img/GengImg/Screen03/Screen03land.png" alt="">
                                <div class="votepic_landtree">
                                    <div class="votepic_e04A">
                                        <img src="scss/img/GengImg/Screen03/Screen03Newe04A.png" alt="">
                                        <div class="votepic_treeA">
                                            <img src="scss/img/GengImg/Screen03/Screen03NewtreeA.png" alt="">
                                        </div>
                                    </div>
                                    <div class="votepic_e04B">
                                        <img src="scss/img/GengImg/Screen03/Screen03Newe04B.png" alt="">
                                        <div class="votepic_treeB">
                                            <img src="scss/img/GengImg/Screen03/Screen03NewtreeB.png" alt="">
                                        </div>
                                    </div>
                                    <div class="votepic_e04C">
                                        <img src="scss/img/GengImg/Screen03/Screen03Newe04B.png" alt="">
                                        <div class="votepic_treeC">
                                            <img src="scss/img/GengImg/Screen03/Screen03NewtreeB.png" alt="">
                                        </div>
                                    </div>
                                    <div class="votepic_e04D">
                                        <img src="scss/img/GengImg/Screen03/Screen03Newe04A.png" alt="">
                                        <div class="votepic_treeD">
                                            <img src="scss/img/GengImg/Screen03/Screen03NewtreeA.png" alt="">
                                        </div>
                                    </div>
                                    <div class="votepic_gAbig">
                                        <img src="scss/img/GengImg/Screen03/Screen03newbiggrassA.png" alt="">
                                        <div class="votepic_gAsm">
                                            <img src="scss/img/GengImg/Screen03/Screen03newsmallgrassA.png" alt="">
                                        </div>
                                    </div>
                                    <div class="votepic_gBbig">
                                        <img src="scss/img/GengImg/Screen03/Screen03newbiggrassA.png" alt="">
                                        <div class="votepic_gBsm">
                                            <img src="scss/img/GengImg/Screen03/Screen03newsmallgrassA.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_votebtn">
                        <div class="item_govotebtn">
                            <div class="btn_govote">
                                <a href="contest.html"><p>前往投票</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container_store">
                <div class="content_wood">
                    <div class="box_wood">
                        <img src="scss/img/GengImg/titleboard.png" alt="">
                        <div class="item_h3">
                            <h3>熱賣商品</h3>
                        </div>
                    </div>
                </div>
                <div class="content_storebg">
                    <div class="box_storebgA">
                        <img src="scss/img/GengImg/Screen01/Screen01NewdarkgrassA.png" alt="">
                        <div class="storesmgrassA1">
                            <img src="scss/img/GengImg/Screen01/Screen01NewlightgrassA.png" alt="">
                        </div>
                        <div class="storebiggrassA1">
                            <img src="scss/img/GengImg/Screen01/Screen01NewverylightgrassA.png" alt="">
                        </div>
                        <div class="storesmgrassA2">
                            <img src="scss/img/GengImg/Screen01/Screen01NewlightgrassA.png" alt="">
                        </div>
                        <div class="storebiggrassA2">
                            <img src="scss/img/GengImg/Screen01/Screen01NewverylightgrassA.png" alt="">
                        </div>
                    </div>
                    <div class="box_storebg">
                        <div class="content_hotproducts">
                            <div class="box_hotproducts">
                                <div class="item_hotproducts">
                                    <div class="hotproducts_boxes">
                                        <img src="scss/img/GengImg/Screen04/Screen04board.png" alt="">
                                        <div class="hotproducts_img">
                                            <img src="scss/img/GengImg/Screen04/pd2-2.png" alt="">
                                        </div>
                                        <div class="hotproducts_board">
                                            <img src="scss/img/GengImg/Screen04/Screen04-1board.png" alt="">
                                            <div class="hotproducts_txt">
                                                <h3>熱賣商品</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_hotproducts">
                                    <div class="hotproducts_boxes">
                                        <img src="scss/img/GengImg/Screen04/Screen04board.png" alt="">
                                        <div class="hotproducts_img">
                                            <img src="scss/img/GengImg/Screen04/cook3-1-trans.png" alt="">
                                        </div>
                                        <div class="hotproducts_board">
                                            <img src="scss/img/GengImg/Screen04/Screen04-1board.png" alt="">
                                            <div class="hotproducts_txt">
                                                <h3>熱賣商品</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_hotproducts">
                                    <div class="hotproducts_boxes">
                                        <img src="scss/img/GengImg/Screen04/Screen04board.png" alt="">
                                        <div class="hotproducts_img">
                                            <img src="scss/img/GengImg/Screen04/pd3-1.png" alt="">
                                        </div>
                                        <div class="hotproducts_board">
                                            <img src="scss/img/GengImg/Screen04/Screen04-1board.png" alt="">
                                            <div class="hotproducts_txt">
                                                <h3>熱賣商品</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box_hotproductsgrass">
                                <div class="item_hotproductsgrassA">
                                    <img src="scss/img/GengImg/Screen04/Screen04tree.png" alt="">
                                </div>
                                <div class="item_hotproductsbtn">
                                    <div class="btn_hotproducts">
                                        <a href="pdList.html"><p>前往選購</p></a>
                                    </div>
                                </div>
                                <div class="item_hotproductsgrassB">
                                    <img src="scss/img/GengImg/Screen04/Screen04-1tree.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_storebgB">
                        <img src="scss/img/GengImg/Screen01/Screen01NewdarkgrassB.png" alt="">
                        <div class="storesmgrassB1">
                            <img src="scss/img/GengImg/Screen01/Screen01NewlightgrassA.png" alt="">
                        </div>
                        <div class="storebiggrassB1">
                            <img src="scss/img/GengImg/Screen01/Screen01NewverylightgrassA.png" alt="">
                        </div>
                        <div class="storesmgrassB2">
                            <img src="scss/img/GengImg/Screen01/Screen01NewlightgrassA.png" alt="">
                        </div>
                        <div class="storebiggrassB2">
                            <img src="scss/img/GengImg/Screen01/Screen01NewverylightgrassA.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="content_mobilehotproducts">
                    <div class="owl-carousel box_mobilehotproducts">
                        <div class=" item_mobilehotproducts">
                            <div class="mobilehotproducts_boxes">
                                <img src="scss/img/GengImg/Screen04/Screen04board.png" alt="">
                                <div class="mobilehotproducts_img">
                                    <img src="scss/img/GengImg/Screen04/pd2-2.png" alt="">
                                </div>
                                <div class="mobilehotproducts_board">
                                    <img src="scss/img/GengImg/Screen04/Screen04-1board.png" alt="">
                                    <div class="mobilehotproducts_txt">
                                        <h3>熱賣商品</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" item_mobilehotproducts">
                            <div class="mobilehotproducts_boxes">
                                <img src="scss/img/GengImg/Screen04/Screen04board.png" alt="">
                                <div class="mobilehotproducts_img">
                                    <img src="scss/img/GengImg/Screen04/cook3-1-trans.png" alt="">
                                </div>
                                <div class="mobilehotproducts_board">
                                    <img src="scss/img/GengImg/Screen04/Screen04-1board.png" alt="">
                                    <div class="mobilehotproducts_txt">
                                        <h3>熱賣商品</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" item_mobilehotproducts">
                            <div class="mobilehotproducts_boxes">
                                <img src="scss/img/GengImg/Screen04/Screen04board.png" alt="">
                                <div class="mobilehotproducts_img">
                                    <img src="scss/img/GengImg/Screen04/pd3-1.png" alt="">
                                </div>
                                <div class="mobilehotproducts_board">
                                    <img src="scss/img/GengImg/Screen04/Screen04-1board.png" alt="">
                                    <div class="mobilehotproducts_txt">
                                        <h3>熱賣商品</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_hotproductsgrass">
                        <div class="item_hotproductsgrassA">
                            <img src="scss/img/GengImg/Screen04/Screen04tree.png" alt="">
                        </div>
                        <div class="item_hotproductsbtn">
                            <div class="btn_hotproducts">
                                <a href="pdList.html"><p>前往選購</p></a>
                            </div>
                        </div>
                        <div class="item_hotproductsgrassB">
                            <img src="scss/img/GengImg/Screen04/Screen04-1tree.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="container_game">
                <div class="content_gamebg">
                    <div class="content_wood">
                        <div class="box_wood">
                            <img src="scss/img/GengImg/titleboard.png" alt="">
                            <div class="item_h3">
                                <h3>小遊戲</h3>
                            </div>
                        </div>
                    </div>
                    <div class="content_game">
                        <div class="box_game">
                            <div class="item_game">
                                <div class="vine_boxes">
                                    <div class="boxes_shake">
                                        <img src="scss/img/GengImg/Screen05/Screen05-picnicmat.png" alt="">
                                    </div>
                                    <div class="bee_shake">
                                        <div class="beeA">
                                            <img src="scss/img/GengImg/Screen05/Screen05-bee.png" alt="">
                                        </div>
                                        <div class="beeB">
                                            <img src="scss/img/GengImg/Screen05/Screen05-1bee.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_gamebtn">
                            <div class="item_gamebtn">
                                <div class="btn_gotoplay">
                                    <a href="game/game.php"><p>前往遊戲</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="machine_wrapper">
        <div class="machine">
            <div class="machine_check">
              <div class="machine_body">
                <img src="scss/img/mch_img/GengImg/animal/body.png" alt="" />
                <div class="machine_handR">
                  <img src="scss/img/mch_img/GengImg/animal/rightHand.png" alt="" />
                </div>
                <div class="machine_handL">
                  <img src="scss/img/mch_img/GengImg/animal/leftHand.png" alt="" />
                </div>
                <div class="machine_earsR">
                  <img src="scss/img/mch_img/GengImg/animal/rightEars.png" alt="" />
                </div>
                <div class="machine_earsL">
                  <img src="scss/img/mch_img/GengImg/animal/leftEars.png" alt="" />
                </div>
                <div class="machine_tail">
                  <img src="scss/img/mch_img/GengImg/animal/tail.png" alt="" />
                </div>
              </div>
              <div class="machine_dialog">
                <!-- <img src="scss/img/mch_img/GengImg/dialog.png" alt="" /> -->
      
                <div class="machine_txt">
                  <p>點我 <span>問我</span></p>
                </div>
              </div>
            </div>
          </div>
          <!-- 房子 -->
          <div class="chatbot_wrapper">
            <!-- <img src="./scss/img/mch_img/GengImg/houseChat.png" alt="chathouse" /> -->
            <!-- 關起來 -->
            <div class="cancel" id="close_btn">Ｘ</div>
            <!-- 對話框框 -->
            <div class="chatBot_container" id="robot_conversation-block">
                <div class="chatBot_content" id="chabot_conversation_box">
                    <p id="chatBot_content" class="robot_text">
                        ♥ 去野餐： HiHi 去野餐 ! 野餐趣 ! 有什麼想問我呢?
                    </p>
                </div>
                <div class="QA_item" id="QA_item" style="display:none">
                    <div class="q_w">
                        <span class="question" style="float:right"></span>
                    </div>

                    <div class="clear"></div>

                    <div class="a_w" id="a_w">
                        <span class="answer" id="answer"></span>
                    </div>
                    <div class="clear"></div>		
                </div>	
            </div>
      
            <!-- 送出 -->
            <div class="chatBot-text-Wrap">
              <input
                type="text"
                class="chatBot-text"
                id="user_message"
                placeholder="輸入你想問的"
                name="userkey"
              />
              <!-- <div id="UserText"></div> -->
              <button type="submit" id="user_btn_send" class="btn_send">送出</button>
            </div>
            <!-- 關鍵字 -->
            <div class="chatBot_keyword">
                <input type="button" value="價格" class="questionTag" id="ask_price">
                <input type="button" value="客製" class="questionTag" id="ask_cus">
                <input type="button" value="遊戲" class="questionTag" id="ask_game">
                <input type="button" value="優惠" class="questionTag" id="ask_discount">
                <input type="button" value="最新消息" class="questionTag" id="ask_news">
            </div>
            <!-- <ul class="chatBot_keyword">
              <li id="ask_price" class="questionTag">價格</li>
              <li id="ask_cus" class="questionTag">客製</li>
              <li id="ask_game" class="questionTag">遊戲</li>
              <li id="ask_discount" class="questionTag">優惠</li>
              <li id="ask_news" class="questionTag">最新消息</li>
            </ul> -->
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

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/dist/owl.carousel.min.js"></script>
    <script src="js/indexScreen01.js"></script>
    <script src="js/h_f_becca.js"></script>
    <script src="js/indexScreen02.js"></script>
    <script src="js/machine.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            center: true,
            items:2,
            loop:true,
            margin:10,
            responsive:{
                600:{
                    items:4
                }
            }
        });
    </script>
</body>
</html>