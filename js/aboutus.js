
var transnum = 0;//scrollin()
var current = 0;//webstoryMove()
var curotate = 0;//teaMove()

function $id(id){
	return document.getElementById(id);
};

function scrollin(){
	//離頂部滑動超過50px會跳到下一屏(22%)，
	// if(window.resize && $id("container").style.height < 400){}//屏幕大小為手機時不啟用
	var scrollTop = document.documentElement.scrollTop || window.pageYOfset ;
		console.log("scrollTop:"+scrollTop);
	if(scrollTop < 120 && scrollTop > 60){
		document.getElementsByClassName("move_left_tree")[0].style.left = "-100%";
		document.getElementsByClassName("move_right_tree")[0].style.right = "-100%";
		document.getElementsByClassName("move_left_tree")[0].style.webkitAnimationPlayState = "paused";
		document.getElementsByClassName("move_right_tree")[0].style.webkitAnimationPlayState = "paused";
		transnum = 22 ;
		$id("container").style.transform = `translateY(-${transnum}%)`;
	}else if(scrollTop < 800 && scrollTop > 760){
		document.getElementsByClassName("move_left_tree")[0].style.left = "0";
		document.getElementsByClassName("move_right_tree")[0].style.right = "0";
		transnum = 0;
		$id("container").style.transform = "translateY(-"+transnum+"%)";
	}else if(scrollTop < 860 && scrollTop > 800){
		transnum = 40;
		$id("container").style.transform = `translateY(-${transnum}%)`;
	}
	else if (scrollTop < 1578 && scrollTop > 1447){	
		transnum = 22 ;
		$id("container").style.transform = `translateY(-${transnum}%)`;
	}else{
		$id("container").style.transform = "translateY(-"+transnum+"%)";
	}

	//向下滾動--
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
function teaMove(){
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
	$id("container").style.transform = "translateY("+transnum+"%)";
    window.addEventListener('scroll', scrollin, false);
	setInterval(scrollin,1000);
    webstoryMove();
	setInterval(teaMove,500);
	document.getElementsByClassName("move_left_tree")[0].style.webkitAnimationPlayState = "running";
	document.getElementsByClassName("move_right_tree")[0].style.webkitAnimationPlayState = "running";
	document.getElementsByClassName("load_show")[0].style.webkitAnimationPlayState = "running";
};
window.addEventListener("load",doFirst,false);