<?php
/**
 * @package WordPress
 * @subpackage Office Theme
 * Template Name: Emploi
 */
?>
	<?php get_header(); ?>

	<div id="page-heading">
	    <h1><?php the_title(); ?></h1>		
	    <?php if($data['disable_breadcrumbs'] !='disable') { office_breadcrumbs(); } ?>
	</div>
	<!-- END page-heading -->

<div class="post full-width clearfix">	
	
			<?php
			$home_paged = (get_query_var('paged'));
			$arguments = array(
			 'post_type' => 'emploi',
			 'post_status' => 'publish',
			 'paged' => $home_paged
			);
			query_posts($arguments);
			get_template_part( 'loop', 'index' );
			?>
			<?php if (have_posts()) : $count = 0; ?>
			<?php while(have_posts()) : the_post(); ?>
           
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<p><?php the_excerpt(); ?><em>Parue le <?php the_time('d/n/y'); ?></em></p>
							<p><a href="<?php the_permalink() ?>" class="button light-gray" target="_self"><span>Plus de détails</span></a></p>             	
<hr class="dashed-line" style="margin-top: 35px; margin-bottom: 0px;">
						<?php  endwhile; else: ?>
						                        <p>Désolé, pas d'annonce actuellement</p>
						<?php endif; ?>

	
		</div>
		<!-- /entry -->

	<?php get_footer(); ?>