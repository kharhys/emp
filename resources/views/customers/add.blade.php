@extends('layout')

@section('head')

@endsection

@section('page')
<div class="container">
  <header class="page-header">
    <h1> Add Customer  </h1>
  </header>

  <div class="fab-modal-backdrop">
    <div class="fab-modal-shadow-surogate"></div>
    <div class="fab-modal-container inactive" id="dialog">
      <div class="fab-modal-inner">
        <button class="inactive dialog__btn"><i class="material-icons fab inactive">add</i></button>
        <div class="fab-modal-modal-content">
          <div class="bar">
            <button class="active dialog__btn"><i class="material-icons fab active">cancel</i></button>
            <h2 class="mdl-card__title-text">Create new customer</h2>
          </div>
          <div class="content">
            <div class="form-container" >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('customers.addform')

</div>
@endsection

@section('script')
  <script type="text/javascript">
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
  </script>
@endsection
