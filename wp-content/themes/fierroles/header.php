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

    <style>

      <?php foreach((get_the_category()) as $category) {
        if ($category[0]->name == 'spaces') {
          $spaces = $category[0]->slug
        } elseif ($category[0]->name == 'objects') {
          $objects = $category[0]->slug
        } else {
          $systems = $category[0]->slug
        }
      }
      ?>
      /* Nav project grid colors */
      .nav-project-grid-filters li a.spaces {
        color: <?php $spaces ?>; }
        .nav-project-grid-filters li a.spaces:hover:after, .nav-project-grid-filters li a.spaces.active:after {
          background: <?php $spaces ?>; }
      .nav-project-grid-filters li a.objects {
            color: <?php $objects ?>; }
            .nav-project-grid-filters li a.objects:hover:after, .nav-project-grid-filters li a.objects.active:after {
              background: <?php $objects ?>; }
      .nav-project-grid-filters li a.systems {
            color: <?php $systems ?>; }
            .nav-project-grid-filters li a.systems:hover:after, .nav-project-grid-filters li a.systems.active:after {
              background: <?php $systems ?>; }

      /* Mini grid colors */
      .nav-project-items-mini-grid li.spaces a {
        background: <?php $spaces ?>; }
        .nav-project-items-mini-grid li.spaces a:hover, .nav-project-items-mini-grid li.spaces a.active {
          background: <?php $spaces ?>; }
      .nav-project-items-mini-grid li.objects a {
        background: <?php $objects ?>; }
        .nav-project-items-mini-grid li.objects a:hover, .nav-project-items-mini-grid li.objects a.active {
          background: <?php $objects ?>; }
      .nav-project-items-mini-grid li.systems a {
        background: <?php $systems ?>; }
        .nav-project-items-mini-grid li.systems a:hover, .nav-project-items-mini-grid li.systems a.active {
          background: <?php $systems ?>; }

      /* Projects grid h4 color */
      .projects-grid li.systems a .overlay h4 {
        color: <?php $systems ?>; }
      .projects-grid li.spaces a .overlay h4 {
        color: <?php $spaces ?>; }
      .projects-grid li.objects a .overlay h4 {
        color: <?php $objects ?>; }

      <?php break; ?>

    </style>

    <?php wp_head(); ?> <!-- AVISAMOS QUE TERMINA EL HEAD -->
  </head>
  <body <?php body_class(); ?>>
    <div class="site-wrapper"> <!-- Body -->
    <div class="site-content">

