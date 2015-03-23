(function() {
  'use-strict';
  $(document).ready(function() {
    $('.project-details-trigger button').click(function(e) {
      $('.gallery-container').toggleClass('display-project-details');
    });
    transformicons.add('.tcon');
  });

}).call(this);
