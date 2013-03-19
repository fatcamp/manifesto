<form action="<?php echo esc_url( home_url( '/' ) ); ?>" id="searchform" method="get">
	<label for="s">Search</label>
    <input type="text" id="s" name="s" placeholder="<?php the_search_query(); ?>" />
    <input type="submit" value="Search" id="searchsubmit" />
</form>