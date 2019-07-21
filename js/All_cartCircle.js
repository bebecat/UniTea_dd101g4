window.onload = function() {

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
