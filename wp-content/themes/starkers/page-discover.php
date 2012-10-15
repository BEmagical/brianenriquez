<?php
/*
Template Name: page-discover
*/
?>

<?php get_header(); ?>

<div class="page-wrap">
	<div class="page-content row-fluid">
	
		<div class="page-nav span2">
			<h2>Discover</h2>
			<ul id="filters">
				<li><a href="#" data-filter="*" class="selected">shuffle</a></li>
				<li><a href="#" data-filter=".ios">iOS</a></li>
				<li><a href="#" data-filter=".web">web</a></li>
				<li><a href="#" data-filter=".ig">instagram</a></li>
				<li><a href="#" data-filter=".writing">writing</a></li>
				<li><a href="#" data-filter=".h2">hip-hop</a></li>
			</ul>
		</div>
	
		<div id="isotope-container">
    		<div class="item ig"></div>
    		<div class="item writing"></div>
    		<div class="item quotation"></div>
    		<div class="item writing"></div>
    		<div class="item writing"></div>
    		<div class="item quotation"></div>
    		<div class="item ig"></div>
    		<div class="item writing"></div>
    		<div class="item ig"></div>
    		<div class="item ios"></div>
    		<div class="item quotation"></div>
    		<div class="item ig"></div>
    		<div class="item ig"></div>
    		<div class="item writing"></div>
    		<div class="item ios"></div>
    		<div class="item ig"></div>
    		<div class="item writing"></div>
    		<div class="item quotation"></div>
    		<div class="item ios"></div>
    		<div class="item ig"></div>
    		<div class="item writing"></div>
		</div><!--/#isotope-container-->
		
		<?php get_sidebar(); ?>

<?php get_footer(); ?>
