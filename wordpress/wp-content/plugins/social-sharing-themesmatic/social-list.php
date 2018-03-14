<?php
// creates social media sharing button theme customizer options
if ( ! function_exists( 'themesmatic_social_options' ) ) {
	function themesmatic_social_options($wp_customize) {
		
		if( class_exists( 'WP_Customize_Control' ) ):
			class ThemesMatic_Plugin_Pro extends WP_Customize_Control {
			public $label = '';
		    public function render_content() { ?>
				<div class="themesmatic-pro">
					<h3><?php esc_html_e('Looks Best On:', 'themesmatic-social'); ?></h3>
					<a href="<?php echo esc_url('https://www.themesmatic.com'); ?>" target="_blank"><img src="<?php echo esc_url( plugins_url('assets/themesmatic-themes-panel.jpg',  __FILE__ ) ); ?>" alt="themesmatic-wordpress-themes" /></a>
				</div><!-- themesmatic_upsell_panel_content -->
		    <?php }
			}
		endif;
		
		// Add Social Sharing Section
		$wp_customize->add_section( 'themesmatic_social_section', array(
	        'title'          => esc_html__( 'Social Sharing', 'themesmatic-social' ),
	        'priority'       => 25,
	    ) );
	    
	    $wp_customize->add_setting('themesmatic_panel_header', array(
	    	'type' => 'headline_control',
    		'capability'        => 'edit_theme_options',
        	'sanitize_callback' => 'esc_attr',
		));
	
		$wp_customize->add_control(
		    new ThemesMatic_Plugin_Pro(
		        $wp_customize,
		        'themesmatic_panel_header',
		        array(
		            'label'   => '',
		            'section' => 'themesmatic_social_section',
		            'priority' => 1,
		        )
		    )
		);
		
		//******************************************************************************/
	    // Adds Social Network Icon Choices
	    
	    $themesmatic_social_icons_choice = array(
			        'none'			=> '-',
					'digg'			=> esc_html__('Digg', 'themesmatic-social'),
					'envelope'		=> esc_html__('Email', 'themesmatic-social'),
					'facebook'		=> esc_html__('Facebook', 'themesmatic-social'),
					'google-plus'	=> esc_html__('Google Plus', 'themesmatic-social'),
					'linkedin'		=> esc_html__('Linked In', 'themesmatic-social'),
					'pinterest-p'	=> esc_html__('Pinterest', 'themesmatic-social'),
					'reddit-alien'	=> esc_html__('Reddit', 'themesmatic-social'),
					'stumbleupon'	=> esc_html__('Stumbleupon', 'themesmatic-social'),
					'tumblr'		=> esc_html__('Tumblr', 'themesmatic-social'),
					'twitter'		=> esc_html__('Twitter', 'themesmatic-social'),
					'vk'			=> esc_html__('VK', 'themesmatic-social'),
					'xing'			=> esc_html__('Xing', 'themesmatic-social'),
		);
				
		// Display Social Sharing Section
	    $wp_customize->add_setting( 'themesmatic_social_sharing_buttons', array(
	        'default'	=> 1,
	        'sanitize_callback'	=> 'themesmatic_sanitize_checkbox',
	    ) );
	    
	    $wp_customize->add_control( 'themesmatic_social_sharing_buttons', array(
	        'label'		=> esc_html__( 'Turn Buttons On/Off if needed', 'themesmatic-social' ),
	        'section'	=> 'themesmatic_social_section',
	        'type'		=> 'checkbox',
	        'priority'	=> 1
	    ) );
		
		// Social Icon One
	    $wp_customize->add_setting( 'themesmatic_social_icon_one',
	        array(
		        'default' 			=> 'facebook',
		        'sanitize_callback' => 'themesmatic_sanitize_social_icons',
		        
		) );
	
		$wp_customize->add_control('themesmatic_social_icon_one',
			array(
		        'type'		=> 'select',
		        'label'		=> esc_html__( 'Sharing Icon #1', 'themesmatic-social' ),
		        'section'	=> 'themesmatic_social_section',
		        'priority'	=> 2,
		        'choices'	=> $themesmatic_social_icons_choice,
		) );
		// Social Icon Two
	    $wp_customize->add_setting( 'themesmatic_social_icon_two',
	        array(
		        'default' 			=> 'twitter',
		        'sanitize_callback' => 'themesmatic_sanitize_social_icons',
		        
		) );
	
		$wp_customize->add_control('themesmatic_social_icon_two',
			array(
		        'type'		=> 'select',
		        'label'		=> esc_html__( 'Sharing Icon #2', 'themesmatic-social' ),
		        'section'	=> 'themesmatic_social_section',
		        'priority'	=> 2,
		        'choices'	=> $themesmatic_social_icons_choice,
		) );
	    // Social Icon Three
	    $wp_customize->add_setting( 'themesmatic_social_icon_three',
	        array(
		        'default' 			=> 'pinterest-p',
		        'sanitize_callback' => 'themesmatic_sanitize_social_icons',
		        
		) );
	
		$wp_customize->add_control('themesmatic_social_icon_three',
			array(
		        'type'		=> 'select',
		        'label'		=> esc_html__( 'Sharing Icon #3', 'themesmatic-social' ),
		        'section'	=> 'themesmatic_social_section',
		        'priority'	=> 2,
		        'choices'	=> $themesmatic_social_icons_choice,
		) );
	       
	    // Social Icon Four
	    $wp_customize->add_setting( 'themesmatic_social_icon_four',
	        array(
		        'default' 			=> 'none',
		        'sanitize_callback' => 'themesmatic_sanitize_social_icons',
		) );
	
		$wp_customize->add_control('themesmatic_social_icon_four',
			array(
		        'type' 		=> 'select',
		        'label' 	=> esc_html__( 'Sharing Icon #4', 'themesmatic-social' ),
		        'section'	=> 'themesmatic_social_section',
		        'priority' 	=> 2,
		        'choices'	=> $themesmatic_social_icons_choice,
		) );        
	    // Social Icon Five
	    $wp_customize->add_setting( 'themesmatic_social_icon_five',
	    array(
	        'default' 			=> 'none',
	        'sanitize_callback' => 'themesmatic_sanitize_social_icons',
		) );
	
		$wp_customize->add_control('themesmatic_social_icon_five',
			array(
		        'type'		=> 'select',
		        'label'		=> esc_html__( 'Sharing Icon #5', 'themesmatic-social' ),
		        'section'	=> 'themesmatic_social_section',
		        'priority'	=> 2,
		        'choices'	=> $themesmatic_social_icons_choice,
		) );       
	    // Social Icon Six
	    $wp_customize->add_setting( 'themesmatic_social_icon_six',
	        array(
		        'default' 			=> 'none',
		        'sanitize_callback' => 'themesmatic_sanitize_social_icons',
		) );
	
		$wp_customize->add_control( 'themesmatic_social_icon_six',
			array(
		        'type' 		=> 'select',
		        'label' 	=> esc_html__( 'Sharing Icon #6', 'themesmatic-social' ),
		        'section' 	=> 'themesmatic_social_section',
		        'priority' 	=> 2,
		        'choices' 	=> $themesmatic_social_icons_choice,
		) );       
	    // Social Icon Seven
	    $wp_customize->add_setting( 'themesmatic_social_icon_seven',
	        array(
		        'default' 			=> 'none',
		        'sanitize_callback' => 'themesmatic_sanitize_social_icons',
		) );
	
		$wp_customize->add_control('themesmatic_social_icon_seven',
			array(
		        'type'		=> 'select',
		        'label'		=> esc_html__( 'Sharing Icon #7', 'themesmatic-social' ),
		        'section'	=> 'themesmatic_social_section',
		        'priority'	=> 2,
		        'choices'	=> $themesmatic_social_icons_choice,
		) );
		// Social Icon Eight
	    $wp_customize->add_setting( 'themesmatic_social_icon_eight',
	        array(
		        'default' 			=> 'none',
		        'sanitize_callback' => 'themesmatic_sanitize_social_icons',
		) );
	
		$wp_customize->add_control('themesmatic_social_icon_eight',
			array(
		        'type'		=> 'select',
		        'label'		=> esc_html__( 'Sharing Icon #8', 'themesmatic-social' ),
		        'section'	=> 'themesmatic_social_section',
		        'priority'	=> 2,
		        'choices'	=> $themesmatic_social_icons_choice,
		) );
		// Social Icon Nine
	    $wp_customize->add_setting( 'themesmatic_social_icon_nine',
	        array(
		        'default' 			=> 'none',
		        'sanitize_callback' => 'themesmatic_sanitize_social_icons',
		) );
	
		$wp_customize->add_control('themesmatic_social_icon_nine',
			array(
		        'type'		=> 'select',
		        'label'		=> esc_html__( 'Sharing Icon #9', 'themesmatic-social' ),
		        'section'	=> 'themesmatic_social_section',
		        'priority'	=> 2,
		        'choices'	=> $themesmatic_social_icons_choice,
		) );
		// Social Icon Ten
	    $wp_customize->add_setting( 'themesmatic_social_icon_ten',
	        array(
		        'default' 			=> 'none',
		        'sanitize_callback' => 'themesmatic_sanitize_social_icons',
		) );
	
		$wp_customize->add_control('themesmatic_social_icon_ten',
			array(
		        'type'		=> 'select',
		        'label'		=> esc_html__( 'Sharing Icon #10', 'themesmatic-social' ),
		        'section'	=> 'themesmatic_social_section',
		        'priority'	=> 2,
		        'choices'	=> $themesmatic_social_icons_choice,
		) );
		// Social Icon Eleven
	    $wp_customize->add_setting( 'themesmatic_social_icon_eleven',
	        array(
		        'default' 			=> 'none',
		        'sanitize_callback' => 'themesmatic_sanitize_social_icons',
		) );
	
		$wp_customize->add_control('themesmatic_social_icon_eleven',
			array(
		        'type'		=> 'select',
		        'label'		=> esc_html__( 'Sharing Icon #11', 'themesmatic-social' ),
		        'section'	=> 'themesmatic_social_section',
		        'priority'	=> 2,
		        'choices'	=> $themesmatic_social_icons_choice,
		) );
	    
	    // Show social sharing buttons before/after the_content
	    $wp_customize->add_setting( 'themesmatic_social_sharing_position', array(
	        'default'	=> 'sharing-after',
	        'sanitize_callback'	=> 'themesmatic_sanitize_position',
	    ) );
	
		$wp_customize->add_control( 'themesmatic_social_sharing_position', array(
	        'label'		=> esc_html__( 'Show Buttons Before/After Content', 'themesmatic-social' ),
	        'section'	=> 'themesmatic_social_section',
	        'type'		=> 'radio',
	        'choices'	=> array(
	            'sharing-before' => esc_html__('Before', 'themesmatic-social'),
	            'sharing-after' => esc_html__('After', 'themesmatic-social'),
	        ),
	        'priority'	=> 3
	    ) );
	    
	    // Show color buttons/black and white buttons
	    $wp_customize->add_setting( 'themesmatic_social_sharing_colors', array(
	        'default'	=> 'sharing-bw',
	        'sanitize_callback'	=> 'themesmatic_sanitize_color_choice',
	    ) );
	
		$wp_customize->add_control( 'themesmatic_social_sharing_colors', array(
	        'label'		=> esc_html__( 'Color/Black &#38; White Buttons', 'themesmatic-social' ),
	        'section'	=> 'themesmatic_social_section',
	        'type'		=> 'radio',
	        'choices'	=> array(
	            'sharing-bw' => esc_html__('Black &#38; White', 'themesmatic-social'),
	            'sharing-color' => esc_html__('Color', 'themesmatic-social'),
	        ),
	        'priority'	=> 3
	    ) );
	    
	    // Social sharing buttons headline text
	    $wp_customize->add_setting( 'themesmatic_social_heading', array(
	        'default'        => esc_html__('Share This Article', 'themesmatic-social' ),
	        'sanitize_callback' => 'themesmatic_sanitize_text',
	    ) );
	    
	    $wp_customize->add_control( 'themesmatic_social_heading', array(
	        'label'   => esc_html__('Social Sharing Heading', 'themesmatic-social' ),
	        'description'   => esc_html__('Optional heading, delete if not needed', 'themesmatic-social' ),
	        'section' => 'themesmatic_social_section',
	        'type'    => 'text',
	        'priority' => 2
	    ) );
	    
	    // Sharing headline text font size
	    $wp_customize->add_setting( 'themesmatic_sharing_headline_size',
	        array(
				'default' 			=> 18,
				'type' 				=> 'theme_mod',
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'themesmatic_sanitize_numbers',
				'transport' 		=> 'postMessage',
		) );
	
		$wp_customize->add_control( 'themesmatic_sharing_headline_size',
			array(
			    'type' 			=> 'number',
			    'priority' 		=> 2,
			    'section' 		=> 'themesmatic_social_section',
			    'label' 		=> __( 'Headline Font Size', 'themesmatic-social' ),
			    'description'	=> __( 'Size of Sharing Headline', 'themesmatic-social' ),
			    'input_attrs' 	=> array(
			        'min' 		=> 14,
			        'max' 		=> 40,
			        'step' 		=> 1,
			        'style' 	=> 'width: 100%;',
		    ),
		) );
		    
	    // Display square or round buttons
	    $wp_customize->add_setting( 'themesmatic_social_sharing_shape', array(
	        'default'	=> 'button-square',
	        'sanitize_callback'	=> 'themesmatic_sanitize_shape',
	    ) );
	
		$wp_customize->add_control( 'themesmatic_social_sharing_shape', array(
	        'label'		=> esc_html__( 'Square/Round Buttons', 'themesmatic-social' ),
	        'section'	=> 'themesmatic_social_section',
	        'type'		=> 'radio',
	        'choices'	=> array(
	            'button-square' => esc_html__('Square', 'themesmatic-social'),
	            'button-round' => esc_html__('Round', 'themesmatic-social'),
	        ),
	        'priority'	=> 3
	    ) );
	    
	    // Sharing icon font size
	    $wp_customize->add_setting( 'themesmatic_sharing_icon_size',
	        array(
				'default' 			=> 15,
				'type' 				=> 'theme_mod',
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'themesmatic_sanitize_numbers',
				'transport' 		=> 'postMessage',
		) );
	
		$wp_customize->add_control( 'themesmatic_sharing_icon_size',
			array(
			    'type' 			=> 'number',
			    'priority' 		=> 3,
			    'section' 		=> 'themesmatic_social_section',
			    'label' 		=> __( 'Icon Font Size', 'themesmatic-social' ),
			    'description'	=> __( 'Size of social media icon', 'themesmatic-social' ),
			    'input_attrs' 	=> array(
			        'min' 		=> 14,
			        'max' 		=> 100,
			        'step' 		=> 1,
			        'style' 	=> 'width: 100%;',
		    ),
		) );
	    
	    // Button Spacing
	    $wp_customize->add_setting( 'themesmatic_sharing_spacing',
	        array(
				'default' 			=> 0,
				'type' 				=> 'theme_mod',
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'themesmatic_sanitize_numbers',
				'transport' 		=> 'postMessage',
		) );
	
		$wp_customize->add_control( 'themesmatic_sharing_spacing',
			array(
			    'type' 			=> 'number',
			    'priority' 		=> 3,
			    'section' 		=> 'themesmatic_social_section',
			    'label' 		=> __( 'Button Spacing', 'themesmatic-social' ),
			    'description'	=> __( 'Spacing between buttons', 'themesmatic-social' ),
			    'input_attrs' 	=> array(
			        'min' 		=> 0,
			        'max' 		=> 20,
			        'step' 		=> 1,
			        'style' 	=> 'width: 100%;',
		    ),
		) );
		
		// Button Width
	    $wp_customize->add_setting( 'themesmatic_sharing_button_width',
	        array(
				'default' 			=> 55,
				'type' 				=> 'theme_mod',
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'themesmatic_sanitize_numbers',
				'transport' 		=> 'postMessage',
		) );
	
		$wp_customize->add_control( 'themesmatic_sharing_button_width',
			array(
			    'type' 			=> 'number',
			    'priority' 		=> 3,
			    'section' 		=> 'themesmatic_social_section',
			    'label' 		=> __( 'Custom Button Width', 'themesmatic-social' ),
			    'description'	=> __( 'Sharing button width', 'themesmatic-social' ),
			    'input_attrs' 	=> array(
			        'min' 		=> 45,
			        'max' 		=> 200,
			        'step' 		=> 1,
			        'style' 	=> 'width: 100%;',
		    ),
		) );
		
		// Popup sharing buttons text
	    $wp_customize->add_setting( 'themesmatic_social_popup_heading', array(
	        'default'        => esc_html__('Share This Article On:', 'themesmatic-social' ),
	        'sanitize_callback' => 'themesmatic_sanitize_text',
	    ) );
	    
	    $wp_customize->add_control( 'themesmatic_social_popup_heading', array(
	        'label'   => esc_html__('Popup Sharing Heading', 'themesmatic-social' ),
	        'description'   => esc_html__('Headline text that shows on sharing popup', 'themesmatic-social' ),
	        'section' => 'themesmatic_social_section',
	        'type'    => 'text',
	        'priority' => 4
	    ) );
	    
	    // Popup text font size
	    $wp_customize->add_setting( 'themesmatic_social_popup_heading_size',
	        array(
				'default' 			=> 50,
				'type' 				=> 'theme_mod',
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'themesmatic_sanitize_numbers',
				'transport' 		=> 'postMessage',
		) );
	
		$wp_customize->add_control( 'themesmatic_social_popup_heading_size',
			array(
			    'type' 			=> 'number',
			    'priority' 		=> 4,
			    'section' 		=> 'themesmatic_social_section',
			    'label' 		=> __( 'Popup Text Font Size', 'themesmatic-social' ),
			    'description'	=> __( 'Size of Popup Text', 'themesmatic-social' ),
			    'input_attrs' 	=> array(
			        'min' 		=> 30,
			        'max' 		=> 75,
			        'step' 		=> 1,
			        'style' 	=> 'width: 100%;',
		    ),
		) );
		    
	    // Sanitizes Text Input
	    if ( ! function_exists( 'themesmatic_sanitize_text' ) ) {							
			function themesmatic_sanitize_text( $input ) {
				$filtered = wp_check_invalid_utf8( $input );
					 
				if ( strpos($filtered, '<') !== false ) {
					$filtered = wp_pre_kses_less_than( $filtered );
					// This will strip extra whitespace.
					$filtered = wp_strip_all_tags( $filtered, true );
					} else {
					$filtered = trim( preg_replace('/[\r\n\t ]+/', ' ', $filtered) );
					}
					return wp_kses_post( force_balance_tags( $input ) );
			} //end themesmatic_sanitize_text
		} //if function exists
		
		// Sanitizes Checkbox(es)
		 if ( ! function_exists( 'themesmatic_sanitize_checkbox' ) ) {
			function themesmatic_sanitize_checkbox( $input ) {
				if ( $input == 1 ) {
					return 1;
				} else {
					return '';
				}
			} //end themesmatic_sanitize_checkbox
		} //if function exists
		
		// Sanitizes position choice
		 if ( ! function_exists( 'themesmatic_sanitize_position' ) ) {
			function themesmatic_sanitize_position( $input ) {
				$valid_position_choice = array( 'sharing-before', 'sharing-after');
				
				return in_array( $input, $valid_position_choice) ? $input : '';
			} //themesmatic_sanitize_position
		} //if function exists
		
		 if ( ! function_exists( 'themesmatic_sanitize_color_choice' ) ) {
			function themesmatic_sanitize_color_choice( $input ) {
				$valid_color_choice = array( 'sharing-color', 'sharing-bw');
				
				return in_array( $input, $valid_color_choice) ? $input : '';
			} //themesmatic_sanitize_color_choice
		} //if function exists
		
		// Sanitizes button shape choice
		 if ( ! function_exists( 'themesmatic_sanitize_shape' ) ) {
			function themesmatic_sanitize_shape( $input ) {
				$valid_shape_choice = array( 'button-square', 'button-round');
				
				return in_array( $input, $valid_shape_choice) ? $input : '';
			} //themesmatic_sanitize_shape
		} //if function exists
		
		// Sanitizes Numeric Input (Non-Negative)
		 if ( ! function_exists( 'themesmatic_sanitize_numbers' ) ) {
			function themesmatic_sanitize_numbers( $input ) {
				return absint( $input );
			} //themesmatic_sanitize_spacing
		} //if function exists
	    	
		//Sanitizes Social Icons Selection
		 if ( ! function_exists( 'themesmatic_sanitize_social_icons' ) ) {
			function themesmatic_sanitize_social_icons( $input ) {
			    $themesmatic_social_icons = array(
				        'none'			=> '-',
						'digg'			=> 'Digg',
						'envelope'		=> 'Email',
						'facebook'		=> 'Facebook',
						'google-plus'	=> 'Google Plus',
						'linkedin'		=> 'Linked In',
						'pinterest-p'	=> 'Pinterest',
						'reddit-alien'	=> 'Reddit',
						'stumbleupon'	=> 'Stumbleupon',
						'tumblr'		=> 'Tumblr',
						'twitter'		=> 'Twitter',
						'vk'			=> 'VK',
						'xing'			=> 'Xing',
		
						);
			 
			    if ( array_key_exists( $input, $themesmatic_social_icons ) ) {
			        return $input;
			    } else {
			        return '';
			    }
			} //themesmatic_sanitize_social_icons
		} //if function exists
	
	} //themesmatic_social_options
} //if function exists
// adds function to theme customizer
add_action('customize_register', 'themesmatic_social_options');

