var cart1 = {};

function isCartEmpty() {
  if (JSON.stringify(cart1) == "{}") {
    return true;
    console.log("111");
  }
  return false;
  console.log("111");
}
//垃圾車
//找到整大包remove一個小包
//找到產品編號
//trash.php
//onload刪視覺跟改cart1
function getTrash(e) {
  // getCart();
  let itemWrap = document.getElementById("package"); //wrap
  let item = e.target.parentNode.parentNode.parentNode; //li
  let psn = e.target.previousElementSibling.innerText; //id
  console.log(psn);
  console.log(itemWrap);
  console.log(item);

  let xhr = new XMLHttpRequest();

  xhr.onload = function() {
    if (xhr.status == 200) {
      itemWrap.removeChild(item);
      document.getElementById("total").innerText = getTotal();
      if (document.getElementById("total").innerText == 0) {
        document.getElementById("next1").style.display = "none";
        document.getElementById("package").innerHTML =
          "<center style='padding:50px'>尚無購物資料</center>";
      }
      cart1 = JSON.parse(xhr.responseText);
      console.log(cart1);
      var count = Object.keys(cart1).length;
      console.log("-----", count); //紅點數量
      var cartCount = document.getElementById("cart_count");
      var cartCircle = document.getElementById("cart_circle");
      if (count > 0) {
        cartCircle.setAttribute("style", "visibility:visible");
        cartCount.innerText = count;
      } else {
        cartCircle.setAttribute("style", "visibility:hidden");
      }
    } else {
      alert(xhr.stauts);
    }
  };
  let url = `../php/trash.php?psn=${psn}`;
  xhr.open("get", url, true);
  xhr.send(null);
}
//出現尚無購物資料 及 圈圈沒變

var trash = document.getElementsByClassName("trash");
// console.log(trash.length);
console.log(trash);
for (i = 0; i < trash.length; i++) {
  trash[i].addEventListener("click", getTrash);
  console.log(trash);
}

//----------------數量改變時的事件處理器
function changeCart(e) {
  let xhr = new XMLHttpRequest();
  xhr.onchange = function(e) {
    cart1 = JSON.parse(xhr.responseText); //取回cart的最新狀況
    // console.log(cart1);
  };

  let url = "../php/cart-show-update.php";
  xhr.open("post", url, true);
  // let wow = e.target.form;
  let myForm = new FormData(e.target.form);
  // console.log(wow);
  xhr.send(myForm);
}

//.............取得購物車資料
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
      if (Object.keys(cart1).length != 0) {
        document.getElementById("show").innerHTML = "";
        document.getElementById("next1").style.display = "block";
      } else {
        document.getElementById("show").innerHTML =
          "<center style='padding:50px'>尚無購物資料</center>";
        document.getElementById("next1").style.display = "none";
      }
    } else {
      alert(xhr.status);
    }
  };
  let url = "../php/getCartT.php";
  xhr.open("get", url, true);
  xhr.send(null);
}
window.addEventListener("load", function() {
  getCart();
  console.log(cart1);
  console.log(Object.keys(cart1).length);

  // isCartEmpty();
  let btns = document.getElementsByClassName("btn_submit_box");
  for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", changeCart);
  }
  document.getElementsByClassName("btn_submit_box").onclick = function() {
    changeCart(e);
  };

  //----------------註冊+ , - 的事件處理器

  var qtyminus = document.getElementsByClassName("qty_minus"); // -
  for (var i = 0; i < qtyminus.length; i++) {
    qtyminus[i].onclick = function(e) {
      var qtyBox = e.target.nextElementSibling;
      console.log(e.target.nextElementSibling);
      var qty = parseInt(qtyBox.value);
      var price = qtyBox.parentNode.previousElementSibling.querySelector(
        ".price"
      ).innerText;
      // console.log(price);
      if (qty > 1) {
        qty--;
        // console.log(qty);
        qtyBox.value = qty;
        // console.log(qtyBox.value);
        let subtotalprice = price * qty;
        e.target.parentNode.nextElementSibling.querySelector(
          ".subtotal"
        ).innerText = subtotalprice;
        // console.log(subtotal);
        //.....
        changeCart(e);
        //  console.log( qtyBox.value);
        document.getElementById("total").innerText = getTotal();
      }
    };
  }

  var qtyplus = document.getElementsByClassName("qty_plus"); // +
  for (var i = 0; i < qtyplus.length; i++) {
    qtyplus[i].onclick = function(e) {
      var price = e.target.parentNode.previousElementSibling.querySelector(
        ".price"
      ).innerText;
      console.log(price);
      var qtyBox = e.target.previousElementSibling;
      console.log(e.target.previousElementSibling);
      var qty = parseInt(qtyBox.value);
      qty++;
      console.log(qty);
      qtyBox.value = qty;
      console.log(qtyBox.value);
      let subtotalprice = price * qty;
      e.target.parentNode.nextElementSibling.querySelector(
        ".subtotal"
      ).innerText = subtotalprice;
      changeCart(e);
      document.getElementById("total").innerText = getTotal();
    };
  }
  allPayment();
});

function getTotal() {
  let total = 0;
  let subtotals = document.getElementsByClassName("subtotal");
  // console.log("-----", subtotals.length);
  for (let i = 0; i < subtotals.length; i++) {
    total += parseInt(subtotals[i].innerText);
  }
  // console.log("...", total);
  return total;
  // console.log(document.getElementById("total").innerText);
}

