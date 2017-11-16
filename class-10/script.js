$(document).ready(function(){
	$(".p1").click(function(){
		$(".p1").hide();
	});

	$(".p2").dblclick(function(){
		$(".p2").hide();
	});

	$(".p3").mouseenter(function(){
		$(".p3").hide();
	});

	$(".p4").mouseleave(function(){
		$(".p4").hide();
	});

	$(".p5").hover(function(){
		$(".p5").hide();
	});

	/* hide show btn*/
	$(".btn1").click(function(){
		$(".some").hide(1000);
	});

	$(".btn2").click(function(){
		$(".some,.one-box").show(1000);
	});

	$(".btn3").click(function(){
		$(".some,.one-box").toggle();
	});


	/* fadein fadeout and fadeto and toggle Fade*/
	$(".fadein").click(function(){
		$(".one-box2").fadeIn(1000);
	});

	$(".fadeout").click(function(){
		$(".one-box2").fadeOut(2000);
	});

	$(".fadeto").click(function(){
		$(".one-box2").fadeTo(2000,'0.4');
	});

	$("#fadetoggle").click(function(){
		$(".one-box2").fadeToggle(2000);
	});
});
