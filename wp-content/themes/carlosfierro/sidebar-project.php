		
		<?php $esp = $_GET['esp'];?> 
		<?php $media = $_GET['media'];?>
		
		<?php if($esp==1) { ?>
		<!--ESPANOL-->
	  	<div class="menu-wrapper">
	  	  <header>	
		  	<h1>Carlos Fierro</h1>
	  	  </header>
		  <menu>
		  	<ul>
		  		<li><a href="/esp/?esp=1" <?php if((is_single()) || (is_page('esp')) || (is_category('all')) || (is_category('spaces')) || (is_category('objects')) || (is_category('systems'))) { ?> id="nav-bold" <?php } ?>>Proyectos</a></li>
		  		<li><a href="/bio/?esp=1" <?php if(is_page('bio')) { ?> id="nav-bold" <?php } ?>>Biografia</a></li>
		  		<li><a href="/media/?esp=1" <?php if(is_page('media') || (is_category('all-media')) || (is_category('spaces-media')) || (is_category('objects-media')) || (is_category('systems-media'))) { ?> id="nav-bold" <?php } ?>>Prensa</a></li>
		  		<li><a href="/contactos/?esp=1" <?php if(is_page('contactos')) { ?> id="nav-bold" <?php } ?>>Contacto</a></li>
		  		<li id="add_this">
		  			<!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style addthis_20x20_style">
					<a class="addthis_button_facebook"></a>
					<a class="addthis_button_pinterest_share"></a>
					<a class="addthis_button_twitter"></a>
					<a class="addthis_button_linkedin"></a>
					</div>
					<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52ab43ef2a2ff727"></script>
					<!-- AddThis Button END -->
				</li>
		  	</ul>
		  </menu>
		  

		  <?php if (!is_page(4) && !is_page(12) && !is_page(411)) { ?>
		  	 <?php if (!is_single()) { ?>
		  	<div class="menu-categories">
		  	<ul>
		  		<li>
		  		<a href="/category/all/?esp=1" class="gray">Todos</a> 
		  		<?php if (is_category('all') || is_page('esp')) { ?>
		  			<?php $aux=0; ?>
		  			<div class="nav-square to"></div>
		  		<?php } else { ?>
		  			<div class="nav-square-blank"></div>
		  		<?php } ?>
		  		</li>
		  		<li>
		  		<a href="/category/spaces/?esp=1" class="green">Espacios</a> 
		  		<?php if (is_category( 'spaces' )) { ?>
		  			<?php $aux=1; ?>
		  			<div class="nav-square"></div>
		  		<?php } else { ?>
		  			<div class="nav-square-blank"></div>
		  		<?php } ?>
		  		</li>
		  		<li>
		  		<a href="/category/objects/?esp=1" class="orange">Objetos</a> 
		  		<?php if (is_category( 'objects' )) { ?>
		  			<?php $aux=2; ?>
		  			<div class="nav-square ob"></div>
		  		<?php } else { ?>
		  			<div class="nav-square-blank"></div>
		  		<?php } ?>
		  		</li>
		  		<li>
		  		<a href="/category/systems/?esp=1" class="blue">Sistemas</a> 
		  		<?php if (is_category( 'systems' )) { ?>
		  			<?php $aux=3; ?>
		  			<div class="nav-square"></div>
		  		<?php } else { ?>
		  			<div class="nav-square-blank"></div>
		  		<?php } ?>
		  		</li>
		  	</ul>
		  </div> <!--.menu-categories-->
		  <?php } ?>
		  <?php } ?>  
			  
	      <?php if (!is_page(4) && !is_single() && !is_page(12) && !is_page(411)) { ?>
			<navgrid>
		    <?php if (!is_category('spaces') && !is_category('objects') && !is_category('systems')) { ?>
		    	<?php query_posts('&cat=2'); ?>
		    <?php } ?>
		    <?php $counter1=1; ?>
		  	<?php if (have_posts()) : ?>
			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php if ($aux==3) { ?>
			  		<a href="<?php the_permalink(); ?>?esp=1"><div class="grid-blue" id="square<?php echo $counter1;?>"></div></a>
			  	<?php } ?>
			  	
			  	<?php if ($aux==2) { ?>
			  		<a href="<?php the_permalink(); ?>?esp=1"><div class="grid-orange" id="square<?php echo $counter1;?>"></div></a>
			  	<?php } ?>
			  	
			  	<?php if ($aux==1) { ?>
			  		<a href="<?php the_permalink(); ?>?esp=1"><div class="grid-green" id="square<?php echo $counter1;?>"></div></a>
			  	<?php } ?>
			  	
			  	<?php if ($aux==0) { ?>
			  		<?php if (in_category( 'spaces' )) { ?>
				  		<a href="<?php the_permalink(); ?>?esp=1"><div class="grid-green" id="square<?php echo $counter1;?>"></div></a>
			  		<?php } ?>
			  		
			  		<?php if (in_category( 'objects' )) { ?>
				  		<a href="<?php the_permalink(); ?>?esp=1"><div class="grid-orange" id="square<?php echo $counter1;?>"></div></a>	
			  		<?php } ?>
			  		
			  		<?php if (in_category( 'systems' )) { ?>
				  		<a href="<?php the_permalink(); ?>?esp=1"><div class="grid-blue" id="square<?php echo $counter1;?>"></div></a>	
			  		<?php } ?>			  		
			  	<?php } ?>
			  	<?php $counter1++; ?>
		  	<?php endwhile; else: endif; ?>
		  	<?php wp_reset_query(); ?>			  			  			  		  	
		  </navgrid>
		  <?php } ?>
		  		 
	  	</div>
	  	
	  	<?php } else { ?>
	  	
	  	<!--INGLES-->
	  	<div class="menu-wrapper">
	  	  <header>	
		  	<h1>Carlos Fierro</h1>
	  	  </header>
		  <menu>
		  	<ul>
		  		<li><a href="/eng" <?php if((is_single()) || (is_page('eng')) || (is_category('all')) || (is_category('spaces')) || (is_category('objects')) || (is_category('systems'))) { ?> id="nav-bold" <?php } ?>>Works</a></li>
		  		<li><a href="/bio" <?php if(is_page('bio')) { ?> id="nav-bold" <?php } ?>>Bio</a></li>
		  		<li><a href="/media" <?php if(is_page('media') || (is_category('all-media')) || (is_category('spaces-media')) || (is_category('objects-media')) || (is_category('systems-media'))) { ?>  id="nav-bold"  <?php } ?>>Media</a></li>
		  		<li><a href="/eng-contact" <?php if(is_page('eng-contact')) { ?> id="nav-bold" <?php } ?>>Contact</a></li>
		  		<li id="add_this">
		  			<!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style addthis_20x20_style">
					<a class="addthis_button_facebook"></a>
					<a class="addthis_button_pinterest_share"></a>
					<a class="addthis_button_twitter"></a>
					<a class="addthis_button_linkedin"></a>
					</div>
					<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52ab43ef2a2ff727"></script>
					<!-- AddThis Button END -->
				</li>
		  	</ul>
		  </menu>
		  

		  <?php if (!is_page(4) && !is_page(12) && !is_page(411)) { ?>
		  	 <?php if (!is_single()) { ?>
		  	<div class="menu-categories">
		  	<ul>
		  		<li>
		  		<a href="/category/all/" class="gray">All</a> 
		  		<?php if (is_category('all') || is_page(372)) { ?>
		  			<?php $aux=0; ?>
		  			<div class="nav-square to"></div>
		  		<?php } else { ?>
		  			<div class="nav-square-blank"></div>
		  		<?php } ?>
		  		</li>
		  		<li>
		  		<a href="/category/spaces/" class="green">Spaces</a> 
		  		<?php if (is_category( 'spaces' )) { ?>
		  			<?php $aux=1; ?>
		  			<div class="nav-square"></div>
		  		<?php } else { ?>
		  			<div class="nav-square-blank"></div>
		  		<?php } ?>
		  		</li>
		  		<li>
		  		<a href="/category/objects/" class="orange">Objects</a> 
		  		<?php if (is_category( 'objects' )) { ?>
		  			<?php $aux=2; ?>
		  			<div class="nav-square ob"></div>
		  		<?php } else { ?>
		  			<div class="nav-square-blank"></div>
		  		<?php } ?>
		  		</li>
		  		<li>
		  		<a href="/category/systems/" class="blue">Systems</a> 
		  		<?php if (is_category( 'systems' )) { ?>
		  			<?php $aux=3; ?>
		  			<div class="nav-square"></div>
		  		<?php } else { ?>
		  			<div class="nav-square-blank"></div>
		  		<?php } ?>
		  		</li>
		  	</ul>
		  </div> <!--.menu-categories-->
		  <?php } ?>
		  <?php } ?>  
			  
	      <?php if (!is_page(4) && !is_single() && !is_page(12) && !is_page(411)) { ?>
			<navgrid>
		    <?php if (!is_category('spaces') && !is_category('objects') && !is_category('systems')) { ?>
		    	<?php query_posts('&cat=2'); ?>
		    <?php } ?>
		    
		    <?php $counter1=1; ?>
		  	<?php if (have_posts()) : ?>
			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php if ($aux==3) { ?>
			  		<a href="<?php the_permalink(); ?>"><div class="grid-blue" id="square<?php echo $counter1;?>"></div></a>
			  	<?php } ?>
			  	
			  	<?php if ($aux==2) { ?>
			  		<a href="<?php the_permalink(); ?>"><div class="grid-orange" id="square<?php echo $counter1;?>"></div></a>
			  	<?php } ?>
			  	
			  	<?php if ($aux==1) { ?>
			  		<a href="<?php the_permalink(); ?>"><div class="grid-green" id="square<?php echo $counter1;?>"></div></a>
			  	<?php } ?>
			  	
			  	<?php if ($aux==0) { ?>
			  		<?php if (in_category( 'spaces' )) { ?>
				  		<a href="<?php the_permalink(); ?>"><div class="grid-green" id="square<?php echo $counter1;?>"></div></a>
			  		<?php } ?>
			  		
			  		<?php if (in_category( 'objects' )) { ?>
				  		<a href="<?php the_permalink(); ?>"><div class="grid-orange" id="square<?php echo $counter1;?>"></div></a>	
			  		<?php } ?>
			  		
			  		<?php if (in_category( 'systems' )) { ?>
				  		<a href="<?php the_permalink(); ?>"><div class="grid-blue" id="square<?php echo $counter1;?>"></div></a>	
			  		<?php } ?>			  		
			  	<?php } ?>
			  	<?php $counter1++; ?>
			  	
		  	<?php endwhile; else: endif; ?>
		  	<?php wp_reset_query(); ?>			  			  			  		  	
		  </navgrid>
		  <?php } ?>
		  		 
	  	</div>
	  	
	  	<?php } ?>
	  