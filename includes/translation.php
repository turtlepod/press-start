<?php
/**
 * Make Framework Translatable
**/

/* Load Text Domain */
load_theme_textdomain( 'press-start', get_template_directory() . '/assets/languages' );

/* Make all string in the framework translatable. */
$texts = array(

	/* functions/template/accessibility.php */
	'skip_to_content'             => _x( 'Skip to content', 'accessibility', 'press-start' ),

	/* functions/template/general.php */
	'next_posts'                  => _x( 'Next', 'pagination', 'press-start' ),
	'previous_posts'              => _x( 'Previous', 'pagination', 'press-start' ),

	/* functions/template/menu.php */
	'menu_search_placeholder'     => _x( 'Search&hellip;', 'nav menu', 'press-start' ),
	'menu_search_button'          => _x( 'Search', 'nav menu', 'press-start' ),
	'menu_search_form_toggle'     => _x( 'Expand Search Form', 'nav menu', 'press-start' ),
	'menu_default_home'           => _x( 'Home', 'nav menu', 'press-start' ),

	/* functions/template/entry.php */
	'error_title'                 => _x( '404 Not Found', 'entry', 'press-start' ),
	'error_message'               => _x( 'Apologies, but no entries were found.', 'entry', 'press-start' ),
	'next_post'                   => _x( 'Next', 'entry', 'press-start' ),
	'previous_post'               => _x( 'Previous', 'entry', 'press-start' ),

	/* functions/template/comment.php */
	'next_comment'                => _x( 'Next', 'comment', 'press-start' ),
	'previous_comment'            => _x( 'Previous', 'comment', 'press-start' ),
	'comments_closed_pings_open'  => _x( 'Comments are closed, but trackbacks and pingbacks are open.', 'comment', 'press-start' ),
	'comments_closed'             => _x( 'Comments are closed.', 'comment', 'press-start' ),

	/* functions/setup.php */
	'untitled'                    => _x( '(Untitled)', 'entry', 'press-start' ),
	'read_more'                   => _x( 'Start reading', 'entry', 'press-start' ),
	'search_title_prefix'         => _x( 'Search:', 'archive title', 'press-start' ),
	'comment_moderation_message'  => _x( 'Your comment is awaiting moderation.', 'comment', 'press-start' ),
);

/* Add text to tamatebako */
tamatebako_load_strings( $texts );