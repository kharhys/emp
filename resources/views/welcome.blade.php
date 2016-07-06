<?php
  use App\Customer;
  $customers = Customer::take(1)->get()->toArray();
  //dd($customers);
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Laravel</title>

  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
  <link href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css" rel="stylesheet" type="text/css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <style>
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1>
        Manage Customers
      </h1>
    </header>
    <div class="fab-modal-backdrop">
      <div class="fab-modal-shadow-surogate"></div>
      <div class="fab-modal-container inactive" id="dialog">
        <div class="fab-modal-inner">
          <button class="inactive"><i class="material-icons fab inactive">add</i></button>
          <div class="fab-modal-modal-content">
            <div class="bar">
              <button class="active"><i class="material-icons fab active">cancel</i></button>
              <h2 class="mdl-card__title-text">Create new customer</h2>
            </div>
            <div class="content">
              <div class="form-container" >
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="main">

      <div class="demo-btns">
        <div class="info">
          <div class="buttons">
            <ul class="list hidden">
              <?php foreach ($customers as $customer): ?>
                <li class="item">
                  <span>
                    <div class="ios-dl">
                      <div class="definition-group">
                        <dl class="dl-horizontal">
                          <dt>Name</dt>
                          <dd><?=$customer['name']?></dd>
                        </dl>
                        <dl class="dl-horizontal">
                          <dt>Gender</dt>
                          <dd>Male</dd>
                        </dl>
                        <dl class="dl-horizontal">
                          <dt>Occupation</dt>
                          <dd>Web Developer</dd>
                        </dl>
                      </div>
                    </div>
                  </span>
                  <span data-modal="#modal" class="modal__trigger">
                    <i class="material-icons">more_vert</i>
                  </span>
                </li>
              <?php endforeach; ?>
              <li class="item">
                <span> Customer 2 </span>
                <span data-modal="#modal2" class="modal__trigger">
                  <i class="material-icons">more_vert</i>
                </span>
              </li>
              <li class="item">
                <span> Customer 3 </span>
                <span data-modal="#modal3" class="modal__trigger">
                  <i class="material-icons">more_vert</i>
                </span>
              </li>
              <li class="item">
                <span> Customer 3 </span>
                <span data-modal="#modal4" class="modal__trigger">
                  <i class="material-icons">more_vert</i>
                </span>
              </li>
            </ul>
          </div>
        </div>


        <!-- Modal -->
        <div id="modal" class="modal modal__bg" role="dialog" aria-hidden="true">
          <div class="modal__dialog">
            <div class="modal__content">
              <h1>New Customer</h1>
              <p>
                something
              </p>

              <!-- modal close button -->
              <a href="" class="modal__close demo-close">
                <svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
              </a>

            </div>
          </div>
        </div>

        <div id="modal2" class="modal modal--align-top modal__bg" role="dialog" aria-hidden="true">
          <div class="modal__dialog">
            <div class="modal__content">
              <h1>Big Modal</h1>
              <h3>This modal is pretty tall.</h3>
              <p>Selfies normcore four dollar toast four loko listicle artisan. Hoodie Marfa authentic, wayfarers church-key tofu Banksy pop-up Kickstarter Brooklyn heirloom swag synth. Echo Park cray synth mixtape. Tofu gastropub squid readymade, trust fund Wes Anderson DIY PBR 8-bit try-hard +1 Shoreditch lo-fi tote bag.</p>
              <p><img src="http://unsplash.it/600/300" alt="" /></p>
              <p>Mumblecore cred selfies fingerstache. Tousled skateboard plaid lo-fi shabby chic salvia, swag Odd Future Etsy art party Austin cronut. Crucifix whatever Pinterest food truck, pickled viral cray 90's DIY chambray keffiyeh biodiesel Vice blog. Cred meh yr tofu.</p>
              <p>Mumblecore cred selfies fingerstache. Tousled skateboard plaid lo-fi shabby chic salvia, swag Odd Future Etsy art party Austin cronut. Crucifix whatever Pinterest food truck, pickled viral cray 90's DIY chambray keffiyeh biodiesel Vice blog. Cred meh yr tofu.</p>
              <!-- modal close button -->
              <a href="" class="modal__close demo-close">
                <svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
              </a>
            </div>
          </div>
        </div>

        <div id="modal3" class="modal modal__bg" role="dialog" aria-hidden="true">
          <div class="modal__dialog">
            <div class="modal__content">
              <h1>Modal 3</h1>
              <p>Church-key American Apparel trust fund, cardigan mlkshk small batch Godard mustache pickled bespoke meh seitan. Wes Anderson farm-to-table vegan, kitsch Carles 8-bit gastropub paleo YOLO jean shorts health goth lo-fi.</p>

              <!-- modal close button -->
              <a href="" class="modal__close demo-close">
                <svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
              </a>
            </div>
          </div>
        </div>


        <div id="modal4" class="modal modal__bg" role="dialog" aria-hidden="true">
          <div class="modal__dialog">
            <div class="modal__content">
              <h1>Modal 4</h1>
              <p>Church-key American Apparel trust fund, cardigan mlkshk small batch Godard mustache pickled bespoke meh seitan. Wes Anderson farm-to-table vegan, kitsch Carles 8-bit gastropub paleo YOLO jean shorts health goth lo-fi.</p>

              <!-- modal close button -->
              <a href="" class="modal__close demo-close">
                <svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
              </a>
            </div>
          </div>
        </div>


      </div>
    </div>
  </body>
  <script type="text/javascript">
  $(document).ready(function() {
    $("#dialog button").click(function() {
      if (!$("#dialog").hasClass("active")) {
        $("#dialog").addClass("active");
        $("#dialog").removeClass("inactive");
        $("body").addClass("modal-open");
      } else {
        $("#dialog").removeClass("active");
        $("#dialog").addClass("inactive");
        $("body").removeClass("modal-open");
      }
    })
  })
  var Modal = (function() {

    var trigger = $qsa('.modal__trigger'); // what you click to activate the modal
    var modals = $qsa('.modal'); // the entire modal (takes up entire window)
    var modalsbg = $qsa('.modal__bg'); // the entire modal (takes up entire window)
    var content = $qsa('.modal__content'); // the inner content of the modal
    var closers = $qsa('.modal__close'); // an element used to close the modal
    var w = window;
    var isOpen = false;
    var contentDelay = 400; // duration after you click the button and wait for the content to show
    var len = trigger.length;

    // make it easier for yourself by not having to type as much to select an element
    function $qsa(el) {
      return document.querySelectorAll(el);
    }

    var getId = function(event) {

      event.preventDefault();
      var self = this;
      // get the value of the data-modal attribute from the button
      var modalId = self.dataset.modal;
      var len = modalId.length;
      // remove the '#' from the string
      var modalIdTrimmed = modalId.substring(1, len);
      // select the modal we want to activate
      var modal = document.getElementById(modalIdTrimmed);
      // execute function that creates the temporary expanding div
      makeDiv(self, modal);
    };

    var makeDiv = function(self, modal) {

      var fakediv = document.getElementById('modal__temp');

      /**
      * if there isn't a 'fakediv', create one and append it to the button that was
      * clicked. after that execute the function 'moveTrig' which handles the animations.
      */

      if (fakediv === null) {
        var div = document.createElement('div');
        div.id = 'modal__temp';
        self.appendChild(div);
        moveTrig(self, modal, div);
      }
    };

    var moveTrig = function(trig, modal, div) {
      var trigProps = trig.getBoundingClientRect();
      var m = modal;
      var mProps = m.querySelector('.modal__content').getBoundingClientRect();
      var transX, transY, scaleX, scaleY;
      var xc = w.innerWidth / 2;
      var yc = w.innerHeight / 2;

      // this class increases z-index value so the button goes overtop the other buttons
      trig.classList.add('modal__trigger--active');

      // these values are used for scale the temporary div to the same size as the modal
      scaleX = mProps.width / trigProps.width;
      scaleY = mProps.height / trigProps.height;

      scaleX = scaleX.toFixed(3); // round to 3 decimal places
      scaleY = scaleY.toFixed(3);


      // these values are used to move the button to the center of the window
      transX = Math.round(xc - trigProps.left - trigProps.width / 2);
      transY = Math.round(yc - trigProps.top - trigProps.height / 2);

      // if the modal is aligned to the top then move the button to the center-y of the modal instead of the window
      if (m.classList.contains('modal--align-top')) {
        transY = Math.round(mProps.height / 2 + mProps.top - trigProps.top - trigProps.height / 2);
      }


      // translate button to center of screen
      trig.style.transform = 'translate(' + transX + 'px, ' + transY + 'px)';
      trig.style.webkitTransform = 'translate(' + transX + 'px, ' + transY + 'px)';
      // expand temporary div to the same size as the modal
      div.style.transform = 'scale(' + scaleX + ',' + scaleY + ')';
      div.style.webkitTransform = 'scale(' + scaleX + ',' + scaleY + ')';


      window.setTimeout(function() {
        window.requestAnimationFrame(function() {
          open(m, div);
        });
      }, contentDelay);

    };

    var open = function(m, div) {

      if (!isOpen) {
        // select the content inside the modal
        var content = m.querySelector('.modal__content');
        // reveal the modal
        m.classList.add('modal--active');
        // reveal the modal content
        content.classList.add('modal__content--active');

        /**
        * when the modal content is finished transitioning, fadeout the temporary
        * expanding div so when the window resizes it isn't visible ( it doesn't
        * move with the window).
        */

        content.addEventListener('transitionend', hideDiv, false);

        isOpen = true;
      }

      function hideDiv() {
        // fadeout div so that it can't be seen when the window is resized
        div.style.opacity = '0';
        content.removeEventListener('transitionend', hideDiv, false);
      }
    };

    var close = function(event) {

      event.preventDefault();
      event.stopImmediatePropagation();

      var target = event.target;
      var div = document.getElementById('modal__temp');

      /**
      * make sure the modal__bg or modal__close was clicked, we don't want to be able to click
      * inside the modal and have it close.
      */

      if (isOpen && target.classList.contains('modal__bg') || target.classList.contains('modal__close')) {

        // make the hidden div visible again and remove the transforms so it scales back to its original size
        div.style.opacity = '1';
        div.removeAttribute('style');

        /**
        * iterate through the modals and modal contents and triggers to remove their active classes.
        * remove the inline css from the trigger to move it back into its original position.
        */

        for (var i = 0; i < len; i++) {
          modals[i].classList.remove('modal--active');
          content[i].classList.remove('modal__content--active');
          trigger[i].style.transform = 'none';
          trigger[i].style.webkitTransform = 'none';
          trigger[i].classList.remove('modal__trigger--active');
        }

        // when the temporary div is opacity:1 again, we want to remove it from the dom
        div.addEventListener('transitionend', removeDiv, false);

        isOpen = false;

      }

      function removeDiv() {
        setTimeout(function() {
          window.requestAnimationFrame(function() {
            // remove the temp div from the dom with a slight delay so the animation looks good
            div.remove();
          });
        }, contentDelay - 50);
      }

    };

    var bindActions = function() {
      for (var i = 0; i < len; i++) {
        trigger[i].addEventListener('click', getId, false);
        closers[i].addEventListener('click', close, false);
        modalsbg[i].addEventListener('click', close, false);
      }
    };

    var init = function() {
      bindActions();
    };

    return {
      init: init
    };

  }());

  Modal.init()





  var ANIMATION_END = 'webkitAnimationEnd oanimationend msAnimationEnd animationend';

  var debouncer = function (fn) {
    var stack = [];
    var threshold = 200;
    var lastCall = new Date().getTime();
    var callFunctions = Array.prototype.forEach.bind(stack, function (fn) { fn(); }); // can't wait for `x => x()`
    var timeoutHandle;
    return function () {
      var now = new Date().getTime()
      var deltaT = now - lastCall;
      lastCall = now;
      // make sure each function is called with the correct `this` and arguments
      stack.push(fn.bind.apply(fn, [this].concat(Array.prototype.slice.call(arguments))));
      clearTimeout(timeoutHandle);
      timeoutHandle = setTimeout(callFunctions, threshold);
    };
  };

  var animating = false;

  function animateEnter () {
    if (animating) { return; }
    animating = true;
    $('.item').addClass('animate-enter');
    $('.list').removeClass('hidden');
    $('.item').one(ANIMATION_END, debouncer(function (e) {
      $(this).removeClass('animate-enter');
      animating = false;
    }));
  }

  function animateLeave () {
    if (animating) { return; }
    animating = true;
    $('.item').addClass('animate-leave');
    $('.item').one(ANIMATION_END, debouncer(function (e) {
      $('.list').addClass('hidden');
      $(this).removeClass('animate-leave');
      animating = false;
    }));
  }

  $('.toggle').click(function () {
    if ($('.list').hasClass('hidden')) {
      animateEnter();
      $('.toggle').removeClass('off');
    } else {
      animateLeave();
      $('.toggle').addClass('off');
    }
  });

  // for dramatic effect :P
  setTimeout(animateEnter, 1000);

  var $input = $('.form-fieldset > input');

  $input.blur(function (e) {
    $(this).toggleClass('filled', !!$(this).val());
  });

  function createCustomer(event) {
    event.preventDefault()
    var formdata = new FormData(event.target)
    for(var pair of formdata.entries()) {
      console.log(pair[0]+ ', '+ pair[1]);
    }
    $.post("api/customer/store", $("#create-form").serialize(), function(data) {
      console.log(data);
    });
    return false
  }
  </script>
  </html>
