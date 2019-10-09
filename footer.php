    <footer>
    	<?php //if (!is_front_page()): ?>
	        <?php if ( !isset($_GET['fl_builder']) ): ?>
			<?php //echo do_shortcode('[fl_builder_insert_layout slug="footer-section"]'); ?>
	        <?php endif ?>
    	<?php //endif ?>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>