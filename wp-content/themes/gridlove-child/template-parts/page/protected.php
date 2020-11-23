<div id="content" class="gridlove-site-content container">
    <div class="gridlove-content gridlove-full-width">
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'gridlove-box box-vm'); ?>>
            <div class="box-inner-p-bigger box-single">
                <div class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    <?php echo get_the_password_form(); ?>
                </div>
            </div>
        </article>
    </div>
</div>