<?php
/*
Template Name: Design
*/
?>

<?php get_header(); ?>

<div class="page-wrap">
	<div class="page-content row-fluid">
	
		<div class="page-nav span3">
			<h2>Design</h2>
			<p>"As consumers we are incredibly discerning, we sense where has been great care in the design, and when there is cynicism and greed."</p>
			<p><strong>-- Jonathan Ive</strong></p>
		</div>
		
		<div class="page-main span8">
			<?php if ( have_posts() ): ?>
			<?php query_posts('cat=23'); ?>
			<ol class="masonry">
			<?php while ( have_posts() ) : the_post(); ?>
				<li class="post-block">
					<article>
						<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?> &rarr;</a></h2>
						<?php the_content('<span class="read-more"></span>'); ?>	
					</article>
				</li>
			<?php endwhile; ?>
			</ol>
			<?php else: ?>
				<p>Zip. Zilch. Zero. Nada.</p>
			<?php endif; ?>
		</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
