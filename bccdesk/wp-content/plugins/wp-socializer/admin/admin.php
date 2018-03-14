<?php
/**
  * Main entry point class for admin page
  * 
  **/

class WPSR_Admin{
    
    public static $tabs = array();
    public static $pagehook = 'toplevel_page_wp_socializer';
    
    public static function init(){
        
        // Register the admin menu
        add_action( 'admin_menu', array( __CLASS__, 'admin_menu' ) );
        
        // Enqueue the scripts and styles
        add_action( 'admin_enqueue_scripts', array( __CLASS__, 'enqueue_scripts' ) );
        
        // Register action to include admin scripts
        add_action( 'admin_print_scripts', array( __CLASS__, 'inline_scripts' ) );
        
        // Register the action for admin ajax features
        add_action( 'wp_ajax_wpsr_admin_ajax', array( __CLASS__, 'admin_ajax' ) );
        
        // Register the action links in plugin list page
        add_filter( 'plugin_action_links_' . WPSR_BASE_NAME, array( __CLASS__, 'action_links' ) );
        
        // Register the admin notice to inform new version features
        add_action( 'admin_notices', array( __CLASS__, 'admin_notices' ) );
        
    }
    
    public static function admin_menu(){
        
        $tabs = self::get_tabs();
        $icon = WPSR_ADMIN_URL . 'images/icons/wp-socializer-sm.png';
        
        add_menu_page( 'WP Socializer - Admin page', 'WP Socializer', 'manage_options', 'wp_socializer', array( __CLASS__, 'admin_page' ), $icon );
        
        foreach( $tabs as $id=>$config ){
            add_submenu_page( 'wp_socializer', 'WP Socializer - ' . $config[ 'name' ], $config[ 'name' ], 'manage_options', 'wp_socializer&tab="' . $id . '"', array( __CLASS__, 'admin_page' ) );
        }
    }
    
    public static function add_tab( $id, $config ){
        
        self::$tabs[ $id ] = $config;
        
        // Register the validation filter for the form
        if( isset( $config[ 'form' ][ 'validation' ] ) ){
            add_filter( 'wpsr_form_validation_' . $config[ 'form' ][ 'name' ], $config[ 'form' ][ 'validation' ] );
        }
    }
    
    public static function get_tabs(){
        return apply_filters( 'wpsr_admin_tabs', self::$tabs );
    }
    
    public static function admin_page(){
        
        if( !current_user_can( 'manage_options' ) ){
            wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
        }
        
        if( get_option( 'wpsr_setup' ) === false ){
            wp_safe_redirect( admin_url( 'admin.php?page=wp_socializer_setup' ) );
        }
        
        $tabs = self::get_tabs();
        $current_tab = isset( $_GET['tab'] ) ? $_GET['tab'] : '';
        
        // Set default tab
        if( empty( $current_tab ) || !array_key_exists( $current_tab, $tabs ) ){
            $current_tab = 'buttons';
        }
        
        echo '<div class="wrap">';
            self::admin_tabs();
            echo '<div id="content">';  
                call_user_func( self::$tabs[ $current_tab ][ 'page_callback' ] );
            echo '</div>';
        echo '</div>';
        
    }
    
