<?php if( gridlove_get_option('single_share') && function_exists('meks_ess_share') ): ?>

		<div class="gridlove-share-wrapper">
			<div class="gridlove-share gridlove-box gridlove-sticky-share">
			<?php
				$share_settings = get_option('meks_ess_settings');
                $share_class = gridlove_share_bottom_bar_classes( $share_settings );
	            meks_ess_share( $share_settings['platforms'] , true, '<div class="meks_ess '. $share_class .' ">', '</div>' );
			 ?>
			</div>
		</div>
	
<?php endif; ?>