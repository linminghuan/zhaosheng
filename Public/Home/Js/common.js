function InitSlider(pics){
	"use strict";
	InitPic(pics);
	var timer;
	window.clearInterval(timer);
	pics.mouseenter(function() {
		window.clearInterval(timer);
		$("#"+this.id).children('span').attr('class','footnote');
	});
	pics.mouseleave(function() {
		timer = Move(pics, 10, 2);	
		$("#"+this.id).children('span').attr('class','');
	});
	timer = Move(pics, 10, 2);	
}
function InitPic(pics){
	"use strict";
	for( var i = 0 ; i < pics.length ; i++ ){
		pics[i].id = "pic_"+i;
		pics[i].style.left = i*420+'px';
	}
}
function Move(pics, rate ,speed){
	"use strict";
	var timer_obj = setInterval(function(){
		for( var j = 0 ; j < pics.length ; j++ ){
			
			if(pics[j].style.left == '-420px' ){
				pics[j].style.left = (pics.length-1)*420+'px';
			}
			var tmp = parseInt(pics[j].style.left)-speed;
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
