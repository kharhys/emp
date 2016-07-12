<!DOCTYPE html>
<html>
<head>
  <title>Laravel</title>

  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
  <link href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css" rel="stylesheet" type="text/css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script type="text/javascript">
    window.token = "<?=$token ?>"
    console.log(window.token)
  </script>
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
          <button class="inactive dialog__btn"><i class="material-icons fab inactive">add</i></button>
          <div class="fab-modal-modal-content">
            <div class="bar">
              <button class="active dialog__btn"><i class="material-icons fab active">cancel</i></button>
              <h2 class="mdl-card__title-text">Create new customer</h2>
            </div>
            <div class="content">
              <div class="form-container" >
                @include('customer.create')
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

              <?php if ($customer): ?>
                @include('customer.trigger')
              <?php else: ?>
                <?php if ($input): ?>
                  @include('customer.add')
                <?php endif; ?>
              <?php endif; ?>

              <?php foreach ($customers as $cust): ?>
                <li class="item">
                  <span>
                    <div class="ios-dl">
                      <div class="definition-group">
                        <dl class="dl-horizontal">
                          <dt>Name</dt>
                          <dd><?=$cust['name']?></dd>
                        </dl>
                        <dl class="dl-horizontal">
                          <dt>Gender</dt>
                          <dd><?=$cust['gender']?></dd>
                        </dl>
                        <dl class="dl-horizontal">
                          <dt>Occupation</dt>
                          <dd><?=$cust['occupation']?></dd>
                        </dl>
                      </div>
                    </div>
                  </span>
                  <span data-modal="<?= '#modal'.$cust['id']; ?>" class="modal__trigger">
                    <i class="material-icons">more_vert</i>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

        <?php if ($customer): ?>
          @include('customer.modal')
        <?php else: ?>
          <?php if ($input): ?>
            @include('customer.new')
          <?php endif; ?>
        <?php endif; ?>

        <?php foreach ($customers as $cust): ?>
          @include('modal')
        <?php endforeach; ?>

      </div>
    </div>
  </body>
  <script type="text/javascript">

  var initInterception = function(send) {
    window.setTimeout(function () { // escape function context
       window.location = 'http://bbc.co.uk';
   }, 0);
   window.onbeforeunload = null;   // necessary to prevent infinite loop
                                   // that kills your browser
   return 'Press "Stay On Page" to go to BBC website!';
    /*
    window.onbeforeunload = confirmExit;
    function confirmExit() {
      var url = window.location.href + "?token=" + window.token
      window.location.replace(url)
      console.log('window.location ::', url)
      return false
    }
  console.log('set up intercepting....')
  */
  }

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

  }())


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
      console.log(data)
      window.location.reload()
    });
    return false
  }

  (function ($) {
    $(document).on('ready', function () {
        $('.next-step').on('click', function (evt) {
          console.log('.next-step')
            evt.preventDefault();
            var $this = $(evt.currentTarget);
            var $currentStep = $this.closest('.step-form');
            var targetSelector = $currentStep.data('next');
            if (targetSelector) {
                var $target = $currentStep.closest('.steps-form').find(targetSelector);
                $currentStep.css({ left: $currentStep.width() * -1 - 40 + 'px' });
                $target.addClass('active').css({ left: 0 });
            }
        });
    });
    var $form = $('.steps-form');
    $('.step-form').each(function (index) {
        $(this).css({ left: ($form.width() + 40) * index + 'px' });
    });
  })(jQuery)



  $(document).ready(function() {
    $("#dialog .dialog__btn").click(function() {
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
    Modal.init()
    initInterception(window)
    $("#modal__default_trigger").click();
  })

  </script>
  </html>
