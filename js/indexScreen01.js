var parallaxMove = document.getElementById('parallaxMove');
var tweezersMove = document.getElementById('tweezersMove');
var txtMove = document.getElementById('itemtxt');
// var smobjectMoveA = document.getElementById('smobjectA');
// var smobjectMoveB = document.getElementById('smobjectB');
// var smobjectMoveC = document.getElementById('smobjectC');
// var smobjectMoveD = document.getElementById('smobjectD');

function parallax(e){
    var mouseX = e.clientX
    var mouseY = e.clientY

    var x = mouseX * -0.2 / 8;
    var y = mouseY * -0.2 / 8;
    
    parallaxMove.style.transform ='translate('+ x + 'px,' + y + 'px)';
    tweezersMove.style.transform = 'translate('+ (x / 3 ) + 'px,' + (y / 3) + 'px)';
    txtMove.style.transform = 'translate(' + ( x / 3 ) + 'px,' + (y / 3) + 'px)';

    // smobjectMoveA.style.transform = 'translate(' + (x + 2) + 'px,' + (y + 2) + 'px)';
    // smobjectMoveB.style.transform = 'translate(' + (x + 2) + 'px,' + (y + 2) + 'px)';
    // smobjectMoveC.style.transform = 'translate(' + (x + 2) + 'px,' + (y + 2) + 'px)';
    // smobjectMoveD.style.transform = 'translate(' + (x + 2 ) + 'px,' + (y + 2 ) + 'px)';
    // console.log(mouseX, mouseY);
    
}

window.addEventListener('mousemove', parallax);