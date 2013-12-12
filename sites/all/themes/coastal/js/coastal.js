(function ($) {
  $(document).ready(function($) {
    $('#block-views-location-block a.get-directions').click(function() {
      $('#block-views-location-block .leaflet-container').slideToggle(400, function() {
        _leaflet_resize3();
      });
      return false;
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