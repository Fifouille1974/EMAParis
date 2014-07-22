<?php
/**
 * @package WordPress
 * @subpackage Office Theme
 * Template Name: BTS-MUC
 */
 global $data; //get theme options
?>

	<?php get_header(); ?>

	<?php
	if (have_posts()) : while (have_posts()) : the_post();
	$page_slider = get_post_meta($post->ID, 'office_page_slider', true); //get meta
	if ($page_slider == 'enable') {
		get_template_part( 'includes/page-slides'); //show slider
	}
	?>

	<div id="page-heading">
	    <h1>Programme BTS MUC</h1>		
	    <?php if($data['disable_breadcrumbs'] !='disable') { office_breadcrumbs(); } ?>
	</div>
	<!-- END page-heading -->


	<div class="post clearfix">

	    <div class="entry float-right clearfix">	
	<h2 class="title"><?php the_title(); ?></h2>
	    <?php the_content(); ?>

		</div>
		<!-- /entry -->

	</div>
	<!-- /post -->

	<?php endwhile; ?>
	<?php endif; ?>	  

	<?php get_sidebar(); ?>

	<?php get_footer(); ?>