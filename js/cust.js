window.addEventListener("load", function() {
    //幫餐籃取名
    let basketName = document.getElementById("import_name");
    // console.log(basketName.value);
    $("#check_name").click(function() {
        $("#set_basket_name").text(basketName.value);
        basketName.value = "";
        $("#cust_basket_name").css("display", "none");
    });

    //          價錢變化
    // var totalPrice = document.getElementById("total_price").innerHTML;
    // console.log("totalPrice", totalPrice);

    //點小圖換大圖片

    // var totalPrice = document.getElementById("total_price").innerHTML;
    $(".cust_basket_items img").click(function() {
        var N = $(this)
            .attr("src")
            .substr(30, 1);
        // console.log("N", N);
        var price = $(".basket_price")
            .eq(N - 1)
            .text();
        console.log("price", price);
        $("#big_picnic_basket_img").attr("src", "scss/img/Customization/basket0" + N + ".png");
        $(".big_picnic_basket_container").css(
            "-webkit-mask-image",
            "url(../scss/img/Customization/basket0" + N + "_mask.png)"
        );
        $("#total_price").text(price);
        $(".cust_basket_items").css("border", "8px solid #6d3812");
        $(".color_box").css("border", "5px solid #6d3812");
        $(this.parentNode.parentElement).css("border", "8px solid #f3971e");
    });
    $(".color_box").click(function() {
        var N = $("#big_picnic_basket_img")
            .attr("src")
            .substr(30, 1);
        // console.log("N", N);
        var C = $(this)
            .attr("class")
            .substr(16);
        // console.log(C);
        $("#big_picnic_basket_img").attr("src", "scss/img/Customization/basket0" + N + "-" + C + ".png");
        $(".color_box").css("border", "5px solid #6d3812");
        $(this).css("border", "5px solid #f3971e");
    });

    //上一步下一步 更換步驟流程松鼠
    $(".cust_choose_box:nth-of-type(1) .button_area_right input").click(function() {
        $(".cust_choose_box").css("display", "none");
        $(".cust_choose_box:nth-of-type(2)").css("display", "flex");
        $(".step1 img").attr("src", "scss/img/Customization/step_icon_1_3.png");
        $(".step2 img").attr("src", "scss/img/Customization/step_icon_2_2.png");
    });
    $(".cust_choose_box:nth-of-type(2) .button_area_left input").click(function() {
        $(".cust_choose_box").css("display", "none");
        $(".cust_choose_box:nth-of-type(1)").css("display", "flex");
        $(".step1 img").attr("src", "scss/img/Customization/step_icon_1_2.png");
        $(".step2 img").attr("src", "scss/img/Customization/step_icon_2_1.png");
        $(".step3 img").attr("src", "scss/img/Customization/step_icon_3_1.png");
    });
    $(".cust_choose_box:nth-of-type(2) .button_area_right input").click(function() {
        $(".cust_choose_box").css("display", "none");
        $(".cust_choose_box:nth-of-type(3)").css("display", "flex");
        $(".cust_decoration_controller").css("visibility", "visible	");
        $(".step2 img").attr("src", "scss/img/Customization/step_icon_2_3.png");
        $(".step3 img").attr("src", "scss/img/Customization/step_icon_3_2.png");
    });
    $(".cust_choose_box:nth-of-type(3) .button_area_left input").click(function() {
        $(".cust_choose_box").css("display", "none");
        $(".cust_choose_box:nth-of-type(2)").css("display", "flex");
        $(".cust_decoration_controller").css("visibility", "hidden");
        $(".step1 img").attr("src", "scss/img/Customization/step_icon_1_3.png");
        $(".step2 img").attr("src", "scss/img/Customization/step_icon_2_2.png");
        $(".step3 img").attr("src", "scss/img/Customization/step_icon_3_1.png");
    });

    //切換頁籤
    $(".cust_flower_tab").click(function() {
        $(".cust_bow_tab").css({ "background-position": "left bottom", transform: "scale(1)", zIndex: "1" });
        $(".cust_flower_tab").css({ "background-position": "left bottom", transform: "scale(1.05)", zIndex: "2" });
        $("#cust_decoration_bow").css("display", "none");
        $("#cust_decoration_flower").css("display", "flex");
        $("#cust_decoration_bow_mobile").css("display", "none");
        $("#cust_decoration_flower_mobile").css("display", "flex");
    });
    $(".cust_bow_tab").click(function() {
        $(".cust_bow_tab").css({ "background-position": "right bottom", transform: "scale(1.05)", zIndex: "2" });
        $(".cust_flower_tab").css({ "background-position": "right bottom", transform: "scale(1)", zIndex: "1" });
        $("#cust_decoration_bow").css("display", "flex");
        $("#cust_decoration_flower").css("display", "none");
        $("#cust_decoration_bow_mobile").css("display", "flex");
        $("#cust_decoration_flower_mobile").css("display", "none");
    });

    //放蝴蝶結&花花 上限4個 旋轉

    // $(".cust_decoration_items").click(function() {
    //     $("#big_picnic_basket_img").append($(".cust_decoration_img").clone());
    // });

    var decorationNumOfChoices = [];
    $(".cust_decoration_items img").click(function() {
        var decoLength = decorationNumOfChoices.length;
        var N = $(this).attr("alt");
        var C = $(this)
            .attr("src")
            .substr(23);
        var decoPrice = $(".decr_price")
            .eq(N - 1)
            .text();
        // console.log("decoPrice", decoPrice);
        if (decorationNumOfChoices.indexOf(N) == -1) {
            if (decoLength < 4) {
                decorationNumOfChoices.push(N);
                var decoInArr = decorationNumOfChoices.indexOf(N);
                var totalPrice = $("#total_price").text();
                $(".cust_decoration_items")
                    .eq(N - 1)
                    .css("backgroundColor", "pink");
                $(".cust_decoration_img").removeClass("selected");
                $(".cust_decoration_img")
                    .eq(decoInArr)
                    .attr({ src: "scss/img/Customization/" + C, alt: N })
                    .css({ right: "50%", left: "45%", top: "50%", transform: "rotate(0deg)scale(1)" })
                    .addClass("selected");
                $("#total_price").text(parseInt(totalPrice) + parseInt(decoPrice));
            }
        } else if (decorationNumOfChoices.indexOf(N) != -1) {
            if (decoLength < 4) {
                var decoInArr = decorationNumOfChoices.indexOf(N);
                var totalPrice = $("#total_price").text();
                decorationNumOfChoices.fill("", decoInArr, decoInArr + 1);
                $(".cust_decoration_items")
                    .eq(N - 1)
                    .css("backgroundColor", "white");
                $(".cust_decoration_img")
                    .eq(decoInArr)
                    .attr("src", "")
                    .css({ display: "none", transform: "rotate(0deg)scale(1)" });
                $("#total_price").text(parseInt(totalPrice) - parseInt(decoPrice));
            }
        }
        if (decoLength == 4) {
            if (decorationNumOfChoices.indexOf(N) != -1) {
                var decoKeys = decorationNumOfChoices.indexOf(N);
                var totalPrice = $("#total_price").text();
                decorationNumOfChoices.fill("", decoKeys, decoKeys + 1);
                $(".cust_decoration_items")
                    .eq(N - 1)
                    .css("backgroundColor", "white");
                $(".cust_decoration_img")
                    .eq(decoKeys)
                    .attr("src", "")
                    .css({ right: "50%", left: "45%", top: "50%", transform: "rotate(0deg)scale(1)", display: "none" });
                $("#total_price").text(parseInt(totalPrice) - parseInt(decoPrice));
            } else if (decorationNumOfChoices.indexOf(N) == -1) {
                if (decorationNumOfChoices.indexOf("") != -1) {
                    var decoKeys = decorationNumOfChoices.indexOf("");
                    var totalPrice = $("#total_price").text();
                    decorationNumOfChoices.fill(N, decoKeys, decoKeys + 1);
                    $(".cust_decoration_items")
                        .eq(N - 1)
                        .css("backgroundColor", "pink");
                    $(".cust_decoration_img").removeClass("selected");
                    $(".cust_decoration_img")
                        .eq(decoKeys)
                        .attr({ src: "scss/img/Customization/" + C, alt: N })
                        .css("display", "block")
                        .addClass("selected");
                    $("#total_price").text(parseInt(totalPrice) + parseInt(decoPrice));
                }
            }
        }
    });

    $(".cust_decoration_img").mouseenter(function() {
        $(".cust_decoration_img").draggable({ containment: ".big_picnic_basket_container", scroll: true });
    });

    $(".cust_decoration_img").click(function() {
        $(".cust_decoration_img").removeClass("selected");
        $(this).addClass("selected");
        var N = $(".cust_decoration_img.selected").attr("alt");
        var newTransform = $(".cust_decoration_img.selected").attr("style");
        var arr = newTransform.split(" ");
        var rotate = parseInt(arr[7].replace("rotate(", "").replace("deg)", ""));
        var zoom = parseFloat(arr[8].replace("scale(", "").replace(")", ""));
        var totalPrice = $("#total_price").text();
        var decoPrice = $(".decr_price")
            .eq(N - 1)
            .text();
        $(".ctrl_btns")
            .eq(0)
            .click(function() {
                zoom += 0.1;
                $(".cust_decoration_img.selected").css("transform", "rotate(" + rotate + "deg)scale(" + zoom + ")");
            });
        $(".ctrl_btns")
            .eq(1)
            .click(function() {
                zoom -= 0.1;
                $(".cust_decoration_img.selected").css("transform", "rotate(" + rotate + "deg)scale(" + zoom + ")");
            });
        $(".ctrl_btns")
            .eq(2)
            .click(function() {
                rotate -= 10;
                $(".cust_decoration_img.selected").css("transform", "rotate(" + rotate + "deg)scale(" + zoom + ")");
            });
        $(".ctrl_btns")
            .eq(3)
            .click(function() {
                rotate += 10;
                $(".cust_decoration_img.selected").css("transform", "rotate(" + rotate + "deg)scale(" + zoom + ")");
            });
        $(".ctrl_btns")
            .eq(4)
            .click(function() {
                var N = $(".cust_decoration_img.selected").attr("alt");
                var decoKeys = decorationNumOfChoices.indexOf(N);
                decorationNumOfChoices.fill("", decoKeys, decoKeys + 1);
                $(".cust_decoration_img.selected")
                    .css("transform", "rotate(0deg)scale(1)")
                    .attr("src", "")
                    .css("display", "none");
                $(".cust_decoration_items")
                    .eq(N - 1)
                    .css("backgroundColor", "white");
                $("#total_price").text(parseInt(totalPrice) - parseInt(decoPrice));
                rotate = 0;
                zoom = 1;
                $(".cust_decoration_img.selected").removeClass("selected");
            });
    });
    $("#big_picnic_basket_container").click(function() {
        $(".cust_decoration_img").removeClass("selected");
    });
    //移動裝飾物件

    //          客製商品截圖
    var finishButton = document.getElementById("canvasGo");
    finishButton.addEventListener("mousedown", docanvas, false);
    finishButton.addEventListener("click", saveImage, false);

    //          選取遮罩
    $(".cust_basket_items img").click(function() {
        var N = $(this)
            .attr("src")
            .substr(30, 1);
        svg = N - 1;
        console.log("svg", svg);
    });

    function docanvas() {
        //先跟HTML做關聯性
        //開始畫canvas
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");
        //遮罩
        console.log("canvasSvg", svg);
        var svgStr1 = new XMLSerializer().serializeToString(document.getElementById("svg" + svg));
        var canvasBlock = new fabric.Canvas("canvas");
        var path = fabric.loadSVGFromString(svgStr1, function(objects, options) {
            var obj = fabric.util.groupSVGElements(objects, options);
            canvasBlock.add(obj).renderAll();
        });

        $(".upper-canvas").css("display", "none");
        $(".canvas-container").css("display", "none");
        var bigBasket = new Image(); //這是餐籃
        var custDeco1 = new Image(); //裝飾品1~4個
        var custDeco2 = new Image();
        var custDeco3 = new Image();
        var custDeco4 = new Image();

        //          引用籃子的src
        bigBasket.src = document.getElementById("big_picnic_basket_img").src;
        //          4張圖的src
        custDeco1.src = document.getElementById("cust_decoration_img1").src;
        custDeco2.src = document.getElementById("cust_decoration_img2").src;
        custDeco3.src = document.getElementById("cust_decoration_img3").src;
        custDeco4.src = document.getElementById("cust_decoration_img4").src;

        //          宣告要被參考的區域
        var ah = document.getElementById("big_picnic_basket_container").offsetHeight;
        var aw = document.getElementById("big_picnic_basket_container").offsetWidth;

        //          抓取每張照片的外框大小
        //第一張圖
        var eh = document.getElementById("cust_decoration_img1").offsetHeight;
        var ew = document.getElementById("cust_decoration_img1").offsetWidth;
        //第二張圖
        var fh = document.getElementById("cust_decoration_img2").offsetHeight;
        var fw = document.getElementById("cust_decoration_img2").offsetWidth;
        //第三張圖
        var gh = document.getElementById("cust_decoration_img3").offsetHeight;
        var gw = document.getElementById("cust_decoration_img3").offsetWidth;
        //第四張圖
        var hh = document.getElementById("cust_decoration_img4").offsetHeight;
        var hw = document.getElementById("cust_decoration_img4").offsetWidth;

        //          設定角度變數

        //          抓取各圖片角度及大小

        var newTransform1 = $("#cust_decoration_img1").attr("style");
        var arr1 = newTransform1.split(" ");
        var rotY1 = parseInt(arr1[7].replace("rotate(", "").replace("deg)", ""));
        var sclY1 = parseFloat(arr1[8].replace("scale(", "").replace(")", ""));
        var newTransform2 = $("#cust_decoration_img2").attr("style");
        var arr2 = newTransform2.split(" ");
        var rotY2 = parseInt(arr2[7].replace("rotate(", "").replace("deg)", ""));
        var sclY2 = parseFloat(arr2[8].replace("scale(", "").replace(")", ""));
        var newTransform3 = $("#cust_decoration_img3").attr("style");
        var arr3 = newTransform3.split(" ");
        var rotY3 = parseInt(arr3[7].replace("rotate(", "").replace("deg)", ""));
        var sclY3 = parseFloat(arr3[8].replace("scale(", "").replace(")", ""));
        var newTransform4 = $("#cust_decoration_img4").attr("style");
        var arr4 = newTransform4.split(" ");
        var rotY4 = parseInt(arr4[7].replace("rotate(", "").replace("deg)", ""));
        var sclY4 = parseFloat(arr4[8].replace("scale(", "").replace(")", ""));

        //第一張圖
        sec = sclY1;
        rec = rotY1;
        const eangle = (rec * Math.PI) / 180;
        //第二張圖
        sfc = sclY2;
        rfc = rotY2;
        const fangle = (rfc * Math.PI) / 180;
        //第三張圖
        sgc = sclY3;
        rgc = rotY3;
        const gangle = (rgc * Math.PI) / 180;
        //第四張圖
        shc = sclY4;
        rhc = rotY4;
        const hangle = (rhc * Math.PI) / 180;

        //第一張圖
        var ceh = (eh / ah) * 525 * sec;
        var cew = (ew / aw) * 525 * sec;
        //第二章圖
        var cfh = (fh / ah) * 525 * sfc;
        var cfw = (fw / aw) * 525 * sfc;
        //第三張圖
        var cgh = (gh / ah) * 525 * sgc;
        var cgw = (gw / aw) * 525 * sgc;
        //第四張圖
        var chh = (hh / ah) * 525 * shc;
        var chw = (hw / aw) * 525 * shc;

        //第一張圖
        var et = document.querySelector("#cust_decoration_img1").offsetTop;
        var el = document.querySelector("#cust_decoration_img1").offsetLeft;
        //第二張圖
        var ft = document.querySelector("#cust_decoration_img2").offsetTop;
        var fl = document.querySelector("#cust_decoration_img2").offsetLeft;
        //第三張圖
        var gt = document.querySelector("#cust_decoration_img3").offsetTop;
        var gl = document.querySelector("#cust_decoration_img3").offsetLeft;
        //第四張圖
        var ht = document.querySelector("#cust_decoration_img4").offsetTop;
        var hl = document.querySelector("#cust_decoration_img4").offsetLeft;

        //第一張圖
        var cet = (et + eh / 2) * (525 / ah) - ceh / 2;
        var cel = (el + ew / 2) * (525 / aw) - cew / 2;
        //第二張圖
        var cft = (ft + fh / 2) * (525 / ah) - cfh / 2;
        var cfl = (fl + fw / 2) * (525 / aw) - cfw / 2;
        //第三張圖
        var cgt = (gt + gh / 2) * (525 / ah) - cgh / 2;
        var cgl = (gl + gw / 2) * (525 / aw) - cgw / 2;
        //第四張圖
        var cht = (ht + hh / 2) * (525 / ah) - chh / 2;
        var chl = (hl + hw / 2) * (525 / aw) - chw / 2;

        //第一張圖
        custDeco1.addEventListener("load", contextCanvas);
        custDeco2.addEventListener("load", contextCanvas);
        custDeco3.addEventListener("load", contextCanvas);
        custDeco4.addEventListener("load", contextCanvas);

        // contextCanvas();

        function contextCanvas() {
            //先畫籃子
            ctx.clip();
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.drawImage(bigBasket, 0, 0, canvas.width, canvas.height);
            //畫第一張圖
            ctx.translate(cel + cew / 2, cet + ceh / 2);
            ctx.rotate(eangle);
            ctx.drawImage(custDeco1, -cew / 2, -ceh / 2, cew, ceh);
            ctx.rotate(-eangle);
            ctx.translate(-(cel + cew / 2), -(cet + ceh / 2));
            //畫第二張圖
            ctx.translate(cfl + cfw / 2, cft + cfh / 2);
            ctx.rotate(fangle);
            ctx.drawImage(custDeco2, -cfw / 2, -cfh / 2, cfw, cfh);
            ctx.rotate(-fangle);
            ctx.translate(-(cfl + cfw / 2), -(cft + cfh / 2));
            //畫第三張圖
            ctx.translate(cgl + cgw / 2, cgt + cgh / 2);
            ctx.rotate(gangle);
            ctx.drawImage(custDeco3, -cgw / 2, -cgh / 2, cgw, cgh);
            ctx.rotate(-gangle);
            ctx.translate(-(cgl + cgw / 2), -(cgt + cgh / 2));
            //畫第四張圖
            ctx.translate(chl + chw / 2, cht + chh / 2);
            ctx.rotate(hangle);
            ctx.drawImage(custDeco4, -chw / 2, -chh / 2, chw, chh);
            ctx.rotate(-hangle);
            ctx.translate(-(chl + chw / 2), -(cht + chh / 2));
            ctx.clip();
        }
    }

    //          saveImg
    function saveImage() {
        var canvas = document.getElementById("canvas");
        var dataURL = canvas.toDataURL("image/png");
        var custName = document.getElementById("set_basket_name").innerText;
        // console.log("custName", custName);
        var custPrice = document.getElementById("total_price").innerText;
        // console.log("custPrice", custPrice);
        document.getElementById("hidden_data").value = dataURL;
        document.getElementById("cust_name_data").value = custName;
        document.getElementById("cust_price_data").value = custPrice;
        var formData = new FormData(document.getElementById("form1"));
        var xhr = new XMLHttpRequest();
        xhr.onload = function() {
            if (xhr.status == 200) {
                var res = JSON.parse(xhr.responseText);
                if (res.success == 0) {
                    alert("請登入會員");
                    showLoginForm();
                } else {
                    alert("Succesfully uploaded");
                    // console.log(xhr.responseText);
                    window.location.href = "cust_finish.php";
                }
            } else {
                alert(xhr.status);
            }
        };
        xhr.open("POST", "canvas_load_save.php", true);
        xhr.send(formData);
    }
});
