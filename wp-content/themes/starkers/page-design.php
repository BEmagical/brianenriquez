<?php
/*
Template Name: Design
*/
?>

<?php get_header(); ?>

<div class="page-wrap">
	<div class="page-bg design">
		<div class="header-block">
			<h1>Design</h1>
			<p class="subhead">If things were clean, I swear there'd be so more room for the really good stuff.</p>
		</div>
	</div>

	<div class="page-content row-fluid">
		<div class="span3">
			<ul class="header-caption">
				<li class="caption-title">WALL-E</li>
				<li class="caption-credits">Photo courtesy of <strong>PIXAR</strong>, the best storytellers in the galaxy.</li>
			</ul>
		</div>

		<div class="page-main span8">
			<?php if ( have_posts() ): ?>
			<?php query_posts(array ('category_name' => 'design')); ?>
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
