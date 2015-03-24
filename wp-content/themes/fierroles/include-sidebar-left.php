<aside class="sidebar-left">
  <div class="text-right">
    <h1 class="h4 uppercase text-gray-dark lintel-bold m-0"><a href="#">Carlos Fierro</a></h1>
    <ul class="list-unstyled uppercase lintel-regular pv-7">
      <!-- <li><a href="#">Works</a></li>
      <li><a href="#">Bio</a></li>
      <li><a href="#">Media</a></li>
      <li><a href="#">Contact</a></li> -->
      <?php 

        $defaults = array(
          'container' => false,
          'theme_location' => 'main-menu'
          // 'menu_class' => 'ul-class'
          );
        wp_nav_menu ($defaults);
        
      ?>
    </ul>
    <ul class="nav-project-grid-filters mv-42">
      <li><a href="#" class="* all active" data-filter="*">All</a></li>
      <li><a href="#" class="spaces" data-filter=".spaces">Spaces</a></li>
      <li><a href="#" class="objects" data-filter=".objects">Objects</a></li>
      <li><a href="#" class="systems" data-filter=".systems">Systems</a></li>
    </ul>
    <ul class="nav-project-items-mini-grid"></ul>
  </div>
</aside>