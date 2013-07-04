<?php
/*
Template Name: Labs
*/
?>

<?php get_header(); ?>

<div class="page-wrap">
	<div class="page-bg labs">
		<div class="header-block">
			<h1>The Lab</h1>
			<p class="subhead">Experimental code I toy with when the wife and baby are asleep.</p>
		</div>
	</div>
		
	<div class="page-content row-fluid">
		<div class="span3">
			<ul class="header-caption">
				<li class="caption-title">Figure A. Breaking Bad</li>
				<li class="caption">"No, you clearly don't know who you're talking to, so let me clue you in. I am not in danger, Skyler. I AM the danger! A guy opens his door and gets shot and you think that of me? No. I am the one who knocks!"</li>
				<li><strong>-- Walter White</strong></li>
				<li class="caption-credits">Photo courtesty of <strong>AMC</strong>, the network that also airs <strong>The Killing</strong>
				 which contains another favorite character of mine, the vegan gangster cop, Detective William Holder.</li>
			</ul>
		</div>
		
		<div class="page-main span9">
			<?php if ( have_posts() ): ?>
			<?php global $more; $more = 0; ?>
			<?php query_posts(array ('category_name' => 'labs')); ?>
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

<?php get_footer(); ?>