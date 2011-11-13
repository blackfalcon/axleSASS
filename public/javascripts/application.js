jQuery(document).ready(function($) {
	// turns whole block element into clickable area
	$(".linkBox").click(function(){
		window.location=$(this).find("a").attr("href");
		return false;
	});
	
	// add autofocus support for non html5 browsers
	if (!("autofocus" in document.createElement("input"))) {
		$("#q").focus();
	}	
  
  	//simple UI toggle support  
	$(".obstacles_nav").find("li").click(function(e) {
	
		e.preventDefault();
		// Hide all obstacles; remove selected class from all nav items
		$(".obstacles_nav").find("a").removeClass("selected");
		$(".the_obstacles > div").hide();
		
		$(this).find("a").addClass("selected");
		$("#" + $(this).attr("data-obstacle-name")).show();		
	});
	
		// Auto opens all hrefs that point to external sites in another window
	$('a[href^="http://"]')
		.attr({
		target: "_blank", 
		title: "Opens in a new window"
	});
	
	// alert UI icons
	$('.alert-box').each(function(){
		if($(this).children('span.alert_icon').length < 1){
			$('<span class="alert_icon"></span>').prependTo($(this));
		}
	});

	$('.success-box').each(function(){
		if($(this).children('span.success_icon').length < 1){
			$('<span class="success_icon"></span>').prependTo($(this));
		}
	});

	$('.error-box').each(function(){
		if($(this).children('span.error_icon').length < 1){
			$('<span class="error_icon"></span>').prependTo($(this));
		}
	});
	
	// countdown timer, default is to run down the clock
	// to run up, eval(-1);
	//
	// exmple code in screen
	// <span class="countdown">60</span>
	var settimmer = 0;
    $(function(){
        window.setInterval(function() {
            var timeCounter = $("span[class=countdown]").html();
            var updateTime = eval(timeCounter)- eval(1);
            $("span[class=countdown]").html(updateTime);

            if(updateTime == -1){
                var updateTime = eval(timeCounter)- eval(0);
                $("span[class=countdown]").html(updateTime);
            }
        }, 1000);
    });
});