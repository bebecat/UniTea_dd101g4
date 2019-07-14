// console.log("start");
$(".parallax_3d").on("mousemove", function(e) {
  $this = $(this);

  // Get move position relative to the container
  var width = $(this).width();
  var height = $(this).height();
  var offset = $this.offset();
  var x = e.pageX - offset.left;
  var y = e.pageY - offset.top;

  // pivot point from center
  x = x - width / 2;
  y = y - height / 2;

  // Depth higher num == lower depth
  x = x / 30;
  y = y / 30;

  // 動圖片
  $(this)
    .find(".parallax_3d_inner")
    .css(
      "transform",
      "translate3d(" +
        x +
        "px," +
        y +
        "px,0) rotateY(" +
        x +
        "deg)  rotateX(" +
        -y +
        "deg"
    );
});

//視差

//防止手機動
//       var navbar=document.getElementById("header");
// navbar.addEventListener('touchmove',function(e){e.preventDefault();
// })

// const concertBg = document.querySelector(".itemShow");
// console.log(concertBg);
// console.log(concertBg.style.backgroundPositionY);
// window.addEventListener("scroll", () => {
//   let offset = window.pageYOffset;
//   concertBg.style.backgroundPositionY = offset * 0.09 + "px";
//   console.log(concertBg.style.backgroundPositionY);
// });

var controller = new ScrollMagic.Controller();
var tl = new TimelineMax({
  // repeat: 10,
  yoyo: true
});

tl.to(".fly_animal", 3, {
  x: -500,
  y: 200
})
  .to(".fly_animal", 8, {
    x: -1000,
    y: 300
  })
  .to(".fly_animal", 10, {
    x: "10%",
    y: "480%"
  });

var secen_01 = new ScrollMagic.Scene({
  triggerElement: "#keypoint01", //觸發點
  duration: 1000, //距離
  reverse: true //動畫執行
  // triggerHook: 0 //觸發參考點
  // offset: 200 //偏移量
})
  .setTween(tl) //tween 動畫
  //.addIndicators() //觸發指標
  .addTo(controller); //回到場景

//butterfly
var controller = new ScrollMagic.Controller();
var t2 = new TimelineMax({
  // repeat: 10,
  yoyo: true
});

t2.to(".butterfly_bg", 10, {
  x: 0,
  y: 250
});

var secen_02 = new ScrollMagic.Scene({
  triggerElement: "#keypoint02", //觸發點
  duration: 900, //距離
  reverse: true, //動畫執行
  triggerHook: 0 //觸發參考點
  // offset: 200 //偏移量
})
  .setTween(t2) //tween 動畫
  //.addIndicators() //觸發指標
  .addTo(controller); //回到場景

//裝飾
$(document).ready(function() {
  $(".pic_dl").click(function() {
    $(".dl").css("opacity", 1);
  });
  $(".pic_dr").click(function() {
    $(".dr").css("opacity", 1);
  });
  $(".pic_dl").click(function() {
    $(".pic_dl").css("opacity", 0);
  });
  $(".pic_dr").click(function() {
    $(".pic_dr").css("opacity", 0);
  });
  //恢復
  $(".dl").click(function() {
    $(".dl").css("opacity", 0);
  });
  $(".dr").click(function() {
    $(".dr").css("opacity", 0);
  });
  $(".dl").click(function() {
    $(".pic_dl").css("opacity", 1);
  });
  $(".dr").click(function() {
    $(".pic_dr").css("opacity", 1);
  });
});

// $(document).ready(function() {
//   let  t=$("#qty")
//   $(".qty_minus").click(function() {
//     t.val(Math.abs(parseInt(t.val())) - 1);
//     if (parseInt(t.val()) = 1) {
//       $(".qty_minus").attr("disabled", true);
//     }
//   });
//   $(".qty_plus").click(function() {
//     t.val(Math.abs(parseInt(t.val())) + 1);
//     if (parseInt(t.val()) != 1) {
//       $(".qty_minus").attr("disabled", false);
//     }
//   });
// });

//按鈕
function updateAmount(e) {
  let amountObj, amount;
  if (e.target.value == "-") {
    amountObj = e.target.nextElementSibling;
    amount = parseInt(amountObj.innerText);
    amount = amount >= 1 ? amount - 1 : amount;
  } else {
    //+
    amountObj = e.target.previousElementSibling;
    amount = parseInt(amountObj.innerText) + 1;
  }
  amountObj.innerText = amount;
}

window.addEventListener("load", function() {
  let decs = document.getElementsByClassName("qty_minus");
  let incs = document.getElementsByClassName("qty_plus");
  for (let i = 0; i < decs.length; i++) {
    decs[i].onclick = updateAmount;
    incs[i].onclick = updateAmount;
  }
});

// //設定session及count
// function init() {
//   var storage = localStorage;
//   var storageItemList = storage.getItem("addItemToCart");
//   if (storage["addItemToCart"] == null) {
//     storage["addItemToCart"] = "";
//   }

//   var list = document.querySelectorAll(".btn_submit_box");
//   console.log(list);
//   for (var i = 0; i < list.length; i++) {
//     list[i].addEventListener("click", function() {
//       var pdInfo = this.children[0].value;
//       console.log(this.id);
//       addItem(this.id, pdInfo); //key，value
//       // console.log(this.id);
//       // 選到的那個東西的id
//     });
//   }
// }
// function addItem(itemId, itemValue) {
//   var storage = localStorage;
//   var cartCount = $("#cart_count"); //抓到nav購物車的小數字
//   var cartCircle = $("#cart_circle");
//   var storageItemList = storage.getItem("addItemList");

