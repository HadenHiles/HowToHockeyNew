<?php
       $authors_meta = gridlove_get_page_meta( get_the_ID(), 'authors' );
       
	   $args = array(
            'fields'    => array('ID'),
            'order'     => $authors_meta['order'],
            'orderby'   => $authors_meta['orderby'],
            'role__not_in' => $authors_meta['roles'],
            'exclude'   => $authors_meta['exclude'] 
        );

	   $authors_query = new WP_User_Query($args); 
	   $authors = $authors_query->get_results();
       
?>
<?php if (!empty($authors)) : ?>
    <?php foreach ( $authors as $author ) : ?>
        
        <div class="gridlove-author">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-5">
                <?php echo get_avatar( $author->ID, 100); ?>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12">
                <?php echo '<h4>'.get_the_author_meta('display_name', $author->ID).'</h4>'; ?> 
                <div class="gridlove-author-desc">
                    <?php echo wpautop( get_the_author_meta('description', $author->ID) ); ?>
                </div>
                <div class="gridlove-author-links">
                    <?php echo gridlove_get_author_links($author->ID); ?>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach; ?>
<?php endif; ?>