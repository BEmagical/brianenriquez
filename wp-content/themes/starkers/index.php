<?php
/*
 * SINGLE POSTS
 */
?>

<?php get_header(); ?>

<div class="page-wrap">
	<div class="page-content row-fluid">
		<div class="page-bg">
			<div class="welcome span12">
				<h3>Undress the Web</h3>
				<p>A blog for web school dropouts</p>
				<p>Curated by <a href="https://twitter.com/beaeutiful" target="_blank"><i class="icon-twitter"></i> @beAEutiful</a></p>
			</div>
			<img src="<?php bloginfo('template_url'); ?>/img/bg/bg-whiteJacket.jpg" alt="" />
		</div>
	
		<div class="page-nav span3">
			<h2><a href="<?php bloginfo('home'); ?>">Inside</a></h2>
			<p>A curation of articles collated to keep new web design students privy to how the best of the web is built.</p>
			<ul><?php wp_list_categories('title_li='); ?></ul>
		</div>
		
		<div class="page-main span8">
			<?php query_posts('showposts=1'); ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<article>
			
				<h2><span class="headline"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></span></h2>
				<div class="post-meta">
					<span><i class="icon-time"></i> <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></span>
					<span><i class="icon-comments"></i> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span>
				</div>
				<?php the_content('<span class="read-more">Read more &rarr;</span>'); ?>				
				<?php comments_template( '', true ); ?>
			</article>
			<?php endwhile; ?>
			
			<section class="related-posts row-fluid">	
				<?php wp_related_posts()?>
			</section>
		</div>	

	<?php get_sidebar(); ?>

<?php get_footer(); ?>