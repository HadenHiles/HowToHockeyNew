<?php if (gridlove_post_display('related')) : ?>

    <?php $related = gridlove_get_related_posts(); ?>

    <?php if (!empty($related)): ?>

        <?php if ($related->have_posts()): ?>

            <div class="gridlove-related">
                <div class="gridlove-module">

                    <?php echo gridlove_get_heading(array('title' => '<h4 class="h2">' . __gridlove('related') . '</h4>')); ?>

                    <?php $related_layout = gridlove_get_option('related_layout'); ?>
                    <div class="row">
                        <?php while ($related->have_posts()) : $related->the_post(); ?>

                            <div class="<?php echo esc_attr( $related_layout === 'b' ? 'col-lg-12 col-md-12 col-sm-12' : 'col-lg-6 col-md-6 col-sm-12' ); ?>">
                                <?php $post_col = $related_layout === 'b' ? 8 : 4; ?><?php include(locate_template('template-parts/layouts/content-' . $related_layout . '.php')); ?>
                            </div>

                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

    <?php endif; ?>

<?php endif; ?>