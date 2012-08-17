// When the document loads do everything inside here ...
$(document).ready(function(){

	// Default load of query textfield
	$('#query').attr('value', '');
	$('#query').click(function () {
		$(this).attr("value", ""); 
    });
	
	function tabclick() {
		$('#bazinga').animate({opacity:0}, 10);	
		var usertext = $('#query').attr("value");
		var thisurl = $(this).attr("href");
		scoutformcall(thisurl,usertext);
		$('#bazinga').fadeTo("slow", 1);
		return false;
	}

	function scoutformcall(thisurl, usertext) {
		$.ajax({
	   		type: "get",
			async: false,
           	url: thisurl,
			timeout: 9000,
			cache: true,
			error: function(){
				alert('Error loading form ');
			},
			success: function(msg){ 
				$('#bazinga').hide(); 
	   			$('#bazinga').show(1, function(event, request, settings){
	   				result=msg;
	   				$(this).html(result);
					
					//Detect if this is the 'site' tab (not using this functionality)
					// if (thisurl == "/sitescripts/search-box-scout/searchbox-scout-form.php?query=site"){ 
						// if (usertext) {$('#query').attr('value', usertext);}
						// else {$('#query').attr('value', '');}
					// }
					//If not- just do the normal stuff
					//else {
						if (usertext) {$('#query').attr('value', usertext);}
						else {$('#query').attr('value', '');}
					//}
				});//end ajaxComplete
	  		}//end success
           		
 		});//ajax
	}
	
	$('#searchtabs li').click(function() {
		var parent = $(this);
		if (!parent.hasClass('active')) {parent.addClass('active').siblings().removeClass('active');}
	});
	
	//For each tab, make sure it sets the href + click behavior
	var tabinfo = ["all", "articles", "catalog", "databases", "journals", "site"]; //Each tab id
	var len = tabinfo.length;
	for(var i=0; i<len; i++) {
		$('#' + tabinfo[i]).attr('href', '/sitescripts/search-box-scout/searchbox-scout-form.php?query=' + tabinfo[i]).click(tabclick);
	}
}); //close $(document)