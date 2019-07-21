<div id="light_box">
    <input type="checkbox" id="login_img_control" name="login" />
    <div class="login_container">
        <div class="top_img">
            <img src="./scss/img/login/login_top_pic.png" alt="登入介面裝飾照" />
        </div>
        <div class="login_content_box">
            <div id="closed_button">
                <img src="./scss/img/login/closed_button.png" alt="lightBoxClosedImg">
            </div>
            <div class="login_table">
                <form action="#">
                    <div class="login_logo">
                        <h1>野餐趣</h1>
                        <img src="./scss/img/login/login_logo.png" alt="登入畫面照片" />
                    </div>
                    <!-- 會員帳號 -->
                    <p>會員登入</p>
                    <label for="enter_account">帳號：<input type="text" id="enter_account" name="memId" placeholder="輸入帳號" /></label><br />
                    <!-- 會員密碼-->
                    <label for="enter_psw">密碼：<input type="password" id="enter_psw" name="memPsw" placeholder="輸入密碼" /></label><br />
                    <!-- 會員登入按鈕 -->
                    <label for="login_btn"><input type="submit" class="login_btn" value="登入" id="login_btn" /></label><br />
                    <label for="login_img_control">
                        還沒有帳號嗎?<span class="to_register_btn">申請會員</span>
                    </label>
                </form>
            </div>
            <div class="register_table">
                <form id="registerForm" action="#">
                    <div class="login_logo">
                        <h1>野餐趣</h1>
                        <img src="./scss/img/login/login_logo.png" alt="登入畫面照片" />
                    </div>
                    <p>註冊會員</p>
                    <div class="register_container">
                        <!-- 註冊會員名稱 -->
                        <label for="register_name">名稱：<input type="text" maxlength="10" title="使用者名稱" placeholder="輸入使用者名稱" class="register_input" id="register_name" /></label><br />
                        <!-- 註冊會員帳號 -->
                        <label for="register_account">帳號：<input type="text" id="register_account" title="使用者帳號" class="register_input" placeholder="輸入帳號" />
                            <!-- <br /> -->
                            <!-- <p id="checkAccMsg"></p> -->
                        </label><br />
                        <!-- 註冊會員密碼 -->
                        <label for="register_psw">密碼：<input type="password" id="register_psw" title="使用者密碼" class="register_input" placeholder="輸入密碼" /></label><br />
                        <!-- 註冊會員確認密碼 -->
                        <label for="check_register_psw">確認密碼：<input type="password" title="再次輸入密碼" placeholder="再次輸入密碼" id="check_register_psw" class="register_input" /></label><br />
                        <!-- 註冊會員電話 -->
                        <label for="register_phone">電話：<input type="tel" placeholder="ex:09xxxxxxxx" title="使用者電話" id="register_phone" class="register_input" /></label><br />
                        <!-- 註冊會員住址 -->
                        <label for="register_address">住址：<input type="text" placeholder="輸入住址" title="使用者住址" id="register_address" class="register_input" /></label><br />
                    </div>
                    <!-- 註冊會員按鈕 -->
                    <label for="register_btn"><input type="submit" class="register_btn" value="註冊會員" id="register_btn" /></label>
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