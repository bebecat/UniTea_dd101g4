

/**點擊愛心改變 **/
    $(".heart").bind("click", function () {
        var src = ($(this).attr("src") === "scss/img/contest/heart.png")
            ? "scss/img/contest/empty_heart.png"
            : "scss/img/contest/heart.png";
        $(this).attr("src", src);

        /**取消讚**/
        if($(this).attr("src") == "scss/img/contest/empty_heart.png" ){
            var addVote = parseInt(this.nextElementSibling.innerText)-1;
            this.nextElementSibling.innerText = addVote;

        /**刪除會員按讚紀錄**/    
        let like_record = this.parentNode.parentNode.previousElementSibling.previousElementSibling.innerText;
        // console.log(like_record);
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function (){
            if(xhr.readyState == 4){
                if(xhr.status == 200){
                    // alert(xhr.responseText);
                }else{
                    // alert(xhr.status);
                }
            }
        }
        let url ="../php/delete_like.php?workNo="+like_record;
        xhr.open('get', url, false);
        xhr.send(null);

        /**按讚**/
        }else{
            var minusVote = parseInt(this.nextElementSibling.innerText)+1;
            this.nextElementSibling.innerText = minusVote;
            var cloneHeart = $(this).clone();
            cloneHeart.css('animation', 'heart 4s linear 1 forwards')
            .css('position', 'fixed')
            .css('left','20%');
            $(this).next().append(cloneHeart);

            /**帶入會員按讚紀錄**/
            let like_record = this.parentNode.parentNode.previousElementSibling.previousElementSibling.innerText;
            // console.log(like_record);
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function (){
                if(xhr.readyState == 4){
                    if(xhr.status == 200){
                        // alert(xhr.responseText);
                    }else{
                        // alert(xhr.status);
                    }
                }
            }
            let url ="../php/add_like.php?workNo="+like_record;
            xhr.open('get', url, false);
            xhr.send(null);
        } 
    });


/**pagination改變**/
var page = document.getElementsByClassName("pagination")[0];
var hearts = document.getElementsByClassName("heart");
var num = Math.floor(hearts.length/4);
var rear = document.getElementsByClassName("rear")[0];
for(var i=1; i<=num; i++){
var a = page.childNodes[1].nextElementSibling;
new_a = a.cloneNode(true);
new_a.style.display="";
new_a.innerText = i;
page.insertBefore(new_a, rear);
};


document.getElementById("btn").onclick = function(){
    // location.href="login.php";


    // if((<%= Session["memId"] %>)=false){
    //     document.write("??");
    // }else{
        showContestForm();
    // }
    /**判斷有無登入**/
    /**跳窗顯示**/
    /**判斷會員客製紀錄**/
    /**有客製紀錄要show出並選取參加**/
    /**無客製紀錄要給他客製的連結**/
}
var body = document.getElementsByTagName("body"); 
var go = document.getElementById("go_contest");
/**開啟選擇客製參賽跳窗**/
function noScroll() {
    window.scrollTo(0,750);
}
function showContestForm(){
        go.style.display="block";
        window.addEventListener('scroll', noScroll);
}
/**關閉選擇客製參賽跳窗**/
document.getElementById("close_go_contest").onclick = function(){
    go.style.display="none";
    window.removeEventListener('scroll', noScroll);
}


