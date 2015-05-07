(function() {
  'use-strict';
  $(document).ready(function() {
    var $translate;
    $('.project-details-trigger').click(function(e) {
      $('.project-details-trigger i').toggleClass('icon-minus');
      $('.gallery-container').toggleClass('display-project-details');
    });
    $translate = 0;
    $('.project-details-scroll-down').click(function(e) {
      if ($translate <= 100) {
        $('.project-details-scroll').css({
          translateY: ($translate += 25) + '%'
        });
      } else {
        $translate = 0;
        $('.project-details-scroll').css({
          translateY: 0
        });
      }
    });
    $('.project-details-scroll-up').click(function(e) {});
  });

}).call(this);
