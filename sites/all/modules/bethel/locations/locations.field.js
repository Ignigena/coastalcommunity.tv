(function($) {
  var locationField = document.getElementById('location-autocomplete');
  var locationData = new google.maps.places.Autocomplete(locationField, { types: ['geocode'] });
  google.maps.event.addListener(locationData, 'place_changed', function() {
    var place = locationData.getPlace();
    $(locationField).parent().parent().find('input.field-lat').val(place.geometry.location.k);
    $(locationField).parent().parent().find('input.field-lng').val(place.geometry.location.A);
  });
}(jQuery));