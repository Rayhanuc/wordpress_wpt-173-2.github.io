jQuery(document).ready(function(){
	/* fadein fadeout and fadeto and toggle Fade*/
	jQuery(".some").click(function(){
		jQuery(".pr").append("<p>again</p>")
	});

	jQuery(".some2").click(function(){
		jQuery(".pr2").prepend("<p>again</p>")
	});

	jQuery(".some3").click(function(){
		jQuery(".pr3").before("<p>again</p>")
	});

	jQuery(".some4").click(function(){
		jQuery(".pr4").after("<p>again</p>")
	});


	var boxwidth=jQuery(".box").outerWidth(true);
	var boxheight=jQuery(".box").outerHeight(true);
	alert(boxwidth)
	alert(boxheight)



	jQuery(".click").click(function(){
		jQuery("div").load("other.html");
	})
});
