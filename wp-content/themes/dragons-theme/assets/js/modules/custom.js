const $ = jQuery;

const Custom = {
  init: function () {
    $(document).ready(function () {
      $(".summary-text a").click(function (event) {
        event.preventDefault();

        var $parentSection = $(this).closest(".text-image");

        var $bodyText = $parentSection.find(".body-text");

       

          $bodyText.slideDown();
          $parentSection.addClass("active");
        
      });
    });
  },
};

export default Custom;
