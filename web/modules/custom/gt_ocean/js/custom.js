(function ($) {
  var initAnimation = function () {
    $(".md-object").each(function (index) {
      var timeoutStartAnimation = $(this).data("start");
      var timeoutStopAnimation = $(this).data("stop");

      /* For cases where element goes opposite text */
      $(this).removeClass("element-hidden");

      setTimeout(() => {
        $(this).addClass("element-visible");
      }, timeoutStartAnimation);

      setTimeout(() => {
        $(this).removeClass("element-visible");
        /* For cases where element goes opposite text */
        $(this).addClass("element-hidden");
      }, timeoutStopAnimation);
    });
  };

	// Execute when is loaded
  initAnimation();
	// Then, execute it every 22 seconds
  setInterval(initAnimation, 22000);
})(jQuery);
