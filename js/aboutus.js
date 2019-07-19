
var curIndex = 0;//scrollin(e)
var current = 0;//webstoryMove()
var curotate = 0;//teaMove()

function $id(id){
	return document.getElementById(id);
};
function scrollin(e){
	//window.getComputedStyle.property
	//屏幕大小為手機時不啟用
	if(window.innerHeight > 768 ){
		// console.log("e.deltaY:"+e.deltaY);
		if(e.deltaY > 10 && curIndex == 0){
			document.getElementsByClassName("move_left_tree")[0].style.left = "-100%";
			document.getElementsByClassName("move_right_tree")[0].style.right = "-100%";
			document.getElementsByClassName("move_left_tree")[0].style.webkitAnimationPlayState = "paused";
			document.getElementsByClassName("move_right_tree")[0].style.webkitAnimationPlayState = "paused";
			curIndex ++;
			curNum = parseInt(-34*curIndex);
			$id("container").style.transform = `translateY(${curNum}%)`;
			// console.log("curNum:"+curNum);
			// console.log("curIndex:"+curIndex);
		}else if(e.deltaY > 10 && curIndex == 1){
			curIndex ++;
			curNum = parseInt(-32*curIndex);
			$id("container").style.transform = `translateY(${curNum}%)`;
			// console.log("curNum:"+curNum);
			// console.log("curIndex:"+curIndex);
		}else if(e.deltaY < -12 && curIndex == 1){
			document.getElementsByClassName("move_left_tree")[0].style.left = "0";
			document.getElementsByClassName("move_right_tree")[0].style.right = "0";
			curIndex --;
			curNum = parseInt(-32*curIndex);
			$id("container").style.transform = `translateY(${curNum}%)`;
			// console.log("curNum:"+curNum);
			// console.log("curIndex:"+curIndex);
		}else if(e.deltaY < -12 && curIndex == 2){
			curIndex --;
			curNum = parseInt(-33*curIndex);
			$id("container").style.transform = `translateY(${curNum}%)`;
			// console.log("curNum:"+curNum);
			// console.log("curIndex:"+curIndex);
		}
	}
};
function webstoryMove(){
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
function teamMove(){
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
  window.addEventListener('wheel', scrollin, false);
  webstoryMove();
	setInterval(teamMove,500);
	document.getElementsByClassName("move_left_tree")[0].style.webkitAnimationPlayState = "running";
	document.getElementsByClassName("move_right_tree")[0].style.webkitAnimationPlayState = "running";
	document.getElementsByClassName("load_show")[0].style.webkitAnimationPlayState = "running";
};
window.addEventListener("load",doFirst,false);