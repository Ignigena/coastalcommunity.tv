(function ($) {
  $(document).ready(function($) {
    $('#block-locations-campus-locations .get-directions a').click(function(e) {
      $('#block-locations-campus-locations .leaflet-container').slideToggle(400, function() {
        _leaflet_resize3();
      });
      $('#block-locations-campus-locations .location-address').fadeToggle(400);
      e.preventDefault();
    });
    
    if ($('article.node--page--full .field--name-field-video iframe').length) {
      $('article.node--page--full .field--name-field-video iframe').hide();
      $('article.node--page--full .field--name-field-image').addClass('video-player');
      $('article.node--page--full .field--name-field-image').click(function() {
        $('article.node--page--full .field--name-field-video iframe').fadeIn(300);
      });
    }
  });
})(jQuery);