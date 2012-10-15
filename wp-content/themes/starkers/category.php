<?php
/**
 * Category Archive pages
 */
?>

<?php get_header(); ?>

<div class="page-wrap">
	<div class="page-content row-fluid">
		<?php if ( have_posts() ): ?>
		<div class="page-nav span3">
			<h2><a class="breadcrumb-back" href="<?php bloginfo('home'); ?>">&larr; <i class="icon-home"></i> /</a> <?php echo single_cat_title( '', false ); ?></h2>
			
			<?php if ( is_category('css3') ) {
				echo '<p>"Back in my day, the only transitions we had were glasses."</p>';
				} 
					if ( is_category('iOS') ) {
				echo '<p>"In 1989 I installed some RAM in my Apple IISE. It blew up in the kitchen. We\'ve come a long way since then."</p>';
				}	
					if ( is_category('mobile') ) {
				echo '<p>"Because one day, mobile won\'t have to do with phones, but walls, and surfaces, and sky."</p>';
				} 
					if ( is_category('web-design') ) {
				echo '<p>Mostly web patterns; \'cause design is cool, but I\'d rather let Facebook train people how to use the web. I\'ll take it from there.</p>';
				} 
			?>
			
			<ul class="tag-list">
                <?php
                	if ( is_category('css3') ) {query_posts('category_name=css3');}
                	if ( is_category('iOS') ) {query_posts('category_name=iOS');}
                	if ( is_category('mobile') ) {query_posts('category_name=mobile');}
                	if ( is_category('web-design') ) {query_posts('category_name=web-design');}
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
			<?php while ( have_posts() ) : the_post(); ?>
			<ul>
				<li class="no-bull">
					<article>
						<h2><span class="headline"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></span></h2>
						<div class="post-meta">
							<span><i class="icon-time"></i> <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time></span>
							<span><i class="icon-comments"></i> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span>
						</div>
						<?php the_content(); ?>						
						<?php comments_template( '', true ); ?>
					</article>
				</li>
			</ul>
			<?php endwhile; ?>
			
			<?php else: ?>
			<h2><span class="headline">Big Fatty Zero.</span></h2>
			<?php endif; ?>
		</div>
		
		<?php get_sidebar(); ?>

<?php get_footer(); ?>
