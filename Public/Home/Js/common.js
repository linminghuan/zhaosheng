//全局变量
var screenWidth = "";
//#top自适应高度的状态标记
var tag = 0;
screenWidth = $(window).width();
function InitSlider(pics ,picLen){
	"use strict";
	InitPic(pics,picLen);
	var timer;
	window.clearInterval(timer);
	pics.mouseenter(function() {
		window.clearInterval(timer);
		$("#"+this.id).children('span').attr('class','footnote');
	});
	pics.mouseleave(function() {
		timer = Move(pics, 20, 1, picLen);	
		$("#"+this.id).children('span').attr('class','');
	});
	timer = Move(pics, 20, 1, picLen);	
}
function InitPic(pics, picLen){
	"use strict";
	for( var i = 0 ; i < pics.length ; i++ ){
		pics[i].id = "pic_"+i;
		pics[i].style.left = i*picLen+'px';
	}
}
function Move(pics, rate ,speed, picLen){
	"use strict";
	var timer_obj = setInterval(function(){
		for( var j = 0 ; j < pics.length ; j++ ){
			if(pics[j].style.left == -picLen+"px" ){
				pics[j].style.left = (pics.length-1)*picLen+'px';
			}
			var tmp = 0;
			tmp = parseInt(pics[j].style.left)-speed;
			pics[j].style.left = tmp+"px";
		}
	},rate);
	return timer_obj;
}
function InitNav(obj,category){
	"use strict";
	obj.mouseenter(function(event) {
		this.className = 'a-active';
	});
	obj.mouseleave(function(event) {
		this.className = '';
	});
}
function InitShadow(obj) {
	"use strict";
	obj.mouseenter(function(event) {
		this.style.boxShadow = "5px 5px 2px 1px #8F8B8B";
		this.style.marginLeft = this.style.marginLeft + 2 +"px";
		this.style.marginTop = this.style.marginReft + 2 +"px";
	});
	obj.mouseleave(function(event) {
		this.style.boxShadow = "";
		this.style.marginLeft = "";
		this.style.marginTop = "";
	});
}
function InitItemLi(obj) {
	"use strict";
	obj.hover(function() {
		this.style.borderBottom = "1px solid #fec156";
	}, function() {
		this.style.borderBottom = "";
	});
}
function AddNav(obj,obj_sub){
	var timer_nav;
	obj.mouseenter(function(event) {
		window.clearInterval(timer_nav);
		obj_sub[0].style.display = "block";
	});
	obj.mouseleave(function(event) {
		timer_nav = setInterval(function (){
			obj_sub[0].style.display = "none";
		},1000);
	});
	obj_sub.mouseleave(function(event) {
		obj_sub[0].style.display = "none";
	});
	obj_sub.mouseenter(function(event) {
		window.clearInterval(timer_nav);
	});
}
//根据浏览器的宽度自动设置图片的宽高
function AutoSliderImgHeight(obj,picNum,ratio){
	var width = obj.width();
	width = width*ratio;
	width = Math.floor(width);
	//console.log(width);
	var height = obj.css("padding-bottom");
	//console.log(height);
	height = height.split(".",1)[0];
	height = height++;
	for( var k = 0 ; k < picNum ; k++ ){
		var picImg = $("#pic_"+k+" img");
		picImg.css("width",width);
		picImg.css("height",height);
		//console.log(picObj.css("height"));
	}
	for( var l = 0 ; l < picNum ; l++ ){
		var picDiv = $("#pic_"+l);
		picDiv.css("width",width);
		//console.log(picDiv.css("width"));
		picDiv.css("height",height);
		//console.log(picDiv.css("height"));
	}
	
}
function AutoLineHeight(obj,child){
	var lineHeight = obj.css("height");
	//console.log(lineHeight);
	obj.find(child).css("line-height",lineHeight);
	//console.log(obj.find("a").css("line-height"));
	
}
function AutoPageLineHeight(obj){
		var h = obj.css("height");
		console.log(h);
		obj.css("line-height",h);
}
function AutoScreenWidth(slider_top){
	var s = ""; 
	s = document.body.clientWidth;
	if(screenWidth>=s){
		if(tag == 0 ){
			var t = 0;
			t = Math.floor((1900-s)/100);
			var h = 0;
			h = parseInt(slider_top.css("height"));
			h = h-t;
			slider_top.css("height",h+"px");
			screenWidth=s;
			tag++;
		}else{
			var t = 0;
			t = Math.floor((screenWidth-s)/100);
			var h = 0;
			h = parseInt(slider_top.css("height"));
			h = h-t;
			slider_top.css("height",h+"px");
			screenWidth=s;
			tag++;
		}
	}else{
		var t = 0 ;
		t = Math.floor((s-screenWidth)/100);
		var h = 0 ;
		h = parseInt(slider_top.css("height"));
		h = h+t;
		slider_top.css("height",h+"px");
		screenWidth=s;
		tag++;
	}
}