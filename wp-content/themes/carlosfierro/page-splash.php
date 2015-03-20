<?php
/*
Template Name: Splash
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
 
  <div class="row">
  	<div class="container-fluid">
	  	<div class="col-sm-4"></div>
	  	<div class="col-sm-4" id="homepage-container">
	      	<h2 class="text-center uppercase">Carlos Fierro</h2>
	      	<p class="text-center"><a class="homepage pl-14 pr-14" href="/eng">EN</a> <a class="homepage pl-14 pr-14" href="/esp/?esp=1">ES</a></p>
	  	</div>
	  	<div class="col-sm-4"></div>
	  </div>
  	</div>
  
<?php get_footer(); ?>