// document.getElementById('next1').onclick=function(){
//   if(){

//   }else{

//   }
// }

//跳窗

// document.getElementById("next1").onclick = function() {
//   let memId_hide = document.getElementById("memId_hide").innerText;
//   console.log(memId_hide);
//   let xhr = new XMLHttpRequest();
//   xhr.onload = function() {
//     if (xhr.status == 200) {
//       var status = xhr.responseText;
//       console.log(status);
//       if (memId_hide == false) {
//         window.location.href = "login.php";
//       }
//     } else {
//       alert(xhr.status);
//     }
//   };
//   let url = "php/startToPay.php";
//   xhr.open("get", url, true);
//   xhr.send(null);
// };

///計算折扣
document.getElementById("use_point").onchange = function() {
  var use_point = document.getElementById("use_point");
  if (use_point.checked) {
    var point = document.getElementById("point").value;
    var total=document.getElementById("total").innerText;
    console.log(point);
    if(point > total){
      alert('折價券用太多了!請重新輸入');
      document.getElementById("point_discount").innerText = 0;
      use_point.checked = false;
    }else{
      document.getElementById("point_discount").innerText = point;
    }
  } else {
    document.getElementById("point_discount").innerText = 0;
  }
  allPayment();
};

///第二頁計算總價
function allPayment() {
  var total = document.getElementById("total").innerText;
  var point_discount = document.getElementById("point_discount").innerText;
  console.log(typeof parseInt(total));
  console.log(typeof parseInt(point_discount));
  var realP = Math.round(parseInt(point_discount) / 10);
  console.log(realP);
  document.getElementById("point_discount").innerText = realP;
  var allTotal = 0;
  allTotal = parseInt(total) - realP;
  document.getElementById("allTotal").innerText = allTotal;
}
//扣點數
var same_buyer = document.getElementById("same_buyer");
same_buyer.onchange = function() {
  if (same_buyer.checked) {
    var point = document.getElementById("point").value;
    var realP = Math.round(parseInt(point) / 10);
    console.log(realP);
    document.getElementById("point_discount").innerText = realP;
  } else {
    document.getElementById("point_discount").innerText = 0;
  }
  allPayment();
};
//send_address same with order person
var same_buyer = document.getElementById("same_buyer");
console.log(same_buyer);
same_buyer.onchange = function() {
  if (same_buyer.checked) {
    var order_name = document.getElementById("order_name").innerText;
    var order_tel = document.getElementById("order_tel").innerText;
    var order_address = document.getElementById("order_address").innerText;
    console.log(order_name);
    console.log(order_tel);
    console.log(order_address);
    document.getElementById("send_name").value = order_name;
    document.getElementById("send_tel").value = order_tel;
    document.getElementById("send_address").value = order_address;
  } else {
    document.getElementById("send_name").value = "";
    document.getElementById("send_tel").value = "";
    document.getElementById("send_address").value = "";
  }
};
//按鈕區

document.getElementById("go_contest").onclick = function() {
  location.href = "contest.php";
};
document.getElementById("cancel").onclick = function() {
  location.href = "cartT2_new.php";
};
document.getElementById("previous").onclick = function() {
  location.href = "cart.php";
};

///按下一步到資料確認跳窗
let confirm = document.getElementById("step_next");
confirm.onclick = function() {
  let order_name = document.getElementById("order_name").innerText;
  let order_tel = document.getElementById("order_tel").innerText;
  let order_address = document.getElementById("order_address").innerText;
  let sendN = document.getElementById("send_name").value;
  let sendT = document.getElementById("send_tel").value;
  let sendA = document.getElementById("send_address").value;
  document.getElementById("last_or_name").innerText = order_name;
  document.getElementById("last_or_tel").innerText = order_tel;
  document.getElementById("last_or_address").innerText = order_address;
  document.getElementById("last_se_name").innerText = sendN;
  document.getElementById("last_se_tel").innerText = sendT;
  document.getElementById("last_se_address").innerText = sendA;
  let allTotal = document.getElementById("allTotal").innerText;
  console.log(allTotal);
  document.getElementById("dealPrice").innerText = allTotal;

  if (sendN == "" || sendT == "" || sendA == "") {
    alert("收件人資料尚未填寫");
  } else {
    // console.log("123");
    document.getElementById("comfirm_box").style.display = "block";
  }
};

// /按下一步到存進資料庫及跳轉頁面
let confirmPay = document.getElementById("confirm_Pay");

confirmPay.onclick = function() {
  let xhr = new XMLHttpRequest();
  let sendN = document.getElementById("send_name").value;
  let sendTel = parseInt(document.getElementById("send_tel").value);
  let sendAddress = document.getElementById("send_address").value;
  let allTotal = document.getElementById("allTotal").innerText;
  console.log(sendN);
  console.log(typeof sendTel);
  console.log(sendAddress);
  xhr.onload = function(e) {
    document.getElementById("finish_lightBox").style.display = "block";
    document.getElementById("comfirm_box").style.display = "none";
    document.getElementById("order_no").innerText = xhr.responseText;
  };
  // let myForm = new FormData(e.taget.parentNode.parentNode);
  console.log();
  let url = `../php/cart-update-db.php?sendN=${sendN}&sendAddress=${sendAddress}&sendTel=${sendTel}&allTotal=${allTotal}`;
  xhr.open("get", url, true);
  xhr.send(null);
};
