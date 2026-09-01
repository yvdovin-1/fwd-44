<?php 
  
	function mindset_setup() {
    add_editor_style( get_stylesheet_uri() );

	  add_image_size( '400x200', 400, 200, true );
	  add_image_size( '800x400', 800, 400, true );
  }
	add_action( 'after_setup_theme', 'mindset_setup' );

  function mindset_add_custom_image_sizes( $size_names ) {
	  $new_sizes = array(
		  '400x200' => __( '400px by 200px', 'mindset-theme' ),
		  '800x400' => __( '800px by 400px', 'mindset-theme' ),
	  );

	  return array_merge( $size_names, $new_sizes );
  }
  add_filter( 'image_size_names_choose', 'mindset_add_custom_image_sizes' );

	function mindset_enqueues() {

	  wp_enqueue_style(
		  'mindset-style',
		  get_stylesheet_uri(),
		  array(),
		  wp_get_theme()->get( 'Version' ),
		  'all'
	  );

	  wp_enqueue_style(
		  'mindset-normalize',
		  get_theme_file_uri( 'assets/css/normalize.css' ),
		  array(),
		  '12.1.0'
	  );

	  wp_enqueue_script(
		  'mindset-scroll-to-top',
		  get_theme_file_uri( 'assets/js/scroll-to-top.js' ),
		  array(),
		  wp_get_theme()->get( 'Version' ),
		  array( 'strategy' => 'defer' )
	  );

	  if ( is_page( 'contact' ) ) {
		  wp_enqueue_script(
		    'mindset-scroll-top-color',
			  get_theme_file_uri( 'assets/js/scroll-top-color.js' ),
			  array( 'mindset-scroll-to-top' ),
			  wp_get_theme()->get( 'Version' ),
			  array( 'strategy' => 'defer' )
		  );
	  }
  }

  add_action( 'wp_enqueue_scripts', 'mindset_enqueues' );

  // Load custom blocks.
  require get_theme_file_path() . '/mindset-blocks/mindset-blocks.php';

/**
* Custom Post Types & Custom Taxonomies
*/
require get_template_directory() . '/inc/post-types-taxonomies.php';