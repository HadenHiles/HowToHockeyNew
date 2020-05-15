<?php if( gridlove_post_display('headline') && has_excerpt() ): ?>
	<div class="entry-headline h5">
		<?php the_excerpt(); ?>
	</div>
<?php endif; ?>

<?php get_template_part('template-parts/ads/above-single'); ?>

<div class="entry-content">
    
    <?php $share_position = gridlove_get_option('single_share_position'); ?>
	<?php if (  strpos($share_position, 'above') !== false ): ?>
		<?php get_template_part( 'template-parts/single/share' ); ?>
    <?php endif ?>
    
    <?php the_content(); ?>

    <?php wp_link_pages( array('before' => '<div class="gridlove-link-pages">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>

    <?php if( gridlove_post_display('tags') && has_tag() ) : ?>
        <div class="entry-tags">
            <?php the_tags( false, ' ', false ); ?>
        </div>
    <?php endif; ?>

    <?php if (  strpos($share_position, 'bellow') !== false ): ?>
		<?php get_template_part( 'template-parts/single/share' ); ?>
    <?php endif ?>

</div>