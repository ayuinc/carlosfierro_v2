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

    <!-- POST CATEGORY COLORS -->
    <style>
      /* Nav project grid colors */
      .nav-project-grid-filters li a.spaces {
        color: #AFB829;
      }
        .nav-project-grid-filters li a.spaces:hover:after, .nav-project-grid-filters li a.spaces.active:after {
          background: #AFB829;
        }
      .nav-project-grid-filters li a.objects {
        color: #fcb748;
      }
        .nav-project-grid-filters li a.objects:hover:after, .nav-project-grid-filters li a.objects.active:after {
          background: #fcb748;
        }
      .nav-project-grid-filters li a.systems {
        color: #3db9ea;
      }
        .nav-project-grid-filters li a.systems:hover:after, .nav-project-grid-filters li a.systems.active:after {
          background: #3db9ea;
        }

      /* Mini grid colors */
      .nav-project-items-mini-grid li.spaces a {
        background: #AFB829;
      }
        .nav-project-items-mini-grid li.spaces a:hover, .nav-project-items-mini-grid li.spaces a.active {
          background: #AFB829;
        }
      .nav-project-items-mini-grid li.objects a {
        background: #fcb748;
      }
        .nav-project-items-mini-grid li.objects a:hover, .nav-project-items-mini-grid li.objects a.active {
          background: #fcb748;
        }
      .nav-project-items-mini-grid li.systems a {
        background: #3db9ea;
      }
        .nav-project-items-mini-grid li.systems a:hover, .nav-project-items-mini-grid li.systems a.active {
          background: #3db9ea;
        }

      /* Projects grid h4 color */
      .projects-grid li.systems a .overlay h4 {
        color: #3db9ea;
      }
      .projects-grid li.spaces a .overlay h4 {
        color: #AFB829;
      }
      .projects-grid li.objects a .overlay h4 {
        color: #fcb748;
      }
      .projects-grid .isotope-item.media-item > a {
        height: 340px;
      }
    </style>

    <?php wp_head(); ?> <!-- AVISAMOS QUE TERMINA EL HEAD -->
  </head>
  <body <?php body_class(); ?>>
    <div class="site-wrapper"> <!-- Body -->
    <div class="site-content">

