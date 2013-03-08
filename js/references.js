$(document).ready(function(){


	$(".filters a").click(function(){
		if($(this).hasClass("opened")){
			$(".filter-options").slideUp();
			$(this).removeClass("opened");
			return false;
		}
		$(this).siblings().removeClass("opened").end().addClass("opened");
		var t = $(this).attr("href");
		$(t).siblings(".filter-options").slideUp().delay().end().slideDown();
		return false;
	});

	$(".filter-options li").click(function(){
		$(this).addClass("selected").siblings().removeClass("selected");
		var t = $(this).text();
		$(".filters a.opened").text(t);
		var fClass = $(this).attr("class").split(" ")[0];
		if(fClass == "all"){
			$("#finished .reference").removeClass("hide");
			return false;
		}
		$("#finished .reference").each(function(){
			
			if(!$(this).hasClass(fClass)){
				$(this).addClass("hide");
			}
			else{
				$(this).removeClass("hide");
			}	
		});
	});	

	$('html').click(function() {
 		$(".opened").trigger("click");
 	});

 $('.filter-options').click(function(event){
     event.stopPropagation();
 });

});