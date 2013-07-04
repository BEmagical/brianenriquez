<?php
/*
 * SINGLE POSTS
 */
?>

<?php get_header(); ?>

<div class="page-wrap">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h3 style="margin-top: 0;">The Lab</h3>
		<h1 class="single-post-title"><?php the_title(); ?></h1>

	<div class="page-content row-fluid">
		<ul class="post-meta span2">	
			<li><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time></li>
			<li>Brian Enriquez</li>
			<li><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></li>
		</ul>
		
		<div class="page-main span8">
			<article>
				<?php the_content(); ?>						
				<?php comments_template( '', true ); ?>
			</article>
			<?php endwhile; ?>
		</div>

<?php get_footer(); ?>