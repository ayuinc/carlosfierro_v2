<?php 
/*
  Template Name: Bio
*/
?>

<?php get_header(); ?>
  <?php get_template_part( 'include', 'sidebar-left' ); ?>

  <main class="main-content bio-padding" role="main">
    <div class="row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </main>
<?php get_footer(); ?>