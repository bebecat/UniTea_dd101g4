function $id(id) {
  return document.getElementById(id);
}
function modelchange1() {
  $id("customized_item").style.display = "flex";
  $id("list_item").style.display = "none";
  $id("compete_item").style.display = "none";
  $id("activity_item").style.display = "none";
}
function modelchange2() {
  $id("customized_item").style.display = "none";
  $id("list_item").style.display = "flex";
  $id("compete_item").style.display = "none";
  $id("activity_item").style.display = "none";
}
function modelchange3() {
  $id("customized_item").style.display = "none";
  $id("list_item").style.display = "none";
  $id("compete_item").style.display = "flex";
  $id("activity_item").style.display = "none";
}
function modelchange4() {
  $id("customized_item").style.display = "none";
  $id("list_item").style.display = "none";
  $id("compete_item").style.display = "none";
  $id("activity_item").style.display = "flex";
}

function init() {
  $id("icon_member").addEventListener("click", memberIcon, false);
  $id("icon_cart").addEventListener("click", cartIcon, false);
  $id("customized").addEventListener("click", modelchange1, false);
  $id("list").addEventListener("click", modelchange2, false);
  $id("compete").addEventListener("click", modelchange3, false);
  $id("activity").addEventListener("click", modelchange4, false);
  $id("save_member").addEventListener("click", updateMember, false);
  getMember();
}
window.addEventListener("load", init, false);

function showMember(jsonStr) {
  let memRow = JSON.parse(jsonStr); //翻譯成json編碼
  let html;
  if (memRow.success == 1) {
    if (memRow.res.memPhoto != "")
      document.getElementById("imgPreview").src = memRow.res.memPhoto;
    document.getElementById("inaccount_memId").innerHTML = memRow.res.memId;
    document.getElementById("inaccount_memName").value = memRow.res.memName;
    document.getElementById("inaccount_memAccount").innerHTML =
      memRow.res.account;
    document.getElementById("inaccount_memPwd").value = memRow.res.password;
    document.getElementById("inaccount_memSex").value =
      memRow.res.gender == 0 ? "女" : "男";
    document.getElementById("inaccount_memTel").value = memRow.res.tel;
    document.getElementById("inaccount_memAdd").value = memRow.res.address;
    document.getElementById("inaccount_memPoint").innerHTML =
      memRow.res.memPoints;
  } else {
    alert("查無此會員");
  }
}

function getMember() {
  // 發起一個 API 要求
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.status == 200) {
      //modify here
      showMember(xhr.responseText);
      console.log(xhr.responseText);
    } else {
      alert(xhr.status);
    }
  };

  var url = "getMemberData.php";
  xhr.open("Get", url, true);
  xhr.send(null);
}

function updateMember() {
  // 發起一個 API 要求
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.status == 200) {
      let result = JSON.parse(xhr.responseText);
      if (result.success == 1) {
        alert("更新成功");
      } else {
        alert(result.mesg);
      }
    } else {
      alert(xhr.status);
    }
  };

  var send_name = document.getElementById("inaccount_memName").value;
  var send_pwd = document.getElementById("inaccount_memPwd").value;
  var send_sex =
    document.getElementById("inaccount_memSex").value == "女" ? 0 : 1;
  var send_tel = document.getElementById("inaccount_memTel").value;
  var send_addr = document.getElementById("inaccount_memAdd").value;
  var formData =
    "m_name=" +
    send_name +
    "&pwd=" +
    send_pwd +
    "&sex=" +
    send_sex +
    "&tel=" +
    send_tel +
    "&addr=" +
    send_addr;

  var url = "updateMemberData.php";
  xhr.open("Post", url);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(formData);
}

function memberIcon() {
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.status == 200) {
      document.location.href = "login.php";
    } else {
      alert(xhr.status);
    }
  };

  var url = "doLogout.php";
  xhr.open("Get", url, true);
  xhr.send(null);
  // iconJudge("member.html");
}

function cartIcon() {
  iconJudge("cart.html");
}

function iconJudge(changeUrl) {
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (xhr.status == 200) {
      //modify here
      var result = JSON.parse(xhr.responseText);
      if (result.success == 1) {
        document.location.href = changeUrl;
      } else {
        document.location.href = "login.html";
      }
    } else {
      alert(xhr.status);
    }
  };

  var url = "getMemberData.php";
  xhr.open("Get", url, true);
  xhr.send(null);
}
