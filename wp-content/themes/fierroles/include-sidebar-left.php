<aside class="sidebar-left">
  <div class="text-right">
    <h1 class="h4 uppercase text-gray-dark lintel-bold m-0"><a href="<?php echo site_url(); ?>">Carlos Fierro</a></h1>
    <?php 

      $defaults = array(
        'container' => false,
        'theme_location' => 'main-menu',
        'menu_class' => 'list-unstyled uppercase lintel-regular pv-7'
        );
      wp_nav_menu ($defaults);

    ?>
    <?php if (is_page_template( 'page-works.php' )):  ?>
      <ul class="nav-project-grid-filters mv-42">
        <li><a href="#" class="* all active" data-filter="*">All</a></li>
        <li><a href="#" class="spaces espacios" data-filter=".spaces .espacios"><?php _e('Spaces', 'wpml_theme'); ?></a></li>
        <li><a href="#" class="objects objetos" data-filter=".objects .objetos"><?php _e('Objects', 'wpml_theme'); ?></a></li>
        <li><a href="#" class="systems sistemas" data-filter=".systems .sistemas"><?php _e('Systems', 'wpml_theme'); ?></a></li>
      </ul>
      <ul class="nav-project-items-mini-grid"></ul>
    <?php endif; ?>
    <?php if (is_page_template( 'page-media.php' )):  ?>
      <ul class="nav-project-items-mini-grid"></ul>
    <?php endif; ?>
  </div>
</aside>