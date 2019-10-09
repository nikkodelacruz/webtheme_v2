<?php 

/**
 * Global JS variable
 */
if ( ! function_exists( 'global_js_var' ) ) 
{
	function global_js_var() 
	{
		 
	?>
		<script type="text/javascript">
			var themeurl = '<?php echo esc_js( get_template_directory_uri() ); ?>';
			var home_url = "<?php echo esc_js( home_url() ); ?>";
	        var site_name = "<?php echo esc_js( get_bloginfo('name') ); ?>";
	        var logo_url = "<?php echo esc_js( theme_logo() ); ?>";
		</script>
	<?php
	}
	add_action('wp_head','global_js_var');
}