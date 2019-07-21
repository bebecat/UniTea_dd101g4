<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/member.css" />
    <link rel="SHORTCUT ICON" href="./scss/img/h_f_img/rwd-logo.png" />
    <link rel="stylesheet" href="./css/h_f_becca.css" />
    <link rel="stylesheet" href="css/login.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/h_f_becca.js"></script>
    <script src="js/login.js"></script>
  </head>

  <body class="member_bg">
    <?php 
      require_once("header.php");
      require_once("memberLogin.php");
    ?>

    <!-- 內容 -->
    <div class="member_wrapper">
      <div class="container">
        <!-- 會員中心開始 -->
        <section class="nullitem">
          <h4>會員專區</h4>
          <div class="member_area">
            <div class="member_account">
              <div class="member_form">
                <form
                  action=""
                  method="POST"
                  enctype="multipart/form-data"
                  id=""
                >
                  <img
                    src="./scss/img/member_img/member_icon.png"
                    style="border-radius: 50%;overflow:hidden;height: 200px;width: 200px;"
                    id="imgPreview"
                  />
                  <label>
                    <input
                      style="opacity: 0;"
                      type="file"
                      name="upFile"
                      id="upFile"
                    />
                    <img src="./scss/img/member_img/photo-camera.png" />
                  </label>
                </form>
              </div>
              <div class="member_inaccount">
                <table>
                  <tbody>
                    <tr>
                      <td><p>編號</p></td>
                      <td><p id="inaccount_memId"></p></td>
                    </tr>
                    <tr>
                      <td><p>姓名</p></td>
                      <td><input id="inaccount_memName" name="m_name" /></td>
                    </tr>
                    <tr>
                      <td><p>帳號</p></td>
                      <td><p id="inaccount_memAccount"></p></td>
                    </tr>
                    <tr>
                      <td><p>密碼</p></td>
                      <td><input id="inaccount_memPwd" name="pwd" /></td>
                    </tr>
                    <tr>
                      <td colspan="2"><p>&nbsp;</p></td>
                    </tr>
                  </tbody>
                </table>
                <!-- <input type="button" value="修改" /> -->
              </div>
              <div class="member_inaccount2">
                <table>
                  <tbody>
                    <tr>
                      <td><p>性別</p></td>
                      <td><input id="inaccount_memSex" name="sex" /></td>
                    </tr>
                    <tr>
                      <td><p>電話</p></td>
                      <td><input id="inaccount_memTel" name="tel" /></td>
                    </tr>
                    <tr>
                      <td><p>地址</p></td>
                      <td><input id="inaccount_memAdd" name="addr" /></td>
                    </tr>
                    <tr>
                      <td><p>點數</p></td>
                      <td><p id="inaccount_memPoint"></p></td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <p style="text-align:right;">
                          <button
                            style="padding:5px;border-radius: 8px;"
                            type="button"
                            id="save_member"
                          >
                            儲存修改
                          </button>
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- <input type="button" value="儲存" /> -->
              </div>
            </div>
          </div>
        </section>
        <!-- 會員中心結束 -->
        <div class="nullitem">&nbsp;</div>
        <div class="cloudMove">
          <div class="cloudA">
            <img src="./scss/img/member_img/cloud.png" alt="cloud" />
          </div>
          <div class="cloudB">
            <img src="./scss/img/member_img/cloud.png" alt="cloud" />
          </div>
        </div>

        <!-- 查詢開始 -->
        <section class="search">
          <h4>查詢</h4>
          <div class="search_area">
            <div class="search_button">
              <p id="customized">客製化商品</p>
              <p id="list">訂單記錄查詢</p>
              <p id="compete">參賽紀錄查詢</p>
              <p id="activity">活動紀錄查詢</p>
            </div>

            <div class="search_list">
              <ul class="customized_box" id="customized_item">
                <li class="item">
                  <span class="title">客製商品圖片</span>
                  <div class="pic">
                    <img src="./scss/img/member_img/cloud.png" alt="" />
                  </div>
                </li>
                <li class="item"><span class="name">客製商品名稱</span></li>
                <li class="item"><span class="date">客製日期</span></li>
                <li class="item"><span class="cus">客製素材</span></li>
                <li class="item"><span class="price">客製商品價格</span></li>
                <li class="item"><span class="btn">選美參賽按鈕</span></li>
              </ul>
              <ul class="list_box" id="list_item">
                <li class="item">訂單編號</li>
                <li class="item">訂單明細筆數</li>
                <li class="item">訂單成立日期</li>
                <li class="item">訂單總價格</li>
                <li class="item">訂單完成紀錄</li>
                <li class="item">訂單紀錄查詢</li>
              </ul>
              <ul class="compete_box" id="compete_item">
                <li class="item">參賽商品編號</li>
                <li class="item">參賽商品名稱</li>
                <li class="item">參賽商品圖片</li>
                <li class="item">參賽商品理念</li>
                <li class="item">參賽商品讚數</li>
                <li class="item">取消參賽按鈕</li>
              </ul>
              <ul class="activity_box" id="activity_item">
                <li class="item">報名活動名稱</li>
                <li class="item">活動地點</li>
                <li class="item">活動日期</li>
                <li class="item">報名日期</li>
                <li class="item">活動價格</li>
                <li class="item">取消報名按鈕</li>
              </ul>
            </div>
          </div>
        </section>
        <!-- 查詢結束 -->
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

    <!-- carema icon -->
    <script type="text/javascript">
      window.addEventListener("load", function() {
        //.......註冊挑選檔案的change事件
        document.getElementById("upFile").onchange = function(e) {
          let file = e.target.files[0];
          let reader = new FileReader();
          reader.onload = function(e) {
            document.getElementById("imgPreview").src = e.target.result;
            document.getElementById("member_icon").src = e.target.result;
          };

          reader.readAsDataURL(file);
        };
      });
    </script>
    <script src="js/member.js"></script>
  </body>
</html>