<div class="table__card">
  <div class="main">
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form class = "steps-form" method="post" action="{{ URL::to('customers/create') }}" >
      <div class = "step-form" data-next = ".step-form.step-two">
        <h2>Customer Details</h2>
        <input type="text" name="first_name" placeholder = "First Name" class = "form-input">
        <input type="text" name="last_name" placeholder = "Last Name" class = "form-input">
        <input type="text" name="date_of_birth" placeholder = "Date Of Birth Name" class = "form-input date">
        <input type="text" name="phone_number" placeholder = "Phone Number" class = "form-input">
        <input type="text" name="mobile_number" placeholder = "Mobile Number" class = "form-input">
        <select name="nationality"  id="nationality" class = "form-input">
          <option value=""> Nationality </option>
          <?php foreach ($countries as $country): ?>
            <option value="<?=$country['id']?>"> <?=$country['nationality']?> </option>
          <?php endforeach; ?>
        </select>
        <input type="text" name="passport_number" placeholder = "Passport Number" class = "form-input">
        <input type="text" name="emirates_id" placeholder = "Emirates ID" class = "form-input">
        <button class = "form-input btn next-step" type = "button">Next</button>
      </div>
      <div class = "step-form step-two" data-next = ".step-form.step-three">
        <h2>Property Details</h2>
        <select name="tower_name" id="tower_name" class = "form-input">
          <option value=""> Tower Name </option>
          <?php foreach ($towers as $tower): ?>
            <option value="<?=$tower['id']?>"> <?=$tower['name']?> </option>
          <?php endforeach; ?>
        </select>
        <select name="apartment_number" id="apartment_number"  class = "form-input">
          <option value=""> Apartment Number </option>
          <?php foreach ($apartments as $apartment): ?>
            <option value="<?=$apartment['id']?>" data-tower-id="<?=$apartment['tower_id']?>" > <?=$apartment['name']?> </option>
          <?php endforeach; ?>
        </select>
        <input type="text" name="area_sq_ft" placeholder = "Area In Sq. Ft." class = "form-input">
        <input type="text" name="contract_date" placeholder = "Contract Date" class = "form-input date">
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
