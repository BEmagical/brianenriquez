<?php
/*
 * COMMENTS TEMPLATE
 */
?>
<div id="comments">
	<?php if ( post_password_required() ) : ?>
	<p>This post is password protected. Enter the password to view any comments</p>
</div>

	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>

	<div class="section-title"><h3><?php comments_number(); ?></h3></div>

	<ol>
		<?php wp_list_comments( array( 'callback' => 'starkers_comment' ) ); ?>
	</ol>

	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	
	<p>Comments are closed</p>
	
	<?php endif; ?>

	<?php $comment_args = array( 'title_reply'=>'Leave a Comment',

'fields' => apply_filters( 'comment_form_default_fields', array(

'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name <span>*</span>' ) . '</label> ' . ( $req ? '' : '' ) .

        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',   

    'email'  => '<p class="comment-form-email">' .

                '<label for="email">' . __( 'Email <span>*</span>' ) . '</label> ' .

                ( $req ? '' : '' ) .

                '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',

    'url'    => '' ) ),

    'comment_field' => '<p>' .

                '<label for="comment">' . __( 'Comment' ) . '</label>' .

                '<textarea id="comment" name="comment" rows="4" aria-required="true"></textarea>' .

                '</p>',

    'comment_notes_after' => '',

);

comment_form($comment_args); ?>

</div><!-- #comments -->
