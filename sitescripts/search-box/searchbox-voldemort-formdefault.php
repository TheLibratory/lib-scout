<div id="search-wrapper">
<div id="search-wrapper-top">
	<img src="/graphics/search-box/libsearch.png" alt="LIBsearch" class="libsearch" />
</div>
<div id="search-wrapper-bg">
<div id="search-wrapper-rght"></div>
<ul>
<li id="catalog"><a href="/index-summon.html?searchtype=catalog" id="iiikw" >Books &amp; More</a></li>
<li id="article"><a href="/index-summon.html?searchtype=metalib" id="metalib" >Articles</a></li>  
<li id="journal"><a href="/index-summon.html?searchtype=ejournal" id="ejournal" >Journals</a></li>
<li id="cddvd"><a href="/index-summon.html?searchtype=cdsdvds" id="cdsdvds" >CDs/DVDs</a></li>  
<li id="site"><a href="/index-summon.html?searchtype=site" id="utlol" >Site Search</a></li>

</ul>
<!--<div id="search-home-top"></div>-->
<div id="search-home">
<div id="search-home-content">
<?php 
if (isset($_GET[searchtype]))
{
	$searchtype = $_GET[searchtype];
	include('sitescripts/search-box/searchbox-voldemort-form.php');
}

else { 
	$searchtype = "catalog";
	include('sitescripts/search-box/searchbox-voldemort-form.php');
}
?>


</div>
<!-- end search home content -->

</div><!-- end search home -->
<!--<div id="search-home-bottom"></div>-->

<!-- end search-home-wrapper -->
<!--<div id="quick_morph">asdf</div>
<div id="quicklinks-tab">
<ul>
<li id="quick"><a href="#">QUICKLINKS</a></li>
</ul>
</div>-->
</div><!-- end search wrapper background -->
<div id="search-wrapper-bottom"></div>
</div><!-- End Search Wrapper -->  
  
