<?php
/*
Template Name: Project
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
  
      <div class="one columns" id="fijo">
      	<?php if ($esp==1) { ?>
	    	<?php get_sidebar(); ?>	
      	<?php } else { ?>
	      	<?php include("sidebar2.php"); ?>
      	<?php } ?>
  	  </div>

	  <div class="four columns">	  			  	
		  <div class="projectos">
		  	<img src="http://carlosfierroworks.com/wp-content/uploads/2013/04/EL01.jpg">
		  	<div class="projecto-nav">
		  		<div class="projecto-nav-izquierda"></div>
		  		<div class="projecto-nav-derecha"></div>
		  	</div>
		  	<div class="projecto-nav-open-text"></div>
		  	<div class="projecto-nav-text">
			  	<h5>Scenario</h5>
			  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor, neque interdum viverra ultrices, neque tortor mattis risus, vel aliquam lectus elit vel quam. Nunc tempus condimentum mi. Praesent quam ante, volutpat sit amet consectetur vel, tempor nec magna. Morbi sed lacus placerat diam scelerisque rutrum.</p>
			  	<h5>Credits</h5>
			  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor, neque interdum viverra ultrices, neque tortor mattis risus, vel aliquam lectus elit vel quam. Nunc tempus condimentum mi. Praesent quam ante, volutpat sit amet consectetur vel.</p>
		  	</div>
		  	<div class="projecto-frame">
			  	<div class="projecto-thumb">
			  		<div><img src="http://carlosfierroworks.com/wp-content/uploads/2013/04/EL01.jpg"></div>
			  		<div><img src="http://carlosfierroworks.com/wp-content/uploads/2013/04/EL01.jpg"></div>
				</div>			
				<div class="projecto-nav-thumb">
				  	<ul>
				  		<li>1</li>
				  		<li>2</li>
				  		<li>3</li>
				  		<li>4</li>
				  	</ul>
			  	</div>
		  	</div>
		  </div>
	  </div>
  </div>

<?php get_footer(); ?>  
  
