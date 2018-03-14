<?php function tm_social_sharing_shortcode() {
	ob_start();
	if ( get_theme_mod('themesmatic_social_sharing_buttons', 1) != 0 ): ?>
	<!-- Social Sharing Buttons by ThemesMatic -->
	<div class="themesmatic-share-content">
	<?php if( get_theme_mod('themesmatic_social_heading', 'Share This Article') != '' ): ?>
	<h5 class="themesmatic-sharing-headline"><?php esc_html_e( get_theme_mod('themesmatic_social_heading', 'Share This Article') ); ?></h5>
	<?php endif; ?>
	
	<ul class="themesmatic-sharing <?php if( get_theme_mod('themesmatic_social_sharing_shape', 'button-square') != 'button-square' ): ?>tm-sharing-circle<?php endif; ?> <?php if( get_theme_mod('themesmatic_social_sharing_colors', 'sharing-bw') != 'sharing-bw'): ?>tm-sharing-color<?php endif; ?>">
		
		<?php if ( get_theme_mod( 'themesmatic_social_icon_one', 'facebook' ) != 'none') : ?>
			<li class="tm-sharing-icon share-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_one', 'facebook' ) ); ?>">
			<i class="fa fa-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_one', 'facebook' ) ); ?>" aria-hidden="true"></i>
			</li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'themesmatic_social_icon_two', 'twitter' ) != 'none') : ?>
			<li class="tm-sharing-icon share-<?php echo esc_attr( get_theme_mod('themesmatic_social_icon_two', 'twitter') ); ?>">
			<i class="fa fa-<?php echo esc_attr( get_theme_mod('themesmatic_social_icon_two', 'twitter')); ?>" aria-hidden="true"></i>
			</li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'themesmatic_social_icon_three', 'pinterest-p' ) != 'none') : ?>
			<li class="tm-sharing-icon share-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_three', 'pinterest-p' ) ); ?>">
			<i class="fa fa-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_three', 'pinterest-p' ) ); ?>" aria-hidden="true"></i>
			</li>
		<?php endif; ?>
		
		<?php if( get_theme_mod( 'themesmatic_social_icon_four', 'none' ) != 'none' || get_theme_mod( 'themesmatic_social_icon_five', 'none' ) != 'none' || get_theme_mod( 'themesmatic_social_icon_six', 'none' ) != 'none' || get_theme_mod( 'themesmatic_social_icon_seven', 'none') != 'none' || get_theme_mod( 'themesmatic_social_icon_eight', 'none') != 'none' || get_theme_mod( 'themesmatic_social_icon_nine', 'none') != 'none' || get_theme_mod( 'themesmatic_social_icon_ten', 'none') != 'none' || get_theme_mod( 'themesmatic_social_icon_eleven', 'none') != 'none'): ?>
		
		<li id="tm-sharing-expand" class="tm-sharing-icon">
			<i class="fa fa-plus" aria-hidden="true"></i>
		</li>
			<div id="tm-sharing-wrapper" class="tm-sharing-wrapper">
				<div id="themesmatic-popup-content" class="themesmatic-popup-content">
				<h5 class="themesmatic-sharing-popup-title"><?php esc_html_e( get_theme_mod('themesmatic_social_popup_heading', 'Share This Article On', 'themesmatic-social' ) ); ?></h5>
					<ul class="themesmatic-sharing <?php if( get_theme_mod('themesmatic_social_sharing_shape', 'button-square') != 'button-square' ): ?>tm-sharing-circle<?php endif; ?>">
					<?php if ( get_theme_mod( 'themesmatic_social_icon_one', 'facebook' ) != 'none') : ?>
						<li class="tm-sharing-icon share-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_one', 'facebook' ) ); ?>">
						<i class="fa fa-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_one', 'facebook' ) ); ?>" aria-hidden="true"></i>
						</li>
					<?php endif; ?>
					
					<?php if ( get_theme_mod( 'themesmatic_social_icon_two', 'twitter' ) != 'none') : ?>
						<li class="tm-sharing-icon share-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_two', 'twitter' ) ); ?>">
						<i class="fa fa-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_two', 'twitter' ) ); ?>" aria-hidden="true"></i>
						</li>
					<?php endif; ?>
					
					<?php if ( get_theme_mod( 'themesmatic_social_icon_three', 'pinterest-p' ) != 'none') : ?>
						<li class="tm-sharing-icon share-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_three', 'pinterest-p' ) ); ?>">
						<i class="fa fa-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_three', 'pinterest-p' ) ); ?>" aria-hidden="true"></i>
						</li>
					<?php endif; ?>
					
					<?php if ( get_theme_mod( 'themesmatic_social_icon_four', 'none' ) != 'none') : ?>
						<li class="tm-sharing-icon share-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_four', 'none' ) ); ?>">
						<i class="fa fa-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_four', 'none' ) ); ?>" aria-hidden="true"></i>
						</li>
					<?php endif; ?>
					
					<?php if ( get_theme_mod( 'themesmatic_social_icon_five', 'none' ) != 'none') : ?>
						<li class="tm-sharing-icon share-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_five', 'none' ) ); ?>">
						<i class="fa fa-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_five', 'none' ) ); ?>" aria-hidden="true"></i>
						</li>
					<?php endif; ?>
					
					<?php if ( get_theme_mod( 'themesmatic_social_icon_six', 'none' ) != 'none') : ?>
						<li class="tm-sharing-icon share-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_six', 'none' ) ); ?>">
						<i class="fa fa-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_six', 'none' ) ); ?>" aria-hidden="true"></i>
						</li>
					<?php endif; ?>
					
					<?php if ( get_theme_mod( 'themesmatic_social_icon_seven', 'none' ) != 'none') : ?>
						<li class="tm-sharing-icon share-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_seven', 'none' ) ); ?>">
						<i class="fa fa-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_seven', 'none' ) ); ?>" aria-hidden="true"></i>
						</li>
					<?php endif; ?>
					
					<?php if ( get_theme_mod( 'themesmatic_social_icon_eight', 'none' ) != 'none') : ?>
						<li class="tm-sharing-icon share-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_eight', 'none' ) ); ?>">
						<i class="fa fa-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_eight', 'none' ) ); ?>" aria-hidden="true"></i>
						</li>
					<?php endif; ?>
					
					<?php if ( get_theme_mod( 'themesmatic_social_icon_nine', 'none' ) != 'none') : ?>
						<li class="tm-sharing-icon share-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_nine', 'none' ) ); ?>">
						<i class="fa fa-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_nine', 'none' ) ); ?>" aria-hidden="true"></i>
						</li>
					<?php endif; ?>
					
					<?php if ( get_theme_mod( 'themesmatic_social_icon_ten', 'none' ) != 'none') : ?>
						<li class="tm-sharing-icon share-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_ten', 'none' ) ); ?>">
						<i class="fa fa-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_ten', 'none' ) ); ?>" aria-hidden="true"></i>
						</li>
					<?php endif; ?>
					
					<?php if ( get_theme_mod( 'themesmatic_social_icon_eleven', 'none' ) != 'none') : ?>
						<li class="tm-sharing-icon share-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_eleven', 'none' ) ); ?>">
						<i class="fa fa-<?php echo esc_attr( get_theme_mod( 'themesmatic_social_icon_eleven', 'none' ) ); ?>" aria-hidden="true"></i>
						</li>
					<?php endif; ?>
					
					</ul><!-- themesmatic-sharing -->
					
					<div class="themesmatic-sharing-url">
						<?php echo esc_url( the_permalink() ); ?>
					</div>
									
				</div><!-- themesmatic-popup-content -->
	
				<i class="tm-close-sharing fa fa-times" aria-hidden="true"></i>

			<div><!-- tm-sharing-wrapper -->
	<?php endif; ?>

		</ul><!-- themesmatic-sharing -->
				
	</div><!-- themesmatic-share-content -->
	<!-- Social Sharing Buttons by ThemesMatic -->
<?php endif;
	
	$themesmatic_social_options = ob_get_clean();
	return $themesmatic_social_options;
}