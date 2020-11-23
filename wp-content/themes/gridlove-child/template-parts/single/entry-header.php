<div class="entry-header">
	<?php if( $breadcrumbs = gridlove_breadcrumbs() ): ?>
        <?php echo wp_kses_post( $breadcrumbs ); ?>
    <?php endif; ?>
	<div class="entry-category">
	    <?php if( $icon = gridlove_get_option('single_icon') ): ?>
	        <?php echo gridlove_get_format_icon(); ?>
	    <?php endif; ?>

	    <?php if( gridlove_get_option('single_cat') ) : ?>
	        <?php echo gridlove_get_category(); ?>
	    <?php endif; ?>
	</div>

    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    <?php if( $meta = gridlove_get_meta_data('single') ) : ?>
    	<div class="entry-meta"><?php echo wp_kses_post( $meta ); ?></div>
    <?php endif; ?>

</div>