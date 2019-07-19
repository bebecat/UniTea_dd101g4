function $id(id) {
  return document.getElementById(id);
}

function loginForm() {
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.status == 200) {
      var res = JSON.parse(xhr.responseText);
      if (res.success == 0) {
        alert(res.mesg);
      } else {
        //登入成功
        document.location.href = "indexF.php";
      }
    } else {
      alert(xhr.status);
    }
  };

  xhr.open("post", "php/doLogin.php", true);
  xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
  var data_info = `account=${$id("enter_account").value}&psw=${
    $id("enter_psw").value
  }`;
  xhr.send(data_info);
}

function registerForm() {
  var account = $id("register_account").value;
  var pwd = $id("register_psw").value;
  var pwd_again = $id("check_register_psw").value;
  if (pwd == pwd_again) {
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
      if (xhr.status == 200) {
        var res = JSON.parse(xhr.responseText);
        if (res.success == 0) {
          alert(res.mesg);
        } else {
          //註冊成功
          document.location.href = "member.html";
        }
      } else {
        alert(xhr.status);
      }
    };

    xhr.open("post", "php/doRegister.php", true);
    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    var data_info = `account=${$id("register_account").value}&psw=${
      $id("register_psw").value
    }`;
    xhr.send(data_info);
  } else {
    alert("請確認密碼");
  }
}

function init() {
  // 檢查是否已登入, 如果已登入，取回登入者的資料
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.responseText != "notLogin") {
      document.location.href = " ";
    }
  };
  xhr.open("get", "php/getLoginInfo.php", true);
  xhr.send(null);

  $id("login_btn").onclick = loginForm;

  $id("register_btn").onclick = registerForm;
} //window.onload

window.onload = init;
