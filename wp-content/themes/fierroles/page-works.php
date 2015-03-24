<?php 
/*
  Template Name: Works
*/
?>

<?php get_header(); ?>
  <?php get_template_part( 'include', 'sidebar-left' ); ?>

  <?php 
  
    $args = array(
      'post_type' => 'works' // Aquí es donde determinas el nombre del channel
      );
    $query = new WP_Query( $args );

  ?>
  <main class="main-content works-padding" role="main">
    <ul class="projects-grid isotope-container">
      <?php if ( $query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
        <li class="isotope-item systems" data-minigrid="systems">
          <a href="<?php the_permalink(); ?>">
            <div class="project-thumbnail">
              <?php 
                $image = get_field('image');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                  echo wp_get_attachment_image( $image, $size );
                }
              ?>
            </div>
            <div class="overlay">              
              <h2 class="project-title"><?php the_field('tag'); ?></h2>
              <div class="name-year"><span class="name"><?php the_title(); ?></span><br><span class="year"><?php the_field('year'); ?></span></div>
              <small class="location"><?php the_field('location'); ?></small>
            </div>
          </a>
        </li>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); // Esta sirve para regresar los posts a la normalidad por si agregas mas loops ?>
    </ul>
  </main>
<?php get_footer(); ?>