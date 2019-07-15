var imgArray = [
        'scss/img/GengImg/Screen02/Screen02basket_1.png',
        'scss/img/GengImg/Screen02/Screen02basket_2.png',
        'scss/img/GengImg/Screen02/Screen02basket_3.png',
        'scss/img/GengImg/Screen02/Screen02basket_4.png',
    ];
    
var imgClick = document.getElementsByClassName('exterior_changebox');
var mobileImgClick = document.getElementsByClassName('moblieexterior_changebox');

for(i=0;i<imgClick.length;i++){
    imgClick[i].addEventListener("click",imgChange);
}
for(i=0;i<mobileImgClick.length;i++){
    mobileImgClick[i].addEventListener('click',imgChange);
}
function imgChange(){
// console.log(this.querySelector('img').src.substr(-11,1));
let pic = document.getElementById('pic');
var x = this.querySelector('img').src.substr(-11,1);
    pic.src = imgArray[x - 1]
}

window.addEventListener('click', imgClick);