    public static function admin_tabs(){
        
        // Set default as home
        $_GET[ 'tab' ] = empty( $_GET[ 'tab' ] ) ? 'buttons' : $_GET[ 'tab' ];
        
        // Apply filters on the tabs list
        $tabs = apply_filters( 'wpsr_mod_admin_tabs', self::$tabs );
        
        echo '<div id="head_wrap">';
        echo '<h1 class="wpsr_title">WP Socializer 
        <span class="title-count">' . WPSR_VERSION . '</span>
        <a class="swz_link" href="' . admin_url( 'admin.php?page=wp_socializer_setup' ) . '"><i class="fa fa-magic"></i>' . __( 'Open setup wizard', 'wpsr' ) . '</a>
        <a class="help_link" href="https://goo.gl/C52Yj1"><i class="fa fa-question"></i>' . __( 'Help', 'wpsr' ) . '</a>
        <a class="help_link" href="https://goo.gl/eocazH" target="_blank"><i class="fa fa-comments"></i>' . __( 'Support forum', 'wpsr' ) . '</a></h1>';
        echo '<h2 class="nav-tab-wrapper" >';
        
        // Tabs
        foreach( $tabs as $id => $config ){
            
            // Apply default config
            $config = WPSR_Lists::set_defaults( $config, array(
                'name' => '',
                'banner' => '',
                'page_callback' => '',
                'form' => array(
                    'id' => '',
                    'name' => '',
                    'callback' => '',
                    'validation' => '',
                )
            ));
            
            if( $_GET[ 'tab' ] == $id ){
                $active = ' nav-tab-active';
            }else{
                $active = '';
            }
            echo '<a class="nav-tab' . $active . ' tab-' . $id . '" href="admin.php?page=wp_socializer&tab=' . $id . '">' . $config[ 'name' ];
            
            if( !empty( $config[ 'banner' ] ) ){
                echo '<div class="page_tip"><img src="' . $config[ 'banner' ] . '" alt="' . $config[ 'name' ] . '" /></div>';
            }
            
            echo '</a>';
        }
        echo '</h2>';
        
        self::top_sharebar();
        
        echo '</div>';
    }
    
    public static function settings_form( $id = '' ){
        
        if( empty( $id ) )
            return;
        
        $form_id = self::$tabs[ $id ][ 'form' ][ 'id' ];
        $form_name = self::$tabs[ $id ][ 'form' ][ 'name' ];
        $form_callback = self::$tabs[ $id ][ 'form' ][ 'callback' ];
        
        $option = 'wpsr_' . $form_name;
        $nonce = 'wpsr_nonce_' . $form_name . '_submit';
        $form_fields = 'wpsr_form_' . $form_name;
        $validation_filter = 'wpsr_form_validation_' . $form_name;
        
        // Form post
        if( $_POST && check_admin_referer( $nonce ) ){
            
            $post = self::clean_post();
            $post_value = apply_filters( $validation_filter, $post );
            
            update_option( $option, $post_value );
            
            echo '<div class="notice notice-success inline is-dismissible"><p>' . __( 'Settings saved !', 'wpsr' ) . '</p></div>';
        }
        
        // Get saved details
        $saved_settings = get_option( $option );
        
        echo '<form method="post" id="' . $form_id . '" class="main_form">';
            
            // Execute all hooked form fields from services
            if( is_callable( $form_callback ) ){
                call_user_func( $form_callback, $saved_settings );
            }
            
            do_action( 'wpsr_form_' . $form_name, $saved_settings );
            
            wp_nonce_field( $nonce );
        
        echo '<div class="main_form_footer postbox"><input type="submit" value="Save Settings" class="button button-primary" /></div>';
        
        echo '</form>';
        
        self::intro_popups();
        
        self::admin_footer();
        
        self::admin_sidebar();
        
    }
    
    public static function enqueue_scripts( $hook ){
        
        if( self::$pagehook == $hook ){
            wp_enqueue_style( 'wpsr_css', WPSR_ADMIN_URL . 'css/style.css' );
            wp_enqueue_style( 'wp-color-picker' );
            wp_enqueue_style( 'wpsr_ipopup', WPSR_ADMIN_URL . 'css/ipopup.css' );
            wp_enqueue_style( 'wpsr_fa', WPSR_Lists::ext_res( 'font-awesome' ) );
            
            wp_enqueue_script( 'jquery' );
            wp_enqueue_script( 'jquery-conditioner', WPSR_ADMIN_URL . 'js/jquery.conditioner.js', array( 'jquery' ) );
            wp_enqueue_script( 'wp-color-picker' );
            wp_enqueue_script( 'jquery-ui-sortable' );
            wp_enqueue_script( 'jquery-ui-draggable' );
            wp_enqueue_script( 'wpsr_ipopup', WPSR_ADMIN_URL . 'js/ipopup.js' );
            wp_enqueue_script( 'wpsr_js', WPSR_ADMIN_URL . 'js/script.js', array( 'jquery', 'jquery-ui-sortable', 'jquery-ui-draggable', 'jquery-conditioner', 'wp-color-picker', 'wpsr_ipopup' ) );
            
        }
        
    }
    