/**最新 最多讚ajax篩選**/
let work = {};
let winner = {};
window.addEventListener("load",function(){
    /**點最新 傳送去getContestmember做Sql指令篩選**/
    document.getElementById("newest").onclick = function(e){
        let xhr = new XMLHttpRequest();
        xhr.onload = function(){
            work = JSON.parse(xhr.responseText);
            showContestMember();
            // console.log(xhr.responseText);
            // console.log(JSON.parse(xhr.responseText));
        }
        xhr.open("get","../php/getContestmember.php?newest",false);
        xhr.send(null); 
    };
    /**點最熱門 傳送去getContestmember做Sql指令篩選**/
    document.getElementById("popular").onclick = function(e){
        let xhr = new XMLHttpRequest();
        xhr.onload = function(){
            work = JSON.parse(xhr.responseText);
            showContestMember();
        }
        xhr.open("get","../php/getContestmember.php?popular",false);
        xhr.send(null);
    };
    /**排名篩選**/
    document.querySelector("#ranking").oninput = function(e){
        let month = document.querySelector("#ranking").value.split("_");
        
        let xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(xhr.status == 200){
                // console.log(`good!`);
                console.log(xhr.responseText);
                // document.getElementsByClassName("wrap_box")[0].innerHTML = xhr.responseText;
                winner = JSON.parse(xhr.responseText);
                console.log(JSON.parse(xhr.responseText));
                showWinner();
            }else{ 
                alert(xhr.status);
            }           
        };

        var url ="../php/getRank.php";
        xhr.open("post", url ,true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        
        var month_data = `month=${month[1]}`
        xhr.send(month_data); 
    }; 
})    
function showWinner (){
    let winnerPage = "";
    if(winner[0]==null){
        winnerPage += `        
        <div class="box">
            <div class="pic">
                <img src="scss/img/animal.png" alt="product">
            </div>
            <div class="txt">
                <p>本月沒有冠軍T_T</p>
                <img src="scss/img/contest/heart.png" alt="heart">
                <span>我自己1W票拉!!!!</span>
            </div>
        </div>`;
    }else if(winner[1]==null){
        winnerPage += `
        <div class="box">
            <div class="pic">
                <img src="${winner[0].imgPath}" alt="product">
            </div>
            <div class="txt">
                <p>${winner[0].prodName}</p>
                <img src="scss/img/contest/heart.png" alt="heart">
                <span>${winner[0].vote}</span>
            </div>
        </div>
        `;
    }else if(winner[2]==null){
        winnerPage += `
        <div class="box">
            <div class="pic">
                <img src="${winner[0].imgPath}" alt="product">
            </div>
            <div class="txt">
                <p>${winner[0].prodName}</p>
                <img src="scss/img/contest/heart.png" alt="heart">
                <span>${winner[0].vote}</span>
            </div>
        </div>
        <div class="box">
            <div class="pic">
                <img src="${winner[1].imgPath}" alt="product">
            </div>
            <div class="txt">
                <p>${winner[1].prodName}</p>
                <img src="scss/img/contest/heart.png" alt="heart">
                <span>${winner[1].vote}</span>
            </div>
        </div>
        `;
    }else{
        winnerPage += `
        <div class="box">
            <div class="pic">
                <img src="${winner[1].imgPath}" alt="product">
            </div>
            <div class="txt">
                <p>${winner[1].prodName}</p>
                <img src="scss/img/contest/heart.png" alt="heart">
                <span>${winner[1].vote}</span>
            </div>
        </div>
        <div class="box">
            <div class="pic">
                <img src="${winner[0].imgPath}" alt="product">
            </div>
            <div class="txt">
                <p>${winner[0].prodName}</p>
                <img src="scss/img/contest/heart.png" alt="heart">
                <span>${winner[0].vote}</span>
            </div>
        </div>
        <div class="box">
            <div class="pic">
                <img src="${winner[2].imgPath}" alt="product">
            </div>
            <div class="txt">
                <p>${winner[2].prodName}</p>
                <img src="scss/img/contest/heart.png" alt="heart">
                <span>${winner[2].vote}</span>
            </div>
        </div>
        `;
    }

    document.getElementsByClassName("wrap_box")[0].innerHTML = winnerPage;
}
/**回傳值給原本的頁面**/
function showContestMember(){
    let page = "";
    for(let num in work){  //cart[psn]
        page += `
        <div class="box">
            <span style="display:none">${work[num].workNo}</span>
            <div class="pic">
                <img src="${work[num].imgPath}" alt="product">
            </div>
            <div class="txt">
                <p>${work[num].prodName}</p>
            <div class="inner_txt">
                <img class="heart" src="scss/img/contest/heart.png" alt="heart">
                <span>${work[num].vote}</span>
                <img class="chat" src="scss/img/contest/comment-regular.png" alt="msg">
                <span>1</span>
            </div>
            </div>
        </div>
        `;
    }
    // console.log(page);
    document.getElementsByClassName("votes_prods")[0].innerHTML = page;
   
    /**再跑一次抓取的值**/
    let pic = document.getElementsByClassName("pic");
    let chat = document.getElementsByClassName("chat");
    for(let i=0; i<pic.length; i++){
        pic[i].onclick = function(e){
            
            // window.open('msg.html','','width=1200, height=600, top=200, left=400, toolbar=no, menubar=no, scrollbars=yes, resizable=yes,location=n o, status=no’')
            // location.href=("msg.php");
            let workNo = this.previousElementSibling.innerText;
            location.href="msg.php?id=" + workNo;
            e.stopPropagation();
        };
    }
    for(let i=0; i<chat.length; i++){
        chat[i].onclick = function(){
            let No = this.parentNode.parentNode.previousElementSibling.previousElementSibling.innerText;
            location.href="msg.php?id=" + No;
            e.stopPropagation();
        };
    }
        /**點擊愛心改變 **/
        $(".heart").bind("click", function abc() {
            var src = ($(this).attr("src") === "scss/img/contest/heart.png")
                ? "scss/img/contest/empty_heart.png"
                : "scss/img/contest/heart.png";
            $(this).attr("src", src);
            if($(this).attr("src") == "scss/img/contest/empty_heart.png" ){
                var addVote = parseInt(this.nextElementSibling.innerText)+1;
                this.nextElementSibling.innerText = addVote;
            }else{
                var minusVote = parseInt(this.nextElementSibling.innerText)-1;
                this.nextElementSibling.innerText = minusVote;
                var cloneHeart = $(this).clone();
                cloneHeart.css('animation', 'heart 4s linear 1 forwards')
                .css('position', 'fixed')
                .css('left','20%');
                $(this).next().append(cloneHeart);
            }
        });

}


