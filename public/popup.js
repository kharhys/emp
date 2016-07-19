'use strict';
(function ($) {
  $(document).ready(function() {
    openModal();  

    var links = document.querySelectorAll('a.tinymodal-modal');
    for (var i = 0; links.length > i; i++) {
      links[i].addEventListener("click", function(event){  // callback
        event.preventDefault();
        var element = this.getAttribute("href");
        tinyModal.openModal(element, function(){
          var closeLink = this.querySelectorAll('a[href="javascript:closeModal()"]');
          if (closeLink.length < 1) {
            var closeLink = document.createElement("a");
            closeLink.setAttribute("href","javascript:closeModal()");
            closeLink.innerHTML = "X";
            this.appendChild(closeLink);
          }
        });
      });
    }

    function openModal() {
        tinyModal.openModal("#popup", function(){
            console.log('#popup modal opened');
        });
    }

    function closeModal() {
        tinyModal.closeModal(function(){
            console.log('closed by closeModal() function');
        });
    }

  })
}(jQuery));
