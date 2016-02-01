(function() {
  'use-strict';
  $(document).ready(function() {
    var $projectDetailsScroll, $projectDetailsScrollDown, $scrolled, $translate;
    $('.project-details-trigger').click(function(e) {
      $('.project-details-trigger i').toggleClass('icon-minus');
      $('.gallery-container').toggleClass('display-project-details');
    });
    $projectDetailsScroll = $('.project-details-scroll');
    $projectDetailsScrollDown = $('.project-details-scroll-down');
    $translate = 0;
    $scrolled = 0;
    $projectDetailsScrollDown.click(function(e) {
      var scrolled;
      scrolled = scrolled + 50;
      if ($translate < 100) {
        $projectDetailsScroll.css({
          "transform": 'translateY(-' + ($translate += 25) + '%)',
          "transform-origin": 'translateY(-' + ($translate += 25) + '%)',
          "webkit-transform": 'translateY(-' + ($translate += 25) + '%)',
          "webkit-transform-origin": 'translateY(-' + ($translate += 25) + '%)'
        });
      } else {
        $translate = 0;
        $projectDetailsScroll.css({
          "transform": 'translateY(0)',
          "transform-origin": 'translateY(0)',
          "webkit-transform": 'translateY(0)',
          "webkit-transform-origin": 'translateY(0)'
        });
      }
    });
  });

}).call(this);
