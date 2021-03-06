@extends('layout')

@section('head')

@endsection

@section('page')
<div class="container">
  <header class="page-header">
    <h1> Manage Customers  </h1>
  </header>

  <div class="fab-modal-backdrop">
    <div class="fab-modal-shadow-surogate"></div>
    <div class="fab-modal-container inactive" id="dialog">
      <div class="fab-modal-inner">
        <button class="inactive dialog__btn">
          <?php $view_url = \URL::to('customers/view', [ 'phone' => $customer['phone_number'] ]); ?>
          <a href=<?=$view_url?> ><i class="material-icons fab inactive">keyboard_arrow_left</i></a>
        </button>
        <div class="fab-modal-modal-content">
          <div class="bar">
            <button class="active dialog__btn"><i class="material-icons fab active">cancel</i></button>
            <h2 class="mdl-card__title-text">Update customer</h2>
          </div>
          <div class="content">
            <div class="form-container" >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="table__card">
    <div class="main">
      <form class = "steps-form" method="post" action="{{ URL::to('customers/update') }}" >
        <input type="hidden" value="<?=$customer['phone_number']?>" name="old_phone" />
        <div class = "step-form active" data-next = ".step-form.step-two">
          <h2>Customer Details</h2>
          <input type="text" value="<?=$customer['first_name']?>" name="first_name" placeholder = "First Name" class = "form-input">
          <input type="text" value="<?=$customer['last_name']?>" name="last_name" placeholder = "Last Name" class = "form-input">
          <input type="text" value="<?=$customer['date_of_birth']?>" name="date_of_birth" placeholder = "Date Of Birth Name" class = "form-input">
          <input type="text" value="<?=$customer['phone_number']?>" name="phone_number" placeholder = "Phone Number" class = "form-input">
          <input type="text" value="<?=$customer['mobile_number']?>" name="mobile_number" placeholder = "Mobile Number" class = "form-input">
          <input type="text" value="<?=$customer['nationality']?>" name="nationality" placeholder = "Nationality" class = "form-input">
          <select name="nationality"  id="nationality" class = "form-input">
            <option value=""> Nationality </option>
            <?php foreach ($countries as $country): ?>
              <option value="<?=$country['id']?>" <?=($country['id'] == $customer['nationality'] ? "selected='selected'" : '')?> >
                <?=$country['nationality']?>
              </option>
            <?php endforeach; ?>
          </select>
          <input type="text" value="<?=$customer['passport_number']?>" name="passport_number" placeholder = "Passport Number" class = "form-input">
          <input type="text" value="<?=$customer['emirates_id']?>" name="emirates_id" placeholder = "Emirates ID" class = "form-input">
          <button class = "form-input btn next-step" type = "button">Next</button>
        </div>
        <div class = "step-form step-two" data-next = ".step-form.step-three">
          <h2>Property Details</h2>
          <select name="tower_name" id="tower_name" class = "form-input">
            <option value=""> Tower Name </option>
            <?php foreach ($towers as $tower): ?>
              <option value="<?=$tower['id']?>" <?=($tower['id'] == $customer['tower_name'] ? "selected='selected'" : '')?>>
                <?=$tower['name']?>
              </option>
            <?php endforeach; ?>
          </select>
          <select name="apartment_number" id="apartment_number"  class = "form-input">
            <option value=""> Apartment Number </option>
            <?php foreach ($apartments as $apartment): ?>
              <option value="<?=$apartment['id']?>"
                data-tower-id="<?=$apartment['tower_id']?>" <?=($apartment['id'] == $customer['apartment_number'] ? "selected='selected'" : '')?> > 
                <?=$apartment['name']?>
              </option>
            <?php endforeach; ?>
          </select>
          <input type="text" name="area_sq_ft" value="<?=$customer['area_sq_ft']?>" placeholder = "Area In Sq. Ft." class = "form-input">
          <input type="text" name="contract_date" value="<?=$customer['contract_date']?>" placeholder = "Contract Date" class = "form-input">
          <input type="text" name="address_one" value="<?=$customer['address_one']?>" placeholder = "Address 1" class = "form-input">
          <input type="text" name="address_two" value="<?=$customer['address_two']?>" placeholder = "Address 2" class = "form-input">
          <input type="text" name="city" value="<?=$customer['city']?>" placeholder = "City" class = "form-input">
          <input type="text" name="postal_address" value="<?=$customer['postal_address']?>" placeholder = "P.O. Box" class = "form-input">
          <input type="text" name="email_address" value="<?=$customer['email_address']?>" placeholder = "Email Address" class = "form-input">
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
