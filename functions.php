<?php
if ( ! class_exists( 'Attachments' ) ){
  
  require_once "assets/lib/attachments.php";
}

function action_after_setup_theme()  {
  load_theme_textdomain( ' wordpress_two' );
  add_theme_support('post-thumbnails');
  add_theme_support( 'title-tag' );
   $custom_logo_defaults = array(
    'height'               => 100,
    'width'                => 100
   );
  add_theme_support( 'custom-logo','$custom_logo_defaults ');
  add_theme_support( 'custom-header' );
  add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );
  add_theme_support( 'custom-background' );
  register_nav_menu("topmenu",__("Top Menu","wordpress_two")); 

}

add_action('after_setup_theme','action_after_setup_theme' );



/**
 * Fires when scripts and styles are enqueued.
 *
 */
function action_wp_enqueue_scripts()  {
 wp_enqueue_style('wordpresss',get_stylesheet_uri());
  wp_enqueue_style('bootstrap','//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css');
  wp_enqueue_style("tiny-slide","//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css");
  wp_enqueue_style("featherlight-css","//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css");
  wp_enqueue_script("featherlight-js","//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js",array("jquery"),"0.0.1",true);

  wp_enqueue_script("tiny-slide-js","//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js",null,"0.0.1",true);
 
  wp_enqueue_script('wordpress_main',get_template_directory_uri().'/assets/js/main.js',null,'0.0.1',true);


}
add_action( 'wp_enqueue_scripts','action_wp_enqueue_scripts'  );


function wordpres_one_sidebar(){
  register_sidebar(
      array(
          'name'          => __( 'Single post slider','wordpress_two' ),
          'id'            => 'sidebar-1',
          'description'   => __( 'Add widgets here to appear in your .', 'wordpress_two' ),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget'  => '</section>',
          'before_title'  => '<h2 class="widget-title">',
          'after_title'   => '</h2>',
      )
  );
  register_sidebar(
    array(
        'name'          => __( 'Footer lift slider','wordpress_two' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your .', 'wordpress_two' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    )
);
register_sidebar(
  array(
      'name'          => __( 'Footer right slider','wordpress_two' ),
      'id'            => 'footer-2',
      'description'   => __( 'Add widgets here to appear in your .', 'wordpress_two' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '',
      'before_title'  => '',
      'after_title'   => '',
  )
);
}
add_action( 'widgets_init','wordpres_one_sidebar');

function my_special_nav_class( $classes, $item ) {

  $classes[] = 'list-inline-item';


return $classes;

}

add_filter( 'nav_menu_css_class', 'my_special_nav_class', 10, 2 );

function wp_head_imge(){
  if(is_front_page()){
    if(current_theme_supports('custom-header')){
      ?>
      <style>
        .header{
          background-image: url("<?php header_image()?>");
        }
      </style>
      <?php
    }
  }
}

add_action('wp_head','wp_head_imge');

?>
