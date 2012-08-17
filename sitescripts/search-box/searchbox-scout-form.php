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
					<img src="/images/scout/logo2.png" style="vertical-align: middle" alt="powered by scoUT" />
					</div>
					
					<div style="margin-top:1em;">
					<form action="/sitescripts/search-box-scout/searchbox-scout.php" method="get">
					<fieldset>
						<input type="hidden" id="engine" name="engine" value="all" />
						<input type="textfield" size="50" name="query" id="query">
						<input type="submit" class="findbutton" value="Find"></input>
						<p><label for="query">Find articles, books, media, and more in one search</label></p>
						<div style="clear:both;"></div>
					</fieldset>
					</form>
					</div>
				</div>
				<div id="searchbottom">
					<ul id="searchbottom-links">
						<li><a href="http://utexas.summon.serialssolutions.com/search/mobile">scoUT Mobile</a></li>
						<li><a href="http://utexas.summon.serialssolutions.com/advanced">Advanced Search</a></li>
						<li><a href="#">Search Tips</a></li>
						<li><a href="http://www.surveymonkey.com/s/YNV2T6L">Feedback</a></li>
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
					<img src="/images/scout/logo2.png" style="vertical-align: middle" alt="powered by scoUT" />
					</div>
					
					<div style="margin-top:1em;">
						<form action="/sitescripts/search-box-scout/searchbox-scout.php" method="get">
						<fieldset>
						<input type="hidden" id="engine" name="engine" value="articles" />
							<input type="textfield" size="50" name="query" id="query" />
							<input class="findbutton" type="submit" value="Find" />
							<p><label for="query">Find articles in journals and magazines</label></p>
							<div style="clear:both;"></div>
								<div style="float: left; margin: 0">
									<p style="display: inline;"><input type="checkbox" name="article_option[]" value="1" id="peer-review" checked="checked" style="position: relative; top: 2px;" /><label for="peer-review"> Peer-reviewed only</label></p>
									<p style="display: inline;"><input type="checkbox" name="article_option[]" value="2" id="full-text" checked="checked" style="position: relative; top: 2px;" /><label for="full-text"> Full text only</label></p>
								</div>
							<div style="clear:both;"></div>
						</fieldset>
						</form>
					</div>
				</div>
				<div id="searchbottom">
					<ul id="searchbottom-links">
						<li style="float: left;"><a href="http://utexas.summon.serialssolutions.com/search/mobile">scoUT Mobile</a></li>
						<li><a href="http://utexas.summon.serialssolutions.com/advanced">Advanced Search</a></li>
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
							<form action="/sitescripts/search-box-scout/searchbox-scout.php" method="get">
							<fieldset>
							<input type="hidden" id="engine" name="engine" value="catalog" />
								<p style="display: inline;">Search <a href="http://catalog.lib.utexas.edu/">Catalog</a> for</p>
								<input type="textfield" size="23" name="query" id="query">
								<select name="parameter">
									<option value="key">keyword or phrase</option>
									<option value="author">author</option>
									<option value="title">title</option>
									<option value="isbn">ISBN/ISSN</option>
									<option value="oclc">OCLC</option>
								</select>
								<input class="findbutton" type="submit" value="Search"></input>
								<p style="margin-left: 10.25em"><label for="query">Books, journals, DVDs and more</label></p>
								<div style="clear:both;"></div>
								<table width="100%">
									<tr>
										<td>
											<input type="radio" name="subengine" value="any" class="checkbox" checked="yes" id="any" /><label for="any">Any format</label>
										</td>
										<td>
											<input type="radio" name="subengine" value="books" class="checkbox" id="books" /><label for="books">Books, eBooks</label>
										</td>
										<td>
											<input type="radio" name="subengine" value="articles" class="checkbox" id="article" /><label for="article">Journals, newspapers, magazines</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="radio" name="subengine" value="dvd" class="checkbox" id="dvd" /><label for="dvd">DVDs</label>
										</td>
										<td>
											<input type="radio" name="subengine" value="cd" class="checkbox" id="cd" /><label for="cd">CDs</label>
										</td>
										<td>
											<input type="radio" name="subengine" value="map" class="checkbox" id="map" /><label for="map">Maps</label>
										</td>
								</table>
							</fieldset>
							</form>
						</div>
					</div>
					
					<div id="searchbottom">
						<ul id="searchbottom-links">
							<li><a href="http://catalog.lib.utexas.edu/search/X">Advanced Catalog Search</a></li>
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
							<form action="/sitescripts/search-box-scout/searchbox-scout.php" method="get">
							<fieldset>
							<input type="hidden" id="engine" name="engine" value="databases" />
								<input type="textfield" size="65" name="query" id="query">
								<input class="findbutton" type="submit" value="Find"></input>
								<p style="margin-left: .5em;"><label for="query">Find databases by name or subject</label></p>
								<p style="margin-top: 0; float: left; margin-left: .5em;">Popular Databases: <a href="/indexes/titles.php?id=6">Academic Search Complete</a>, <a href="/indexes/titles.php?id=214">JSTOR</a>, <a href="/indexes/titles.php?id=299">PubMed</a></p>
								<div style="clear:both;"></div>
							</fieldset>
							</form>
						</div>
					</div>
					
					<div id="searchbottom">
						<p class="moredatabases">
							<a href="/indexes/titles.php?let=0-9">0-9</a>
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
							<a href="/indexes/titles.html?let=Z">Z</a>
						</p>
						<ul id="searchbottom-links">
								<li><a href="/indexes/titles.php?let=[A-Z]">View all databases</a></li>
								<li><a href="/indexes/subjectpopup.php">Browse by subject</a></li>
								<li><a href="/indexes/typepopup.php">Browse by type</a></li>
						</ul>
						<div style="clear:both;"></div>
					</div>
				</div>
