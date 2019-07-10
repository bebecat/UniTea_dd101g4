$(document).ready(function() {
  $(".cancel").click(function() {
    $(".chatbot_wrapper").css({ right: "-300px" });
    $(".cancel").css({ opacity: 0 });
    $(".machine").css("display", "block");
  });
  $(".machine").click(function() {
    $(".chatbot_wrapper").css({ right: "0px" });
    $(".cancel").css({ opacity: 1 });
    $(".machine").css("display", "none");
    // $(".chatBot_content_txt").fadeIn(slow);
  });
});

// 使用者回話-發生點擊事件的時候
$(document).ready(function() {
  $("#user_btn_send").click(function() {
    var message = $("#user_message").val();
    if (message == "") {
      $("#chabot_conversation_box")
        .append(`<div class="robot_conversation"><div class="flex">
      <p class="user_txt">${message}</p></div></div>`)
        .append(`<div class="robot_conversation">
    <p class="robot_text">你好好說！</p>
  </div>`);
    } else {
      $("#chabot_conversation_box")
        .append(`<div class="robot_conversation"><div class="flex">
    <p class="user_txt">${message}</p></div></div>`)
        .append(`<div class="robot_conversation">
    <p class="robot_text"><span>趣野餐： </span>${message}</p>
  </div>`);
    }
    // 清空message裡面的值
    $("#user_message").val("");
    // 捲軸自動往下
    scrollHeight = $("#chabot_conversation_box").height(); //scroll的高度
    $("#robot_conversation-block").animate({ scrollTop: scrollHeight }, 200); //控制scroll bar的位置 並加一點動畫效果
  });

  //使用者回話 - 發生keydown事件的時候;

  $("#user_message").keyup(function(e) {
    if (e.keyCode != 13) {
      return;
    }
    // 清除enter的預設行為 自動換行
    e.preventDefault();
    var message = $("#user_message").val();
    // console.log(message);
    if (message == "") {
      $("#chabot_conversation_box")
        .append(`<div class="robot_conversation"><div class="flex">
      <p class="user_txt">${message}</p></div></div>`)
        .append(`<div class="robot_conversation">
    <p class="robot_text"><span>趣野餐： </span>你好好說！</p>
  </div>`);
    } else {
      $("#chabot_conversation_box")
        .append(`<div class="robot_conversation"><div class="flex">
    <p class="user_txt">${message}</p></div></div>`)
        .append(`<div class="robot_conversation">
    <p class="robot_text"><span>趣野餐： </span>${message}</p>
  </div>`);
    }
    // 清空message裡面的值
    $("#user_message").val("");
    // 捲軸自動往下
    scrollHeight = $("#chabot_conversation_box").height(); //scroll的高度
    $("#robot_conversation-block").animate({ scrollTop: scrollHeight }, 200); //控制scroll bar的位置 並加一點動畫效果
  });

  //按鈕
  $("#ask_price").click(function() {
    var ask_price = "[價格]<br>客製籃子只要三百，要不要先去逛逛周邊商品啊！";
    $("#chabot_conversation_box").append(`<div class="robot_conversation">
    <p class="robot_text"><span>趣野餐： </span>${ask_price}</p>
  </div>`);
    // 捲軸自動往下
    var scrollHeight = $("#chabot_conversation_box").height(); //scroll的高度
    $("#robot_conversation-block").animate({ scrollTop: scrollHeight }, 200); //控制scroll bar的位置 並加一點動畫效果
  });

  $("#ask_cus").click(function() {
    var ask_cus = "[客製]<br>這裡可以客製專屬於你的籃子唷！";
    $("#chabot_conversation_box").append(`<div class="robot_conversation">
    <p class="robot_text"><span>趣野餐： </span>${ask_cus}</p>
  </div>`);
    // 捲軸自動往下
    var scrollHeight = $("#chabot_conversation_box").height(); //scroll的高度
    $("#robot_conversation-block").animate({ scrollTop: scrollHeight }, 200); //控制scroll bar的位置 並加一點動畫效果
  });
  $("#ask_game").click(function() {
    var ask_game = "[遊戲]<br>賺點數好血拼！";
    $("#chabot_conversation_box").append(`<div class="robot_conversation">
    <p class="robot_text"><span>趣野餐： </span>${ask_game}</p>
  </div>`);
    // 捲軸自動往下
    var scrollHeight = $("#chabot_conversation_box").height(); //scroll的高度
    $("#robot_conversation-block").animate({ scrollTop: scrollHeight }, 200); //控制scroll bar的位置 並加一點動畫效果
  });
  $("#ask_discount").click(function() {
    var ask_discount = "[優惠]<br>客製籃子加購周邊商品,有95折優惠！";
    $("#chabot_conversation_box").append(`<div class="robot_conversation">
    <p class="robot_text"><span>趣野餐： </span>${ask_discount}</p>
  </div>`);
    // 捲軸自動往下
    var scrollHeight = $("#chabot_conversation_box").height(); //scroll的高度
    $("#robot_conversation-block").animate({ scrollTop: scrollHeight }, 200); //控制scroll bar的位置 並加一點動畫效果
  });
  $("#ask_news").click(function() {
    var ask_news = "[最新消<br>息]又有新野餐活動了,快去報名！";
    $("#chabot_conversation_box").append(`<div class="robot_conversation">
    <p class="robot_text"><span>趣野餐： </span>${ask_news}</p>
  </div>`);
    // 捲軸自動往下
    var scrollHeight = $("#chabot_conversation_box").height(); //scroll的高度
    $("#robot_conversation-block").animate({ scrollTop: scrollHeight }, 200); //控制scroll bar的位置 並加一點動畫效果
  });
});
