
<!-- sidebar-english -->
	<div class="col-sm-2 clearfix">
	  	<ul class="hidden-xs hidden-sm list-unstyled nav-main-menu">
          <li class="carlos-fierro text-right"><a class="carlos-fierro" href="/eng">Carlos Fierro</a></li>
          <li class="text-right"><a href="/eng" <?php if((is_single()) || (is_page('eng')) || (is_category('all')) || (is_category('spaces')) || (is_category('objects')) || (is_category('systems'))) { ?> class="active" <?php } ?>>Projects</a></li>
		  <li class="text-right"><a href="/bio" <?php if(is_page('bio')) { ?> <?php } ?>>Bio</a></li>
		  <li class="text-right"><a href="/media" <?php if(is_page('media') || (is_category('all-media')) || (is_category('spaces-media')) || (is_category('objects-media')) || (is_category('systems-media'))) { ?> <?php } ?>>Media</a></li>
		  <li class="text-right"><a href="/contactos" <?php if(is_page('contactos')) { ?> <?php } ?>>Contact</a></li>
        </ul>
        <div class="text-center hidden-md hidden-lg"><a class="carlos-fierro-movil" href="/eng">Carlos Fierro</a></div>
        <ul class="hidden-md hidden-lg list-inline list-unstyled mov-menu">
          <li><a href="/eng" <?php if((is_single()) || (is_page('eng')) || (is_category('all')) || (is_category('spaces')) || (is_category('objects')) || (is_category('systems'))) { ?> class="active" <?php } ?>>Projects</a></li>
		  <li><a href="/bio" <?php if(is_page('bio')) { ?> <?php } ?>>Bio</a></li>
		  <li><a href="/media" <?php if(is_page('media') || (is_category('all-media')) || (is_category('spaces-media')) || (is_category('objects-media')) || (is_category('systems-media'))) { ?> <?php } ?>>Media</a></li>
		  <li><a href="/contactos" <?php if(is_page('contactos')) { ?> <?php } ?>>Contact</a></li>
        </ul>
		  

		<?php if (!is_page(4) && !is_page(12) && !is_page(411)) { ?>
		  	 <?php if (!is_single()) { ?>
		<ul class="hidden-xs hidden-sm list-unstyled nav-project-grid-filters">
		  	<li><a href="/category/all/" class="* active" data-filter="*">All</a></li>
		  	<li><a href="/category/spaces/" class="spaces" data-filter=".spaces">Spaces</a></li>
		  	<li><a href="/category/objects/" class="objects" data-filter=".objects">Objects</a></li>
 			<li><a href="/category/systems/" class="systems" data-filter=".systems">Systems</a></li>
		</ul> <!--.menu-categories-->	
		<ul class="hidden-md hidden-lg list-inline list-unstyled nav-project-grid-filters">
		  	<li><a href="/category/all/" class="* active" data-filter="*">All</a></li>
		  	<li><a href="/category/spaces/" class="spaces" data-filter=".spaces">Spaces</a></li>
		  	<li><a href="/category/objects/" class="objects" data-filter=".objects">Objects</a></li>
 			<li><a href="/category/systems/" class="systems" data-filter=".systems">Systems</a></li>
		</ul> <!--.menu-categories-->		
        <ul class="hidden-xs hidden-sm list-unstyled nav-press-items-mini-grid">
		  <?php } ?>
		  <?php } ?>

	</div>
	  