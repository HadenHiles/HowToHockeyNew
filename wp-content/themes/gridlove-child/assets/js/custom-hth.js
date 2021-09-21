(function ($) {

  $(document).ready(function () {
    $('table').wrap('<div class="table-wrap"></div>');

    waitForElement("#disqus_thread", () => {
      $('#disqus_thread iframe:first-child').css({ 'display': 'none' });
    });

  });

  function waitForElement(elementPath, callBack) {
    window.setTimeout(() => {
      if ($(elementPath).length) {
        callBack(elementPath, $(elementPath));
      } else {
        waitForElement(elementPath, callBack);
      }
    }, 500)
  }

})(jQuery);
