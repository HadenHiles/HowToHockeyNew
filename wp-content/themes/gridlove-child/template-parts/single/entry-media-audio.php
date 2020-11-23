<?php if ( $audio = hybrid_media_grabber( array( 'type' => 'audio', 'split_media' => true ) ) ): ?>
		<div class="entry-media">
			<?php if( gridlove_get_option('single_fimg') && $fimg = gridlove_get_featured_image( 'single', true ) ) : ?> 
				 <?php echo gridlove_wp_kses( $fimg ); ?>
			<?php endif; ?>
			<?php echo do_shortcode( $audio ); ?>
		</div>
<?php endif; ?>