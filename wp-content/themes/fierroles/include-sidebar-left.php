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
        <li><a href="#" class="spaces" data-filter=".spaces">Spaces</a></li>
        <li><a href="#" class="objects" data-filter=".objects">Objects</a></li>
        <li><a href="#" class="systems" data-filter=".systems">Systems</a></li>
      </ul>
      <ul class="nav-project-items-mini-grid"></ul>
    <?php endif; ?>
  </div>
</aside>