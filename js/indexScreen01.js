var parallaxMove = document.getElementById('parallaxMove');
var grassMoveA = document.getElementById('grassMoveA');
var grassMoveB = document.getElementById('grassMoveB');
var tweezersMove = document.getElementById('tweezersMove');

function parallax(e){
    var mouseX = e.clientX
    var mouseY = e.clientY

    var x = mouseX * -0.2 / 8;
    var y = mouseY * -0.2 / 8;
    
    parallaxMove.style.transform ='translate('+ x + 'px,' + y + 'px)';
    grassMoveA.style.transform = 'translate(' + (x / 2) + 'px,' + (y / 2) + 'px)';
    grassMoveB.style.transform = 'translate(' + (x + 1) + 'px,' + (y + 1) + 'px)';
    tweezersMove.style.transform = 'translate('+ (x / 3 ) + 'px,' + (y / 3) + 'px)';
    // console.log(mouseX, mouseY);
    
}

window.addEventListener('mousemove', parallax);