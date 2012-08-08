<div id="search-main">
	
	<div id="search-wrap">
		<div id="leftside">
			<nav id="searchtabs">
				<ul class="text-stroke-white">
					<li id="all" class="active"><a href="/index-scout.html?searchtype=all">All</a></li>
					<li id="articles" class="inactive"><a href="/index-scout.html?searchtype=articles">Articles</a></li>
					<li id="catalog" class="inactive"><a href="#">Catalog</a></li>
					<li class="inactive"><a href="#">Databases</a></li>
					<li class="inactive"><a href="#">Journals</a></li>
					<li class="inactive"><a href="#">Site Search</a></li>
				</ul>
			</nav>
			
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
