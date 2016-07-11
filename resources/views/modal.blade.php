<div id="<?= 'modal'.$customer['id']; ?>" class="modal modal__bg" role="dialog" aria-hidden="true">
  <div class="modal__dialog" style="width: 70vw;">
    <div class="modal__content">
      <div class="fab-modal-modal-content" style="width: auto; color: #191919; margin-top: 2rem;">
        <div class="bar" style="padding: 1rem; background: rgba(0,0,0,0.3);">
          <h2 class="mdl-card__title-text">Update Customer</h2>
        </div>
        <div class="content" style="overflow-y: auto;">
          <div class="form-container" >
            <form class="form" onsubmit="updateCustomer(event);" id="create-form">

              <fieldset class="form-fieldset ui-input __first">
                <input type="text" id="name" name="name" tabindex="0" value="<?=$customer['name']?>" />
                <label for="name">
                  <span data-text="Name">Name</span>
                </label>
              </fieldset>

              <fieldset class="form-fieldset ui-input __second">
                <input type="text" id="gender"  name="gender" tabindex="0" value="<?=$customer['gender']?>" />
                <label for="gender">
                  <span data-text="Gender">Gender</span>
                </label>
              </fieldset>

              <fieldset class="form-fieldset ui-input __third">
                <input type="text" id="occupation" name="occupation" value="<?=$customer['occupation']?>" />
                <label for="occupation">
                  <span data-text="Occupation">Occupation</span>
                </label>
              </fieldset>

              <fieldset class="form-fieldset ui-input __fourth">
                <input type="text" id="address"  name="address" value="<?=$customer['address']?>" />
                <label for="address">
                  <span data-text="Address">Address</span>
                </label>
              </fieldset>

              <fieldset class="form-fieldset ui-input __fourth">
                <input type="text" id="phone"  name="phone" value="<?=$customer['phone']?>" />
                <label for="phone">
                  <span data-text="Phone">Phone</span>
                </label>
              </fieldset>

              <fieldset class="form-fieldset ui-input __fourth">
                <input type="text" id="dob"  name="dob" value="<?=$customer['dob']?>" />
                <label for="dob">
                  <span data-text="Date of Birth">Date of Birth</span>
                </label>
              </fieldset>

              <div class="form-footer">
                <input type="submit" class="btn" value="Submit" />
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- modal close button -->
      <a href="" class="modal__close demo-close">
        <svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
      </a>

      <i class="material-icons" style="
          position: absolute;
          top: 0;
          padding: 0.2em;
          left: 0;
          color: #ffffff;
          font-size: 2rem;
              cursor: pointer;
              background: #f91f69;
          border-radius: 50%;
          margin: 0.3em;
      ">delete_forever</i>

    </div>
  </div>
</div>