// creates css output
 if ( ! function_exists( 'themesmatic_sharing_css' ) ) {
	function themesmatic_sharing_css() {
	wp_enqueue_style(
	    'themesmatic-button-style',
	    plugins_url('/css/themesmatic-sharing.css', __FILE__ )
	);
	// create css variable values
	    $themesmatic_sharing_headline_size_css = intval( get_theme_mod('themesmatic_sharing_headline_size', 18 ) );
	    $themesmatic_sharing_spacing_css = esc_attr( get_theme_mod( 'themesmatic_sharing_spacing',  0 ) );
		$themesmatic_sharing_button_width_css = esc_attr( get_theme_mod( 'themesmatic_sharing_button_width',  55 ) );
		$themesmatic_sharing_icon_size_css = intval( get_theme_mod('themesmatic_sharing_icon_size', 14 ) );
		$themesmatic_popup_font_size_css = intval( get_theme_mod('themesmatic_social_popup_heading_size', 50) );
	// create custom css from those variables
	    $themesmatic_custom_css = "
	    	h5.themesmatic-sharing-headline {
				font-size: {$themesmatic_sharing_headline_size_css}px;
				line-height: {$themesmatic_sharing_headline_size_css}px;
		    }
			ul.themesmatic-sharing li {
				margin-right: {$themesmatic_sharing_spacing_css}px;
				width: {$themesmatic_sharing_button_width_css}px;
			}
			ul.themesmatic-sharing li i.fa {
				font-size: {$themesmatic_sharing_icon_size_css}px;
			}
			.tm-sharing-circle .tm-sharing-icon {
				height: {$themesmatic_sharing_button_width_css}px;
				line-height: {$themesmatic_sharing_button_width_css}px;
			}
			h5.themesmatic-sharing-popup-title {
				font-size: {$themesmatic_popup_font_size_css}px;
				line-height: {$themesmatic_popup_font_size_css}px;
	        ";
		// pass those new styles to the themesmatic-sharing.css stylesheet
	    wp_add_inline_style( 'themesmatic-button-style', $themesmatic_custom_css );
	} //themesmatic_sharing_css
	add_action( 'wp_enqueue_scripts', 'themesmatic_sharing_css' );
} //if function exists

// creates live preview for changes
 if ( ! function_exists( 'themesmatic_sharing_preview_js' ) ) {
	function themesmatic_sharing_preview_js() {
		if( is_customize_preview() ) {
		wp_enqueue_script( 'themesmatic-sharing-preview', plugins_url( '/js/themesmatic-sharing-preview.js', __FILE__ ), array('jquery', 'customize-preview'), true );
		} //end themesmatic-sharing-preview_js
	} //themesmatic_sharing_preview_js
	add_action( 'customize_preview_init', 'themesmatic_sharing_preview_js' );
} //if function exists