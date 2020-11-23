<li class="gridlove-actions-button gridlove-action-search gridlove-action-login">
	<span>
		<i class="fa fa-user"></i>
	</span>
	<ul class="sub-menu">
		<?php 
			if ( !is_user_logged_in() ) : 
				$args = array(
					'label_username' => __gridlove( 'username_email_label' ),
					'label_password' => __gridlove( 'password_label' ),
					'label_remember' => __gridlove( 'remember_me' ),
					'label_log_in'   => __gridlove( 'log_in' ),
				);
			wp_login_form($args); 
		?>	
	
			<?php if ( get_option( 'users_can_register' ) ): ?>
				<a class="gridlove-registration-link" href="<?php echo wp_registration_url(); ?>"><?php echo __gridlove( 'registration_link' )?></a>
			<?php endif; ?>
			<a class="gridlove-lost-password-link" href="<?php echo wp_lostpassword_url(); ?>"><?php echo __gridlove( 'lost_password' )?></a>
		
		<?php else: ?>
			<?php 
			    
			    $current_user = wp_get_current_user();
				printf( '<div class="gridlove-avatar-logout"><a href="%s">%s</a></div>', get_edit_profile_url($current_user->ID), get_avatar( $current_user->ID, 64 ));				
			 	printf( '<p class="gridlove-username"><a href="%s">%s</a></p>', get_edit_profile_url($current_user->ID), esc_html( $current_user->user_login ));
				printf( '<a class="btn-logout gridlove-button" href="%s">' . __gridlove( 'log_out' ) . '</a>', wp_logout_url(home_url()));

			?>
		<?php endif; ?>
	</ul>
</li>