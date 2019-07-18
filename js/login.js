function $id(id) {
  return document.getElementById(id);
}

function loginForm() {
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.status == 200) {
      //將頁面上的使用者資料清掉
      //將登入bar面版上，登入者資料清空
      var res = JSON.parse(xhr.responseText);
      if (res.success == 0) {
        alert(res.mesg);
      } else {
        //登入成功

        //輸入該跳轉頁面的網址
        window.location.href='indexF.php';
        // alert(res.mesg);
      }
    } else {
      alert(xhr.status);
    }
  };

  xhr.open("post", "php/ajaxLogin.php", true);
  xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
  var data_info = `account=${$id("enter_account").value}&psw=${
    $id("enter_psw").value
  }`;
  xhr.send(data_info);
  //..........................................................
}

function init() {
  //檢查是否已登入, 如果已登入，取回登入者的資料
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.responseText != "notLogin") {
      alert("已登入:" + xhr.responseText);
    }
  }
  
  url = "php/getLoginInfo.php"

  xhr.open("get", url, true);
  xhr.send(null);

  $id("login_btn").onclick = loginForm;

  // $id("register_btn").onclick = registerForm;
} //window.onload

window.onload = init;
