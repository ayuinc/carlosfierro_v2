<?php
/*
Template Name: Archive
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

<?php $esp=$_GET['esp']; ?>
<?php $media=$_GET['media']; ?>

  <div class="row">

  	  
  	  <?php if ($media=='1') { ?>
  	  
	  	  <div class="one columns">
	      	<?php if ($esp==1) { ?>
		    	<?php include("sidebar-media-esp.php"); ?>  		
	      	<?php } else { ?>
		      	<?php include("sidebar-media-eng.php"); ?>
	      	<?php } ?>
	  	  </div>
  	  
	  	  <!--MEDIA-->
		  <div class="four columns">
		  	<div class="icons-media">
		  	<?php $counter=1; ?>
				<?php if (have_posts()) : ?>
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				<?php while (have_posts()) : the_post(); ?>
		  		<div class="square-big-<?php echo $counter; ?>">
			  		<a href="<?php the_field('imagen_publicacion_media'); ?>?esp=1" target="_blank">
				  		<img src="<?php the_field('imagen_publicacion_media'); ?>">
				  	</a>	
		  		</div>
		  		<?php $counter++; ?>
			    <?php endwhile; else: ?>
			  		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			    <?php endif; ?>	 	  					  			  		
		  	</div><!--icons-grid-->  	
		  </div><!-- .four columns -->  	  
	  
	  <?php } else { ?>
	  
	  	  <div class="one columns">
	  	  		<?php get_sidebar(); ?>
	  	  </div>	  
	  
		  <!--PROJECTOS-->
		  <div class="four columns">
		  	<div class="icons-grid">
		  	<?php $counter=1; ?>
				<?php if (have_posts()) : ?>
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				<?php while (have_posts()) : the_post(); ?>
		  		<a href="<?php the_permalink(); ?>?esp=1" id="link_separation">
		  		<div class="proyect_container">
		  			<div id="image_proyecto" class="square-big-<?php echo $counter; ?>">
				  		<img src="<?php the_field('homepage_Image_proyecto')?>">
			  		</div>
			  		<?php $counter++; ?>
			  		<div id="interior_proyecto">
				  		<h3 class="interstateblack
				  		<?php if (in_category( 'spaces' )) { ?> green<?php } ?>
				  		<?php if (in_category( 'objects' )) { ?> orange<?php } ?>
				  		<?php if (in_category( 'systems' )) { ?> blue<?php } ?>">
				  		
				  		<?php if ($esp==1) { ?>
				  		<?php the_field('concepto_proyecto'); ?></h3>
				  		<?php } else { ?>
				  		<?php the_field('eng_concepto_proyecto'); ?></h3>
				  		<?php } ?>
				  		
				  		<?php if ($esp==1) { ?>
				  		<p class="interstate" id="titulo_proyecto"><?php the_title(); ?></p>
				  		<?php } else { ?>
				  		<p class="interstate" id="titulo_proyecto"><?php the_title(); ?></p>
				  		<?php } ?>
				  		
				  		<?php if ($esp==1) { ?>
				  		<p class="interstatelight" id="fecha_proyecto"><?php the_field('eng_fecha_proyecto'); ?></p>
				  		<?php } else { ?>
				  		<p class="interstatelight" id="fecha_proyecto"><?php the_field('fecha_proyecto'); ?></p>
				  		<?php } ?>
				  		
				  		<?php if ($esp==1) { ?>
				  		<p class="interstatelight" id="lugar_proyecto"><?php the_field('eng_lugar_proyecto'); ?></p>
				  		<?php } else { ?>
				  		<p class="interstatelight" id="lugar_proyecto"><?php the_field('lugar_proyecto'); ?></p>
				  		<?php } ?>
			  		</div>
		  		</div>
		  		</a>
		  		<?php endwhile; endif; ?>	  					  			  		
		  	</div><!--icons-grid-->  	
		  </div><!-- .four columns -->
	  
	  <?php } ?>
	  
	  
	  
	  
  </div>
  


<?php get_footer(); ?> 
