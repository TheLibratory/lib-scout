<div id="search-main">
	
	<div id="search-wrap">
		<div id="leftside">
			<nav id="searchtabs">
				<ul class="text-stroke-white">
					<li id="all" class="active"><a href="/index-scout.html?searchtype=all" id="all">All</a></li>
					<li id="articles" class="inactive"><a href="/index-scout.html?searchtype=articles" id="articles">Articles</a></li>
					<li id="catalog" class="inactive"><a href="/index-scout.html?searchtype=catalog" id="catalog">Catalog</a></li>
					<li id="databases" class="inactive"><a href="/index-scout.html?searchtype=databases" id="databases">Databases</a></li>
					<li id="journals" class="inactive"><a href="/index-scout.html?searchtype=journals" id="journals">Journals</a></li>
					<li id="site" class="inactive"><a href="/index-scout.html?searchtype=site" id="site">Site Search</a></li>
				</ul>
			</nav>
				<div id="bazinga">
					<?php 
					if (isset($_GET[searchtype]))
					{
						$searchtype = $_GET[searchtype];
						include('sitescripts/search-box-scout/searchbox-scout-form.php');
					}

					else { 
						$searchtype = "all";
						include('sitescripts/search-box-scout/searchbox-scout-form.php');
					}
					?>
				</div>
		</div>
	</div>
</div>
