<?php
/*
Template Name: Bio
*/
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

<?php $esp = $_GET['esp'];?> 
  
  <div class="row">
  
   	<?php get_sidebar(); ?>  		

  	<?php query_posts($query_string . '&cat=3'); ?>
	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  <div class="col-sm-7">
	  	<div class="row" id="bio">
        <div class="col-sm-5">
				  <?php if ($esp==1) { ?>
				  	<p><?php the_field('columna_izquierda_bio'); ?></p>
				  <?php } else { ?>
				    <p><?php the_field('eng_columna_izquierda_bio'); ?></p>
				  <?php } ?>
				</div>  
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
		  		<img src="<?php the_field('imagen_bio'); ?>" class="bio-image img-responsive">
			  	<?php if ($esp==1) { ?>
			  	  <p><?php the_field('columna_derecha_bio'); ?></p>
			  	<?php } else { ?>
			  	  <p><?php the_field('eng_columna_derecha_bio'); ?></p>
			  	<?php } ?>
			  	<?php if ($esp==1) { ?>
			  		<h5>Premios</h5>
			  	  <p><?php the_field('awards_bio'); ?></p>
			  	<?php } else { ?>
			  		<h5>Awards</h5>
			  	  <p><?php the_field('eng_awards_bio'); ?></p>
			  	<?php } ?>	
  			</div>
	  	</div>  
	  </div>
	  <?php endwhile; else: ?>
	  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	  <?php endif; ?>	
  </div>

<?php get_footer(); ?>  
  
