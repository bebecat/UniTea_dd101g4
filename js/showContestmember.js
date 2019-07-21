
let work = {};
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
    console.log(page);
    document.getElementsByClassName("votes_prods")[0].innerHTML = page;
}

