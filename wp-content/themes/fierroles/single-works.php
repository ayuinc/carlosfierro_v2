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
      <div class="project-details-trigger hidden-xs flex-column-center flex-align-center">
        <i class="icon-plus"></i>
      </div>
      <div class="project-details hidden-xs">
        <div class="project-details-scroll">
          <?php
            $lang = get_query_var( 'lang', en );
            if($lang === 'es') {
              $sp = get_field('spanish_post');
              if($sp){
                echo $sp;
              }else{
                echo the_content();
              }
            }else{
              the_content();
            } ?>
        </div>
        <div class="project-details-scroll-buttons">
          <div class="project-details-scroll-down"><i class="icon-chevron-down"></i></div>
        </div>
      </div>
    </div>
    <div class="clearfix relative">
      <div class="project-name-year">
        <span class="name"><?php the_title(); ?></span><br>
        <span class="year"><?php the_field('year'); ?></span>
      </div>
      <div class="gallery-nav js-flickity hidden-xs" data-flickity-options='{ "cellAlign": "left", "contain": true, "asNavFor": ".gallery", "pageDots": false, "prevNextButtons": false }'>
        <?php 
          $images = get_field('gallery');
          if( $images ): ?>
          <?php foreach( $images as $image ): ?>
            <div class="gallery-cell">
              <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['title']; ?>" />
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <div class="gallery-counter js-flickity hidden-xs" data-flickity-options='{ "asNavFor": ".gallery", "pageDots": false, "prevNextButtons": false}'>
        <?php 
          $images = get_field('gallery');
          if( $images ): ?>
          <?php foreach( $images as $image ): ?>
            <div class="gallery-cell"></div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="visible-xs-block pb-21">
      <div class="mb-14">
        <span class="name"><?php the_title(); ?></span><br>
        <span class="year"><?php the_field('year'); ?></span>
      </div>
      <?php the_content(); ?>

    </div>
    <?php endwhile; endif; ?>
  </main>
<?php get_footer(); ?>