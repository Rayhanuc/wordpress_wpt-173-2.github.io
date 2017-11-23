$(document).ready(function(){
	
	var dhorse = $(".some").text();
	$(".other").text(dhorse);

	$(".other-3").addClass("boxes"); 
	$(".some-2").removeClass("new");

	//part-14
	$("#flip").click(function(){
		$("#panel").remove()
	});

	$("#flip2").click(function(){
		$("#panel2").empty()
	});

	//part-15

	$("#flip3").click(function(){
		$("#panel3").css({"background-color": "red"}).slideUp(2000). slideDown(2000);
	});

	//part-17
	$(".log").attr("value", "login");

	$(".log-inside").click(function(){
		$(this).attr("value", "log-inside");
	});

	//part 18

	var value = "enter your email"
	$("input[type='email']").attr("value",value).focus(function(){
		if ($(this).val()==value){
			$(this).attr("value", "")
		};

	}).blur(function(){
		if ($(this).val() == ''){
			$(this).attr("value",value)
		}
	});

	$("#op").change(function(){
		var dorse = $("#op").val();
		$(".add").html("You have selecte"+" "+dorse)
	});

	$("#text").scroll(function(){
		var top = $("#text").scrollTop()
		$(".some_fed").html("you scroll"+" "+top)
	})





});
