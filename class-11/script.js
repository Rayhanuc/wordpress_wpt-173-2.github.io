$(document).ready(function(){
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

	$(".mouseenter").mouseenter(function(){
		$(".one-box3").fadeIn(1000);
	});

	$(".fadeout").mouseenter(function(){
		$(".one-box3").fadeOut(2000);
	});

	$(".mouseleave").mouseleave(function(){
		$(".one-box3").fadeIn(2000);
	});

	// animation class practice
	$(".anim").click(function(){
        $(".box-1").animate({right: '250px', top: '400px',width:'400px', height: '600px', opacity:'0.5'}, 2000);
    });

    $("#flip").click(function(){
    	$("#panel").slideToggle(5000);
    });

    $("#stop").click(function(){
    	$("#panel").stop();
    });
    
    $("#flip2").click(function(){
    	$("#panel2").hide(1000,function(){
    		alert("panel hide")
    	});
    });

});
