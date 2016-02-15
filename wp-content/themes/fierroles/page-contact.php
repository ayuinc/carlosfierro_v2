<?php 
/*
  Template Name: Contact
*/
?>

<?php get_header(); ?>
  <?php get_template_part( 'include', 'sidebar-left' ); ?>

  <main class="main-content contact-padding" role="main">
    <div class="row">
      <div class="col-sm-6">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </main>
<?php get_footer(); ?>