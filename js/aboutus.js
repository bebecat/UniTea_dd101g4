var current = 0;
var curotate = 0;
var curIndex = 0;
function $id(id){
	return document.getElementById(id);
};
function scroll(e){
    e = e || window.event;
    var t = 0;
    if (e.wheelDelta) {
        t = e.wheelDelta;
        if (t > 0 && curIndex > 0) {
            movePrev();
        } else if (t < 0 && curIndex < sumCount - 1) {
            moveNext();
        }
    } else if (e.detail) {
        t = e.detail;
        if (t < 0 && curIndex > 0) {
            movePrev();
        } else if (t > 0 && curIndex < sumCount - 1) {
            moveNext();
        }
    }
};
function movePrev(){};
function moveNext(){};
function webstorymove(){
	$id("roulette").style.transform = "rotate("+curotate+"deg)";
	$id("turnright").onclick = function(){
		curotate += 90;
		$id("roulette").style.transform = "rotate("+curotate+"deg)";
	};
	$id("turnleft").onclick = function(){
		curotate -= 90;
		$id("roulette").style.transform = "rotate("+curotate+"deg)";
	};
}
function teamove(){
	$id("mebmove").style.transform = "translateX("+current+")";
	$id("right").onclick = function(){
		current -= 16.666666;
		$id("mebmove").style.transform = "translateX("+current+"%)";
	};
	$id("left").onclick = function(){
		current += 16.666666;
		$id("mebmove").style.transform = "translateX("+current+"%)";
	};
	if(current == 0){
		$id("left").style.visibility = "hidden";
	}else if(current <= -83){
		$id("right").style.visibility = "hidden";
		
	}else{
		$id("right").style.visibility = "";
		$id("left").style.visibility = "";
	};
};
function doFirst(){
	// scroll();
	webstorymove();
	setInterval(teamove,500);
};
window.addEventListener("load",doFirst,false);