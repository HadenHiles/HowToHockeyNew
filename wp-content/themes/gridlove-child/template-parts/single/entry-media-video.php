<?php if ( $video = hybrid_media_grabber( array( 'type' => 'video', 'split_media' => true ) ) ): ?>
		<div class="entry-media"><?php echo do_shortcode( $video ); ?></div>
<?php endif; ?>