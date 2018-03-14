<?php
	echo '<div class="themesmatic-page-wrap">';
	
	echo '<div class="themesmatic-header-admin">';
	echo '<h1 class="dashicons-ssb-icon">Social Sharing Buttons by ThemesMatic</h1>';
	echo '</div>';
	
	echo '<div class="themesmatic-admin-panel themesmatic-social">';
	
	echo '<div class="themesmatic-wrap">';
	echo '<div class="themesmatic-section">';
	echo '<p class="themesmatic-description">' . esc_html__('The Social Media Sharing Buttons plugin by ThemesMatic seamlessly adds social sharing buttons to posts&#46;&#46;&#46; on automatic.', 'themesmatic-social') . '</p>';
	echo '</br>';
	echo '</br>';
	echo '<p class="themesmatic-bold-link">' . esc_html__('All options to customize the buttons are found in the&nbsp;', 'themesmatic-social');
	echo '<a href=' . admin_url( 'customize.php?autofocus[section]=themesmatic_social_section' ) . ' target="_blank">';
	echo esc_html__('theme customizer', 'thememsmatic-social') . '</a>.</p>';
	echo '</br>';
	echo '<p>' . esc_html__('Choose your buttons, style and custom text then display sharing buttons before or after your content.', 'themesmatic-social') .'</p>';
	echo '</br>';
	echo '<p>' . esc_html__('You can also add sharing buttons to select pages by pasting the sharing button shortcode:', 'themesmatic-social');
	echo '<code>[tm_social_sharing]</code>';
	echo esc_html__('in the desired page location.', 'themesmatic-social') . '</p>';
	echo '</br>';
	echo '</br>';
	echo '<p>' . esc_html__('Looks awesome on all themes... but even better on&nbsp;', 'themesmatic-social');
	echo '<a href="';
	echo esc_url('https://www.themesmatic.com/');
	echo '" target="_blank">';
	echo esc_html('ThemesMatic', 'themesmatic-social');
	echo '</a>';
	echo esc_html('&nbsp;themes :)', 'themesmatic-social') . '</p>';
	echo '</div>';
	
	echo '<div class="themesmatic-section">';
	echo '<div class="socialmag-rating-wrap">';
	echo '<p class="socialmag-rating">';
	echo esc_html__('If you like Social Media Sharing Buttons plugin', 'themesmatic-social');
	echo '</br>';
	echo esc_html__('please write a&nbsp;', 'themesmatic-social' );
	echo '<a href="';
	echo esc_url( 'https://wordpress.org/support/plugin/social-sharing/reviews/');
	echo '"target="_blank">';
	echo esc_html('&#9733;&#9733;&#9733;&#9733;&#9733;');
	echo '</a>';
	echo '&nbsp;Rating.';
	echo '</p>';
	echo '<h4>' . esc_html__('Thank you. Keep being awesome!', 'themesmatic-social') . '<h4>';
	echo '</br>';
	echo '<a class="themesmatic-plugin-support" href=' . esc_url('https://wordpress.org/support/plugin/') . '>';
	echo esc_html__('Support for this plugin is here', 'themesmatic-social');
	echo '</a>';
	echo '</div>';
	echo '</div>';
	
	echo '</div>';
	
	echo '<div class="themesmatic-wrap">';
	
	echo '<div class="themesmatic-section themesmatic-preview">';
	echo '<h3>' . esc_html__('After activating the plugin, a new panel appears in your theme customizer', 'themesmatic-social') . '</h3>';
	echo '<img src=' . esc_url( plugins_url('/img/themesmatic-social-sharing.jpg', __FILE__ ) ) . ' width="500" alt="themesmatic-social-sharing" />';
	echo '</div>';
	
	echo '<div class="themesmatic-section">';
	echo '<h3>' . esc_html__('Here you will find all the options and controls for your social sharing buttons', 'themesmatic-social') . '</h3>';
	echo '<img src=' . esc_url( plugins_url('/img/themesmatic-social-sharing-controls.jpg',  __FILE__ ) ) . ' width="500" alt="themesmatic-social-sharing-controls" />';
	echo '</div>';

	echo '</div><!-- themesmatic-wrap -->';
	echo '</div>';
	
	echo '<aside class="themesmatic-admin-sidebar">';
	echo '<h3>' . esc_html__('Looks Best On', 'themesmatic-social') . '</h3>';
	echo '<a href=' . esc_url('https://www.themesmatic.com') . ' target="_blank"><img src=' . esc_url( plugins_url('assets/themesmatic-themes-panel.jpg',  __FILE__ ) ) . ' alt="themesmatic-wordpress-themes" /></a>';
	echo '</aside>';
	
	echo '</div><!-- page-wrap -->';