<?php


/**
 * Enqueue scripts and styles.
 */
function skh_azcods_scripts() {

	/* Load vendor Style */
	wp_enqueue_style( 'skh_azcods-vendor-style', get_template_directory_uri() . '/assets/css/vendor.css' );
	/* Load Main Style */
	wp_enqueue_style( 'skh_azcods-style', get_stylesheet_uri() );
	/* Load vendor Javascript */
    wp_enqueue_script( 'skh_azcods-vendor-js', get_template_directory_uri() . '/assets/js/vendor.js', array(), '20161215', true );
	/* Load custom javascript */
    wp_enqueue_script( 'skh_azcods-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '20161215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'skh_azcods_scripts', 99 );