    public static function inline_scripts(){
        
        $screen = get_current_screen();
        
        if( self::$pagehook == $screen->id ){
            
            $services = WPSR_Services::list_all();
            $loc_rules = WPSR_Location_Rules::rules_list();
            
            $js_texts = array(
                'sel_btn' => __( 'Please select a service to create button for !', 'wpsr' ),
                'del_btn' => __( 'Are you sure want to delete this button ?', 'wpsr' ),
                'close' => __( 'Close', 'wpsr' ),
                'fb_empty' => __( 'No buttons are added. Open the editor to add buttons.', 'wpsr' )
            );
            
            echo '<script>
            var wpsr = {
                ajaxurl: "' . get_admin_url() . 'admin-ajax.php",
                services: ' . wp_json_encode( $services ) . ',
                loc_rules: ' . wp_json_encode( $loc_rules ) . ',
                js_texts: ' . wp_json_encode( $js_texts ) . ',
                ext_res: ' . wp_json_encode( WPSR_Lists::ext_res() ) . ',
            };
            </script>';
            
            echo '<script>
            var wpsr_show = {
                changelog: "' . ( ( get_option( 'wpsr_version' ) != WPSR_VERSION ) ? WPSR_VERSION : 'false'  ) . '",
                setup: "' . ( ( get_option( 'wpsr_setup' ) != WPSR_SETUP_VERSION ) ? WPSR_SETUP_VERSION : 'false' ) . '"
            }
            </script>';
        }
        
    }
    
    public static function box_wrap( $type, $title = '' , $desc = '', $step = '', $class = '' ){
        
        $title = !empty( $step ) ? '<span class="step" data-step="' . $step . '">' . $title . '</span>' : $title;
        
        if( $type == 'open' ){
            echo '<div class="postbox ' . $class . '">';
            echo '<h3 class="hndle">' . $title . '</h3><div class="inside">';
            if( !empty( $desc ) ) echo '<p>' . $desc . '</p>';
        }
        
        if( $type == 'close' ){
            echo '</div></div> <!-- postbox, inside -->';
        }

    }
    
    public static function select_box( $list = array(), $props = array() , $action_btn = false ){
        
        $class = $props[0];
        $name = $props[1];
        $dval = $props[2];
        
        echo '<div class="sbox_wrap ' . $class . '">';      
        echo '<input class="sbox_field" type="hidden" ' . ( $name ? 'name="' . $name . '"' : '' ) . ' value="' . ( $name ? $dval : '' ) . '" />';
        echo '<div class="sbox_inner" title="' . __( 'Click to open the list of services', 'wpsr' ) . '">';
        echo '<div class="sbox_val">' . ( $name ? ( isset( $list[ $dval ] ) ? $list[ $dval ] : 'Select ...' ) : $dval ) . '</div>';
        echo '<ul title="' . __( 'Select this service', 'wpsr' ) . '">';
        foreach( $list as $k => $v ){
            echo '<li data-val="' . $k . '">' . $v . '</li>';
        }
        echo '</ul>';
        echo '</div>';
        if( $action_btn ) echo '<div class="sbox_action button-primary">' . $action_btn . '</div>';
        echo '</div>';
        
    }
    
