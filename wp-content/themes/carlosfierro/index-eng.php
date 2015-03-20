<?php
/*
Template Name: ENG-Project
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
	  	<?php $counter=1; ?>
	  	<?php query_posts('&cat=2'); ?>
		<div class="col-sm-8">
  		<ul class="list-unstyled projects-grid isotope-container">  	
	  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li class="isotope-item <?php if (in_category( 'systems' )) { echo 'systems';}elseif (in_category( 'objects' )) { echo 'objects'; }elseif (in_category( 'spaces' )) { echo 'spaces'; }?> " data-minigrid="<?php if (in_category( 'systems' )) { echo 'systems';}elseif (in_category( 'objects' )) { echo 'objects'; }elseif (in_category( 'spaces' )) { echo 'spaces'; }?>">
              <a href="<?php the_permalink(); ?>">
                <img src="<?php the_field('homepage_Image_proyecto')?>">
                <div class="overlay">
                  <h4><?php the_field('eng_concepto_proyecto'); ?></h4>
                  <div>
                  	<span class="name"><?php the_title(); ?></span>
                  	<span class="year"><?php the_field('eng_fecha_proyecto'); ?></span>
                  </div>
                  <small class="location"><?php the_field('eng_lugar_proyecto'); ?></small>
                </div>
              </a>
            </li> 
       <?php endwhile; else: endif; ?>   
       </ul>
  	</div>  	
					  			  		
	</div><!--end row-->  	

<?php get_footer(); ?>