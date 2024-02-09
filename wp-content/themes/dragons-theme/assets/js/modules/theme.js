const $ = jQuery;
const Theme = {
   dom: {
      shareLink: $(".share-buttons a"),
      smoothScrollLinks: $('a[href*="#"]'),
   },
   /**************************************************
    * Share links
    **************************************************/
   share: function () {
      $(".share-buttons a").on("click", function (e) {
         if (!$(this).hasClass("btn-email")) {
            e.preventDefault();
            Theme.PopupCenter(
               $(this).attr("href"),
               $(this).attr("title"),
               500,
               300
            );
         }
      });
   },

   /**************************************************
    * Share links popup
    **************************************************/
   PopupCenter: function (url, title, w, h) {
      // Fixes dual-screen position                         Most browsers      Firefox
      var dualScreenLeft =
         window.screenLeft != undefined ? window.screenLeft : screen.left;
      var dualScreenTop =
         window.screenTop != undefined ? window.screenTop : screen.top;

      var width = window.innerWidth
         ? window.innerWidth
         : document.documentElement.clientWidth
            ? document.documentElement.clientWidth
            : screen.width;
      var height = window.innerHeight
         ? window.innerHeight
         : document.documentElement.clientHeight
            ? document.documentElement.clientHeight
            : screen.height;

      var left = width / 2 - w / 2 + dualScreenLeft;
      var top = height / 2 - h / 2 + dualScreenTop;
      var newWindow = window.open(
         url,
         title,
         "scrollbars=yes, width=" +
         w +
         ", height=" +
         h +
         ", top=" +
         top +
         ", left=" +
         left
      );

      // Puts focus on the newWindow
      if (window.focus) {
         newWindow.focus();
      }
   },

   /**************************************************
    * Smooth scroll
    ***************************************************/
   smooth_scroll: function () {
      Theme.dom.smoothScrollLinks
         // Remove links that don't actually link to anything
         .not('[href="#"]')
         .not('[href="#0"]')
         .click(function (event) {
            // On-page links
            if (
               location.pathname.replace(/^\//, "") ==
               this.pathname.replace(/^\//, "") &&
               location.hostname == this.hostname
            ) {
               // Figure out element to scroll to
               var target = $(this.hash);
               target = target.length
                  ? target
                  : $("[name=" + this.hash.slice(1) + "]");
               // Does a scroll target exist?
               if (target.length) {
                  // Only prevent default if animation is actually gonna happen
                  event.preventDefault();
                  $("html, body").animate(
                     {
                        scrollTop: target.offset().top,
                     },
                     1000,
                     function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) {
                           // Checking if the target was focused
                           return false;
                        } else {
                           $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                           $target.focus(); // Set focus again
                        }
                     }
                  );
               }
            }
         });
   },
    /**************************************************
    * Fix Height on smaller devices
    **************************************************/
    fix_mobile_height: function () {
      
      let vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);

      window.addEventListener('resize', () => {
         let vh = window.innerHeight * 0.01;
         document.documentElement.style.setProperty('--vh', `${vh}px`);
      });
   },
   /**************************************************
    * Initial all theme functions
    **************************************************/
   init: function () {
      Theme.share();
      Theme.smooth_scroll();
      Theme.fix_mobile_height();
   },
};
export default Theme