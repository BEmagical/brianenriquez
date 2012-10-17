<?php
/**
 * TAG ARCHIVE PAGE
 */
?>

<?php get_header(); ?>

<div class="page-wrap">
	<div class="page-content row-fluid">
	
	<div class="page-nav span3">
		<h2><a class="breadcrumb-back" href="<?php bloginfo('home'); ?>">&larr; <i class="icon-home"></i> /</a> <i class="icon-tags"></i> <?php echo single_tag_title( '', false ); ?></h2>
		
		<p>"Back in my day, the only transitions we had were glasses."</p>
		
		<ul class="tag-list">
            <?php
                if (have_posts()) : while (have_posts()) : the_post();
                    if( get_the_tag_list() ){
                        echo $posttags = get_the_tag_list('<li>','</li><li>','</li>');
                    }
                endwhile; endif; 
                wp_reset_query(); 
            ?>
		</ul>
	</div>
	
	<div class="page-main span6">
		<?php if ( have_posts() ): ?>
		<ol>
		<?php while ( have_posts() ) : the_post(); ?>
			<li>
				<article>
					<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<div class="post-meta">
						<span><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><i class="icon-time"></i> <?php the_date(); ?></time></span>
						<span><i class="icon-comments"></i> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span>
					</div>
					<?php the_content('<span class="read-more">Read more &rarr;</span>'); ?>	
				</article>
			</li>
		<?php endwhile; ?>
		</ol>
		<?php else: ?>
		<h2>Zip. Zilch. Zero. Nada.</h2>
		<?php endif; ?>
	</div>
		
		<?php get_sidebar(); ?>

<?php get_footer(); ?>