window.addEventListener("load", function() {
    //幫餐籃取名
    let basketName = document.getElementById("import_name");
    console.log(basketName.value);
    $("#check_name").click(function() {
        $(".basket_name").text(basketName.value);
        basketName.value = "";
    });

    //點小圖換大圖片

    // $(".cust_basket_items").mouseover(function() {
    //     $(this).css("transition", "0.6s");
    //     $(this).css("border", "8px solid #f3971e");
    // });
    // $(".cust_basket_items").mouseout(function() {
    //     $(this).css("transition", "0.6s");
    //     $(this).css("border", "8px solid #6d3812");
    // });

    $(".cust_basket_items img").click(function() {
        var N = $(this)
            .attr("src")
            .substr(30, 1);
        console.log("N", N);
        $("#big_picnic_basket_img").attr("src", "scss/img/Customization/basket0" + N + ".png");
        $(".big_picnic_basket_container").css(
            "-webkit-mask-image",
            "url(scss/img/Customization/basket0" + N + "_mask.png)"
        );
        $(".cust_basket_items").css("border", "8px solid #6d3812");
        $(".color_box").css("border", "5px solid #6d3812");
        $(this.parentNode.parentElement).css("border", "8px solid #f3971e");

        $(".color_box").click(function() {
            var C = $(this)
                .attr("class")
                .substr(16);
            console.log(C);
            $("#big_picnic_basket_img").attr("src", "scss/img/Customization/basket0" + N + "-" + C + ".png");
            $(".color_box").css("border", "5px solid #6d3812");
            $(this).css("border", "5px solid #f3971e");
        });
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
    });
    $(".cust_bow_tab").click(function() {
        $(".cust_bow_tab").css({ "background-position": "right bottom", transform: "scale(1.05)", zIndex: "2" });
        $(".cust_flower_tab").css({ "background-position": "right bottom", transform: "scale(1)", zIndex: "1" });
        $("#cust_decoration_bow").css("display", "flex");
        $("#cust_decoration_flower").css("display", "none");
    });

    //放蝴蝶結&花花 上限4個

    var decorationNumOfChoices = [];
    var decoCount = 0;
    var decoNum = 0;
    $(".cust_decoration_items img").click(function() {
        var decoLength = decorationNumOfChoices.length;
        // console.log(decoLength);
        var N = $(this)
            .attr("src")
            .substr(26, 1);

        if (decorationNumOfChoices.indexOf(N) == -1) {
            var decoKeys = decorationNumOfChoices.indexOf(N);
            if (decoLength < 4) {
                decorationNumOfChoices.push(N);
                var b = decorationNumOfChoices.indexOf(N);
                console.log(b);

                $(".cust_decoration_items")
                    .eq(N - 1)
                    .css("backgroundColor", "pink");
                $(".cust_decoration_img")
                    .eq(decoCount)
                    .attr("src", "scss/img/Customization/Bow" + N + ".png")
                    .css({ right: "50%", left: "45%", top: "50%" });
                decoCount++;
            }
        } else if (decorationNumOfChoices.indexOf(N) != -1) {
            if (decoLength < 4) {
                // decoCount--;
                var decoKeys = decorationNumOfChoices.indexOf(N);
                console.log(decoKeys);
                $(".cust_decoration_items")
                    .eq(N - 1)
                    .css("backgroundColor", "white");
                $(".cust_decoration_img")
                    .eq(decoKeys)
                    .attr("src", "");
                decorationNumOfChoices.splice(decoKeys, 1); //沒加數量會全刪
            }
        }
        if (decoLength == 4) {
            var decoKeys = decorationNumOfChoices.indexOf(N);

            if (decorationNumOfChoices.indexOf(N) != -1) {
                decoCount--;

                var decoKeys = decorationNumOfChoices.indexOf(N);
                decorationNumOfChoices.splice(decoKeys, 1); //沒加數量會全刪
                $(".cust_decoration_items")
                    .eq(N - 1)
                    .css("backgroundColor", "white");
                $(".cust_decoration_img")
                    .eq(decoCount)
                    .attr("src", "");
            } else if (decorationNumOfChoices.indexOf(N) == -1) {
                decoNum++;
                if (decoNum == 1) {
                    window.alert("不能選超過四樣唷凸^___^凸");
                    decoNum = 0;
                }
            }
        }
    });

    //移動裝飾物件
    $(".cust_decoration_img").mouseenter(function() {
        $(".cust_decoration_img").draggable({ containment: ".big_picnic_basket_container", scroll: true });
    });

    //控制旋轉放大縮小

    // var ctrlBtns = this.document.getElementsByClassName("ctrl_btns");

    // ctrlBtns.forEach(elem => {
    //     elem.addEventListener("click", decorationCtrl);
    // });
    // function decorationCtrl(e) {
    // }

    $(".cust_decoration_img").click(function() {
        $(".cust_decoration_img").removeClass("selected");
        $(this).addClass("selected");

        $(".ctrl_btns").click(function() {
            var T = $(".cust_decoration_img").hasClass("selected");
            console.log(T);
            if (T == true) {
                $(".ctrl_btns")
                    .eq(0)
                    .click(function() {
                        if (T == true) {
                            $(this).css("transform", "scale(2)");
                        }
                    });
            }
        });
    });
});
