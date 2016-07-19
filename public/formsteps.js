'use strict';
(function ($) {
  $(document).on('ready', function () {

    var apartment_number_options = $('#apartment_number option').clone()
    $('#tower_name').on('change', function() {
      var towerId = $(this).val();
      var opts = apartment_number_options.clone()
      .filter(function(){ return this.dataset.towerId == towerId; })
      $('#apartment_number').html(opts)
    })

    $('.next-step').on('click', function (evt) {
      evt.preventDefault();
      var $this = $(evt.currentTarget);
      var $currentStep = $this.closest('.step-form');
      var targetSelector = $currentStep.data('next');
      if (targetSelector) {
        var $target = $currentStep.closest('.steps-form').find(targetSelector);
        $currentStep.css({ left: $currentStep.width() * -1 - 40 + 'px' });
        $currentStep.removeClass('active');
        $target.addClass('active').css({ left: 0 });
      }
    });

  });
  var $form = $('.steps-form');
  $('.step-form').each(function (index) {
    $(this).css({ left: ($form.width() + 40) * index + 'px' });
  });
}(jQuery));
