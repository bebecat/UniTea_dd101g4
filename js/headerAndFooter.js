var navbar = document.getElementById('navbar');
// var ct = document.getElementById('navbar_ct');

function navRun(){
    var offset = window.scrollY
    var screen = navbar.clientHeight
    if(offset >= screen){
        navbar.style.backgroundImage = 'linear-gradient(#ffd 0%, transparent 70%)';
    }else{
        navbar.style.backgroundImage = '';
    }
}

window.addEventListener('scroll', navRun);