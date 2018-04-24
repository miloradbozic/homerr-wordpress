<?php

  load_theme_textdomain( 'homerr', TEMPLATEPATH.'/languages' );

  /**
   * Enqueue scripts and styles in theme.
   */
  function homerr_scripts() {
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'seravek-font', get_template_directory_uri() . '/assets/fonts/seravek/seravek-font.css' );
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '3.4.2', 'all' );
    wp_enqueue_style( 'style.css', get_stylesheet_uri() );

   	wp_enqueue_script( 'jquery-3.1.1.min.js', get_template_directory_uri() . '/assets/js/jquery-3.1.1.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '3.4.2', true );
    wp_enqueue_script( 'multislider-script', get_template_directory_uri() . '/assets/js/multislider.js', array(), '1.0.0', true );
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'homerr_scripts' );

  /**
   * Register meny in theme.
   */
  register_nav_menus( array(
    'top_navigation_left' => 'Top Navigation Left',
    'top_navigation_right' => 'Top Navigation Right',
    'retailer_navigation_left' => 'Retailer Navigation Left',
    'retailer_navigation_right' => 'Retailer Navigation Right'
  ) );

    /**
     * Add Featured image support
     */

    add_theme_support( 'post-thumbnails' );

    /**
     * Register theme widgets.
     */
    function homerr_widgets_init() {

        $sidebars = array(
            'left-sidebar' => array( 'Left Sidebar', 'Left sidebar area' ),
            'right-sidebar' => array( 'Right Sidebar', 'Right Sidebar area' ),
            'footer-sidebar' => array( 'Footer Sidebar', 'Appears in the footer area' ),
            'footer-sidebar-1' => array( 'Footer Sidebar 1', 'Appears in the footer area' ),
            'footer-sidebar-2' => array( 'Footer Sidebar 2', 'Appears in the footer area' ),
            'footer-sidebar-3' => array( 'Footer Sidebar 3', 'Appears in the footer area' ),
        );

        foreach( $sidebars as $key => $value ) {
            register_sidebar( array(
                'name' => $value[0],
                'id' => $key,
                'description' => $value[1],
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            ) );
        }
    }

    add_action( 'widgets_init', 'homerr_widgets_init' );

    add_action( 'init', 'create_post_type' );

    function create_post_type() {
        register_post_type( 'faq',
            array(
                'labels' => array(
                    'name' => __( 'FAQ' ),
                    'singular_name' => __( 'FAQ' )
                ),
            'public' => true,
            'has_archive' => false,
            'taxonomies'  => array( 'faq_category' ),

            )
        );
    }


    add_action('restrict_manage_posts', 'dm_filter_post_type_by_taxonomy');
    function dm_filter_post_type_by_taxonomy() {
    	global $typenow;
    	$post_type = 'faq'; // change to your post type
    	$taxonomy  = 'faqs_category'; // change to your taxonomy
    	if ($typenow == $post_type) {
    		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
    		$info_taxonomy = get_taxonomy($taxonomy);
    		wp_dropdown_categories(array(
    			'show_option_all' => __("Show All {$info_taxonomy->label}"),
    			'taxonomy'        => $taxonomy,
    			'name'            => $taxonomy,
    			'orderby'         => 'name',
    			'selected'        => $selected,
    			'show_count'      => true,
    			'hide_empty'      => true,
          'hierarchical' => true,
    		));
    	};
    }

    add_filter('parse_query', 'dm_convert_id_to_term_in_query');
    function dm_convert_id_to_term_in_query($query) {
    	global $pagenow;
    	$post_type = 'faq'; // change to your post type
    	$taxonomy  = 'faqs_category'; // change to your taxonomy
    	$q_vars    = &$query->query_vars;
    	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
    		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
    		$q_vars[$taxonomy] = $term->slug;
    	}
    }

/**
 * Webstores links
 */

function homerr_appstore_link() {
    echo 'https://itunes.apple.com/us/app/homerr/id1166169719?mt=8';
}

function homerr_googlestore_link() {
    echo 'https://play.google.com/store/apps/details?id=com.homerr.app';
}

function homerr_windowsstore_link() {
    echo '#';
}

function homerr_purplebutton_link() {
    //echo site_url() . '/aanmelden/';
    //echo 'http://45.76.37.243/#/common-fill-profile';
    echo 'http://web.homerr.nl/#/intro-first';
}


/**
 * Header buttons layout
 */


function appstore_buttons() { ?>
  <?php if (get_field('display_cta_button')) : ?>
    <?php if( is_front_page() ) : ?>
    <div class="purple-button-container-desktop">
      <a id="benefits-link" href="#benefits">
        <button class="transparent-cta-button"><?php _e( 'Shopper', 'homerr' ); ?></button>
      </a>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'homepage-homerr' ) ) ); ?>">
        <button class="purple-cta-button"><?php _e( 'Homerr', 'homerr' ); ?></button>
      </a>
    </div>
    <?php else : ?>
      <div class="purple-button-container-desktop">
        <a href="https://web.homerr.nl/#/common-signin">
          <button class="purple-cta-button meld-je-aan"><?php _e( 'Sign In', 'homerr' ); ?></button>
        </a>
      </div>
    <?php endif; ?>
  <?php endif; ?>
  <div class="cta-header-area">
    <div class="app-icons">
      <a href="<?php homerr_appstore_link() ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/app_store.png" />
      </a>
      <a href="<?php homerr_googlestore_link() ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/google_play.png" />
      </a>
    </div>
  </div>
