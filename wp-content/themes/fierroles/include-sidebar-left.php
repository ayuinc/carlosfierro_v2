<aside class="sidebar-left">
  <div class="text-right text-center-xs text-center-sm">
    <h1 class="h4 uppercase text-gray-darker lintel-regular m-0"><a href="<?php echo site_url(); ?>">Carlos Fierro</a></h1>
    <?php 

      $defaults = array(
        'container' => false,
        'theme_location' => 'main-menu',
        'menu_class' => 'list-unstyled uppercase lintel-regular pv-7 pv-14-xs mr-ch-14-xs mr-ch-14-sm'
        );
      wp_nav_menu ($defaults);

    ?>
    <?php if (is_page_template( 'page-works.php' )):  ?>
      <ul class="nav-project-grid-filters">
        <li><a href="#" class="* all active" data-filter="*"><?php _e('All', 'wpml_theme'); ?></a></li>
        <li><a href="#" class="spaces espacios" data-filter=".<?php _e('spaces', 'wpml_theme'); ?>"><?php _e('Spaces', 'wpml_theme'); ?></a></li>
        <li><a href="#" class="objects objetos" data-filter=".<?php _e('objects', 'wpml_theme'); ?>"><?php _e('Objects', 'wpml_theme'); ?></a></li>
        <li><a href="#" class="systems sistemas" data-filter=".<?php _e('systems', 'wpml_theme'); ?>"><?php _e('Systems', 'wpml_theme'); ?></a></li>
      </ul>
      <ul class="nav-project-items-mini-grid hidden-xs hidden-sm"></ul>
    <?php endif; ?>
    <?php if (is_page_template( 'page-media.php' )):  ?>
      <ul class="nav-project-items-mini-grid hidden-xs hidden-sm"></ul>
    <?php endif; ?>
  </div>
</aside>