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
        <div class="chatbot_wrapper" id="chatbot_wrapper">
        <!-- <img src="./scss/img/mch_img/GengImg/houseChat.png" alt="chathouse" /> -->
        <!-- 關起來 -->
        <div class="cancel" id="close_btn">Ｘ</div>
        <!-- 對話框框 -->
        <div class="chatBot_container" id="robot_conversation-block">
            <div id="toptop">
                <div class="chatBot_content" id="chabot_conversation_box">
                    <p id="chatBot_content" class="robot_text">
                        ♥ 去野餐： HiHi 有什麼想問我呢?
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