<?php 
/*
  Template Name: Works - single
*/
?>

<?php get_header(); ?>
  <?php get_template_part( 'include', 'sidebar-left' ); ?>
  <main class="main-content works-padding" role="main">
    <div class="gallery-container">
      <div class="gallery js-flickity" data-flickity-options='{ "cellAlign": "left", "contain": true, "pageDots": false }'>
        <div class="gallery-cell">
          <img src="assets/img/img.png" alt="Image" class="ignore-srcset">
        </div>
        <div class="gallery-cell">
          <img src="assets/img/img.png" alt="Image" class="ignore-srcset">
        </div>
        <div class="gallery-cell">
          <img src="assets/img/img.png" alt="Image" class="ignore-srcset">
        </div>
        <div class="gallery-cell">
          <img src="assets/img/img.png" alt="Image" class="ignore-srcset">
        </div>
      </div>
      <div class="project-details-trigger">
        <button type="button" class="tcon tcon-plus--minusfold" aria-label="add item">
          <span class="tcon-visuallyhidden">add item</span>
        </button>
      </div>
      <div class="project-details">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus recusandae, repellendus sint harum consectetur earum! Ipsam iusto aliquam odit modi recusandae pariatur velit similique. Esse veritatis explicabo, illum atque. Tempora.</p>
      </div>
    </div>
    <div class="clearfix relative">
      <div class="project-name-year">
        <span class="name">Name</span><br>
        <span class="year">2013</span>
      </div>
      <div class="gallery-nav js-flickity" data-flickity-options='{ "cellAlign": "left", "contain": true, "asNavFor": ".gallery", "pageDots": false, "prevNextButtons": false }'>
        <div class="gallery-cell">
          <img src="assets/img/img.png" alt="Image" class="ignore-srcset">
        </div>
        <div class="gallery-cell">
          <img src="assets/img/img.png" alt="Image" class="ignore-srcset">
        </div>
        <div class="gallery-cell">
          <img src="assets/img/img.png" alt="Image" class="ignore-srcset">
        </div>
        <div class="gallery-cell">
          <img src="assets/img/img.png" alt="Image" class="ignore-srcset">
        </div>
      </div>
      <div class="gallery-counter js-flickity" data-flickity-options='{ "asNavFor": ".gallery", "pageDots": false, "prevNextButtons": false}'>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>