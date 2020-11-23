<?php if( gridlove_get_option( 'single_infinite_scroll' ) && $next_link = get_previous_post_link('%link','%title',true) ) : ?>
	<div class="gridlove-pagination gridlove-infinite-scroll-single">
	   <?php echo wp_kses_post( $next_link ); ?>
	    <div class="gridlove-loader">
		  <div class="double-bounce1"></div>
		  <div class="double-bounce2"></div>
	    </div>
	</div>
<?php endif; ?>