<?php
if (isset($searchtype)){
$query = $searchtype;
}
else if (isset($_GET[query])){
$query = $_GET[query];
}
else {
$query = "site";
}

if ($query=="all"){
echo '
			<div id="searchcontent" class="gradient">
				<div id="searchtop">
					<div style="float:left;">
					<img src="img/logo.png" style="vertical-align: middle" />
					</div>
					
					<div style="margin-top:1em;">
					<form>
						<input type="textfield" size="50" name="query" id="query">
						<input class="findbutton" type="button" value="find">
					
					</input>
					<p style="margin-top: 0; float: left;">Find articles, books, media, and more in one search</p>
					<p style="float: right; margin-top: 0; clear: right;"><a href="#">Advanced Search</a></p>
					<div style="clear:both;"></div>
					</form>
					</div>
				</div>
				<div id="searchbottom">
					<ul id="searchbottom-links">
						<li><a href="#">scoUT Mobile</a></li>
						<li><a href="#">Search Tips</a></li>
						<li><a href="#">Feedback</a></li>
					</ul>	
					<div style="clear:both;"></div>
				</div>
			</div>
';
}

else if ($query=="articles"){
echo '
			<div id="searchcontent" class="gradient">
				<div id="searchtop">
					<div style="float:left;">
					<img src="img/logo.png" style="vertical-align: middle" />
					</div>
					
					<div style="margin-top:1em;">
						<form>
							<input type="textfield" size="50" name="query" id="query" />
							<input class="findbutton" type="button" value="find" />
							<p style="margin-top: 0; float: left;">Find articles in journals and magazines</p>
							<p style="float: right; margin-top: 0; clear:right; "><a href="#">Advanced Search</a></p>
							<div style="clear:both;"></div>
								<div style="float: left; margin: 0 90px;">
									<p style="display: inline;"><input type="checkbox" name="article_option" value="peer-review" id="peer-review" checked="checked" style="position: relative; top: 2px;" /> Peer-reviewed only</p>
									<p style="display: inline;"><input type="checkbox" name="article_option" value="full-text" id="full-text" checked="checked" style="position: relative; top: 2px;" /> Full text only </p>
								</div>
							<div style="clear:both;"></div>
						</form>
					</div>
				</div>
				<div id="searchbottom">
					<ul id="searchbottom-links">
						<li style="float: left;"><a href="#">scoUT Mobile</a></li>
						<li style="float: right;"><a href="#">Google Scholar</a></li>
					</ul>	
					<div style="clear:both;"></div>
				</div>
			</div>
';
}
else if ($query=="journal"){
echo '
<form action="/sitescripts/search-box/searchbox.php" method="get">
        <label for="query" id="querylabel">JOURNALS</label>
        <input type="hidden" id="engine" name="engine" value="journals" />
        <input type="text" name="query" id="query" title="" value="" />
        <input type="image" src="/graphics/search-box/button-search-up.png" alt="Find" class="find" value="Find" />
        <br />
        <input type="radio" name="subengine" id="electjournal" value="ejournal" checked="checked" />
        <label for="ejournal" style="display:inline;">Electronic Journals</label>
        <input type="radio" name="subengine" id="printjournal" value="pjournal" />
        <label for="pjournal" style="display:inline;">Print Journals</label>
</form>
';
}
else if ($query=="database"){
echo '
<form action="http://www.lib.utexas.edu/indexes/results.html" 
method="get">
        <label for="query" id="querylabel">DATABASES</label>
        <input type="hidden" id="engine" name="engine" value="metalib" />
        <input type="text" name="query" id="query" title="" value="" />
        <input type="image" src="/graphics/search-box/button-search-up.png" alt="Find" class="find" value="Find" />
</form>
<p style="font-size:10px;line-height:9px;">Browse:

<a href="/indexes/titles.html?let=A">A</a>

 <a href="/indexes/titles.html?let=B">B</a>

 <a href="/indexes/titles.html?let=C">C</a>

 <a href="/indexes/titles.html?let=D">D</a>

 <a href="/indexes/titles.html?let=E">E</a>

 <a href="/indexes/titles.html?let=F">F</a>

 <a href="/indexes/titles.html?let=G">G</a>

 <a href="/indexes/titles.html?let=H">H</a>

 <a href="/indexes/titles.html?let=I">I</a>

 <a href="/indexes/titles.html?let=J">J</a>

 <a href="/indexes/titles.html?let=K">K</a>

 <a href="/indexes/titles.html?let=L">L</a>

 <a href="/indexes/titles.html?let=M">M</a>

 <a href="/indexes/titles.html?let=N">N</a>

 <a href="/indexes/titles.html?let=O">O</a>

 <a href="/indexes/titles.html?let=P">P</a> Q

 <a href="/indexes/titles.html?let=R">R</a>

 <a href="/indexes/titles.html?let=S">S</a>

 <a href="/indexes/titles.html?let=T">T</a>

 <a href="/indexes/titles.html?let=U">U</a>

 <a href="/indexes/titles.html?let=V">V</a>

 <a href="/indexes/titles.html?let=W">W</a> X Y Z
</p>
';
}

else {
echo '
			<div id="searchcontent" class="gradient">
				<div id="searchtop">
					<div style="float:left;">
					<img src="img/logo.png" style="vertical-align: middle" />
					</div>
					
					<div style="margin-top:1em;">
					<form>
						<input type="textfield" size="50" name="query" id="query">
						<input class="findbutton" type="button" value="find">
					
					</input>
					<p style="margin-top: 0; float: left;">Find articles, books, media, and more in one search</p>
					<p style="float: right; margin-top: 0;"><a href="#">Advanced Search</a></p>
					<div style="clear:both;"></div>
					</form>
					</div>
				</div>
				<div id="searchbottom">
					<ul id="searchbottom-links">
						<li><a href="#">scoUT Mobile</a></li>
						<li><a href="#">Search Tips</a></li>
						<li><a href="#">Feedback</a></li>
					</ul>	
					<div style="clear:both;"></div>
				</div>
			</div>
';
}

?>
