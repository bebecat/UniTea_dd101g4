
window.addEventListener("load",function(){
    document.getElementById("send").onclick = function(e){
        var mem_pic = document.getElementById("mem_pic");
        var mem_name = document.getElementById("mem_name");
        var comment = document.getElementById("comment");
        var send = document.getElementById("send");
        var template = document.querySelector(".comment_leave");
        var comment_box = document.getElementById("comment_box");
        /*接收*/
        var msg_pic = document.getElementById("msg_pic");
        var msg_name = document.getElementById("msg_name");
        var msg = document.getElementById("msg");
        var wrap = document.getElementById("comment_wrap");
        /*按下*/
        var templates = document.getElementsByClassName("comment_leave");
        if(msg.innerText==''){
            swal({
                text: "還沒輸入任何東西喔!",
                icon: "scss/img/angry_animal.png",
              });
        }else{
            msg.innerHTML = comment.value;
            new_msg = template.cloneNode(true);
                // new_msg.style.transition = "all 1s";
            new_msg.style.display = "";
                // new_msg.style.visibility = "visible";
            wrap.insertBefore(new_msg, template);
    
            let xhr = new XMLHttpRequest();
            var comment = document.getElementById("comment").value;
            xhr.onload=function(){
                if(xhr.status == 200){
                    // alert(xhr.responseText);
                }else{
                alert(xhr.status);
                }
            }
            url = "./php/get_msg.php";
            xhr.open("POST", url, true);
            // xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            let myForm = new FormData(e.target.form);
            xhr.send(myForm); 
            comment.value = "";
        }
    };

     // 檢舉按鈕 //
    $(".report").click(function(){
        $(this).next().fadeToggle(200);
    })
    // 點暴力語言檢舉 // 
    $(".violence").click(function(){
        swal({
            title: "確定送出檢舉嗎?",
            text: "一旦送出，此留言將會被審核",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("你已成功送出檢舉，鼠爺會修理他!", {
                icon: "scss/img/animal.png",
                });

                let repo = $(this).text();
                let msgNo = $(this).parent().next().text();
                console.log(repo);
                console.log(msgNo);
                let xhr = new XMLHttpRequest();
                xhr.onload = function(){
                    if(xhr.status == 200){
                        console.log(`good!`);
                        console.log(xhr.responseText);
                    }else{ 
                        alert(xhr.status);
                    }           
                };
                var url =`../php/report.php?report=${repo}&msgNo=${msgNo}`;
                xhr.open("get", url ,true);
                xhr.send(null); 
            } else {
                icon: "scss/img/animal.png",
                swal("不要亂檢舉好不好!");
            }
            });
    })
    // 點色情相關檢舉 // 
    $(".dirty").click(function(){
        swal({
            title: "確定送出檢舉嗎?",
            text: "一旦送出，此留言將會被審核",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("你已成功送出檢舉，鼠爺會修理他!", {
                icon: "scss/img/animal.png",
                });

                let repo = $(this).text();
                let msgNo = $(this).parent().next().text();
                console.log(repo);
                console.log(msgNo);
                let xhr = new XMLHttpRequest();
                xhr.onload = function(){
                    if(xhr.status == 200){
                        console.log(`good!`);
                        console.log(xhr.responseText);
                    }else{ 
                        alert(xhr.status);
                    }           
                };
                var url =`../php/report.php?report=${repo}&msgNo=${msgNo}`;
                xhr.open("get", url ,true);
                xhr.send(null); 
            } else {
                icon: "scss/img/animal.png",
                swal("不要亂檢舉好不好!");
            }
            });
    })
    // 點廣告留言檢舉 // 
    $(".ad").click(function(){
        swal({
            title: "確定送出檢舉嗎?",
            text: "一旦送出，此留言將會被審核",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("你已成功送出檢舉，鼠爺會修理他!", {
                icon: "scss/img/animal.png",
                });

                let repo = $(this).text();
                let msgNo = $(this).parent().next().text();
                console.log(repo);
                console.log(msgNo);
                let xhr = new XMLHttpRequest();
                xhr.onload = function(){
                    if(xhr.status == 200){
                        console.log(`good!`);
                        console.log(xhr.responseText);
                    }else{ 
                        alert(xhr.status);
                    }           
                };
                var url =`../php/report.php?report=${repo}&msgNo=${msgNo}`;
                xhr.open("get", url ,true);
                xhr.send(null); 
            } else {
                icon: "scss/img/animal.png",
                swal("不要亂檢舉好不好!");
            }
            });
    })

});

