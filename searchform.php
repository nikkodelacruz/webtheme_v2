<form method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="input-group">
		<input type="search" class="search-input form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Search...', 'norde' ); ?>" value="<?php echo get_search_query(); ?>" />
		<div class="input-group-append">
			<button type="submit" class="search-submit" id="searchsubmit"><i class="fas fa-search"></i></button>
		</div>
	</div>
</form>