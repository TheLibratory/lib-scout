// When the document loads do everything inside here ...
$(document).ready(function(){

	//Toggle Report Settings Content
	$('div.toggle_content').hide().end().find("div.toggle_label").click( function() {
        	$("div.toggle_content").slideToggle(800);
                return false;
	});
	
	/*function to loop through helper text array*/
	function in_array(string, array)  {  
		for (i = 0; i < array.length; i++)	{  
		   if(array[i] == string)  {  
			  return true;  
		   }
		}
	return false;  
	} 
	
	/*Helper text Array*/
	var helpertext = [
		"",
		"Google Site Search"
	];

	/*Default load of helper text*/
	$('#query').attr("value", helpertext[0]);
	$('#query').click(function () {
		$(this).attr("value", ""); 
    });


	function iiikwformcall(thisurl, usertext) {
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

					if (thisurl == "/sitescripts/search-box-scout/searchbox-scout-form.php?query=all"){
						if (in_array(usertext, helpertext)){
							$('#query').attr("value", helpertext[0]);
						}						
						else if (usertext == ""){
							$('#query').attr("value", helpertext[0]);
						}
						else {
							$('#query').attr("value", usertext);
						}
				
						$('#query').click(function() {
							$(this).attr("value", ""); 
	    				});
					}
					
					if (thisurl == "/sitescripts/search-box-scout/searchbox-scout-form.php?query=articles"){
						if (in_array(usertext, helpertext)){
							$('#query').attr("value", helpertext[0]);
						}						
						else if (usertext == ""){
							$('#query').attr("value", helpertext[0]);
						}
						else {
							$('#query').attr("value", usertext);
						}

						$('#query').click(function() {
							$(this).attr("value", ""); 
	    				});
					}
					
					if (thisurl == "/sitescripts/search-box-scout/searchbox-scout-form.php?query=catalog"){
						if (in_array(usertext, helpertext)){
							$('#query').attr("value", helpertext[0]);
						}						
						else if (usertext == ""){
							$('#query').attr("value", helpertext[0]);
						}
						else {
							$('#query').attr("value", usertext);
						}

						$('#query').click(function() {
							$(this).attr("value", ""); 
	    				});
					}
					
					if (thisurl == "/sitescripts/search-box-scout/searchbox-scout-form.php?query=databases"){
						if (in_array(usertext, helpertext)){
							$('#query').attr("value", helpertext[0]);
						}						
						else if (usertext == ""){
							$('#query').attr("value", helpertext[0]);
						}
						else {
							$('#query').attr("value", usertext);
						}

						$('#query').click(function() {
							$(this).attr("value", ""); 
	    				});
					}
					
					if (thisurl == "/sitescripts/search-box-scout/searchbox-scout-form.php?query=journals"){
						if (in_array(usertext, helpertext)){
							$('#query').attr("value", helpertext[0]);
						}						
						else if (usertext == ""){
							$('#query').attr("value", helpertext[0]);
						}
						else {
							$('#query').attr("value", usertext);
						}

						$('#query').click(function() {
							$(this).attr("value", ""); 
	    				});
					}
					
					if (thisurl == "/sitescripts/search-box-scout/searchbox-scout-form.php?query=site"){
						if (in_array(usertext, helpertext)){
							$('#query').attr("value", helpertext[1]);
						}						
						else if (usertext == ""){
							$('#query').attr("value", helpertext[1]);
						}
						else {
							$('#query').attr("value", usertext);
						}

						$('#query').click(function() {
							$(this).attr("value", ""); 
	    				});
					}
					
	   			});//end ajaxComplete
	  		}//end success
           		
 		});//ajax
	}
	
	$('#searchtabs li').click(function() {
		var parent = $(this);
		
		if (!parent.hasClass('active')) {
			parent.addClass('active').siblings().removeClass('active');
		}
	});
	
	$('#all').attr('href', '/sitescripts/search-box-scout/searchbox-scout-form.php?query=all');
	$('#all').click(function() {
		var usertext = $('#query').attr("value");
		var thisurl = $(this).attr("href");
		iiikwformcall(thisurl,usertext);
		$('#bazinga').fadeTo("slow", 1);
		return false;
	});

	$('#articles').attr('href', '/sitescripts/search-box-scout/searchbox-scout-form.php?query=articles');
	$('#articles').click( function() {
		var usertext = $('#query').attr("value");
		var thisurl = $(this).attr("href");
		iiikwformcall(thisurl,usertext);
		$('#bazinga').fadeTo("slow", 1);
		return false;
	});
	
	$('#catalog').attr('href', '/sitescripts/search-box-scout/searchbox-scout-form.php?query=catalog');
	$('#catalog').click( function() {		
		var usertext = $('#query').attr("value");
		var thisurl = $(this).attr("href");
		iiikwformcall(thisurl,usertext);
		$('#bazinga').fadeTo("slow", 1);
		return false;
	});
	
	$('#databases').attr('href', '/sitescripts/search-box-scout/searchbox-scout-form.php?query=databases');
	$('#databases').click( function() {		
		var usertext = $('#query').attr("value");
		var thisurl = $(this).attr("href");
		iiikwformcall(thisurl,usertext);
		$('#bazinga').fadeTo("slow", 1);
		return false;
	});
	
	$('#journals').attr('href', '/sitescripts/search-box-scout/searchbox-scout-form.php?query=journals');
	$('#journals').click( function() {		
		var usertext = $('#query').attr("value");
		var thisurl = $(this).attr("href");
		iiikwformcall(thisurl,usertext);
		$('#bazinga').fadeTo("slow", 1);
		return false;
	});
	
	$('#site').attr('href', '/sitescripts/search-box-scout/searchbox-scout-form.php?query=site');
	$('#site').click( function() {		
		var usertext = $('#query').attr("value");
		var thisurl = $(this).attr("href");
		iiikwformcall(thisurl,usertext);
		$('#bazinga').fadeTo("slow", 1);
		return false;
	});

}); //close $(document)

