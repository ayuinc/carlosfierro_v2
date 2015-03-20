<?php
/*
Template Name: Media
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
      	<?php if ($esp==1) { ?>
	    	<?php include("sidebar-media-esp.php"); ?>  		
      	<?php } else { ?>
	      	<?php include("sidebar-media-eng.php"); ?>
      	<?php } ?>
  	  <div class="col-sm-7" id="prensa">
	  	<?php $counter=1; ?>
	  	<?php query_posts('&cat=3'); ?>
  	  	<ul class="list-unstyled press-grid isotope-container">
	  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li class="isotope-item <?php if (in_category( 'systems-media' )) { echo 'systems';}elseif (in_category( 'objects-media' )) { echo 'objects'; }elseif (in_category( 'spaces-media' )) { echo 'spaces'; }?> " data-minigrid="<?php if (in_category( 'systems-media' )) { echo 'systems';}elseif (in_category( 'objects-media' )) { echo 'objects'; }elseif (in_category( 'spaces-media' )) { echo 'spaces'; }?>">
		  			<a href="<?php the_field('imagen_publicacion_media'); ?>" target="_blank">
		  			<img src="<?php the_field('imagen_publicacion_media'); ?>">
			  		</a>
			  	</li>
	  	<?php $counter++; ?>	
	    <?php endwhile; else: ?>
			  </ul>			
	  	</div>
	  		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	    <?php endif; ?>	 	  					  			  		
	 </div><!--row-->  	


<?php get_footer(); ?>