';
}

// --- Journals Tab ---
else if ($query=="journals"){
echo '
			<div id="searchcontent" class="gradient">
					<div id="searchtop">
						<div style="margin-top:1em;">
							<form action="/sitescripts/search-box-scout/searchbox-scout.php" method="get">
							<fieldset>
							<input type="hidden" id="engine" name="engine" value="journals" />
								<input type="textfield" size="65" name="query" id="query">
								<input class="findbutton" type="submit" value="Find"></input>
								<div style="clear:both;"></div>
								<input type="radio" name="subengine" value="ejournal" checked="yes" id="ejournal" /><span><label for="ejournal">Available online</label></span>
								<input type="radio" name="subengine" value="pjournal" id="pjournal" /><span><label for="pjournal">Available in print</label></span>
								<p style="margin-top: 1em;"><a href="/indexes/citation/">Find article from a citation</a></p>
								<div style="clear:both;"></div>
							</fieldset>
							</form>
						</div>
					</div>
					
					<div id="searchbottom">
						<p class="moredatabases">Browse online Journals by title</p>
						<p class="moredatabases">
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=&param_perform_save=searchTitle&param_letter_group_script_save=&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_jumpToPage_save=1&param_type_save=textSearch&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=0%2C1%2C2%2C3%2C4%2C5%2C6%2C7%2C8%2C9&param_letter_group_script_value=Latin">0-9</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_letter_group_script_save=Latin&param_current_view_save=table&param_category_save=2&param_textSearchType_save=contains&param_lang_save=eng&param_chinese_checkbox_type_save=Pinyin&param_perform_save=searchTitle&param_letter_group_save=0%2C1%2C2%2C3%2C4%2C5%2C6%2C7%2C8%2C9&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=A&param_letter_group_script_value=Latin">A</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=B&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=B&param_letter_group_script_value=Latin">B</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=B&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=C&param_letter_group_script_value=Latin">C</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=C&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=D&param_letter_group_script_value=Latin">D</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=D&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=E&param_letter_group_script_value=Latin">E</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=E&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=F&param_letter_group_script_value=Latin">F</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=F&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=G&param_letter_group_script_value=Latin">G</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=G&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=H&param_letter_group_script_value=Latin">H</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=H&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=I&param_letter_group_script_value=Latin">I</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=I&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=J&param_letter_group_script_value=Latin">J</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=J&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=K&param_letter_group_script_value=Latin">K</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=K&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=L&param_letter_group_script_value=Latin">L</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=L&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=M&param_letter_group_script_value=Latin">M</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=M&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=N&param_letter_group_script_value=Latin">N</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=N&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=O&param_letter_group_script_value=Latin">O</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=O&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=P&param_letter_group_script_value=Latin">P</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=P&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=Q&param_letter_group_script_value=Latin">Q</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=Q&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=R&param_letter_group_script_value=Latin">R</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=R&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=S&param_letter_group_script_value=Latin">S</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=S&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=T&param_letter_group_script_value=Latin">T</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=T&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=U&param_letter_group_script_value=Latin">U</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=U&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=V&param_letter_group_script_value=Latin">V</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=V&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=W&param_letter_group_script_value=Latin">W</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=W&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=X&param_letter_group_script_value=Latin">X</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=X&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=Y&param_letter_group_script_value=Latin">Y</a>
							<a href="http://findit.lib.utexas.edu/utaustin/az?&param_sid_save=239076df43b3099044faa5e68d3650de&param_category_search_type_save=browseCategory&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=Y&param_perform_save=searchTitle&param_letter_group_script_save=Latin&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_pattern_save=&param_jumpToPage_save=&param_type_save=browseLetterGroup&param_category_save=2&param_textSearchType_save=contains&param_ui_control_scripts_save=&&param_type_value=browseLetterGroup&param_jumpToPage_value=&param_pattern_value=&param_letter_group_value=Z&param_letter_group_script_value=Latin">Z</a>
						</p>
						<div style="clear:both;"></div>
					</div>
				</div>	
';
}

