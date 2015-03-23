
<!-- sidebar-english -->
	<div class="col-sm-2 clearfix">
	  	<ul class="hidden-xs hidden-sm list-unstyled nav-main-menu">
          <li class="carlos-fierro text-right"><a class="carlos-fierro" href="/eng">Carlos Fierro</a></li>
          <li class="text-right"><a href="/eng" <?php if((is_single()) || (is_page('eng')) || (is_category('all')) || (is_category('spaces')) || (is_category('objects')) || (is_category('systems'))) { ?> class="active" <?php } ?>>Projects</a></li>
		  <li class="text-right"><a href="/bio" <?php if(is_page('bio')) { ?> <?php } ?>>Bio</a></li>
		  <li class="text-right"><a href="/media" <?php if(is_page('media') || (is_category('all-media')) || (is_category('spaces-media')) || (is_category('objects-media')) || (is_category('systems-media'))) { ?> <?php } ?>>Media</a></li>
		  <li class="text-right"><a href="/contactos" <?php if(is_page('contactos')) { ?> <?php } ?>>Contact</a></li>
        </ul>
        <div class="text-center hidden-md hidden-lg"><a  class="carlos-fierro-movil" href="/eng">Carlos Fierro</a></div>
        <ul class="hidden-md hidden-lg list-inline list-unstyled mov-menu">
          <li><a href="/eng" <?php if((is_single()) || (is_page('eng')) || (is_category('all')) || (is_category('spaces')) || (is_category('objects')) || (is_category('systems'))) { ?> class="active" <?php } ?>>Projects</a></li>
		  <li><a href="/bio" <?php if(is_page('bio')) { ?> <?php } ?>>Bio</a></li>
		  <li><a href="/media" <?php if(is_page('media') || (is_category('all-media')) || (is_category('spaces-media')) || (is_category('objects-media')) || (is_category('systems-media'))) { ?> <?php } ?>>Media</a></li>
		  <li><a href="/contactos" <?php if(is_page('contactos')) { ?> <?php } ?>>Contact</a></li>
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
	  