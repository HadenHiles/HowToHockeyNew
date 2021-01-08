<?php do_action('gridlove_before_end_content'); ?>

<?=do_shortcode('[popup_offer title="Want to improve your skills?" background_url="https://howtohockey.com/wp-content/uploads/2020/05/IMG_1388-scaled.jpg"]
<p style="text-align: center;">Are you looking for a path to improve your hockey skills in the most efficient way possible?</p>
<p style="text-align: center;">Join now to get your <strong>first</strong> month on The Pond for only $1!</p>
<div class="row">
<div><img src="https://cdn.thepond.howtohockey.com/2020/01/THEPOND_WHITE_SNOWBANK.svg" style="width: 250px;" /></div>
<div style="text-align: center;">
<h5 style="margin: 0;">Use code</h5>
<h3 style="margin: 0;">HTHFAN2021</h3><div style="margin-top: 20px;"><a class="BTN" href="https://thepond.howtohockey.com">Learn more</a></div>
</div>
</div>
[/popup_offer]');?>

<?php get_template_part('template-parts/ads/above-footer'); ?>

<div id="footer" class="gridlove-footer">

	<?php if( gridlove_get_option('footer_widgets') ): ?>

	        <div class="container">
	            <div class="row">
	                <?php 
						$layout = explode( "_", gridlove_get_option('footer_layout') );
						$columns = $layout[0];
						$col_lg = $layout[1];
						$col_md = $columns > 1 ? 6 : 12;


					?>

					<?php for($i = 1; $i <= $columns; $i++) : ?>
						<div class="col-lg-<?php echo esc_attr($col_lg); ?> col-md-<?php echo esc_attr($col_md); ?> col-sm-12">
							<?php if( is_active_sidebar( 'gridlove_footer_sidebar_'.$i ) ) : ?>
								<?php dynamic_sidebar( 'gridlove_footer_sidebar_'.$i );?>
							<?php endif; ?>
						</div>
					<?php endfor; ?>

	            </div>
	        </div>

	<?php endif; ?>

    <?php if( gridlove_get_option('footer_bottom') ): ?>

	        <div class="gridlove-copyright">
	            <div class="container">
	                <?php echo wp_kses_post( str_replace('{current_year}', date('Y'), gridlove_get_option('footer_copyright') ) ); ?>
	            </div>
	        </div>

	<?php endif; ?>

</div>

<?php if( gridlove_get_option('back_to_top') ): ?>
	<button class="gridlove-button back-to-top"><i class="fa fa-chevron-up"></i></button>
<?php endif; ?>

<?php get_template_part('template-parts/header/side'); ?>

<?php wp_footer(); ?>
</body>

</html>