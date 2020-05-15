<div id="gridlove-header-sticky" class="gridlove-header-sticky">
	<div class="container">
		
		<div class="gridlove-slot-l">
			<?php $logo = gridlove_get_option('logo_mini') && gridlove_get_option('header_sticky_logo') == 'mini' ? 'logo-mini' : 'logo'; ?>
			<?php get_template_part('template-parts/header/elements/'.$logo); ?>
		</div>	
		<div class="gridlove-slot-c">
			<?php if ( gridlove_get_option( 'header_sticky_customize' ) ): ?>
				<?php $menu = gridlove_get_option('header_sticky_menu'); ?>
				<?php if ( has_nav_menu( $menu ) ) : ?>
					<nav class="gridlove-main-navigation">				
						<?php wp_nav_menu( array( 'theme_location' => $menu, 'container'=> '', 'menu_class' => 'gridlove-main-nav gridlove-menu',  ) ); ?>
					</nav>
				<?php endif; ?>
			<?php else: ?>
				<?php get_template_part('template-parts/header/elements/main-menu'); ?>
			<?php endif; ?> 
		</div>
		<div class="gridlove-slot-r">
			<?php if ( gridlove_get_option( 'header_sticky_customize' ) ): ?>
				<?php get_template_part('template-parts/header/elements/sticky-actions'); ?>
			<?php else: ?>
				<?php get_template_part('template-parts/header/elements/actions'); ?>
			<?php endif; ?>     
		</div>
	</div>
</div>