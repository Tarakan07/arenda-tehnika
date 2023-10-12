<?php

/**
 * The Smart Archive Page Remove admin plugin class
 *
 * @since  5.0.0
 */
 
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The admin plugin class
 */
if ( !class_exists( 'PP_Smart_Archive_Page_Remove_Admin' ) ) {
  
  class PP_Smart_Archive_Page_Remove_Admin extends PPF08_Admin {

    
    /**
	   * Do Init
     *
     * @since 5.0.0
     * @access public
     */
    public function init() {
      
      $this->init_rating_notice( array( 
        'title'          => esc_html( 'Are you happy with the Smart Archive Page Remove plugin?', 'smart-archive-page-remove' ),
        'subtitle'       => esc_html( 'You\'ve  been using this plugin for a while now. Would be great to get some feedback!', 'smart-archive-page-remove' ),
        'button_yes'     => esc_html( 'Yes, I\'m happy with it', 'smart-archive-page-remove' ),
        'button_no'      => esc_html( 'Not really', 'smart-archive-page-remove' ),
        'button_later'   => esc_html( 'Ask me later', 'smart-archive-page-remove' ),
        'button_close'   => esc_html( 'Never show again', 'smart-archive-page-remove' ),
        'like'           => esc_html( 'I\'m really glad you like it.  I do not ask for a donation. All I\'m asking you for is to give it a good rating. Thank you very much.', 'smart-archive-page-remove' ),
        'button_rate'    => esc_html( 'Yes, I\'d like to rate it', 'smart-archive-page-remove' ),
        'dislike'        => esc_html( 'I\'m really sorry you don\'t like it. Would you please do me a favor and drop me line, why you are not happy with it? Maybe I can do better...', 'smart-archive-page-remove' ),
        'button_contact' => esc_html( 'Yes sure', 'smart-archive-page-remove' )
      ),
      array(
        'rate'           => 'https://wordpress.org/support/plugin/' . $this->core()->get_plugin_slug() . '/reviews/',
        'contact'        => 'https://petersplugins.com/contact/'
      ));

      $this->add_actions( array( 
        'admin_init',
        'admin_menu'
      ) );
      
      add_filter( 'plugin_action_links_' . plugin_basename( $this->core()->get_plugin_file() ), array( $this, 'add_settings_links' ) ); 
    
    }
    
    
    /**
     * init admin 
     * moved to PP_Smart_Archive_Page_Remove_Admin in v 5.0.0
     */
    function action_admin_init() {
      
      $this->add_setting_sections(
      
        array(
          
          array(
        
            'section' => 'general',
            'order'   => 10,
            'title'   => esc_html__( 'Archive Pages to remove', 'smart-archive-page-remove' ),
            'icon'    => 'general',
            'fields' => array(
              array(
                'key'      =>'author',
                'callback' => 'admin_author'
              ),
              array(
                'key'      =>'category',
                'callback' => 'admin_category'
              ),
              array(
                'key'      =>'tag',
                'callback' => 'admin_tag'
              ),
              array(
                'key'      =>'daily',
                'callback' => 'admin_daily'
              ),
              array(
                'key'      =>'monthly',
                'callback' => 'admin_monthly'
              ),
              array(
                'key'      =>'yearly',
                'callback' => 'admin_yearly'
              )
            
            )
        
          )
          
        )
        
      );
      
    }
    
    /**
     * handle the settings field author
     * moved to PP_Smart_Archive_Page_Remove_Admin in v 5.0.0
     */
    function admin_author() {
        
      $this->print_slider_check( 
        'author', 
        esc_html__( 'Author Archive Page', 'smart-archive-page-remove' ),
        false,
        false,
        '<span style="white-space: nowrap">' . __( 'e.g.', 'smart-archive-page-remove' ) . ' <code>' . get_author_posts_url( get_current_user_id() ) . '</code></span>'
      );
      
    }
    
    
    /**
     * handle the settings field category
     * moved to PP_Smart_Archive_Page_Remove_Admin in v 5.0.0
     */
    function admin_category() {
      
      $terms = get_terms( 'category', array( 'orderby' => 'count', 'order' => 'desc', 'hide_empty' => 0, 'childless' => true, 'parent' => 0, 'number' => 1 ) );
      if ( count( $terms ) > 0 ) {
        $termsample = get_term_link( $terms[0] );
      } else {
        $termsample = trailingslashit( get_site_url( get_option( 'category_base' ) ) ) . __( 'my-category', 'smart-archive-page-remove' );
      }
        
      $this->print_slider_check( 
        'category', 
        esc_html__( 'Category Archive Page', 'smart-archive-page-remove' ),
        false,
        false,
        '<span style="white-space: nowrap">' . __( 'e.g.', 'smart-archive-page-remove' ) . ' <code>' . $termsample . '</code></span>'
      );
      
    }
    
    
    /**
     * handle the settings field tag
     * moved to PP_Smart_Archive_Page_Remove_Admin in v 5.0.0
     */
    function admin_tag() {
      
      $tags = get_tags( array ( 'orderby' => 'count', 'order' => 'desc', 'hide_empty' => 0, 'number' => 1) );
      if ( count( $tags ) > 0 ) {
        $tagsample = get_tag_link( $tags[0]->term_id );
      } else {
        $tagsample = trailingslashit( get_site_url( get_option( 'tag_base' ) ) ) . __( 'my-tag', 'smart-archive-page-remove' );
      }
      
      $this->print_slider_check( 
        'tag', 
        esc_html__( 'Tag Archive Page', 'smart-archive-page-remove' ),
        false,
        false,
        '<span style="white-space: nowrap">' . __( 'e.g.', 'smart-archive-page-remove' ) . ' <code>' . $tagsample . '</code></span>'
      );
      
    }
    
    
    /**
     * handle the settings field daily
     * moved to PP_Smart_Archive_Page_Remove_Admin in v 5.0.0
     */
    function admin_daily() {
        
      $this->print_slider_check( 
        'daily', 
        esc_html__( 'Daily Archive Page', 'smart-archive-page-remove' ),
        false,
        false,
        '<span style="white-space: nowrap">' . __( 'e.g.', 'smart-archive-page-remove' ) . ' <code>' . get_day_link( false, false, false ) . '</code></span>'
      );
      
    }
    
    
    /**
     * handle the settings field monthly
     * moved to PP_Smart_Archive_Page_Remove_Admin in v 5.0.0
     */
    function admin_monthly() {
        
      $this->print_slider_check( 
        'monthly', 
        esc_html__( 'Monthly Archive Page', 'smart-archive-page-remove' ),
        false,
        false,
        '<span style="white-space: nowrap">' . __( 'e.g.', 'smart-archive-page-remove' ) . ' <code>' . get_month_link( false, false ) . '</code></span>'
      );
      
    }
    
    
    /**
     * handle the settings field yearly
     * moved to PP_Smart_Archive_Page_Remove_Admin in v 5.0.0
     */
    function admin_yearly() {
        
      $this->print_slider_check( 
        'yearly', 
        esc_html__( 'Yearly Archive Page', 'smart-archive-page-remove' ),
        false,
        false,
        '<span style="white-space: nowrap">' . __( 'e.g.', 'smart-archive-page-remove' ) . ' <code>' . get_year_link( false ) . '</code></span>'
      );
      
    }
    
    
    /**
     * create the menu entry
     * moved to PP_Smart_Archive_Page_Remove_Admin in v 5.0.0
     */
    function action_admin_menu() {
      $screen_id = add_options_page( esc_html__( 'Archive Pages', "smart-archive-page-remove" ), esc_html__( 'Archive Pages', 'smart-archive-page-remove' ), 'manage_options', 'smartarchivepageremovesettings', array( $this, 'show_admin' ) );
      $this->set_screen_id( $screen_id );
    }
    
   
    /**
     * show admin page
     * moved to PP_Smart_Archive_Page_Remove_Admin in v 5.0.0
     */
    function show_admin() {
      
      $this->add_toolbar_icons( array(
        array( 
          'link'  => 'https://wordpress.org/support/plugin/' . $this->core()->get_plugin_slug() . '/reviews/',
          'title' => __( 'Please rate Plugin', 'smart-archive-page-remove' ),
          'icon'  => 'dashicons-star-filled',
          'highlight' => true
        ),
        array( 
          'link'  => 'https://wordpress.org/plugins/' . $this->core()->get_plugin_slug(),
          'title' => __( 'WordPress.org Plugin Page', 'smart-archive-page-remove' ),
          'icon'  => 'dashicons-wordpress'
        ),
        array( 
          'link'  => 'https://petersplugins.com/' . $this->core()->get_plugin_slug() . '/manual/',
          'title' => __( 'Plugin Doc', 'smart-archive-page-remove' ),
          'icon'  => 'dashicons-book-alt'
        ),
        array( 
          'link'  => 'https://wordpress.org/support/plugin/' . $this->core()->get_plugin_slug(),
          'title' => __( 'Support', 'smart-archive-page-remove' ),
          'icon'  => 'dashicons-editor-help'
        )
        
      ) );
      
      $this->show( 'manage_options' );
      
    }
    
    
    /**
     * add links to plugins table
     * moved to PP_Smart_Archive_Page_Remove_Admin in v 5.0.0
     */
    function add_settings_links( $links ) {
      
      return array_merge( $links, array( '<a href="' . admin_url( 'options-general.php?page=smartarchivepageremovesettings' ) . '" title="' . esc_html__( 'Settings', 'smart-archive-page-remove' ) . '">' . esc_html__( 'Settings', 'smart-archive-page-remove' ) . '</a>', '<a href="https://wordpress.org/support/plugin/' . $this->core()->get_plugin_slug() . '/reviews/" title="' . esc_html__( 'Please rate plugin', 'smart-archive-page-remove' ) . '">' . esc_html__( 'Please rate plugin', 'smart-archive-page-remove' ) . '</a>' ) );
      
    }
    
    /**
     * create nonce
     *
     * @since  5.0.0
     * @access private
     * @return string Nonce
     */
    private function get_nonce() {
      
      return wp_create_nonce( 'pp_smart_archive_page_remove_dismiss_admin_notice' );
      
    }
    
    
    /**
     * check nonce
     *
     * @since  5.0.0
     * @access private
     * @return boolean
     */
    private function check_nonce() {
      
      return check_ajax_referer( 'pp_smart_archive_page_remove_dismiss_admin_notice', 'securekey', false );
      
    }

  }
  
}

?>