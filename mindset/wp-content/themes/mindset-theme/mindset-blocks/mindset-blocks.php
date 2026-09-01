<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Registers the block(s) metadata from the `blocks-manifest.php` and registers the block type(s)
 * based on the registered block metadata. Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
 */
function mindset_blocks_mindset_blocks_block_init() {
	wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
}

add_action( 'init', 'mindset_blocks_mindset_blocks_block_init' );

function mindset_register_custom_fields() {
  register_post_meta(
	  'page',
	  'company_email',
	  array(
		  'type'         => 'string',
		  'show_in_rest' => true,
		  'single'       => true
	  )
  );

	register_post_meta(
	  'page',
	  'company_address',
	  array(
		  'type'         => 'string',
		  'show_in_rest' => true,
		  'single'       => true
	  )
  );
}

add_action( 'init', 'mindset_register_custom_fields' );

// Wrapper function for all PHP-only blocks.
function mindset_register_php_blocks() {
	register_block_type(
		'mindset-blocks/service-posts',
		array(
			'title'           => 'Service Posts',
			'icon'            => 'list-view',
			'category'        => 'widgets',
			'description'     => 'Displays all Service posts.',
			'keywords'        => array( 'services', 'service posts' ),
			'render_callback' => 'mindset_render_service_posts',
			'supports'        => array(
				'autoRegister' => true,
			),
		)
	);
}

add_action( 'init', 'mindset_register_php_blocks' );

function mindset_render_service_posts( $attributes ) {
	ob_start();
	?>
	<div <?php echo get_block_wrapper_attributes(); ?>>
		<?php
      $args = array(
	      'post_type'      => 'fwd-service',
	      'posts_per_page' => -1,
	      'orderby'        => 'title',
	      'order'          => 'ASC',
      );

      $query = new WP_Query( $args );
      
			echo '<nav>';
      if ( $query->have_posts() ) {
	      while ( $query->have_posts() ) {
		      $query->the_post();
		      
			    echo '<a href="#' . get_the_ID() . '">' . get_the_title() . '</a>';    
	      }
	      
				wp_reset_postdata();
      }
			echo '</nav>'; 

      $args = array(
	      'post_type'      => 'fwd-service',
	      'posts_per_page' => -1,
	      'orderby'        => 'title',
	      'order'          => 'ASC',
      );

      $query = new WP_Query( $args );

      $terms = get_terms(
        array(
          'taxonomy' => 'fwd-service-category',
        )
      );

      if ( $terms && ! is_wp_error( $terms ) ) {
        foreach ( $terms as $term ) {
          echo '<section>';
          echo '<h2>' . esc_html( $term->name ) . '</h2>';

          $args = array(
            'post_type'      => 'fwd-service',
            'posts_per_page' => -1,
            'orderby'        => 'title',
            'order'          => 'ASC',
            'tax_query'      => array(
              array(
                'taxonomy' => 'fwd-service-category',
                'field'    => 'slug',
                'terms'    => $term->slug,
              ),
            ),
          );

          $query = new WP_Query( $args );

          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
                echo '<article id="' . get_the_ID() . '">';
                echo '<h3>' . get_the_title() . '</h3>';
                the_content();
                echo '</article>';
            }

            wp_reset_postdata();
          }

          echo '</section>';
        }
      }
    ?>
	</div>
	<?php
	return ob_get_clean();
}