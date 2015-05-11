<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="keywords" content=""> 
    <meta name="author" content="@MadeByGus">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="assets/icons/favicon.ico">

    <!-- POST CATEGORY SLUGS -->
    <style>

      <?php 
        $categories = get_categories();
        echo $categories;
        foreach($categories as $category) {
          echo $category;
          if ($category->name == 'Spaces') {
            $spaces = $category->description;
          } elseif ($category->name == 'Objects') {
            $objects = $category->description;
          } else {
            $systems = $category->description;
          }
        
      
      /* Nav project grid colors */
      .nav-project-grid-filters li a.spaces {
        color: echo '#' . $spaces . ';'; }
        .nav-project-grid-filters li a.spaces:hover:after, .nav-project-grid-filters li a.spaces.active:after {
          background: echo '#' . $spaces . ';'; }
      .nav-project-grid-filters li a.objects {
            color: echo '#' . $objects . ';'; }
            .nav-project-grid-filters li a.objects:hover:after, .nav-project-grid-filters li a.objects.active:after {
              background: echo '#' . $objects . ';'; }
      .nav-project-grid-filters li a.systems {
            color: echo '#' . $systems . ';'; }
            .nav-project-grid-filters li a.systems:hover:after, .nav-project-grid-filters li a.systems.active:after {
              background: echo '#' . $systems . ';'; }

      /* Mini grid colors */
      .nav-project-items-mini-grid li.spaces a {
        background: echo '#' . $spaces . ';'; }
        .nav-project-items-mini-grid li.spaces a:hover, .nav-project-items-mini-grid li.spaces a.active {
          background: echo '#' . $spaces . ';'; }
      .nav-project-items-mini-grid li.objects a {
        background: echo '#' . $objects . ';'; }
        .nav-project-items-mini-grid li.objects a:hover, .nav-project-items-mini-grid li.objects a.active {
          background: echo '#' . $objects . ';'; }
      .nav-project-items-mini-grid li.systems a {
        background: echo '#' . $systems . ';'; }
        .nav-project-items-mini-grid li.systems a:hover, .nav-project-items-mini-grid li.systems a.active {
          background: echo '#' . $systems . ';'; }

      /* Projects grid h4 color */
      .projects-grid li.systems a .overlay h4 {
        color: echo '#' . $systems . ';'; }
      .projects-grid li.spaces a .overlay h4 {
        color: echo '#' . $spaces . ';'; }
      .projects-grid li.objects a .overlay h4 {
        color: echo '#' . $objects . ';'; }

        }
      ?>

    </style>

    <?php wp_head(); ?> <!-- AVISAMOS QUE TERMINA EL HEAD -->
  </head>
  <body <?php body_class(); ?>>
    <div class="site-wrapper"> <!-- Body -->
    <div class="site-content">

