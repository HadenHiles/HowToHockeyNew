<?php if( gridlove_get_archive_ad() ): ?>
	<div class="gridlove-post gridlove-box post type-post status-publish format-standard">
		<div class="gridlove-archive-ad text-center">
			<?php echo do_shortcode( gridlove_get_option('ad_archive') ); ?>
		</div>
	</div>
<?php endif; ?>