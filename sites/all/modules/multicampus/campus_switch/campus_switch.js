(function ($) {
  $(document).ready(function($) {
    if (!window.location.origin)
      window.location.origin = window.location.protocol + '//' + window.location.host;
    window.location.origin = window.location.origin + '/';

    if (window.location.href.substring(window.location.href.length - 7) == '?switch') {
      $.cookie('campus_select', window.location.origin, { expires: 365, path: '/' })
    }

    if (!$.cookie('campus_select')) {
      $('#block-campus-switch-first-visit-campus-select').slideToggle(400);
      $('body').addClass('first-visit');
      $('#block-campus-switch-first-visit-campus-select li').click(function() {
        var location = $(this).attr('location');
        $.cookie('campus_select', location, { expires: 365, path: '/' })

        if (window.location.origin == location) {
          $('#block-campus-switch-first-visit-campus-select').slideToggle(400);
          $('body').removeClass('first-visit');
        } else {
          window.location.replace(location + '?switch');
        }
      })
    }
  });
})(jQuery);