<?php $actions = array_keys( array_filter( gridlove_get_option( 'header_actions' ) ) );  ?>
<ul class="gridlove-actions gridlove-menu">

	<?php if ( !empty( $actions ) ): ?>
			<?php foreach ( $actions as $element ): ?>
				<?php get_template_part( 'template-parts/header/elements/' . gridlove_switch_for_mobile_header_element($element) ); ?>
			<?php endforeach; ?>
	<?php endif; ?>

	<?php if ( !in_array('sidebar-button', $actions) ): ?>
		<?php get_template_part( 'template-parts/header/elements/sidebar-button' ); ?>
	<?php endif; ?>

</ul>