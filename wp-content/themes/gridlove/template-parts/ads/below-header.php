<?php if( gridlove_can_display_ads() && $ad = gridlove_get_option('ad_below_header') ): ?>
	<div class="container gridlove-ad-below-header"><div class="gridlove-ad"><?php echo do_shortcode( $ad ); ?></div></div>
<?php endif; ?>