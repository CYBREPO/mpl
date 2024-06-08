<?php
function register_my_menus() {
  register_nav_menus(array(
		'header-menu' => 'Header Menu',
    'header-menu-2' => 'Header Menu 2',
    'new-header-menu' => 'New header Menu',
    'social-media' => 'social media icons',
    'footer-menu' => 'footer menu',
    'terms-and-conditions' => 'policy and terms & conditions',


	));
}
add_action( 'init', 'register_my_menus' );

function register_my_widgets() {
  register_sidebar(array(
    'name' => 'TITLE PARTNERS',
    'id' => 'title-partners',
		'description'   => 'Custom Footer Widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'name' => 'HOSPITAL PARTNERS',
    'id' => 'associate-partners',
		'description'   => 'Custom Footer Widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'name' => 'DRINKING WATER PARTNERS',
    'id' => 'streaming-partners',
		'description'   => 'Custom Footer Widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));

  register_sidebar(array(
    'name' => 'FOOTER LOGO',
    'id' => 'footer-logo',
    'description'   => 'Custom Footer Widget',
    'before_widget' => '<div class="footer-logo-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
}
add_action( 'widgets_init', 'register_my_widgets' );

function register_my_customizations( $wp_customize ) {
   // setting
   $wp_customize->add_setting( 'header_color' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
    ));
    // section
    $wp_customize->add_section( 'colors' , array(
      'title'      => __( 'Colors', 'custom_theme' ),
      'priority'   => 30,
    ));
    // control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
    	 'label'      => __( 'Header Color', 'custom_theme' ),
  	   'section'    => 'colors',
  	   'settings'   => 'header_color',
     ))
    );
}
add_action( 'customize_register', 'register_my_customizations' );

function apply_my_customizations() {
  echo '';
}
add_action( 'wp_head', 'apply_my_customizations');

function contact_form_login_redirect() {
  ?>
  <script>
      
  </script>

  <?php
}

add_action( 'wp_footer', 'contact_form_login_redirect' );


function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

?>
