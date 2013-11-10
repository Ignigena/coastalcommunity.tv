(function ($) {
  $(document).ready(function($) {
    $('#block-views-location-block a.get-directions').click(function() {
      $('#block-views-location-block .leaflet-container').slideToggle(600);
      return false;
    });
  });
})(jQuery);