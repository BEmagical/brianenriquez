<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<div class="page-wrap">
	<div class="page-content row-fluid">
	
		<div class="span3">
			<ul class="header-caption">
				<li class="caption-title">Frequencies</li>
				<li class="caption">"Dad, do you think there's people on other planets?"</li>
				<li>"I don't know, Sparks. But I guess I'd say if it is just us... seems like an awful waste of space."</li>
				<li class="caption-credits">-- <strong>Contact</strong>, 1997</li>
			</ul>
		</div>
		
		<div class="page-main span9">
			<?php if ( have_posts() ): ?>
			<?php query_posts('cat=24'); ?>
			<ol class="masonry">
			<?php while ( have_posts() ) : the_post(); ?>
				<li class="post-block">
					<article>
						<h2><?php the_title(); ?></h2>
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
