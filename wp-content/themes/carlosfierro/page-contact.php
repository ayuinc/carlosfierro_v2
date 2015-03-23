<?php
/*
Template Name: Contact
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
<div class="container-fluid">  
  <div class="row">
  

	    	<?php get_sidebar(); ?>  		


	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  <div class="col-sm-2 text-center" id="contacto">
	  	<div>
		  <div>
		  	<?php //the_field('sumario_contact'); ?>

		  	<?php the_content();?>
		  				  	
		  </div>
	  	</div>  
	  </div>
	  <?php endwhile; else: ?>
	  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	  <?php endif; ?>	 
  </div>
</div>
<?php get_footer(); ?>  
  
