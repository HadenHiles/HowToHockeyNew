<div class="entry-header">
	<?php if( $breadcrumbs = gridlove_breadcrumbs() ): ?>
        <?php echo wp_kses_post( $breadcrumbs ); ?>
    <?php endif; ?>
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</div>