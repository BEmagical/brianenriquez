<?php
/*
Template Name: Default
*/
?>

<?php get_header(); ?>

<div class="page-wrap">
	<div class="page-content row-fluid">
	
		<div class="page-nav span3">
			<h2>Blog</h2>
			<ul id="filters"><?php wp_list_categories('title_li='); ?></ul>
		</div>
	
		<div class="page-main span8">
			<article class="post">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<h2><span class="headline"><a href="#"><?php the_title(); ?></a></span></h2>
					<div class="post-meta">
						<span>July 27, 1981</span>
						<span class="tags"><i class="icon-tags"></i> <a href="#">Web</a><a href="#">iOS</a><a href="#">Pulp Fiction</a></span>
						<span><i class="icon-comments"></i> <a href="#">Comments</a></span>
					</div>
					<?php the_content(); ?>
					<?php comments_template( '', true ); ?>
				<?php endwhile; ?>
				
				<div class="navigation">
					<div class="next-posts"><?php next_posts_link(); ?></div>
					<div class="prev-posts"><?php previous_posts_link(); ?></div>
				</div>
			
				<?php else : ?>
					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<h1>Not Found</h1>
					</div>
				<?php endif; ?>
			</article>
		</div>
		
		<?php get_sidebar(); ?>

<?php get_footer(); ?>
