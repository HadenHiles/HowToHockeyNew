<?php $style_class = $module['center'] ? 'text-center' : ''; ?>
<div class="gridlove-inject gridlove-box gridlove-post <?php echo esc_attr( $style_class ); ?>">
	<?php $module['content'] = !empty($module['autop']) ?  wpautop($module['content']) : $module['content']; ?>
	<?php echo do_shortcode( $module['content']); ?>
</div>