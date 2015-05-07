(function() {
  'use-strict';
  $(document).ready(function() {
    var $projectDetailsScroll, $projectDetailsScrollDown, $projectDetailsScrollUp, $translate;
    $('.project-details-trigger').click(function(e) {
      $('.project-details-trigger i').toggleClass('icon-minus');
      $('.gallery-container').toggleClass('display-project-details');
    });
    $projectDetailsScroll = $('.project-details-scroll');
    $projectDetailsScrollDown = $('.project-details-scroll-down');
    $projectDetailsScrollUp = $('.project-details-scroll-up');
    $translate = 0;
    $projectDetailsScrollDown.click(function(e) {
      if ($translate <= 100) {
        $projectDetailsScroll.css({
          translateY: ($translate += 25) + '%'
        });
      } else {
        $translate = 0;
        $projectDetailsScroll.css({
          translateY: 0
        });
      }
    });
    $projectDetailsScrollUp.click(function(e) {});
  });

}).call(this);
