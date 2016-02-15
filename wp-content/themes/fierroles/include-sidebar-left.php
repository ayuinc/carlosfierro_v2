<aside class="sidebar-left">
  <div class="text-right text-center-xs text-center-sm">
    <h1 class="h4 uppercase text-gray-darker lintel-regular m-0"><a href="<?php echo site_url(); ?>">Carlos Fierro</a></h1>
    <?php 

      $lang = get_query_var( 'lang', en );
      $menu = ($lang === "es")? 'main-menu-es' : 'main-menu';
      $after = ($lang === "es")? '?lang=es':'';
   
     $locale_file = TEMPLATEPATH . "/languages/$locale.php";
      $defaults = array(
        'container' => false,
        'theme_location' => $menu,
        'menu_class' => 'list-unstyled uppercase lintel-regular pv-7 pv-14-xs mr-ch-14-xs mr-ch-14-sm'
        );
      wp_nav_menu ($defaults);
    ?>
    <?php if (is_page_template( 'page-works.php' )):  ?>
      <ul class="nav-project-grid-filters">
        <li><a href="#" class="* all active" data-filter="*"><?php _e('All', 'carlosfierroworks'); ?></a></li>
        <li><a href="#" class="spaces espacios" data-filter=".spaces"><?php _e('Spaces', 'carlosfierroworks'); ?></a></li>
        <li><a href="#" class="objects carlosfierroworks" data-filter=".objects"><?php _e('Objects', 'carlosfierroworks'); ?></a></li>
        <li><a href="#" class="systems sistemas" data-filter=".systems"><?php echo __('Systems', 'carlosfierroworks'); ?></a></li>
      </ul>
      <ul class="nav-project-items-mini-grid hidden-xs hidden-sm"></ul>
    <?php endif; ?>
    <?php if (is_page_template( 'page-media.php' )):  ?>
      <ul class="nav-project-items-mini-grid hidden-xs hidden-sm"></ul>
    <?php endif; ?>
  </div>
</aside>