//   //loading時就先判斷購物車是否有東西
//   if (storage.getItem("addItemList")) {
//     //如果addItemList裡面有東西
//     var stArray = storageItemList.split(",");
//     var starrylength = stArray.length - 1;
//     //扣掉陣列最後一個空字串
//     //若購物車裡有商品，一開始就顯示商品數量
//     if (starrylength >= 1) {
//       cartCircle.attr("style", "visibility:visible"); //小數字顯現
//       cartCount.text(starrylength);
//     }
//   }

//   if (storage[itemId]) {
//     // showLoginAlert(loginAlert);
//     alert("商品已在購物車當中");
//   } else {
//     storage[itemId] = itemValue;
//     storage["addItemList"] += itemId + ", ";
//     //nav的購物車圖示
//     if (starrylength == undefined) {
//       starrylength = 0;
//     }
//     cartCircle.attr("style", "visibility:visible");
//     //showCount
//     var actual = starrylength + 1;

//     cartCount.text(actual);
//     // cartCircle.style.transform="scale(1.2)";
//   }
// }
// window.addEventListener("load", init);

//飄去購物車
const pdItem = $(".card_content .pic img");
const cart = $(".cart");
const pdBtns = $(".btn_submit_box");
// console.log(pdBtns);
// console.log(cart);
// console.log(pdItem);

pdBtns.click(function(e) {
  e.preventDefault();

  const thisImg = $(this)
    .parent()
    .parent()
    .parent()
    .find("img");
  // console.log(thisImg);
  const pdW = thisImg.width();
  const pdH = thisImg.height();
  const pdO = thisImg.offset();
  const pdL = pdO.left;
  const pdT = pdO.top - window.scrollY;
  const pdSrc = thisImg.attr("src");
  // console.log("pdSrc");
  const cartW = cart.width();
  const cartH = cart.height();
  const cartO = cart.offset();
  const cartL = cartO.left;
  const cartT = cartO.top - window.scrollY;

  // 加一 ele在隨便一 parent
  // position 設為 fixed
  const itemAnima = `<div 
          class="itemAnima"
          style="
              position: fixed; 
              top: ${pdT}px; 
              left: ${pdL}px; 
              transition: 1s; 
              width:15px;
              height:15px;
              border-radius:50%;
              z-index:999;
              background-color:#d53e23";
           >`;
  $("nav").append(itemAnima);

  setTimeout(function() {
    $(".itemAnima").css({
      // width: `${cartW}px`,
      // height: `${cartH}px`,
      top: `${cartT}px`,
      left: `${cartL}px`
    });
  }, 100);
  setTimeout(function() {
    $(".itemAnima").remove();
  }, 1100);
});
// console.log("123");
//篩選
$(document).ready(function() {
  $(".all_filter").click(function(e) {
    e.preventDefault();
    $(".pd_card_content").css({ display: "block" });
  });
  $(".mat_filter").click(function(e) {
    e.preventDefault();
    $(".pd_card_content").css({ display: "none" });
    $(".mat").css({ display: "block" });
  });
  $(".box_filter").click(function(e) {
    e.preventDefault();
    $(".pd_card_content").css({ display: "none" });
    $(".box").css({ display: "block" });
  });
  $(".fork_filter").click(function(e) {
    e.preventDefault();
    $(".pd_card_content").css({ display: "none" });
    $(".fork").css({ display: "block" });
  });
});

//seemore
// $("#toggle_see_more").click(function(){
//   var seeMore=$("#toggle_see_more").text();
//   if(seeMore == "查看更多")
//   {
//     $("#toggle_see_more").text("查看更多")
//     $(".see_more").slideDown();
//   }else{
//     $("#toggle_see_more").text("收回查看")
//     $(".see_more").slideUp();
//   }
// });

var btns = document.getElementsByClassName("btn_submit_box");
// console.log("123");
for (var i = 0; i < btns.length; i++) {
  btns[i].onclick = function(e) {
    //找產品資訊
    var qty = parseInt(
      e.target.previousElementSibling.querySelector(".qty").innerText
    );
    var addbtn = e.target.querySelector(".add_to_cart").value;
    var pic = addbtn.split("|")[3];
    var name = addbtn.split("|")[2];
    var pdno = addbtn.split("|")[0];
    var price = addbtn.split("|")[1];
    console.log(pic);
    console.log(name);
    console.log(pdno);
    console.log(price);
    //找到後放入session
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      var cartCount = document.getElementById("cart_count");
      var cartCircle = document.getElementById("cart_circle");
      // console.log("33333");
      if (xhr.readyState == 4) {
        // console.log("44444");
        if (xhr.status == 200) {
          // console.log("5555");
          console.log(xhr.responseText);
          res = JSON.parse(xhr.responseText);
          console.log(res);
          // if (res.num != 0) {
          //   cartCircle.setAttribute("style", "visibility:visible");
          //   cartCount.innerText = res.num;
          //   if (res.exist == "y") {
          //     alert("商品已在購物車");
          //   }
          // }
        } else {
          alert(xhr.status);
        }
      }
    };
    let url = `cart_update.php?pno=${pdno}&num=${qty}&name=${name}&price=${price}&pic=${pic}`;
    xhr.open("get", url, true);
    xhr.send(null);
  };
}
