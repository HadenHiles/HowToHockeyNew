<?php if( gridlove_post_display( 'author' ) ) : ?>

    <?php if( gridlove_is_co_authors_active() && $coauthors_meta = get_coauthors() ) : ?>
    
        <?php foreach ($coauthors_meta as $key ) :  ?>

            <div class="gridlove-author">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-5">
                        <?php echo get_avatar( $key->ID, 100); ?>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <?php echo '<h4>'.get_the_author_meta( 'display_name', $key->ID).'</h4>'; ?>
                        <div class="gridlove-author-desc">
                            <?php echo wpautop( get_the_author_meta('description', $key->ID) ); ?>
                        </div>
                        <div class="gridlove-author-links">
                            <?php echo gridlove_get_author_links( $key->ID ); ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    

    <?php else: ?>

        <div class="gridlove-author">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-5">
                    <?php echo get_avatar( get_the_author_meta('ID'), 100); ?>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <?php echo '<h4>'.get_the_author_meta('display_name').'</h4>'; ?>
                    <div class="gridlove-author-desc">
                        <?php echo wpautop( get_the_author_meta('description') ); ?>
                    </div>
                    <div class="gridlove-author-links">
                        <?php echo gridlove_get_author_links( get_the_author_meta('ID') ); ?>
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>

<?php endif; ?>