<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'script_enqueuer' );

	add_filter( 'body_class', 'add_slug_to_body_class' );

	// add category nicenames in body and post class
	function category_id_class($classes) {
	    global $post;
	    foreach((get_the_category($post->ID)) as $category)
	        $classes[] = $category->category_nicename;
	        return $classes;
	}
	add_filter('post_class', 'category_id_class');
	add_filter('body_class', 'category_id_class');

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function script_enqueuer() {
		wp_register_style( 'screen', get_template_directory_uri() . '/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; ?>
		<?php
			$PostAuthor = false;
			if($comment->comment_author_email == get_the_author_email()) {
			$PostAuthor = true;}
			elseif($comment->comment_author_email == 'a.clearing.for.invention@gmail.com') {
			$PostAuthor = true;}
		?> 
		<?php if ( $comment->comment_approved == '1' ): ?>	
			<li <?php if($PostAuthor) {echo "class='authorcomment' ";} ?>
				<?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
				<article id="comment-<?php comment_ID() ?>">
					<?php echo get_avatar( $comment ); ?>
					<h4><?php comment_author_link() ?></h4>
					<time><?php comment_date() ?></time>
					<?php comment_text() ?>
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</article>
			</li>	
		<?php endif; ?>
		<?php 
	}
	
function mytheme_init() {
add_filter('comment_form_defaults','mytheme_comments_form_defaults');
}
add_action('after_setup_theme','mytheme_init');

function mytheme_comments_form_defaults($default) {
unset($default['comment_notes_after']);
return $default;
}

/**
 * Limit number of characters in related-post section
 *
*/