// --- Site Search Tab ---
else if ($query=="site"){
echo '

			<div id="searchcontent" class="gradient">
					<div id="searchtop">
						<div style="margin-top:1em;">
							<form action="/sitescripts/search-box-scout/searchbox-scout.php" method="get" name="sitesearch" id="googimg">
							<fieldset>
							<input type="hidden" id="engine" name="engine" value="site" />
								<input type="textfield" size="65" name="query" id="query">
								<input class="findbutton" type="submit" value="Search"></input>
								<p style="margin-left: .5em;"><label for="query">Search our site for things like <a href="/about/directory">staff</a>, <a href="/about/hours">hours</a>, and <a href="/services/ils">interlibrary services</a></label></p>
								<div style="clear:both;"></div>
							</fieldset>
							</form>
						</div>
					</div>
					
					<div id="searchbottom">
						<ul id="searchbottom-links">
							<li><a href="/about/hours/">Hours</a></li>
							<li><a href="/about/librarymap/">Library Map</a></li>
							<li><a href="/services/study.html">Study Spaces</a></li>
							<li><a href="/news">News</a></li>
							<li><a href="/indexes/index.php">Databases</a></li>
						</ul> 
						<div style="clear:both;"></div>
					</div>
				</div>				
				<script type="text/javascript" language="javascript">
				 (function() {
					var id = document.getElementById("googimg");
					if (id && id.query) {
					  var name = id.query;
					  var unclicked = function() {
						if (name.value == "") {
							name.style.background = "#ffffff url(sitescripts/search-box-scout/googbg.png) right no-repeat";
						} else { name.style.background = "#ffffff"; }
					  };
					  var clicked = function() {
						name.style.background = "#ffffff";
					  };
					name.onfocus = clicked;
					name.onblur = unclicked;
					unclicked();
					}
				  })();
				</script>
';
}

// --- Contingency plan ---
else {
echo '
			<div id="searchcontent" class="gradient">
				<div id="searchtop">
					<div style="float:left;">
					<img src="/images/scout/logo2.png" style="vertical-align: middle" />
					</div>
					
					<div style="margin-top:1em;">
					<form action="/sitescripts/search-box-scout/searchbox-scout.php" method="get">
					<fieldset>
						<input type="hidden" id="engine" name="engine" value="all" />
						<input type="textfield" size="50" name="query" id="query">
						<input type="submit" class="findbutton" value="Find"></input>
						<p style="margin-top: 0; float: left;">Find articles, books, media, and more in one search</p>
						<p style="float: right; margin-top: 0; clear: right;"><a href="http://utexas.summon.serialssolutions.com/advanced">Advanced Search</a></p>
						<div style="clear:both;"></div>
					</fieldset>
					</form>
					</div>
				</div>
				<div id="searchbottom">
					<ul id="searchbottom-links">
						<li><a href="http://utexas.summon.serialssolutions.com/">scoUT Mobile</a></li>
						<li><a href="#">Search Tips</a></li>
						<li><a href="http://www.surveymonkey.com/s/YNV2T6L">Feedback</a></li>
					</ul>	
					<div style="clear:both;"></div>
				</div>
			</div>
';
}

?>