<?php if( gridlove_post_display( 'ad_above' ) && $ad = gridlove_get_option('ad_above_single') ): ?>
	<div class="gridlove-ad"><?php echo do_shortcode( $ad ); ?></div>
<?php endif; ?>