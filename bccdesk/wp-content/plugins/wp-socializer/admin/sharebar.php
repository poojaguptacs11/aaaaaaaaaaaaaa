<?php
/**
  * Buttons selection page
  *
  **/
  
class wpsr_admin_sharebar{
    
    function __construct(){
        
        WPSR_Admin::add_tab( 'sharebar', array(
            'name' => 'Floating sharebar',
            'banner' => WPSR_ADMIN_URL . '/images/banners/sharebar.png',
            'page_callback' => array( $this, 'page' ),
            'form' => array(
                'id' => 'sharebar_settings',
                'name' => 'sharebar_settings',
                'callback' => array( $this, 'form_fields' ),
                'validation' => array( $this, 'validation' ),
            )
        ));
        
    }

    function form_fields( $values ){
        
        $values = WPSR_Lists::set_defaults( $values, WPSR_Lists::defaults( 'sharebar' ) );
        
        $feature = array(
            'name' => 'sharebar',
            'hide_services' => array()
        );
        
        $section0 = array(
            array( __( 'Select to enable or disable sharebar feature', 'wpsr' ), WPSR_Admin::field( 'select', array(
                'name' => 'ft_status',
                'value' => $values[ 'ft_status' ],
                'list' => array(
                    'enable' => __( 'Enable sharebar', 'wpsr' ),
                    'disable' => __( 'Disable sharebar', 'wpsr' )
                ),
            )), 'class="ft_table"' ),
        );
        
        WPSR_Admin::build_table( $section0, __( 'Enable/disable sharebar', 'wpsr' ), '', false, '1' );
        
        echo '<div class="feature_wrap">';
        WPSR_Admin::box_wrap( 'open', __( 'Create buttons for sharebar', 'wpsr' ), __( 'Select a service from the list to create a new button', 'wpsr' ), '2' );
        WPSR_Admin::buttons_selector( $feature );
        
        echo '<p>' . __( 'Created buttons', 'wpsr' ) . '</p>';
        $buttons = WPSR_Buttons::list_all();
        WPSR_Admin::buttons_list( 'all_buttons', $feature );
        
        echo '<p>' .__( 'Drag the buttons from the above list and drop it into the template below.', 'wpsr' ) . '</p>';
        WPSR_Admin::buttons_veditor( "buttons", $values['buttons'], false, false );
        
        WPSR_Admin::box_wrap( 'close' );
        
        $sb_types = array(
            'vertical' => array( __( 'Vertical', 'wpsr' ), 'sb-vertical.png', '100px' ),
            'horizontal' => array( __( 'Horizontal', 'wpsr' ), 'sb-horizontal.png', '100px' )
        );
        
        $sb_bar_positions = array(
            'vertical' => array(
                'scontent' => __( 'Stick to content', 'wpsr' ),
                'wleft' => __( 'Left of the window', 'wpsr' ),
                'wright' => __( 'Right of the window', 'wpsr' )
            ),
            'horizontal' => array(
                'wbottom' => __( 'Bottom of the window', 'wpsr' ),
                'wtop' => __( 'Top of the window', 'wpsr' )
            )
        );
        
        $section1 = array(
            array( __( 'Sharebar type', 'wpsr' ), WPSR_Admin::field( 'image_select', array(
                'name' => 'type',
                'value' => $values['type'], 
                'list' => $sb_types
            ))),
            
            array( __( 'Vertical sharebar position', 'wpsr' ), WPSR_Admin::field( 'select', array(
                'name' => 'vl_position',
                'value' => $values['vl_position'], 
                'list' => $sb_bar_positions[ 'vertical' ], 
                'helper' => __( 'The position of the vertical sharebar in the page', 'wpsr' )
            )), 'data-conditioner data-condr-input="[name=type]" data-condr-value="vertical" data-condr-action="simple?show:hide" data-condr-events="change"'),
            
            array( __( 'Horizontal sharebar position', 'wpsr' ), WPSR_Admin::field( 'select', array(
                'name' => 'hl_position',
                'value' => $values['hl_position'], 
                'list' => $sb_bar_positions[ 'horizontal' ], 
                'helper' => __( 'The position of the horizontal sharebar in the page', 'wpsr' )
            )), 'data-conditioner data-condr-input="[name=type]" data-condr-value="horizontal" data-condr-action="simple?show:hide" data-condr-events="change"'),
            
            array( __( 'ID or class name of the content to stick with', 'wpsr' ), WPSR_Admin::field( 'text', array(
                'name' => 'stick_element',
                'value' => $values['stick_element'],
                'placeholder' => 'Ex: #content',
                'qtip' => 'https://www.youtube.com/watch?v=GQ1YO0xZ7WA'
            )), 'class="tbl_row_stick_cnt"' ),
            
        );
        
        WPSR_Admin::build_table( $section1, __( 'Sharebar type', 'wpsr' ), '', false, '3' );
        
        
        $themes = array(
            'simple' => __( 'Simple', 'wpsr' ),
            'simple-sq' => __( 'Simple - Square edges', 'wpsr' ),
            'simple-ns' => __( 'Simple - No Shadow', 'wpsr' ),
            'simple-icon-counter' => __( 'Simple - Sharebar with icons and counter', 'wpsr' ),
        );
        
        $mv_sharebar = array(
            'move' => __( 'Move when page scrolls', 'wpsr' ),
            'static' => __( 'Static, no movement', 'wpsr' )
        );
        
        $section2 = array(
            
            array( __( 'Theme', 'wpsr' ), WPSR_Admin::field( 'select', array(
                'name' => 'theme',
                'value' => $values['theme'], 
                'list' => apply_filters( 'wpsr_mod_sharebar_themes', $themes ),
            ))),
            
            /*
            array( 'Horizontal sharebar width', WPSR_Admin::field( 'text', array(
                'name' => 'hl_width',
                'value' => $values['hl_width'],
                'placeholder' => 'Enter width of the sharebar. Ex: 800px',
            )), 'data-conditioner data-condr-input="[name=type]" data-condr-value="horizontal" data-condr-action="simple?show:hide" data-condr-events="change" '),
            */
            
            array( __( 'Sharebar movement', 'wpsr' ), WPSR_Admin::field( 'select', array(
                'name' => 'vl_movement',
                'value' => $values['vl_movement'], 
                'list' => $mv_sharebar,
            )), 'data-conditioner data-condr-input="[name=type]" data-condr-value="vertical" data-condr-action="simple?show:hide" data-condr-events="change" '),
            
            array( __( 'Background color', 'wpsr' ), WPSR_Admin::field( 'text', array(
                'name' => 'bg_color',
                'value' => $values['bg_color'],
                'class' => 'color_picker',
                'helper' => __( 'Set empty value for transparency', 'wpsr' ),
            ))),
            
            array( __( 'Border color', 'wpsr' ), WPSR_Admin::field( 'text', array(
                'name' => 'border_color',
                'value' => $values['border_color'],
                'class' => 'color_picker',
            ))),
            
            array( __( 'Open, close button color', 'wpsr' ), WPSR_Admin::field( 'select', array(
                'name' => 'oc_color',
                'value' => $values['oc_color'],
                'list' => array(
                    'black' => __( 'Black', 'wpsr' ),
                    'white' => __( 'White', 'wpsr' )
                ),
            ))),
            
            array( __( 'Offset from window/content', 'wpsr' ), WPSR_Admin::field( 'text', array(
                'name' => 'offset',
                'value' => $values['offset'],
                'helper' => __( 'Pixels to offset the sharebar. You can also use the "preview" button below to edit visually.', 'wpsr' ),
            ))),
            
            array( __( 'Additional CSS styles', 'wpsr' ), WPSR_Admin::field( 'text', array(
                'name' => 'css_class',
                'value' => $values['css_class'],
                'placeholder' => __( 'Enter CSS class name separated by comma', 'wpsr' ),
            ))),
            
            array( __( 'Minimize when screen width is less than', 'wpsr' ), WPSR_Admin::field( 'text', array(
                'name' => 'min_on_width',
                'value' => $values['min_on_width'],
                'type' => 'number',
                'helper' => __( 'in pixels. 0 to disable.' )
            ))),
            
        );
        
        WPSR_Admin::build_table( $section2, __( 'Customization', 'wpsr' ), '', false, '4' );
        
        WPSR_Admin::box_wrap( 'open', __( 'Preview and adjust the position of sharebar', 'wpsr' ), __( 'Click the button below to preview the sharebar and adjust its position in page.', 'wpsr' ), '5' );
        echo '<button class="button button-primary sharebar_preview_btn" title="' . __( 'Click to show preview for sharebar', 'wpsr' ) . '"><i class="fa fa-cog fa-spin"></i> ' . __( 'Open preview and adjust position', 'wpsr' ) . '</button>';
        echo '<div class="sharebar_preview_iwrap"><iframe src=""></iframe></div>';
        WPSR_Admin::box_wrap( 'close' );
        
        // Location rules
        WPSR_Admin::box_wrap( 'open', __( 'Conditions to display the sharebar', 'wpsr' ), __( 'Choose the below options to select the pages which will display the sharebar.', 'wpsr' ), '6' );
        WPSR_Location_Rules::display_rules( "loc_rules", $values['loc_rules'] );
        WPSR_Admin::box_wrap( 'close' );
        
        echo '<script>jQuery(document).ready(function(){
            jQuery( ".tbl_row_stick_cnt" ).conditioner({
                conditions: [
                    {
                        input: "[name=type]",
                        type: "simple",
                        value: "vertical"
                    },
                    {
                        input: "[name=vl_position]",
                        type: "simple",
                        value: "scontent"
                    }
                ],
                events: "click",
                onTrue: function(){  jQuery(this).show();  },
                onFalse: function(){  jQuery(this).hide();  }
            });
        });</script>';
        
        echo '</div>';
        
    }
    
    
    function page(){
        
        WPSR_Admin::settings_form( 'sharebar' );
        
    }
    
    function validation( $input ){
        return $input;
    }
    
}

new wpsr_admin_sharebar();

?>