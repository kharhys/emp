<form class="form" onsubmit="createCustomer(event);" id="create-form">

  <fieldset class="form-fieldset ui-input __first">
    <input type="text" id="name" name="name" tabindex="0" />
    <label for="name">
      <span data-text="Name">Name</span>
    </label>
  </fieldset>

  <fieldset class="form-fieldset ui-input __second">
    <input type="text" id="gender"  name="gender" tabindex="0" />
    <label for="gender">
      <span data-text="Gender">Gender</span>
    </label>
  </fieldset>

  <fieldset class="form-fieldset ui-input __third">
    <input type="text" id="occupation" name="occupation" />
    <label for="occupation">
      <span data-text="Occupation">Occupation</span>
    </label>
  </fieldset>

  <fieldset class="form-fieldset ui-input __fourth">
    <input type="text" id="address"  name="address" />
    <label for="address">
      <span data-text="Address">Address</span>
    </label>
  </fieldset>

  <fieldset class="form-fieldset ui-input __fourth">
    <input type="text" id="phone"  name="phone" />
    <label for="phone">
      <span data-text="Phone">Phone</span>
    </label>
  </fieldset>

  <fieldset class="form-fieldset ui-input __fourth">
    <input type="text" id="dob"  name="dob" />
    <label for="dob">
      <span data-text="Date of Birth">Date of Birth</span>
    </label>
  </fieldset>

  <div class="form-footer">
    <input type="submit" class="btn" value="Submit" />
  </div>
</form>
