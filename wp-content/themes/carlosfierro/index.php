<?php
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
  
  <div class="row">
  	  <?php get_sidebar(); ?>
	  	<?php $counter=1; ?>
	  	<?php query_posts('&cat=2'); ?>
  	<div class="col-sm-8">
  		<ul class="list-unstyled projects-grid isotope-container">
	  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li class="isotope-item <?php if (in_category( 'systems' )) { echo 'systems';}elseif (in_category( 'objects' )) { echo 'objects'; }elseif (in_category( 'spaces' )) { echo 'spaces'; }?> " data-minigrid="<?php if (in_category( 'systems' )) { echo 'systems';}elseif (in_category( 'objects' )) { echo 'objects'; }elseif (in_category( 'spaces' )) { echo 'spaces'; }?>">
              <a href="<?php the_permalink(); ?>?esp=1">
                <img src="<?php the_field('homepage_Image_proyecto')?>">
                <div class="overlay hidden-xs hidden-sm">
                  <h4><?php the_field('concepto_proyecto'); ?></h4>
                  <div>
                  	<span class="name"><?php the_title(); ?></span>
                  	<span class="year"><?php the_field('fecha_proyecto'); ?></span>
                  </div>
                  <small class="location"><?php the_field('lugar_proyecto'); ?></small>
                </div>
                <div class="hidden-md hidden-lg pt-7">
                  <h3><?php the_field('concepto_proyecto'); ?></h3>
                  <p class="name text-center"><?php the_title(); ?></p>
                  <p class="year text-center"><?php the_field('fecha_proyecto'); ?></p>
                  <small class="block location text-center"><?php the_field('lugar_proyecto'); ?></small>
                </div>
              </a>
            </li> 
       <?php endwhile; else: endif; ?>   
       </ul>
  	</div>  	
					  			  		
	</div><!--end row-->  	

<?php get_footer(); ?>