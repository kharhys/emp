@extends('layout')

@section('head')

@endsection

@section('page')
<div class="container">
  <header class="page-header">
    <h1> View Customer  </h1>
    <?php print_r(urldecode($customer)); ?>
  </header>

  <div class="fab-modal-backdrop">
    <div class="fab-modal-shadow-surogate"></div>
    <div class="fab-modal-container inactive" id="dialog">
      <div class="fab-modal-inner">
        <button class="inactive dialog__btn"><i class="material-icons fab inactive">add</i></button>
        <div class="fab-modal-modal-content">
          <div class="bar">
            <button class="active dialog__btn"><i class="material-icons fab active">cancel</i></button>
            <h2 class="mdl-card__title-text">View Customer</h2>
          </div>
          <div class="content">
            <div class="form-container" >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main">
    <form class = "steps-form">
      <div class = "step-form" data-next = ".step-form.step-two">
        <h2>Customer Details</h2>
        <input type="text" name="first_name" placeholder = "First Name" class = "form-input">
        <input type="text" name="last_name" placeholder = "Last Name" class = "form-input">
        <input type="text" name="date_of_birth" placeholder = "Date Of Birth Name" class = "form-input">
        <input type="text" name="phone_number" placeholder = "Phone Number" class = "form-input">
        <input type="text" name="mobile_number" placeholder = "Mobile Number" class = "form-input">
        <input type="text" name="nationality" placeholder = "Nationality" class = "form-input">
        <input type="text" name="passport_number" placeholder = "Passport Number" class = "form-input">
        <input type="text" name="emirates_id" placeholder = "Emirates ID" class = "form-input">
        <button class = "form-input btn next-step" type = "button">Next</button>
      </div>
      <div class = "step-form step-two" data-next = ".step-form.step-three">
        <h2>Property Details</h2>
        <input type="text" name="tower_name" placeholder = "Tower Name" class = "form-input">
        <input type="text" name="apartment_number" placeholder = "Apartment Number" class = "form-input">
        <input type="text" name="area_sq_ft" placeholder = "Area In Sq. Ft." class = "form-input">
        <input type="text" name="contract_date" placeholder = "Contract Date" class = "form-input">
        <input type="text" name="address_one" placeholder = "Address 1" class = "form-input">
        <input type="text" name="address_two" placeholder = "Address 2" class = "form-input">
        <input type="text" name="city" placeholder = "City" class = "form-input">
        <input type="text" name="postal_address" placeholder = "P.O. Box" class = "form-input">
        <input type="text" name="email_address" placeholder = "Email Address" class = "form-input">
        <button class = "form-input btn next-step" type = "button">Next</button>
      </div>
      <div class = "step-form step-three">
        <h2>Attach Documents</h2>
        <label for="occupation"> <span data-text="Occupation">Attach Passport Copy</span>  </label>
        <input name="passport_attachment" type="file" placeholder = "" class = "form-input">
        <label for="occupation"> <span data-text="Occupation">Attach Contract Copy</span>  </label>
        <input name="contract_attachment" type="file" placeholder = "" class = "form-input">
        <button type = "submit" class = "form-input btn">Submit</button>
      </div>
    </form>
  </div>

</div>
@endsection

@section('script')
  <script type="text/javascript">
    'use strict';
    (function ($) {
      $(document).on('ready', function () {
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