<?php
}

function appstore_buttons_campaign() { ?>
    <div class="cta-header-area">
        <?php if (get_field('display_cta_button')) :?>
            <div class="purple-button-container">
            <a href="<?php homerr_purplebutton_link() ?>">
                <button class="purple-cta-button-campaign"><?php _e( 'TRY NOW', 'homerr' ); ?></button>
            </a>
        </div>
       <?php endif; ?>
        <div class="app-icons-campaign">
					<div class="row small-gutter">
						<div class="col-xs-4">
	            <a href="<?php homerr_appstore_link() ?>">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/app_store.png" />
	            </a>
						</div>
						<div class="col-xs-4">
	            <a href="<?php homerr_googlestore_link() ?>">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/google_play.png" />
	            </a>
						</div>
					</div>
        </div>
    </div>
<?php
}


/**
 *  Template directory shortcode
 */

function homerr_template_directory($atts) {

    $theme_uri = is_child_theme()
        ? get_stylesheet_directory_uri()
        : get_template_directory_uri();

    return trailingslashit( $theme_uri );
}
add_shortcode( 'theme_dir' , 'homerr_template_directory' );

function homerr_site_url($atts) {

    $site_uri = site_url();

    return trailingslashit( $site_uri );
}
add_shortcode( 'site_url' , 'homerr_site_url' );

function homerr_swiper_slider() {
  $html_output = '';
  if( have_rows('slider') ):
    while( have_rows('slider') ) : the_row(); ?>
      <?php
      $values = get_sub_field('image');
      $image_url = $values['url'];
      ?>
      <?php $html_output .= '<div class="swiper-slide"><img src="'.$image_url.'" /></div>'; ?>
    <?php endwhile;
  endif;
  return $html_output;
}
add_shortcode( 'homerr_swiper_slider' , 'homerr_swiper_slider' );

/**
 *  faqs_hierarchical_taxonomy
 */

add_action( 'init', 'faq_hierarchical_taxonomy', 0 );

function faq_hierarchical_taxonomy() {

  $labels = array(
    'name' => _x( 'FAQ Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'FAQ', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search FAQs' ),
    'popular_items' => __( 'Popular FAQs' ),
    'all_items' => __( 'All FAQs' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit FAQ' ),
    'update_item' => __( 'Update FAQ' ),
    'add_new_item' => __( 'Add New FAQ' ),
    'new_item_name' => __( 'New FAQ Name' ),
    'separate_items_with_commas' => __( 'Separate FAQs with commas' ),
    'add_or_remove_items' => __( 'Add or remove FAQs' ),
    'choose_from_most_used' => __( 'Choose from the most used FAQs' ),
    'menu_name' => __( 'FAQ Category' ),
  );

  register_taxonomy('faqs_category','faq',array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'faq_category' ),
  ));
}

/**
 *  Search page results hierarchy override
 */

function template_searchpage($template)
{
  global $wp_query;
  $post_type = get_query_var('post_type');
  if( $wp_query->is_search && $post_type == 'faq' )
  {
    return locate_template('search-faq.php');  //  search-faq.php
  }
  return $template;
}
add_filter('template_include', 'template_searchpage');


/**
 *  Token obtain
 */


add_action('homerr_api_token_event', 'homerr_do_reset_token');

function homerr_reset_activation() {
    if ( !wp_next_scheduled( 'homerr_api_token_event' ) ) {
        wp_schedule_event( current_time( 'timestamp' ), 'daily', 'homerr_api_token_event');
    }
}
add_action('wp', 'homerr_reset_activation');

function homerr_do_reset_token() {
    $homerr_url = 'http://ec2-54-209-248-19.compute-1.amazonaws.com/api/1.0/customer/login';

    $useremail = "joviczarko+homerr2@gmail.com";
    $userpass = "HomerrPassword123";

    $response = wp_remote_post( $homerr_url, array(
                    'method'      => 'POST',
                    'timeout'     => 45,
                    //'redirection' => 5,
                    //'httpversion' => '1.0',
                    'blocking'    => true,
                    'headers' => array('content-type' => 'application/json'),
                    'body'          => json_encode(array(
                                                        'email' => $useremail,
                                                        'password' => $userpass
                                                    )
                                                ),
                        )
                );

    $messages=json_decode($response['body']);
    update_option( 'homerr_api_token', $messages->token);
}

function activate_plugin_worker() {
  $active_plugins = get_option( 'active_plugins' );
  array_push($active_plugins, 'worker/init.php');
  update_option( 'active_plugins', $active_plugins );
}
add_action( 'init', 'activate_plugin_worker' );
