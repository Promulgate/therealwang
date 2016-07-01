(function ($) {
  Drupal.behaviors.frontPage = {
    attach: function (context, settings) {
      var page = 0,
          objEstate = typeof Drupal.settings.estate !== 'undefined' ? Drupal.settings.estate : {},
          templates = typeof Handlebars.templates !== 'undefined' ? Handlebars.templates : {},
          estateItemTemplate = typeof templates['estate-item'] !== 'undefined' ? templates['estate-item'] : null,
          totalEstates = parseInt(objEstate.count);

      /**
       * AJAX a set of estates given a page number.
       *
       * @param {integer} pageNum
       *   - The page number of estates to AJAX.
       */
      var getEstates = function (pageNum) {
        if (typeof pageNum === 'undefined') {
          return;
        }
        var $csLoader = $('.front-page .cs-loader');
        $.ajax({
          url: '/estates?page=' + pageNum,
          beforeSend: function() {
            $csLoader.removeClass('hide');
          },
          success: function(data, status, xhr) {
            if (typeof data.nodes !== 'array' && data.nodes.length && typeof estateItemTemplate === 'function') {
              $.each(data.nodes, function (index, obj) {
                if (typeof obj.node !== 'object') {
                  return;
                }

                var compiledTemplate = estateItemTemplate(obj.node),
                    $frontList = $('#front-list');

                $frontList.append(compiledTemplate);
              });
            }
          },
          complete: function() {
            $csLoader.addClass('hide');
          }
        });
      };

      getEstates(page);
    }
  }
})(jQuery);
