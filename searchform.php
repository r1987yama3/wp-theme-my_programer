<!--<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>

Uncomment for regular search
-->

<div id="sarea">
	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
		<input id="searchbox" type="text" value="<?php the_search_query(); ?>" name="s" onfocus="this.select()" /><br />
		<input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/btn.png" id="go" name="search" value="Search" />
	</form>
</div>
