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
        <li 
          <?php 
            $term = get_field('taxonomy');
            if( $term ): ?>
            class="isotope-item <?php echo $term->slug; ?>"
            data-minigrid="<?php echo $term->slug; ?>"
          <?php else: ?>
            class="isotope-item"
          <?php endif; ?>
          >
              <?php 
                $image = get_field('image');
                if( !empty($image) ): ?>
          <a class="bg-img-block-top" href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $image['sizes']['thumbnail']; ?>)">
              <?php endif; ?>
            <!-- <div class="project-thumbnail">
                  <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['title']; ?>" />
            </div> -->
            <div class="overlay">              
              <h2 class="project-title interstate-black"><?php the_field('tag'); ?></h2>
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