    public static function build_table( $input, $title = '', $desc = '', $mini = false, $step = '', $class = '' ){
        
        //$input = array( array( 'Desc', 'field' ), array( 'Desc2', 'field2' ) );
        
        if( !is_array( $input ) )
            return '';
        
        if( !empty( $title ) && $mini == false ){
            WPSR_Admin::box_wrap( 'open', $title, $desc, $step, $class );
        }else if ( $mini == true ){
            echo !empty( $title ) || !empty( $desc ) ? '<div class="sec_title_wrap">' : '';
            echo !empty( $title ) ? '<h4>' . $title . '</h4>' : '';
            echo !empty( $desc ) ? '<p>' . $desc . '</p>' : '';
            echo !empty( $title ) || !empty( $desc ) ? '</div>' : '';
        }
        
        echo '<table class="form-table">';
        foreach( $input as $r ){
            echo '<tr ' . ( isset( $r[2] ) ? $r[2]  : '' ) . '>';
                echo '<th>' . $r[0] . '</th>';
                echo '<td>' . $r[1] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        
        if( !empty( $title ) && $mini == false ){
            echo '</div></div>';
        }
        
    }

    public static function field( $field_type, $params = array() ){
        
        $defaults = array(
        
            'text' => array(
                'type' => 'text',
                'value' => '',
                'default' => '',
                'id' => '',
                'class' => 'regular-text',
                'name' => '',
                'placeholder' => '',
                'required' => '',
                'helper' => '',
                'custom' => '',
                'tip' => '',
                'qtip' => ''
            ),
            
            'select' => array(
                'id' => '',
                'class' => '',
                'name' => '',
                'list' => array(),
                'value' => '',
                'default' => '',
                'helper' => '',
                'custom' => '',
                'tip' => '',
                'qtip' => ''
            ),
            
            'image_select' => array(
                'id' => '',
                'class' => '',
                'name' => '',
                'list' => array(),
                'value' => '',
                'default' => '',
                'helper' => '',
                'custom' => '',
                'tip' => '',
                'qtip' => ''
            ),
            
            'radio' => array(
                'id' => '',
                'class' => '',
                'name' => '',
                'list' => array(),
                'value' => '',
                'default' => '',
                'helper' => '',
                'custom' => '',
                'tip' => '',
                'qtip' => ''
            ),
            
            'checkbox' => array(
                'id' => '',
                'class' => '',
                'name' => '',
                'value' => '',
                'default' => '',
                'helper' => '',
                'custom' => '',
                'tip' => '',
                'qtip' => ''
            ),
            
            'checkboxes' => array(
                'id' => '',
                'class' => '',
                'name' => '',
                'list' => array(),
                'value' => array(),
                'default' => array(),
                'helper' => '',
                'custom' => '',
                'tip' => '',
                'qtip' => ''
            ),
            
            'textarea' => array(
                'type' => 'text',
                'value' => '',
                'name' => '',
                'default' => '',
                'id' => '',
                'class' => '',
                'placeholder' => '',
                'rows' => '',
                'cols' => '',
                'helper' => '',
                'custom' => '',
                'tip' => '',
                'qtip' => ''
            )
            
        );
        
        $params = WPSR_Lists::set_defaults( $params, $defaults[ $field_type ] );
        $field_html = '';
        
        $params = self::clean_attr( $params );
        extract( $params, EXTR_SKIP );
        
        $tip = !empty( $tip ) ? ' data-htip="' . $tip . '" ' : '';
        
        switch( $field_type ){
            case 'text':
                $field_html = "<input type='$type' class='$class' id='$id' name='$name' value='$value' placeholder='$placeholder' " . ( $required ? "required='$required'" : "" ) . "  $custom $tip />";
            break;
            
            case 'select':
                $field_html .= "<select name='$name' class='$class' id='$id' $custom $tip>";
                foreach( $list as $k => $v ){
                    $field_html .= "<option value='$k' " . selected( $value, $k, false ) . ">$v</option>";
                }
                $field_html .= "</select>";
            break;
            
            case 'image_select':
                $field_html .= "<select name='$name' class='$class img_select' id='$id' $custom $tip>";
                foreach( $list as $k => $v ){
                    $opt_name = ( count( $v ) >= 2 ) ? $v[0] : $v;
                    $field_html .= "<option value='$k' " . selected( $value, $k, false ) . ">$opt_name</option>";
                }
                $field_html .= "</select>";
                $field_html .= "<ul class='img_select_list clearfix'>";
                foreach( $list as $k => $v ){
                    $is_selected = ( $value == $k ) ? 'img_opt_selected' : '';
                    $img = 'default_image.png';
                    $opt_name = '';
                    if( count( $v ) >= 2 ){
                        $opt_name = $v[0];
                        $img = $v[1];
                    }else{
                        $opt_name = $v;
                    }
                    $img = ( substr( $img, 0, 4 ) !== 'http' ) ? ( WPSR_ADMIN_URL . 'images/select_images/' . $img ) : $img;
                    $width = ( is_array( $v ) && isset( $v[2] ) ) ? "style='width:" . $v[2] . "'" : "";
                    $field_html .= "<li data-value='$k' data-init='false' class='" . $is_selected . "' $width><img src='" . $img . "' /><span>" . $opt_name . "</span></li>";
                }
                $field_html .= "</ul>";
            break;
            
            case 'radio':
                foreach( $list as $k => $v ){
                    $field_html .= "<label class='lbl_margin' $custom $tip><input type='radio' name='$name' class='$class' value='$k' id='$id' " . checked( $value, $k, false ) . " />&nbsp;$v </label>";
                }
            break;
            
            case 'checkbox':
                $checked = ( $value == '1' ) ? 'checked="checked"' : '';
                $field_html .= "<input type='checkbox' name='$name' class='$class' value='1' id='$id' $checked $custom $tip />";
            break;
            
            case 'checkboxes':
                foreach( $list as $k => $v ){
                    $checked = ( in_array( $k,(array) $value ) ) ? 'checked="checked"' : '';
                    $field_html .= "<label $custom $tip><input type='checkbox' name='" . $name . "[]' class='$class' value='$k' id='$id' $checked />&nbsp;$v </label>&nbsp;&nbsp;";
                }
            break;
            
            case 'textarea':
                $field_html .= "<textarea id='$id' name='$name' class='$class' placeholder='$placeholder' rows='$rows' cols='$cols' $custom $tip>$value</textarea>";
            break;
        }
        
        if( !empty( $qtip ) )
            $field_html .= "<a href='$qtip' class='qtip_icon' title='" . __( 'Click to view help', 'wpsr' ) . "' target='_blank'><i class='fa fa-question-circle'></i></a>";
        
        if( !empty( $helper ) )
            $field_html .= "<p class='description'>$helper</p>";
        
        return $field_html;
        
    }
    
    public static function buttons_selector( $feature = array() ){
        
        $services = WPSR_Services::list_all();
        $buttons_list = array();
        $feature = self::validate_feature( $feature );
        
        foreach( $services as $id => $config ){
            if( !in_array( $feature[ 'name' ], $config[ 'hide_in_feature' ] ) && !in_array( $id, $feature[ 'hide_services' ] ) ){
                $img = '<img src="' . $config[ 'icons' ] . '" />';
                $name = '<div class="btn_liname" data-service="' . $id . '" data-feature="' . $feature[ 'name' ] . '" >' . $config[ 'name' ] . ( isset( $config['desc'] ) ? ' <em>' . $config['desc'] . '</em>' : '' ) . '</div>';
                $buttons_list[ $id ] = $img . $name;
            }
        }
        
        self::select_box( $buttons_list, array( 'btn_selector', false, '<i class="grey">Select a service from the list ...</i>' ), 'Create button' );
        
    }
    
    public static function buttons_list( $mode, $prop ){
        
        $services = WPSR_Services::list_all();
        $buttons = WPSR_Buttons::list_all();
        $buttons_list = array(); // Holds all the button ids
        $class = '';
        
        // Print all created buttons, prop is feature
        if( $mode == 'all_buttons' ){
            $feature = self::validate_feature( $prop );
            $class = 'btns_created';
            foreach( $buttons as $id => $config )
                if( $config[ 'feature' ] == $feature[ 'name' ] )
                    array_push( $buttons_list, $id );
        }
        
        // Print all buttons for veditor, prop is list of buttons
        if( $mode == 'veditor_buttons' ){
            $buttons_list = $prop;
        }

        // To print the created buttons of specific feature
        echo '<ul class="btn_list clearfix ' . $class . '" data-empty="No buttons created">';
        foreach( $buttons_list as $button ){
            
            if( !isset( $buttons[ $button ] ) )
                continue;
            
            $btn_prop = $buttons[ $button ];
            
            if( !isset( $services[ $btn_prop[ 'service' ] ] ) )
                continue;
            
            $service = $services[ $btn_prop[ 'service' ] ];

            echo '<li data-service="' . $btn_prop[ 'service' ] . '" data-id="' . $button . '" class="ui_btn">';
                echo '<span class="btn_icon"><img src="' . $service['icons'] . '" /></span>';
                echo '<span class="btn_name"' . ( isset( $btn_prop[ 'settings' ][ 'title' ] ) ? 'data-title="' . $btn_prop[ 'settings' ][ 'title' ] . '"' : '' ) . '>' . $service['name'] . '</span>';
                echo '<span class="btn_action btn_delete dashicons dashicons-no-alt" title="' . __( 'Delete button', 'wpsr' ) . '"></span>';
                echo '<span class="btn_action btn_edit dashicons dashicons-admin-generic" title="' . __( 'Settings', 'wpsr' ) . '"></span>';
            echo '</li>';
        }
        echo '</ul>';
        
    }
    
    public static function buttons_veditor( $name, $content, $multiple_rows = true, $preview = false ){
        
        echo '<div class="vedit_wrap">';
        echo '<div class="veditor">';
        
        $tmpl = base64_decode( $content );
        $tmpl_cnt = ( empty( $tmpl ) || !isset( $tmpl ) ) ? '{"1":{"properties":{},"buttons":{}}}' : $tmpl ;
        $tmpl_cnt_obj = json_decode( $tmpl_cnt );
        $services = WPSR_Services::list_all();
        $buttons = WPSR_Buttons::list_all();
        
        foreach( $tmpl_cnt_obj as $k => $o ){
            $buttons_row = array();
            foreach( $o->buttons as $bid ){ // Iterate through array of button objects
                $bkey = key((array)$bid); // Get the key of the button obj
                array_push( $buttons_row, $bkey );
            }
            self::buttons_list( 'veditor_buttons', $buttons_row );
        }

        echo '</div>';
        echo '<input type="hidden" class="veditor_content" name="' . $name . '" />';
        
        if( $preview ){
            echo '<div class="veditor_preview">';
            echo '<button class="button vedit_preview_btn" data-action="' . $preview . '" title="' . __( 'Click to show preview for the above template', 'wpsr' ) . '" data-refresh="' . __( 'Refresh preview', 'wpsr' ) . '"><i class="fa fa-eye"></i> ' . __( 'Show preview', 'wpsr' ) . '</button>';
            echo '<iframe src="" width="100%" class="vedit_preview_iframe"></iframe>';
            echo '</div>';
        }
        
        echo '</div><!-- veditor_wrap -->';
        
        if( $multiple_rows ){
            echo '<div class="vedit_menu">
            <a class="vedit_add_row" title="' . __( 'Add a new row', 'wpsr' ) . '"><span class="dashicons dashicons-plus"></span></a>
            <a class="vedit_delete_row" title="' . __( 'Delete row', 'wpsr' ) . '"><span class="dashicons dashicons-no-alt"></span></a>
            </div>';
        }
        
    }
    
    public static function validate_feature( $feature ){
        
        return WPSR_Lists::set_defaults( $feature, array(
            'name' => 'none',
            'hide_services' => array()
        ));
        
    }
    
    public static function admin_ajax(){
        
        $get = self::clean_get();
        $do = $get[ 'do' ];
        
        if( $do == 'close_changelog' ){
            update_option( 'wpsr_version', WPSR_VERSION );
            echo 'done';
        }
        
        if( $do == 'close_setup' ){
            update_option( 'wpsr_setup', WPSR_SETUP_VERSION );
            echo 'done';
        }
        
        die( 0 );
        
    }
    
    public static function clean_post(){
        
        return stripslashes_deep( $_POST );
        
    }
    
    public static function clean_attr( $a ){
        
        foreach( $a as $k=>$v ){
            if( is_array( $v ) ){
                $a[ $k ] = self::clean_attr( $v );
            }else{
                
                if( in_array( $k, array( 'custom', 'tip', 'helper' ) ) )
                    continue;
                
                $a[ $k ] = esc_attr( $v );
            }
        }
        
        return $a;
    }
    
    public static function clean_get(){
        
        foreach( $_GET as $k=>$v ){
            $_GET[$k] = sanitize_text_field( $v );
        }

        return $_GET;
    }
    
    public static function youtube_help_icon( $url ){
        echo '<a href="' . $url . '" title="' . __( 'Open video tutorial for this page', 'wpsr' ) . '" class="yt_help_icon" target="_blank"><i class="fa fa-question-circle"></i></a>';
    }
    
    public static function action_links( $links ){
        array_unshift( $links, '<a href="https://goo.gl/qMF3iE" target="_blank">Donate</a>' );
        array_unshift( $links, '<a href="'. esc_url( admin_url( 'admin.php?page=wp_socializer&tab=help') ) .'">Help</a>' );
        array_unshift( $links, '<a href="'. esc_url( admin_url( 'admin.php?page=wp_socializer') ) .'">⚙️ Settings</a>' );
        return $links;
    }
    
    public static function admin_notices(){
        
        $pages_display = array( 'plugins', 'update-core', 'dashboard' );
        
        //if( in_array( get_current_screen()->id, $pages_display ) ){
            if( version_compare( WPSR_VERSION, get_option( 'wpsr_version' ), '>' ) ){
                echo '<div class="notice notice-success is-dismissible">
                    <p>' . sprintf( __( '<b>WP Socializer</b> is updated to latest version. Please visit the %ssettings%s page to see all the new features and the change log.', 'wpsr' ), '⚙️ <a href="' . esc_url( admin_url( 'admin.php?page=wp_socializer') ) . '">', '</a>' ) .  '</p>
                </div>';
            }
        //}
    }
    
    public static function intro_popups(){
        echo '<div class="welcome_wrap intro_popup style_ele">
        <section></section>
        <footer><button class="button button-primary close_changelog_btn">' . __( 'Start using WP Socializer', 'wpsr' ) . '</button></footer>
        </div>';
        
        echo '<div class="setup_intro intro_popup style_ele">
        <section>
            <h1 align="center"><i class="fa fa-magic"></i> Quick and easy setup wizard</h1>
            <p class="setup_hint">1 <i class="fa fa-caret-right"></i> 2 <i class="fa fa-caret-right"></i> <i class="fa fa-check-circle"></i></p>
            <p>WP Socializer has a setup wizard to quickly add social sharing buttons and icons.</p>
            <p>There are 50+ hand picked social buttons and icons design template to choose from the setup.</p>
            <p>Open the setup wizard to begin with.</p>
        </section>
        <footer><a href="#" class="button close_setup_intro_btn">' . __( 'Skip setup', 'wpsr' ) . '</a> <a href="' . admin_url( 'admin.php?page=wp_socializer_setup' ) . '" class="button button-primary">' . __( 'Open setup wizard', 'wpsr' ) . '</a></footer>
        </div>';
        
    }
    
    public static function top_sharebar(){
        echo '
        <div class="top_sharebar">
        
    <div class="socializer">
        <span class="sr-twitter sr-text-in"><a href="https://twitter.com/intent/tweet?hashtags=wordpress&ref_src=twsrc%5Etfw&related=vaakash&text=Check%20out%20WP%20Socializer%2C%20a%20powerful%20social%20media%20share%20icons%2C%20buttons%20plugin%20for%20WordPress&tw_p=tweetbutton&url=https%3A%2F%2Fwww.aakashweb.com%2Fwordpress-plugins%2Fwp-socializer%2F&via=vaakash" target="_blank" title="Twitter"><i class="fa fa-twitter"></i><span class="text">Tweet WP Socializer !</span></a></span>
        <span class="sr-googleplus sr-text-in"><a href="https://plus.google.com/share?url=https%3A%2F%2Fwww.aakashweb.com%2Fwordpress-plugins%2Fwp-socializer%2F" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i><span class="text">Share</span></a></span>
    </div>
    
    </div>';
    }
    
    public static function admin_sidebar(){
        echo '<ul class="share_wpsr">
            <li><a href="https://goo.gl/A8AFcd" target="_blank"><img src="' . WPSR_ADMIN_URL . '/images/icons/anpn-thumb.svg" alt="Advanced post navigator"/><span>Advanced post navigator WordPress plugin</span></a><div><img src="https://i0.wp.com/oi64.tinypic.com/90vhwj.jpg" /></div></li>
            <li><a href="https://goo.gl/qMF3iE" target="_blank"><span><img src="' . WPSR_ADMIN_URL . '/images/icons/coffee.svg" width="80px" /> Buy me a <br/>Coffee !</span></a></li>
            <li><a href="https://goo.gl/2DjGhD" target="_blank"><span><img src="' . WPSR_ADMIN_URL . '/images/icons/rate-wpsr.svg" /> Please rate 5 stars if you like <br/>WP Socializer</span></a></li>
            <li><a href="https://goo.gl/u8Zf09" target="_blank"><span><i class="fa fa-commenting"></i><br/><br/>Give a feedback</span></a></li>
        </ul>';
    }
    
    public static function admin_footer(){
        
        echo '
        <div class="coffee_box">
        
        <div class="coffee_amt_wrap">
        <p><select class="coffee_amt">
            <option value="2">$2</option>
            <option value="3">$3</option>
            <option value="4">$4</option>
            <option value="5" selected="selected">$5</option>
            <option value="6">$6</option>
            <option value="7">$7</option>
            <option value="8">$8</option>
            <option value="9">$9</option>
            <option value="10">$10</option>
            <option value="11">$11</option>
            <option value="12">$12</option>
            <option value="">Custom</option>
        </select></p>
        <a class="button button-primary buy_coffee_btn" href="https://www.paypal.me/vaakash/5" data-link="https://www.paypal.me/vaakash/" target="_blank">Buy me a coffee !</a>
        </div>
        
        <h2>Buy me a coffee !</h2>
        <p>Thank you for using WP Socializer. If you found the plugin useful buy me a coffee ! Your donation will motivate and make me happy for all the efforts. You can donate via PayPal.</p>
        
        </div>
        ';
        
        echo '<div class="page_footer">
        <p><img src="' . WPSR_ADMIN_URL . '/images/icons/aakash-web.png" /> Created by <a href="https://goo.gl/aHKnsM" target="_blank">Aakash Chakravarthy</a> - Follow me on <a href="https://twitter.com/vaakash", target="_blank">Twitter</a>, <a href="https://fb.com/aakashweb" target="_blank">Facebook</a>, <a href="https://www.linkedin.com/in/vaakash/" target="_blank">LinkedIn</a>. Check out <a href="https://goo.gl/OAxx4l" target="_blank">my other works</a>.</p>
        </div>';
        
    }
    
}

WPSR_Admin::init();

?>