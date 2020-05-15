<?php $meta = gridlove_get_page_meta( get_the_ID(), 'cover' ); ?>
<?php $bg_image = !empty( $meta['bg_image'] ) ? $meta['bg_image'] : '' ?>
<?php $img_id = !empty( $bg_image ) ? gridlove_get_image_id_by_url($bg_image) : '' ?>
           
<div id="cover" class="gridlove-cover-area gridlove-cover-custom">

    <div class="gridlove-cover-item">

        <div class="gridlove-cover-bg">
            <?php if( $bg_image ) : ?>
                <div class="gridlove-cover"><?php echo wp_get_attachment_image($img_id, 'gridlove-cover'); ?></div>
                <span class="gridlove-hidden-overlay"></span>
                </a>
            <?php endif; ?>  
        </div>

        <div class="gridlove-cover-content">
            <div class="overlay-vh-center-custom">
                <?php if( !empty($meta['content']) ) : ?>
                    <?php echo do_shortcode( $meta['content'] ); ?>
                <?php endif; ?>
            </div>
        </div>

    </div>

</div>