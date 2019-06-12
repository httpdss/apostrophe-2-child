<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/**
 * Register lots of widget areas.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function apostrophe_2_child_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Top', 'apostrophe-2' ),
		'id'            => 'sidebar-5',
		'before_widget' => '<aside id="%1$s" class="widget-top %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title-top">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header', 'apostrophe-2' ),
		'id'            => 'sidebar-6',
		'before_widget' => '<aside id="%1$s" class="widget-header %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title-header">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'apostrophe_2_child_widgets_init' );

?>