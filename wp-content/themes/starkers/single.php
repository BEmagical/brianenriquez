<?php
/*
 * SINGLE POSTS
 */
?>

<?php get_header(); ?>

<div class="page-wrap">
	<div class="page-content row-fluid">
	
		<div class="page-nav span3">
			<h2><a href="<?php bloginfo('home'); ?>">Blog</a></h2>
			<p>“I always wanted a Mustang to rebuild its engine piece by piece. I never got one, which is why I code from scratch.”</p>
			<ul><?php wp_list_categories('title_li='); ?></ul>
		</div>
		
		<div class="page-main span6">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<article>
			
				<h2><span class="headline"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></span></h2>
				<div class="post-meta">
					<span><i class="icon-time"></i> <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time></span>
					<span><i class="icon-comments"></i> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span>
				</div>
				<?php the_content(); ?>						
				<?php comments_template( '', true ); ?>
			</article>
			<?php endwhile; ?>
		</div>	

	<?php get_sidebar(); ?>

<?php get_footer(); ?>