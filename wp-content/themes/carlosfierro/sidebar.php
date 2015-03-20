		
		<?php $esp = $_GET['esp'];?> 
		<?php $media = $_GET['media'];?>
		
		<?php if($esp==1) { ?>
		<!--ESPANOL-->
	  	<div class="col-sm-2 clearfix">
	  		<ul class="hidden-xs hidden-sm list-unstyled nav-main-menu">
          <li class="carlos-fierro text-right"><a class="carlos-fierro" href="/esp/?esp=1">Carlos Fierro</a></li>
          <li class="text-right"><a href="/esp/?esp=1" <?php if((is_single()) || (is_page('esp')) || (is_category('all')) || (is_category('spaces')) || (is_category('objects')) || (is_category('systems'))) { ?> class="active" <?php } ?>>Proyectos</a></li>
		  		<li class="text-right"><a href="/bio/?esp=1" <?php if(is_page('bio')) { ?> <?php } ?>>Biografia</a></li>
		  		<li class="text-right"><a href="/media/?esp=1" <?php if(is_page('media') || (is_category('all-media')) || (is_category('spaces-media')) || (is_category('objects-media')) || (is_category('systems-media'))) { ?> <?php } ?>>Prensa</a></li>
		  		<li class="text-right"><a href="/contactos/?esp=1" <?php if(is_page('contactos')) { ?> <?php } ?>>Contacto</a></li>
        </ul>
        <div class="text-center hidden-md hidden-lg"><a class="carlos-fierro-movil" href="/esp/?esp=1">Carlos Fierro</a></div>
        <ul class="hidden-md hidden-lg list-inline list-unstyled mov-menu">
          <li><a href="/esp/?esp=1" <?php if((is_single()) || (is_page('esp')) || (is_category('all')) || (is_category('spaces')) || (is_category('objects')) || (is_category('systems'))) { ?> class="active" <?php } ?>>Proyectos</a></li>
		  		<li><a href="/bio/?esp=1" <?php if(is_page('bio')) { ?> <?php } ?>>Biografia</a></li>
		  		<li><a href="/media/?esp=1" <?php if(is_page('media') || (is_category('all-media')) || (is_category('spaces-media')) || (is_category('objects-media')) || (is_category('systems-media'))) { ?> <?php } ?>>Prensa</a></li>
		  		<li><a href="/contactos/?esp=1" <?php if(is_page('contactos')) { ?> <?php } ?>>Contacto</a></li>
        </ul>		  

		  <?php if (!is_page(4) && !is_page(12) && !is_page(411)) { ?>
		  	 <?php if (!is_single()) { ?>
		  	<ul class="hidden-xs hidden-sm list-unstyled nav-project-grid-filters">
		  		<li><a href="/category/all/?esp=1" class="* active" data-filter="*">Todos</a></li>
		  		<li><a href="/category/spaces/?esp=1" class="spaces" data-filter=".spaces">Espacios</a></li>
		  		<li><a href="/category/objects/?esp=1" class="objects" data-filter=".objects">Objetos</a></li>
 					<li><a href="/category/systems/?esp=1" class="systems" data-filter=".systems">Sistemas</a></li>
		  	</ul> <!--categories-menu-->
		  	<ul class="hidden-md hidden-lg list-inline list-unstyled nav-project-grid-filters pb-21">
		  		<li><a href="/category/all/?esp=1" class="* active" data-filter="*">Todos</a></li>
		  		<li><a href="/category/spaces/?esp=1" class="spaces" data-filter=".spaces">Espacios</a></li>
		  		<li><a href="/category/objects/?esp=1" class="objects" data-filter=".objects">Objetos</a></li>
 				<li><a href="/category/systems/?esp=1" class="systems" data-filter=".systems">Sistemas</a></li>
		  	</ul> <!--mobile-categories-menu-ends-->
		  	<ul class="hidden-xs hidden-sm list-unstyled nav-project-items-mini-grid">
        	</ul>
		  <?php } ?>
		  <?php } ?>

	  	
	  	<?php } else { ?>
	  	
	  	<!--INGLES-->
	  	<!-- nuevo carlos work/bio/media/-->
	  	<div class="col-sm-2 clearfix">
	  		<ul class="hidden-xs hidden-sm list-unstyled nav-main-menu">
 	         <li class="text-right carlos-fierro"><a href="/eng">Carlos Fierro</a></li>
    	     <li class="text-right"><a href="/eng" <?php if((is_single()) || (is_page('eng')) || (is_category('all')) || (is_category('spaces')) || (is_category('objects')) || (is_category('systems'))) { ?> class="active" <?php } ?>>Works</a></li>
		  	 <li class="text-right"><a href="/bio" <?php if(is_page('bio')) { ?> <?php } ?>>Bio</a></li>
		  	 <li class="text-right"><a href="/media" <?php if(is_page('media') || (is_category('all-media')) || (is_category('spaces-media')) || (is_category('objects-media')) || (is_category('systems-media'))) { ?> <?php } ?>>Media</a></li>
		  	 <li class="text-right"><a href="/eng-contact" <?php if(is_page('contactos')) { ?> <?php } ?>>Contact</a></li>
        	</ul>
	  		<div class="text-center hidden-md hidden-lg"><a class="carlos-fierro-movil" href="/eng">Carlos Fierro</a></div>
	        <ul class="hidden-md hidden-lg list-inline list-unstyled mov-menu">
	    	     <li><a href="/eng" <?php if((is_single()) || (is_page('eng')) || (is_category('all')) || (is_category('spaces')) || (is_category('objects')) || (is_category('systems'))) { ?> class="active" <?php } ?>>Works</a></li>
			  		 <li><a href="/bio" <?php if(is_page('bio')) { ?> <?php } ?>>Bio</a></li>
			  	 	 <li><a href="/media" <?php if(is_page('media') || (is_category('all-media')) || (is_category('spaces-media')) || (is_category('objects-media')) || (is_category('systems-media'))) { ?> <?php } ?>>Media</a></li>
			  	 	 <li><a href="/eng-contact" <?php if(is_page('contactos')) { ?> <?php } ?>>Contact</a></li>
	        </ul>
	  	<!-- fin carlos work/bio/media/ -->
		  

		  <?php if (!is_page(4) && !is_page(12) && !is_page(411)) { ?>
		  	 <?php if (!is_single()) { ?>
		  	 <!-- nuevo menu all/systems-->
		  	 	<ul class="hidden-xs hidden-sm list-unstyled nav-project-grid-filters">
		  			<li><a href="/category/all/" class="* active" data-filter="*">All</a></li>
		  			<li><a href="/category/spaces/" class="spaces" data-filter=".spaces">Spaces</a></li>
		  			<li><a href="/category/objects/" class="objects" data-filter=".objects">Objects</a></li>
 					<li><a href="/category/systems/" class="systems" data-filter=".systems">Sistemas</a></li>
		  		</ul> 
		  		<ul class="hidden-md hidden-lg list-inline list-unstyled nav-project-grid-filters">
		  			<li><a href="/category/all/" class="* active" data-filter="*">All</a></li>
		  			<li><a href="/category/spaces/" class="spaces" data-filter=".spaces">Spaces</a></li>
		  			<li><a href="/category/objects/" class="objects" data-filter=".objects">Objects</a></li>
 					<li><a href="/category/systems/" class="systems" data-filter=".systems">Sistemas</a></li>
		  		</ul> 
		  	 <!-- fin nuevo menu all/systems -->
		  	 <!-- nuevo grid -->
		  	 	<ul class="hidden-xs hidden-sm list-unstyled nav-project-items-mini-grid"></ul>
		  	 <!-- fin grid -->
		
		  <?php } ?>
		  <?php } ?>  
			  

		  <?php } ?>
		  		 
	  	</div>
	  	
	  