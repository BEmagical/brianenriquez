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
			<p class="subhead">I saw that my anger was simply a failure to be imaginative</p>
		</div>
	</div>

	<div class="page-content row-fluid">
	
		<div class="span3">
			<ul class="header-caption">
				<li class="caption-title">Figure A. Madmen</li>
				<li class="caption">"Nostalgia. It’s delicate, but potent. Teddy told me that in Greek, nostalgia literally means the pain from an old wound. It lets us travel the way a child travels. Around and around and back home again, to a place where we know we are loved."</li>
				<li><strong>-- Don Draper (on the Kodak Carousel)</strong></li>
				<li class="caption-credits">Photo courtesty of <strong>AMC</strong></li>
			</ul>
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
