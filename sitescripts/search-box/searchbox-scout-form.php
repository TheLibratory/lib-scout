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

if ($query=="site"){
echo '
<form action="/sitescripts/search-box/searchbox.php" method="get">
        <fieldset><label for="query" id="querylabel">SITE SEARCH</label>
        <input type="hidden" id="engine" name="engine" value="UTLOL" />
        <input type="text" name="query" id="query" title="" value="" />
        <input type="image" src="/graphics/search-box/button-search-up.png" alt="Find" class="find" value="Find" 
/></fieldset>
</form>
';
}
else if ($query=="catalog"){
echo '
<form action="/sitescripts/search-box/searchbox.php" method="get">
        <fieldset><label for="query" id="querylabel">BOOKS &amp; MORE</label>
        <input type="hidden" id="engine" name="engine" value="catalog-vs-worldcat" />
        <input type="text" name="query" id="query" title="" value=""   />
        <input type="image" src="/graphics/search-box/button-search-up.png" alt="Find" class="find" value="Find" />
        <br />
        <input type="radio" name="subengine" id="search-catalog" value="iiikw" checked="checked" />
	     <label for="search-catalog" style="display:inline;">Catalog</label>
	    <input type="radio" name="subengine" id="search-worldcat" value="worldcat" />
             <label for="search-worldcat" style="display:inline;">WorldCat</label>
             <input type="radio" name="subengine" id="search-googlebooks" value="googlebooks" />
             <label for="search-googlebooks" style="display:inline;">Google Books</label>
	</fieldset>
</form>
<p class="search-home-links"><a 
href="http://catalog.lib.utexas.edu/search/X">ADVANCED CATALOG SEARCH</a></p>
';
}
else if ($query=="all"){
echo '
<form action="/sitescripts/search-box/searchbox.php" method="get">
        <label for="query" id="querylabel">All</label>
        <input type="hidden" id="engine" name="engine" value="voldemort" />
        <input type="text" name="query" id="query" title="" value="" />
        <input type="image" src="/graphics/search-box/button-search-up.png" alt="Find" class="find" value="Find" />
</form>
';
}
else if ($query=="metalib"){
echo '
<form action="/sitescripts/search-box/searchbox.php" method="get">
        <label for="query" id="querylabel">ARTICLES</label>
        <input type="hidden" id="engine" name="engine" value="voldemort" />
        <input type="text" name="query" id="query" title="" value="" />
        <input type="image" src="/graphics/search-box/button-search-up.png" alt="Find" class="find" value="Find" />
	<br />
        <input type="radio" name="subengine" id="findarticle" value="article" checked="checked" />
        <label for="findarticle" style="display:inline;">FindArticles</label>
        <input type="radio" name="subengine" id="googlescholar" value="googlescholar" />
        <label for="googlescholar" style="display:inline;">Google Scholar</label>
</form>
<p class="search-home-links"><a href="http://www.lib.utexas.edu/indexes/">MORE DATABASES</a></p>
<p class="moredatabases">
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

?>
