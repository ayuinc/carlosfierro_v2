	<?php $esp = $_GET['esp'];?> 
	<?php $media = $_GET['media'];?>
<!-- project-sidebar-spanish -->
	<div class="col-sm-2 clearfix">
	  	<ul class="hidden-xs hidden-sm list-unstyled nav-main-menu">
          <li class="text-right carlos-fierro"><a class="carlos-fierro" href="/esp/?esp=1">Carlos Fierro</a></li>
          <li class="text-right"><a href="/esp/?esp=1" <?php if((is_single()) || (is_page('esp')) || (is_category('all')) || (is_category('spaces')) || (is_category('objects')) || (is_category('systems'))) { ?> class="active" <?php } ?>>Proyectos</a></li>
		  <li class="text-right"><a href="/bio/?esp=1" <?php if(is_page('bio')) { ?> <?php } ?>>Biografia</a></li>
		  <li class="text-right"><a href="/media/?esp=1" <?php if(is_page('media') || (is_category('all-media')) || (is_category('spaces-media')) || (is_category('objects-media')) || (is_category('systems-media'))) { ?> <?php } ?>>Prensa</a></li>
		  <li class="text-right"><a href="/contactos/?esp=1" <?php if(is_page('contactos')) { ?> <?php } ?>>Contacto</a></li>
        </ul>
        <div class="text-center hidden-md hidden-lg"><a  class="carlos-fierro-movil" href="/esp/?esp=1">Carlos Fierro</a></div>
        <ul class="hidden-md hidden-lg list-inline list-unstyled mov-menu">
          <li><a href="/esp/?esp=1" <?php if((is_single()) || (is_page('esp')) || (is_category('all')) || (is_category('spaces')) || (is_category('objects')) || (is_category('systems'))) { ?> class="active" <?php } ?>>Proyectos</a></li>
		  <li><a href="/bio/?esp=1" <?php if(is_page('bio')) { ?> <?php } ?>>Biografia</a></li>
		  <li><a href="/media/?esp=1" <?php if(is_page('media') || (is_category('all-media')) || (is_category('spaces-media')) || (is_category('objects-media')) || (is_category('systems-media'))) { ?> <?php } ?>>Prensa</a></li>
		  <li><a href="/contactos/?esp=1" <?php if(is_page('contactos')) { ?> <?php } ?>>Contacto</a></li>
        </ul>
		  

		<?php if (!is_page(4) && !is_page(12) && !is_page(411)) { ?>
		 
		<ul class="list-unstyled pt-14">
				<li id="add_this">
		  		<!-- AddThis Button BEGIN -->
					<ul class="list-unstyled pull-right addthis_toolbox addthis_default_style addthis_20x20_style">
						<li><a class="pb-7 addthis_button_facebook"></a></li>
						<li><a class="pb-7 addthis_button_twitter"></a></li>
					</ul>
					<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52ab43ef2a2ff727"></script>
					<!-- AddThis Button END -->
				</li>
		</ul>		
		<ul class="list-unstyled nav-press-items-mini-grid">
		  <?php } ?>

	</div>
	  