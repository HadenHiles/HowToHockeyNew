<div id="gridlove-module-<?php echo esc_attr( $m_ind ); ?>" class="gridlove-module module-type-cats <?php echo esc_attr($module['css_class']); ?>">
	
	<?php echo gridlove_get_module_heading( $module ); ?>
	<?php $mod_cats = get_categories( array( 'include' => implode(",", $module['cat']) ) ); ?>

    <?php 
        $new_mod_cats = array();
        
        foreach( $mod_cats as $cat){
            if(!empty($module['cat'])){
                $new_mod_cats[array_search( $cat->term_id, $module['cat'])] = $cat;                
             } else {
                $new_mod_cats[$cat->term_id] = $cat;
             }
        }
        
        ksort($new_mod_cats);
    ?>

	<?php $grid = gridlove_get_module_layout( $module ); ?>
    <?php $slider_class = gridlove_module_is_slider( $module ) && ( count( $new_mod_cats ) > 1 )  ? 'gridlove-slider' : ''; ?>

	<div class="row gridlove-posts gridlove-cats <?php echo esc_attr($slider_class); ?>">
		
		<?php if( !empty( $new_mod_cats ) ): ?> 
            <?php foreach( $new_mod_cats as $cat ): ?>    			        
                <?php $post_col = $grid[0]['col']; ?>
                <?php $category_color = $module['category_color'] ? 'gridlove-cat gridlove-cat-'.$cat->term_id : ''; ?>
                
                <div class="<?php echo esc_attr( gridlove_get_bootstrap_columns( $post_col )); ?>">
                    <?php include( locate_template('template-parts/cat-layouts/content-'. $grid[0]['layout'].'.php') ); ?>
                </div>
            
            <?php endforeach; ?>
        <?php endif; ?>

	</div>

</div>