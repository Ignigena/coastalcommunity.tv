(function ($) {
  $(document).ready(function($) {
    $('#block-views-location-block a.get-directions').click(function() {
      $('#block-views-location-block .leaflet-container').slideToggle(400, function() {
        _leaflet_resize3();
      });
      return false;
    });
  });
})(jQuery);