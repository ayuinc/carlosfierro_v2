<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

  <script src="<?php bloginfo( 'template_url' ); ?>/javascripts_n/jquery.flexslider-min.js"></script>
  <script src="<?php bloginfo( 'template_url' ); ?>/javascripts_n/velocity.min.js"></script>
  <script src="<?php bloginfo( 'template_url' ); ?>/javascripts_n/slider_script.js"></script>

<?php $esp = $_GET['esp'];?> 
<?php $eng = $_GET['eng'];?> 

  
  	  <?php if (have_posts()) : the_post(); ?>
      
      <?php if ($esp==1) { ?>
    	<?php include("sidebar-project-esp.php"); ?>  		
    	<?php } else { ?>
      	<?php include("sidebar-project-eng.php"); ?>
    	<?php } ?>

	  
  <div class="row">
  	<div class="col-sm-2"></div>
	  <div class="col-sm-8" id="slider-container">	  			  	
		 <div id="slider" class="flexslider">
			<?php $images = get_field('galeria_fotos_proyecto'); ?>
				<ul class="slides"> 
			<?php if( $images ): ?>
						<?php $aux = 1; ?>
			            <?php foreach( $images as $image ): ?>
			                <li>
		                    <img src="<?php echo $image['url']; ?>" alt="slide image" />
			                </li>
			                    <?php $aux++; ?>
			            <?php endforeach; ?>
			<?php endif; ?>	
				 </ul>
				 <div id="desktop-description" class="hidden-sm hidden-xs">
       		<a href="#" id="plus" class="invisible project-description-trigger on"></a>
       		<div class="project-description">
	       		<div class="content">
		       		<?php if ($esp==1) { ?>
				  		<?php the_field('contenido_proyecto'); ?>
				  	  <?php } else { ?>
				  		<?php the_field('eng_contenido_proyecto'); ?>
				  	  <?php } ?>	
	       		</div> <!-- fin .content -->
	       	  	<a href="#" class="scroll-up"></a>
	          	<a href="#" class="scroll-down"></a>
       		</div> <!-- fin .project-description -->
					</div> <!-- fin #slider -->
		</div> <!-- fin .row -->
		  <div class="row hidden-xs hidden-sm">
		  	<div class="col-sm-7"></div>
        <div class="col-sm-5" id="carousels">
          <div id="carousel" class="flexslider">
            <ul class="slides">
		  	<?php if( $images ): ?>
						<?php $aux = 1; ?>
			            <?php foreach( $images as $image ): ?>
			                <li class="thumb-slider">
		                    <img src="<?php echo $image['url']; ?>" alt="slide image"  />
			                </li>
			                    <?php $aux++; ?>
			            <?php endforeach; ?>
						</ul>
					</div>
					<div id="carousel2" class="flexslider">
            <ul class="slides">
						<?php $aux = 1; ?>
			            <?php foreach( $images as $image ): ?>
			            	<?php if( $aux== 1) : ?>
			                <li id="uno" class="numbers text-muted">
		                    <?php echo $aux; ?>
			                </li>
			              <?php else : ?>
			                <li class="numbers text-muted">
		                    <?php echo $aux; ?>
			                </li>
			              <?php endif; ?>
			                    <?php $aux++; ?>
			            <?php endforeach; ?>
						</ul>
					</div>		
				</div> <!-- fin mobile-description -->
			<?php endif; ?>	
		  	</div>
  </div>  <!-- fin col-sm-8 -->
  	<div class="col-sm-2 hidden-md hidden-lg">
			<div class="text-justify" id="mobile-description">
     		<?php if ($esp==1) { ?>
	  		<?php the_field('contenido_proyecto'); ?>
	  	  <?php } else { ?>
	  		<?php the_field('eng_contenido_proyecto'); ?>
	  	  <?php } ?>	
			</div> <!-- fin mobile-description -->
  	</div>  <!-- fin col-sm-2 -->
  </div>  <!-- fin row -->
  <div class="row">
  	<div class="col-sm-2">
			 <div class="project-info hidden-sm hidden-xs">
				<?php if ($esp==1) { ?>
		  	<span class="project-name"><?php the_title(); ?></span>
	  		<span class="project-year"><?php the_field('fecha_proyecto'); ?></span>
	  	  <?php } else { ?>
	  	  <span class="project-name"><?php the_title(); ?></span>
	  		<span class="project-year"><?php the_field('eng_fecha_proyecto'); ?></span>
	  	  <?php } ?>	
       </div>
  	</div>
  </div>
  
	  <?php endif; ?> 
	  <?php wp_reset_query(); // reset the query ?>
<?php get_footer(); ?>