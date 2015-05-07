(function() {
  'use-strict';
  $(document).ready(function() {
    var $projectDetailsScroll, $projectDetailsScrollDown, $translate;
    $('.project-details-trigger').click(function(e) {
      $('.project-details-trigger i').toggleClass('icon-minus');
      $('.gallery-container').toggleClass('display-project-details');
    });
    $projectDetailsScroll = $('.project-details-scroll');
    $projectDetailsScrollDown = $('.project-details-scroll-down');
    $translate = 0;
    $projectDetailsScrollDown.click(function(e) {
      if ($translate < 100) {
        $projectDetailsScroll.css({
          "webkit-transform": 'translateY(-' + ($translate += 25) + '%)'
        });
      } else {
        $translate = 0;
        $projectDetailsScroll.css({
          "webkit-transform": 'translateY(0)'
        });
      }
    });
  });

}).call(this);
