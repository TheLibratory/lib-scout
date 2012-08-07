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

// --- All Tab ---
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
						<li><a href="http://utexas.summon.serialssolutions.com/">scoUT Mobile</a></li>
						<li><a href="#">Search Tips</a></li>
						<li><a href="#">Feedback</a></li>
					</ul>	
					<div style="clear:both;"></div>
				</div>
			</div>
';
}

// --- Articles Tab ---
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
						<li style="float: left;"><a href="http://utexas.summon.serialssolutions.com/">scoUT Mobile</a></li>
						<li style="float: right;"><a href="http://scholar.google.com/">Google Scholar</a></li>
					</ul>	
					<div style="clear:both;"></div>
				</div>
			</div>
';
}

// --- Catalog Tab ---
else if ($query=="catalog"){
echo '
				<div id="searchcontent" class="gradient">
					<div id="searchtop">
						<div style="margin-top:1em;">
							<form>
								<p style="display: inline;">Search Catalog for</p>
								<input type="textfield" size="25" name="query" id="query">
								<select name="subengine">
									<option value="key-phrase">keyword or phrase</option>
									<option value="author">author</option>
									<option value="title">title</option>
									<option value="journal">journal title</option>
									<option value="isbn-issn">ISBN/ISSN</option>
									<option value="oclc">OCLC</option>
								</select>
								<input class="findbutton" type="button" value="find"></input>
								<p style="margin-top: 0; margin-left: 10.25em; float: left;">Books, journals, DVDs and more</p>
								<p style="float: right; margin-top: 0; clear: right;"><a href="#">Advanced Search</a></p>
								<div style="clear:both;"></div>
								<table width="100%">
									<tr>
										<td>
											<input type="checkbox" name="format" value="any" class="checkbox" checked="yes">Any format</input>
										</td>
										<td>
											<input type="checkbox" name="format" value="book" class="checkbox">Books, eBooks</input>
										</td>
										<td>
											<input type="checkbox" name="format" value="smallprint" class="checkbox">Journals, newspapers, magazines</input>
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" name="format" value="dvd" class="checkbox">DVDs</input>
										</td>
										<td>
											<input type="checkbox" name="format" value="cd" class="checkbox">CDs</input>
										</td>
										<td>
											<input type="checkbox" name="format" value="map" class="checkbox">Maps</input>
										</td>
								</table>
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

// --- Databases Tab ---
else if ($query=="databases"){
echo '
				<div id="searchcontent" class="gradient">
					<div id="searchtop">
						<div style="margin-top:1em;">
							<form>
								<input type="textfield" size="65" name="query" id="query">
								<input class="findbutton" type="button" value="find"></input>
								<p style="margin-top: 0; float: left; margin-left: 5px;">Find databases by name or subject</p>
								<p style="float: right; margin-top: 0; clear: right;"><a href="#">Advanced Search</a></p>
								
								<p style="margin-top: 0; float: left; margin-left: 5px;">Recommended Databases: <a href="#">Academic Search Complete</a>, <a href="#">JSTOR</a>, <a href="#">PubMed</a></p>
								<div style="clear:both;"></div>
							</form>
						</div>
					</div>
					
					<div id="searchbottom">
						<p class="moredatabases">
							<a href="/indexes/titles.php?let=0-9">0-9</a>
							<a href="/indexes/titles.html?let=2">2</a>
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
							<a href="/indexes/titles.html?let=P">P</a>
							<a href="/indexes/titles.html?let=R">R</a>
							<a href="/indexes/titles.html?let=S">S</a>
							<a href="/indexes/titles.html?let=T">T</a>
							<a href="/indexes/titles.html?let=U">U</a>
							<a href="/indexes/titles.html?let=V">V</a>
							<a href="/indexes/titles.html?let=W">W</a>
						</p>
						<p class="moredatabases2">
							<a href="/indexes/titles.php?let=[A-Z]">View all databases</a>
							<a href="/indexes/subjectpopup.php">Browse by subject</a>
							<a href="/indexes/typepopup.php">Browse by type</a>
						</p>
						<div style="clear:both;"></div>
					</div>
				</div>
';
}

// --- Journals Tab ---
else if ($query=="journals"){
echo '
				
';
}

// --- Site Search Tab ---
else if ($query=="site"){
echo '
				
';
}

// --- Contingency plan ---
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
