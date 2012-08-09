<?php
if (isset($_GET['engine'])){$engine = $_GET['engine'];}
if (isset($_GET['subengine'])){$subengine = $_GET['subengine'];}
if (isset($_GET['query'])){$query = $_GET['query'];}
if (isset($_GET['article_option'])){$artoption = $_GET['article_option'];}

//includes libiprange to check library ips
include("../ipcheck.php");


if ($query == "") {
	header('Location: /');
	exit;
}
$checkengine = array("all", "articles", "catalog", "databases", "journals", "site");
if (!in_array($engine, $checkengine)) {
    header('Location: /');
}
if ($engine=="catalog" or $engine=="journals") {
	$checksubengine = array("any","books","cd","dvd","articles","map","ejournal","pjournal");
	if (!in_array($subengine, $checksubengine)) {
	    header('Location: /');
	}
}

if (isset($_GET['engine'])){ //Determine search URL based on input (engine, subengine)
	if ($engine=="all") {header("Location: http://utexas.summon.serialssolutions.com/search?s.q=". urlencode($query) .'');}
	else if ($engine=="articles") {
		//Deterine which flags are set for Article Options
		//If no options are selected
		if ($artoption == '') {
			header("Location: http://utexas.summon.serialssolutions.com/search?s.cmd=addFacetValueFilters(ContentType,Conference+Proceeding,Journal+Article,Market+Research,Newsletter,Newspaper+Article,Paper,Trade+Publication+Article)&s.q=" . urlencode($query) . '');
		}	
		else {
			//Grab each value set from form post for article_option
			$n = 0;
			foreach ($artoption as $f) {
				$n = $n + $f;//Sum them to determine appropriate behavior
			};
			if ($n == 3) { //If both are selected
				header('Location: http://utexas.summon.serialssolutions.com/search?s.cmd=addFacetValueFilters(IsFullText,true)&s.fvf%5B%5D=IsPeerReviewed,true,&s.fvf%5B%5D=ContentType,Newsletter,&s.fvf%5B%5D=ContentType,Market+Research,&s.fvf%5B%5D=ContentType,Trade+Publication+Article,&s.fvf%5B%5D=ContentType,Newspaper+Article,&s.fvf%5B%5D=ContentType,Paper,&s.fvf%5B%5D=ContentType,Conference+Proceeding,&s.fvf%5B%5D=ContentType,Journal+Article,&s.q=' . urlencode($query) . '');}
			//If only 'full text' is selected
			else if ($n == 2) {
				header('Location: http://utexas.summon.serialssolutions.com/search?s.cmd=addFacetValueFilters(IsFullText,true)&s.fvf%5B%5D=ContentType,Newsletter,&s.fvf%5B%5D=ContentType,Market+Research,&s.fvf%5B%5D=ContentType,Trade+Publication+Article,&s.fvf%5B%5D=ContentType,Newspaper+Article,&s.fvf%5B%5D=ContentType,Paper,&s.fvf%5B%5D=ContentType,Conference+Proceeding,&s.fvf%5B%5D=ContentType,Journal+Article,&s.q=' . urlencode($query) . '');}
			//If only 'peer-reviewed' is selected
			else if ($n == 1) {
				header('Location: http://utexas.summon.serialssolutions.com/search?s.cmd=addFacetValueFilters(IsPeerReviewed,true)&s.fvf%5B%5D=ContentType,Newsletter,&s.fvf%5B%5D=ContentType,Market+Research,&s.fvf%5B%5D=ContentType,Trade+Publication+Article,&s.fvf%5B%5D=ContentType,Newspaper+Article,&s.fvf%5B%5D=ContentType,Paper,&s.fvf%5B%5D=ContentType,Conference+Proceeding,&s.fvf%5B%5D=ContentType,Journal+Article,&s.q=' . urlencode($query) . '');}
		}
	}
	else if ($engine=="catalog") {
		//Do nothing yet
	}
	else if ($engine=="databases") {
		header('Location: http://www.lib.utexas.edu/search/search.php?filter=1&query=Databases+' . urlencode($query) . '');
	}
	else if ($engine=="journals") {
		if ($subengine=="ejournal"){header('Location: http://findit.lib.utexas.edu/utaustin/az?param_perform_value=searchTitle&param_type_value=textSearch&param_chinese_checkbox_active=1&param_pattern_value='. urlencode($query) .'');}
		else if($subengine=="pjournal"){header('Location: http://catalog.lib.utexas.edu/search/t?SEARCH='. urlencode($query) .'&searchscope=5');}
	}
	else if ($engine=="site") {
		header('Location: http://www.lib.utexas.edu/search/search.php?filter=1&query='. urlencode($query) .'');
	}
	else {header('Location: /');}	
}


	// -------------- OLD ENGINE CODE -------------------
	// else if ($engine=="catalog-vs-worldcat"){
		// if ($subengine=="iiikw"){header('Location: http://catalog.lib.utexas.edu/search/X?SEARCH='. urlencode($query) .'');}
		// else if ($subengine=="worldcat"){header('Location: http://www.worldcat.org/search?q='. urlencode($query) .'');}
		// else if ($subengine=="googlebooks"){header('Location: http://books.google.com/books?q='. urlencode($query) .'&btnG=Search+Books');}
	// }
	// else if ($engine=="cddvd") {
		// if ($subengine=="cd"){header('Location: http://catalog.lib.utexas.edu/search/X?SEARCH='. urlencode($query) .'&m=h');}
		// else if($subengine=="dvd"){header('Location: http://catalog.lib.utexas.edu/search/X?SEARCH='. urlencode($query) .'&m=l');}
	// }
	// else if ($engine=="metalib") {
		// if ($subengine=="article"){
		  
			// $inter = "<html>
			// <head>
			// <meta http-equiv='refresh' content='30;URL=";
		  
				// if (libiprange()==0){
					// $url = "http://crosssearch.lib.utexas.edu/V/?func=meta-1-check&mode=advanced&force_login=n&ckbox=UTX04336&ckbox=UTX03930&ckbox=UTX03539&ckbox=UTX03565&institute=UTAUSTIN&find_code_2=WRD&find_request_2=". urlencode($query) ."&group_number=000001614";
				// }
				// else {
					// $url = "http://crosssearch.lib.utexas.edu/V/?func=meta-1-check&mode=advanced&force_login=y&ckbox=UTX04336&ckbox=UTX03930&ckbox=UTX03539&ckbox=UTX03565&find_code_2=WRD&find_request_2=". urlencode($query) ."&group_number=000001614";
				// }
		
			// $inter = $inter . $url . "' />

			// <STYLE TYPE='text/css'>
				// BODY { font-family: arial, helvetica; margin-top: 2em; margin-left: 8em; margin-right: 8em };

			// </STYLE>
			// </head>"; 

			// $inter = $inter . "<body><p><strong>New Search Coming Soon!</strong></p>

			// <p>
			// CrossSearch will soon be replaced by a new search service that will let you find more articles even faster. On May 22 this search box will seamlessly transition to the new service.
			// </p>
			 
			// <p>
			// This is great news for your research.  However, personal CrossSearch accounts will not transfer.  If you have a CrossSearch account you will need to email any saved records or searches to yourself by Monday,  May 21.  These accounts will not be accessible after that date. <a href='http://screencast.com/t/BWPwCt8JxkaP'>Short video Tutorial on saving records</a>.
			// </p>

			// <p>
			 // If you need help or more information, please contact the <a href='http://www.lib.utexas.edu/services/reference/'>Ask a Librarian service</a>.
			 // </p>
			 
			 // <p>You will be automatically redirected to CrossSearch in 30 seconds, or you can <a href='";
			 
			// $inter = $inter . $url . "'>continue now</a>.</p>

			// </body></html>";
			
			// echo ($inter);
		// }
      
		// else if($subengine=="googlescholar"){header('Location: http://ezproxy.lib.utexas.edu/login?url=http://scholar.google.com/scholar?q='. urlencode($query) .'&hl=en&lr=&btnG=Search');}
      
		// else if($subengine=="ebsco"){header('Location: http://search.ebscohost.com/login.aspx?direct=true&authtype=ip,uid&bQuery='. urlencode($query) .'&db=a9h&db=bth&db=psyh');}
	// }
	// else if ($engine=="voldemort") {
      // if ($subengine=="article"){
		  // header('Location: http://utexas.summon.serialssolutions.com/search?s.cmd=addFacetValueFilters(ContentType,Conference+Proceeding,Journal+Article,Market+Research,Newsletter,Newspaper+Article,Paper,Trade+Publication+Article)&s.q='. urlencode($query));
	  // }
      // else if($subengine=="googlescholar"){header('Location: http://ezproxy.lib.utexas.edu/login?url=http://scholar.google.com/scholar?q='. urlencode($query) .'&hl=en&lr=&btnG=Search');}
      // else if($subengine=="ebsco"){header('Location: http://search.ebscohost.com/login.aspx?direct=true&authtype=ip,uid&bQuery='. urlencode($query) .'&db=a9h&db=bth&db=psyh');}
	// }
	// else if ($engine=="journals") {
      // if ($subengine=="ejournal"){header('Location: http://findit.lib.utexas.edu/utaustin/az?param_perform_value=searchTitle&param_type_value=textSearch&param_chinese_checkbox_active=1&param_pattern_value='. urlencode($query) .'');}
			// //header('Location: http://sfx.lib.utexas.edu:9003/sfxtst2/az?param_perform_value=searchTitle&param_type_value=textSearch&param_chinese_checkbox_active=1&param_pattern_value='. $query .'');}
      // else if($subengine=="pjournal"){header('Location: http://catalog.lib.utexas.edu/search/t?SEARCH='. urlencode($query) .'&searchscope=5');}
   // }
   // else if ($engine=="UTLOL") {
   // header('Location: http://www.lib.utexas.edu/search/search.php?filter=1&query='. urlencode($query) .'');
   // }
	// else {header('Location: /');}
// }

//if (isset($_GET['param_pattern_value'])){
//       header('Location: http://catalog.lib.utexas.edu/search/X?SEARCH='. $_GET['param_pattern_value'] .'');
//}
?>