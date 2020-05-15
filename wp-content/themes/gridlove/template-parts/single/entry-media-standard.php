<?php if( gridlove_post_display('fimg') && gridlove_featured_img_paginated() && $fimg = gridlove_get_featured_image( 'single', true ) ) : ?>
    <div class="entry-image">
        <?php echo gridlove_wp_kses( $fimg ); ?>
        <?php if( gridlove_get_option( 'single_fimg_cap' ) && $caption = get_post( get_post_thumbnail_id())->post_excerpt) : ?>
				<figure class="wp-caption-text"><?php echo wp_kses_post( $caption );  ?></figure>
		<?php endif; ?>
    </div>
<?php endif; ?>