/*Functions for mouseover Search "Find" button state change*/
var mouseenter_findButton = function (){
	$('search-home-content').getElement('.find').set('src', '/graphics/search-box/button-search-down.png');
}
var mouseleave_findButton = function (){
	$('search-home-content').getElement('.find').set('src', '/graphics/search-box/button-search-up.png');
}
/*end of functiosn for Search button state change*/

/*function to loop through helper text array*/
 function in_array(string, array)  
 {  
    for (i = 0; i < array.length; i++)  
    {  
       if(array[i] == string)  
       {  
          return true;  
       }  
    }  
 return false;  
 }  

// When the document loads do everything inside here ...
$(document).ready(function(){

	//Toggle Report Settings Content
	$('div.toggle_content').hide().end().find("div.toggle_label").click( function() {
        	$("div.toggle_content").slideToggle(800);
                return false;
	});
	
	//$('#picture').css("height","210px");
	//$('#picture').css("visibility","visible");

	/*Set default tab color*/
	$('#catalog').css("background-image","url(/graphics/search-box/tab-books-more-down.png)");
	$('#catalog a').css("color","#ffffff");
	
	/*Call functions for state change of Search "Find" button */
	$('#search-home-content .find').mouseenter(function() {
		$('#search-home-content .find').attr('src', '/graphics/search-box/button-search-down.png');
	});
	/*Call functions for state change of Search "Find" button */
	$('#search-home-content .find').mouseleave(function() {
		$('#search-home-content .find').attr('src', '/graphics/search-box/button-search-up.png');
	});
 
	/*Helper text Array*/
	var helpertext = ["Search for books and other materials in our library catalog", 
			"Search for books and other materials at UT and Worldwide", 
			"Search inside books scanned by Google", 
			"Search for DVDs in our library catalog",
			"Search for CDs in our library catalog",
			"Search for articles in our new search service",
			"Search for articles using Google Scholar",
			"Search for journal titles available electronically",
			"Search for journal titles in our library catalog",
			"Search the UT Libraries website"];

	/*Default load of helper text*/
	$('#query').attr("value", helpertext[0]);
	$('#query').click(function () {
		if(in_array($(this).attr("value"), helpertext)){
			$(this).attr("value", ""); 
		}
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
				$('#search-home-content').hide(); 
	   			$('#search-home-content').show(1, function(event, request, settings){
	   				result=msg;
	   				$(this).html(result);

					if (thisurl == "/sitescripts/search-box/searchbox-voldemort-form.php?query=catalog"){
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
							if(in_array($(this).attr("value"), helpertext)){
								$(this).attr("value", ""); 
							}
	    					});
						$('#search-catalog').click(function() {
							if(in_array($('#query').attr("value"), helpertext)){
								$('#query').attr("value", helpertext[0]);
							}
							if($('#query').attr("value")==""){
								$('#query').attr("value", helpertext[0]);
							}
	    					});
						$('#search-worldcat').click(function() {
							if(in_array($('#query').attr("value"), helpertext)){
								$('#query').attr("value", helpertext[1]); 
							}
							if($('#query').attr("value")==""){
								$('#query').attr("value", helpertext[1]);
							}
	    					});
						$('#search-googlebooks').click(function() {
							if(in_array($('#query').attr("value"), helpertext)){
								$('#query').attr("value", helpertext[2]); 
							}
							if($('#query').attr("value")==""){
								$('#query').attr("value", helpertext[2]);
							}
	    					});


					}
					if (thisurl == "/sitescripts/search-box/searchbox-voldemort-form.php?query=cdsdvds"){
						if (in_array(usertext, helpertext)){
							$('#query').attr("value", helpertext[3]);
						}
						else if (usertext == ""){
							$('#query').attr("value", helpertext[3]);
						}
						else {
							$('#query').attr("value", usertext);
						}

						$('#query').click(function() {
							if(in_array($(this).attr("value"), helpertext)){
								$(this).attr("value", ""); 
							}
	    					});
						$('#search-dvd').click(function() {
							if(in_array($('#query').attr("value"), helpertext)){ 
								$('#query').attr("value", helpertext[3]);
							}
							if($('#query').attr("value")==""){
								$('#query').attr("value", helpertext[3]);
							}
	    					});
						$('#search-cd').click(function() {
							if(in_array($('#query').attr("value"), helpertext)){
								$('#query').attr("value", helpertext[4]); 
							}
							if($('#query').attr("value")==""){
								$('#query').attr("value", helpertext[4]);
							}
	    					});

					}
					if (thisurl == "/sitescripts/search-box/searchbox-voldemort-form.php?query=metalib") {
						if (in_array(usertext, helpertext)){
							$('#query').attr("value", helpertext[5]);
						}
						else if (usertext == ""){
							$('#query').attr("value", helpertext[3]);
						}
						else {
							$('#query').attr("value", usertext);
						}

						$('#query').click(function() {
							if(in_array($(this).attr("value"), helpertext)){
								$(this).attr("value", ""); 
							}
	    					});
						$('#findarticle').click(function() {
							if(in_array($('#query').attr("value"), helpertext)){ 
								$('#query').attr("value", helpertext[5]);
							}
							if($('#query').attr("value")==""){
								$('#query').attr("value", helpertext[5]);
							}
	    					});
						$('#googlescholar').click(function() {
							if(in_array($('#query').attr("value"), helpertext)){
								$('#query').attr("value", helpertext[6]); 
							}
							if($('#query').attr("value")==""){
								$('#query').attr("value", helpertext[6]);
							}
	    					});

					}

					if (thisurl == "/sitescripts/search-box/searchbox-voldemort-form.php?query=ejournal") {
						if (in_array(usertext, helpertext)){
							$('#query').attr("value", helpertext[7]);
						}
						else if (usertext == ""){
							$('#query').attr("value", helpertext[7]);
						}
						else {
							$('#query').attr("value", usertext);
						}

						$('#query').click(function() {
							if(in_array($(this).attr("value"), helpertext)){
								$(this).attr("value", ""); 
							}
	    					});
						$('#electjournal').click(function() {
							if(in_array($('#query').attr("value"), helpertext)){
								$('#query').attr("value", helpertext[7]);
							}
							if($('#query').attr("value")==""){
								$('#query').attr("value", helpertext[7]);
							}
	    					});
						$('#printjournal').click(function() {
							if(in_array($('#query').attr("value"), helpertext)){
								$('#query').attr("value", helpertext[8]); 
							}
							if($('#query').attr("value")==""){
								$('#query').attr("value", helpertext[8]);
							}
	    					});

					}
					if (thisurl == "/sitescripts/search-box/searchbox-voldemort-form.php?query=site") {
						if (in_array(usertext, helpertext)){
							$('#query').attr("value", helpertext[9]);
						}
						else if (usertext == ""){
							$('#query').attr("value", helpertext[9]);
						}
						else {$('#query').attr("value", usertext);}


						$('#query').click(function() {
							if(in_array($(this).attr("value"), helpertext)){
								$(this).attr("value", ""); 
							}
	    					});
						
					}

					/*Call functions for state change of Search "Find" button */
						$('#search-home-content .find').mouseenter(function() {
							$('#search-home-content .find').attr('src', '/graphics/search-box/button-search-down.png');
						});
						/*Call functions for state change of Search "Find" button */
						$('#search-home-content .find').mouseleave(function() {
							$('#search-home-content .find').attr('src', '/graphics/search-box/button-search-up.png');
						});
					
	   			});//end ajaxComplete
	  		}//end success
           		
 		});//ajax
	}


	$('#iiikw').attr('href', '/sitescripts/search-box/searchbox-voldemort-form.php?query=catalog');
	$('#iiikw').click(function() {
		$('#search-home-content').animate({opacity:0}, 10);
		$('#site').css("background-image", "url(/graphics/search-box/tab-search-site-up.png)");
		$('#site a').css("color", "#000000");
		$('#catalog').css("background-image", "url(/graphics/search-box/tab-books-more-down.png)");
		$('#catalog a').css("color", "#ffffff");
		$('#cddvd').css("background-image", "url(/graphics/search-box/tab-cds-dvds-up.png)");
		$('#cddvd a').css("color", "#000000");
		$('#article').css("background-image", "url(/graphics/search-box/tab-articles-up.png)");
		$('#article a').css("color", "#000000");
		$('#journal').css("background-image", "url(/graphics/search-box/tab-journals-up.png)");
		$('#journal a').css("color", "#000000");
		var usertext = $('#query').attr("value");
		var thisurl = $(this).attr("href");
		iiikwformcall(thisurl,usertext);
		$('#search-home-content').fadeTo("slow", 1);
		return false;
	});

	$('#cdsdvds').attr('href', '/sitescripts/search-box/searchbox-voldemort-form.php?query=cdsdvds');
	$('#cdsdvds').click( function() {
		$('#search-home-content').animate({opacity:0}, 10);
		$('#site').css("background-image", "url(/graphics/search-box/tab-search-site-up.png)");
		$('#site a').css("color", "#000000");
		$('#catalog').css("background-image", "url(/graphics/search-box/tab-books-more-up.png)");
		$('#catalog a').css("color", "#000000");
		$('#cddvd').css("background-image", "url(/graphics/search-box/tab-cds-dvds-down.png)");
		$('#cddvd a').css("color", "#ffffff");
		$('#article').css("background-image", "url(/graphics/search-box/tab-articles-up.png)");
		$('#article a').css("color", "#000000");
		$('#journal').css("background-image", "url(/graphics/search-box/tab-journals-up.png)");
		$('#journal a').css("color", "#000000");
		var usertext = $('#query').attr("value");
		var thisurl = $(this).attr("href");
		iiikwformcall(thisurl,usertext);
		$('#search-home-content').fadeTo("slow", 1);
		return false;
		
	});

	$('#metalib').attr('href', '/sitescripts/search-box/searchbox-voldemort-form.php?query=metalib');
	$('#metalib').click( function() {
		$('#search-home-content').animate({opacity:0}, 10);
		$('#site').css("background-image", "url(/graphics/search-box/tab-search-site-up.png)");
		$('#site a').css("color", "#000000");
		$('#catalog').css("background-image", "url(/graphics/search-box/tab-books-more-up.png)");
		$('#catalog a').css("color", "#000000");
		$('#cddvd').css("background-image", "url(/graphics/search-box/tab-cds-dvds-up.png)");
		$('#cddvd a').css("color", "#000000");
		$('#article').css("background-image", "url(/graphics/search-box/tab-articles-down.png)");
		$('#article a').css("color", "#ffffff");
		$('#journal').css("background-image", "url(/graphics/search-box/tab-journals-up.png)");
		$('#journal a').css("color", "#000000");
		var usertext = $('#query').attr("value");
		var thisurl = $(this).attr("href");
		iiikwformcall(thisurl,usertext);
		$('#search-home-content').fadeTo("slow", 1);
		return false;
		
	});

	$('#ejournal').attr('href', '/sitescripts/search-box/searchbox-voldemort-form.php?query=ejournal');
	$('#ejournal').click( function() {
		$('#search-home-content').animate({opacity:0}, 10);
		$('#site').css("background-image", "url(/graphics/search-box/tab-search-site-up.png)");
		$('#site a').css("color", "#000000");
		$('#catalog').css("background-image", "url(/graphics/search-box/tab-books-more-up.png)");
		$('#catalog a').css("color", "#000000");
		$('#cddvd').css("background-image", "url(/graphics/search-box/tab-cds-dvds-up.png)");
		$('#cddvd a').css("color", "#000000");
		$('#article').css("background-image", "url(/graphics/search-box/tab-articles-up.png)");
		$('#article a').css("color", "#000000");
		$('#journal').css("background-image", "url(/graphics/search-box/tab-journals-down.png)");
		$('#journal a').css("color", "#ffffff");
		var usertext = $('#query').attr("value");
		var thisurl = $(this).attr("href");
		iiikwformcall(thisurl,usertext);
		$('#search-home-content').fadeTo("slow", 1);
		return false;
		
	});

	$('#utlol').attr('href', '/sitescripts/search-box/searchbox-voldemort-form.php?query=site');
	$('#utlol').click( function() {
		$('#search-home-content').animate({opacity:0}, 10);
		$('#site').css("background-image", "url(/graphics/search-box/tab-search-site-down.png)");
		$('#site a').css("color", "#ffffff");
		$('#catalog').css("background-image", "url(/graphics/search-box/tab-books-more-up.png)");
		$('#catalog a').css("color", "#000000");
		$('#cddvd').css("background-image", "url(/graphics/search-box/tab-cds-dvds-up.png)");
		$('#cddvd a').css("color", "#000000");
		$('#article').css("background-image", "url(/graphics/search-box/tab-articles-up.png)");
		$('#article a').css("color", "#000000");
		$('#journal').css("background-image", "url(/graphics/search-box/tab-journals-up.png)");
		$('#journal a').css("color", "#000000");
		var usertext = $('#query').attr("value");
		var thisurl = $(this).attr("href");
		iiikwformcall(thisurl,usertext);
		$('#search-home-content').fadeTo("slow", 1);
		return false;
		
	});
	

}); //close $(document)

