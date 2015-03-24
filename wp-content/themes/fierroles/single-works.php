<?php 
/*
  Template Name: Works - single
*/
?>

<?php get_header(); ?>
  <?php get_template_part( 'include', 'sidebar-left' ); ?>
  <main class="main-content works-padding" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="gallery-container">
      <div class="gallery js-flickity" data-flickity-options='{ "cellAlign": "left", "contain": true, "pageDots": false }'>
        <?php 
          $images = get_field('gallery');
          if( $images ): ?>
          <?php foreach( $images as $image ): ?>
            <div class="gallery-cell">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <div class="project-details-trigger">
        <button type="button" class="tcon tcon-plus--minusfold" aria-label="add item">
          <span class="tcon-visuallyhidden">add item</span>
        </button>
      </div>
      <div class="project-details">
        <p><?php the_content(); ?></p>
      </div>
    </div>
    <div class="clearfix relative">
      <div class="project-name-year">
        <span class="name"><?php the_title(); ?></span><br>
        <span class="year"><?php the_field('year'); ?></span>
      </div>
      <div class="gallery-nav js-flickity" data-flickity-options='{ "cellAlign": "left", "contain": true, "asNavFor": ".gallery", "pageDots": false, "prevNextButtons": false }'>
        <div class="gallery-cell">
          <img src="assets/img/img.png" alt="Image" class="ignore-srcset">
        </div>
      </div>
      <div class="gallery-counter js-flickity" data-flickity-options='{ "asNavFor": ".gallery", "pageDots": false, "prevNextButtons": false}'>
        <div class="gallery-cell"></div>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </main>
<?php get_footer(); ?>