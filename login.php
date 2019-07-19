<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/login.css" />
    <title>login</title>
  </head>
  <body>
    <div class="light_box">
      <input type="checkbox" id="login_img_control" name="login" />
      <div class="login_container">
        <div class="top_img">
          <img src="./scss/img/login/login_top_pic.png" alt="登入介面裝飾照" />
        </div>
        <div class="login_content_box">
          <div class="login_table">
            <form action="#">
              <div class="login_logo">
                <h1>野餐趣</h1>
                <img src="./scss/img/login/login_logo.png" alt="登入畫面照片" />
              </div>
              <!-- 會員帳號 -->
              <p>會員登入</p>
              <label for="enter_account"
                >帳號：<input
                  type="text"
                  id="enter_account"
                  placeholder="輸入帳號"/></label
              ><br />
              <!-- 會員密碼-->
              <label for="enter_psw"
                >密碼：<input
                  type="password"
                  id="enter_psw"
                  placeholder="輸入密碼"/></label
              ><br />
              <!-- 會員登入按鈕 -->
              <label for="login_btn"
                ><input
                  type="submit"
                  class="login_btn"
                  value="登入"
                  id="login_btn"/></label
              ><br />
              <label for="login_img_control">
                還沒有帳號嗎?<span class="to_register_btn">申請會員</span>
              </label>
            </form>
          </div>
          <div class="register_table">
            <form action="#">
              <div class="login_logo">
                <h1>野餐趣</h1>
                <img src="./scss/img/login/login_logo.png" alt="登入畫面照片" />
              </div>
              <p>註冊會員</p>
              <!-- 註冊會員帳號 -->
              <label for="register_account"
                >帳號：<input
                  type="text"
                  id="register_account"
                  placeholder="輸入帳號"/></label
              ><br />
              <!-- 註冊會員密碼 -->
              <label for="register_psw"
                >密碼：<input
                  type="password"
                  id="register_psw"
                  placeholder="輸入密碼"/></label
              ><br />
              <!-- 註冊會員確認密碼 -->
              <label for="check_register_psw"
                >確認密碼：<input
                  type="password"
                  placeholder="再次輸入密碼"
                  id="check_register_psw"/></label
              ><br />
              <!-- 註冊會員按鈕 -->
              <label for="register_btn"
                ><input
                  type="submit"
                  class="register_btn"
                  value="註冊會員"
                  id="register_btn"
              /></label>
              <label for="login_img_control">
                已有帳號 <span class="to_login_btn">會員登入</span>
              </label>
            </form>
          </div>
          <div class="login_box_img">
            <img src="./scss/img/login/login_img.png" alt="登入頁照片" />
          </div>
        </div>
      </div>
    </div>
    <script src="./js/login.js"></script>
  </body>
</html>