/**點擊去到留言頁面**/
    let pic = document.getElementsByClassName("pic");
    let chat = document.getElementsByClassName("chat");
    for(let i=0; i<pic.length; i++){
        pic[i].onclick = function(e){
            
            // window.open('msg.html','','width=1200, height=600, top=200, left=400, toolbar=no, menubar=no, scrollbars=yes, resizable=yes,location=n o, status=no’')
            // location.href=("msg.php");
            let workNo = this.previousElementSibling.innerText;
            location.href="msg.php?id=" + workNo;
            e.stopPropagation();
        };
    }
    for(let i=0; i<chat.length; i++){
        chat[i].onclick = function(){
            let No = this.parentNode.parentNode.previousElementSibling.previousElementSibling.innerText;
            location.href="msg.php?id=" + No;
            e.stopPropagation();
        };
    }






/***選到所有進入留言頁面的 ***/
// let box = document.getElementsByClassName("box");
// let chat = document.getElementsByClassName("chat");
// for(let i=0; i<box.length; i++){
//     box[i].onclick = function(e){
//         showWork(e);
//     }
//     chat[i].onclick = function(e){
//         showWork(e);
//     }

// }
// function showWork(e){


// }




// var hearts = document.getElementsByClassName("heart");
// window.addEventListener("load", function () {
//     for (let i = 0; i < hearts.length; i++) {
//         hearts[i].onclick = heartSwing;
//     }
// }, false)

// function heartSwing(e) {
//     var love = e.target.cloneNode(true);
//     love.y--;
//     love.scale += 0.004;
//     love.alpha -= 0.013;
//     love.style = "left:" + love.x + "px;top:" + love.y + "px;opacity:" + love.alpha + ";transform:scale(" + love.scale + "," + love.scale + ") rotate(45deg);background:" + love.color;
//     console.log("love");
//     document.body.appendChild(love);
// }




// (function(window,document,undefined){
//     var hearts = [];
//     window.requestAnimationFrame = (function(){
//         return window.requestAnimationFrame ||
//         window.webkitRequestAnimationFrame ||
//         window.mozRequestAnimationFrame ||
//         window.oRequestAnimationFrame ||
//         window.msRequestAnimationFrame ||
//         function (callback){
//             setTimeout(callback,1000/60);
//         }
//     })();
//     init();
//     function init(){
//         css(".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: absolute;}.heart:after{top: -5px;}.heart:before{left: -5px;}");
//         attachEvent();
//         gameloop();
//     }
//     function gameloop(){
//         for(var i=0;i<hearts.length;i++){
//             if(hearts[i].alpha <=0){
//                 document.body.removeChild(hearts[i].el);
//                 hearts.splice(i,1);
//                 continue;
//             }
//             hearts[i].y--;
//             hearts[i].scale += 0.004;
//             hearts[i].alpha -= 0.013;
//             hearts[i].el.style.cssText = "left:"+hearts[i].x+"px;top:"+hearts[i].y+"px;opacity:"+hearts[i].alpha+";transform:scale("+hearts[i].scale+","+hearts[i].scale+") rotate(45deg);background:"+hearts[i].color;
//         }
//         requestAnimationFrame(gameloop);
//     }
//     function attachEvent(){
//         var hearto = document.getElementsByClassName("heart");
//         var old = typeof window.onclick==="function" && window.onclick;
//         window.onclick = function(event){
//             old && old();
//             createHeart(event);
//         }
//     }
//     function createHeart(event){
//         var d = document.createElement("div");
//         d.className = "heart";
//         hearts.push({
//             el : d,
//             x : event.clientX - 5,
//             y : event.clientY - 5,
//             scale : 1,
//             alpha : 1,
//             color : "#f00",
//         });
//         document.body.appendChild(d);
//     }
//     function css(css){
//         var style = document.createElement("style");
//         style.type="text/css";
//         try{
//             style.appendChild(document.createTextNode(css));
//         }catch(ex){
//             style.styleSheet.cssText = css;
//         }
//         document.getElementsByTagName('head')[0].appendChild(style);
//     }
//     function randomColor(){
//         return "rgb("+(~~(Math.random()*255))+","+(~~(Math.random()*255))+","+(~~(Math.random()*255))+")";
//     }
// })(window,document);