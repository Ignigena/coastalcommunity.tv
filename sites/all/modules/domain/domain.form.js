(function ($) {
  Drupal.behaviors.domainAccessFieldset = {
    attach: function (context) {
      var published = Drupal.t("Publish to");
      var owned = Drupal.t("Owned by");
      $('fieldset.domain-access-options-form', context).drupalSetSummary(function (context) {
        if ($('.form-item-domain-site input').is(':checked')) {
          $('.form-item-domains > label').html(function () { return $(this).html().replace(published, owned); });
          $('.form-item-domains .description').html("Select the affiliate that owns this content.");
          return Drupal.t('Send to all domains');
        } else {
          $('.form-item-domains > label').html(function () { return $(this).html().replace(owned, published); });
          $('.form-item-domains .description').html("Select which affiliates can access this content.");
          return Drupal.t('Content restricted by domain');
        }
      });
    }
  };
})(jQuery);
