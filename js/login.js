function $id(id) {
    return document.getElementById(id);
}

//       開啟燈箱
function showLoginForm() {
    var lightBox = $id("light_box");
    var memberName = document.getElementsByClassName("hi")[0].innerHTML;

    if (memberName == "登入") {
        lightBox.style.display = "block";
    } else {
        var xhr = new XMLHttpRequest();
        xhr.onload = function() {
            if (xhr.status == 200) {
                memberName = "";
            } else {
                alert(xhr.status);
            }
        };
        xhr.open("get", "ajaxLogout.php", true);
        xhr.send(null);
        window.alert("帳號已登出");
        document.getElementsByClassName("hi")[0].innerHTML = "登入";
        // window.location.reload();
    }
    // console.log("memberName", memberName);
}

//       關閉燈箱，並清除表單資料
function closedLoginForm() {
    var lightBox = $id("light_box");
    lightBox.style.display = "none";
    $id("enter_account").value = "";
    $id("enter_psw").value = "";
}

//       傳送登入資料到server端

function sendForm() {
    var xhr = new XMLHttpRequest();

    xhr.onload = function() {
        if (xhr.status == 200) {
            var res = JSON.parse(xhr.responseText);
            if (res.success == 0) {
                alert(res.mesg);
            } else {
                // alert(res.mesg);

                $id("enter_account").value = "";
                $id("enter_psw").value = "";
                $id("light_box").style.display = "none";
                document.getElementsByClassName("hi")[0].innerHTML = res.mesg;

                // $id("memberLogin").firstElementChild.innerHTML = "";
                // document.getElementsByClassName("hi")[0].innerHTML = xhr.responseText;
                // window.location.reload();
                // window.history.back();
                // console.log(res.memName);
            }
        } else {
            alert(xhr.status);
        }
    };

    xhr.open("post", "ajaxLogin.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    var dataInfo = `account=${$id("enter_account").value}&psw=${$id("enter_psw").value}`;
    xhr.send(dataInfo);
}
//          確認帳號有無被使用
// function checkAccount() {
//     var xhr = new XMLHttpRequest();

//     xhr.onload = function() {
//         if (xhr.status == 200) {
//             var res = JSON.parse(xhr.responseText);
//             if (res.success == 1) {
//                 $id("checkAccMsg").innerText = res.mesg;
//             } else {
//                 $id("checkAccMsg").innerText = res.mesg;
//             }
//         } else {
//             alert(xhr.status);
//         }
//     };

//     xhr.open("post", "checkAccount.php", true);
//     xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     var dataInfo = `account=${$id("register_account").value}`;
//     xhr.send(dataInfo);
// }
//              註冊會員資料
function registerForm() {
    var account = $id("register_account").value;
    var pwd = $id("register_psw").value;
    var pwd_again = $id("check_register_psw").value;
    var name = $id("register_name").value;
    var tel = $id("register_phone").value;
    var address = $id("register_address").value;
    // var registerValue = document.getElementsByClassName("register_input");
    // console.log("address", address);

    // var r_form = document.getElementById("registerForm");
    // for (i = 0; i < r_form.length; i++) {
    //     if (r_form.elements[i].value == "") {
    //         alert(r_form.elements[i].title + "不能空白");
    //         return;
    //     }
    // }

    if (pwd == pwd_again) {
        var xhr = new XMLHttpRequest();
        xhr.onload = function() {
            if (xhr.status == 200) {
                var res = JSON.parse(xhr.responseText);
                // console.log("res", res);
                if (res.success == 0) {
                    alert(res.mesg);
                    // console.log("res.msg", res.mesg);
                } else {
                    //註冊成功
                    // document.location.href = "member.html";
                    // window.history.back();
                    // $id("memberLogin").firstElementChild.innerHTML = xhr.responseText;
                    $id("enter_account").value = "";
                    $id("enter_psw").value = "";
                    $id("light_box").style.display = "none";
                    window.alert(res.mesg);
                    window.location.reload();
                }
            } else {
                alert(xhr.status);
            }
        };

        xhr.open("post", "doRegister.php", true);
        xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
        var data_info = `account=${$id("register_account").value}&psw=${$id("register_psw").value}&name=${
            $id("register_name").value
        }&tel=${$id("register_phone").value}&address=${$id("register_address").value}`;
        xhr.send(data_info);
    } else {
        alert("請確認密碼");
    }
}

function init() {
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
        getCart();
        if (xhr.responseText != "notLogin") {
            //已登入
            var reText = xhr.responseText;
            // console.log("reText", reText);
            // console.log(aa);
            document.getElementsByClassName("hi")[0].innerHTML = reText;
            // console.log("memNo", 9 + memName[1]);
        } else {
            document.getElementsByClassName("hi")[0].innerHTML = "登入";
        }
    };
    xhr.open("get", "getLoginInfo.php", true);
    xhr.send(null);

    //===設定spanLogin.onclick 事件處理程序是 showLoginForm

    // $id("register_account").onblur = checkAccount;
    $id("memberLogin").onclick = showLoginForm;
    $id("closed_button").onclick = closedLoginForm;
    $id("login_btn").onclick = sendForm;
    $id("register_btn").onclick = registerForm;

    //===設定btnLogin.onclick 事件處理程序是 sendForm
    // $id("btnLogin").onclick = sendForm;

    //===設定btnLoginCancel.onclick 事件處理程序是 cancelLogin
    // $id("btnLoginCancel").onclick = cancelLogin;
} //window.onload
window.onload = init;


function getCart() {

    let xhr = new XMLHttpRequest();

    xhr.onload = function() {
      if (xhr.status == 200) {
        cart1 = JSON.parse(xhr.responseText);
        console.log(cart1);
        var count = Object.keys(cart1).length;
        console.log(count); //紅點數量
        var cartCount = document.getElementById("cart_count");
        var cartCircle = document.getElementById("cart_circle");
        if (count != 0) {
          cartCircle.setAttribute("style", "visibility:visible");
          cartCount.innerText = count;
        }
      } else {
        alert(xhr.status);
      }
    };
    let url = "php/getCartT.php";
    xhr.open("get", url, true);
    xhr.send(null);
  };
