<?php

//includes libiprange to check library ips
include("../ipcheck.php");

$inter = "<html>
<head>
<meta http-equiv='refresh' content='30;URL=";


$url = 'http://utexas.summon.serialssolutions.com/search?s.cmd=addFacetValueFilters(ContentType,Conference+Proceeding,Journal+Article,Market+Research,Newsletter,Newspaper+Article,Paper,Trade+Publication+Article)';

$inter = $inter . $url . "' />

<STYLE TYPE='text/css'>
	BODY { font-family: arial, helvetica; margin-top: 2em; margin-left: 8em; margin-right: 8em };

</STYLE>
</head>"; 

$inter = $inter . "<body><p><strong>New Search Is Here!</strong></p>

<p>
CrossSearch has been replaced by a new search service that will let you find more articles even faster. On May 22 this search was transitioned to the new service.
</p>
 
<p>
 If you need help or more information, please contact the <a href='http://www.lib.utexas.edu/services/reference/'>Ask a Librarian service</a>.
 </p>
 
 <p>You will be automatically redirected to the new search service in 30 seconds, or you can <a href='";
 
$inter = $inter . $url . "'>continue now</a>.</p>

</body></html>
";

echo ($inter);


?>
