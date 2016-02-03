<?php
/**
 * Layouts Setup
**/
$image_dir = get_template_directory_uri() . '/assets/images/layouts/';
$layouts = array(
	/* Two Column */
	'content-sidebar1' => array(
		'name'          => _x( 'Content | Sidebar 1', 'layout name', 'press-start' ),
		'thumbnail'     => $image_dir . 'content-sidebar1.png',
	),
	/* Two Columns */
	'sidebar1-content'  => array(
		'name'          => _x( 'Content | Sidebar 1', 'layout name', 'press-start' ),
		'thumbnail'     => $image_dir . 'sidebar1-content.png',
	),
);
$layouts_args = array(
	'default'           => 'content-sidebar1',
	'customize'         => true,
	'post_meta'         => true,
	'post_types'        => array( 'post', 'page' ),
	'thumbnail'         => true,
);
$layouts_strings = array(
	'default'           => _x( 'Default', 'layout', 'press-start' ),
	'layout'            => _x( 'Layout', 'layout', 'press-start' ),
	'global_layout'     => _x( 'Global Layout', 'layout', 'press-start' ),
);
add_theme_support( 'tamatebako-layouts', $layouts, $layouts_args, $layouts_strings );
