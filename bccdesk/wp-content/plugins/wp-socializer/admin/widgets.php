<?php
/**
  * Widgets admin page
  *
  **/
  
class wpsr_admin_widgets{
    
    function __construct(){
        
        WPSR_Admin::add_tab( 'widgets', array(
            'name' => __( 'Widgets', 'wpsr' ),
            'page_callback' => array( $this, 'page' ),
            'form' => array(
                'id' => 'widgets',
                'name' => 'widgets',
                'callback' => ''
            )
        ));
        
    }
    
    function page(){
        
        $widgets = WPSR_Widgets::list_all();
        $link = 'widgets.php#wp-socializer';
        
        echo '<div class="widgets_page">';
        
        echo '<h1>' . __( 'Social media widgets', 'wpsr' ) .'</h1>';
        echo '<p>' . __( 'With WP Socializer plugin native social media widgets can also be inserted. WP Socializer supports the below list of widgets and they can be inserted in the WordPress Widgets page.', 'wpsr' ) . '</p>';
        echo '<p><a href="' . $link . '" class="button button-primary top_btn">' . __( 'Open Widgets page', 'wpsr' ) . '</a></p>';
        
        $widget_button = '<a href="' . $link . '" target="_blank" class="button button-primary">' . __( 'Insert widget', 'wpsr' ) . '</a>';
        echo '<h2>' . __( 'Available widgets', 'wpsr' ) . '</h2>';
        echo '<div class="widget_list clearfix">';
        foreach( $widgets as $id => $prop ){
            echo '<div class="widget_info">';
            echo '<h3>' . $prop[ 'name' ] . '</h3>';
            if( isset( $prop[ 'banner' ] ) ){
                echo '<div class="widget_image"><img src="' . $prop[ 'banner' ] . '" /></div>';
            }
            if( isset( $prop[ 'description' ] ) ){
                echo '<p>' . $prop[ 'description' ] . '</p>';
            }
            echo $widget_button;
            echo '</div>';
        }
        echo '</div>';
        
        echo '</div>';
        
        WPSR_Admin::admin_footer();
        
    }
    
    function validation( $input ){
        return $input;
    }
    
}

new wpsr_admin_widgets();

?>