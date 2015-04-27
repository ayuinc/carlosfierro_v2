(function() {
  'use-strict';
  $(document).ready(function() {
    $('.project-details-trigger').click(function(e) {
      $('.project-details-trigger i').toggleClass('icon-minus');
      $('.gallery-container').toggleClass('display-project-details');
    });
  });

}).call(this);
