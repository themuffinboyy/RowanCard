(function($) {
  $(document).ready(function() {
    // get the emergegency feed
    $.get(Drupal.settings.basePath + "ajax/rowanemergency" ,function(data) {
      // if a repsonse lenght > 0, the display the message
      if(data.length){
        addEmergencyHeader(data);
      }
    });
  });

  function addEmergencyHeader(data){
    var emergency = data[0];
    var emWrapper = $('<div>').attr('id','emWrapper');
    var emHeader = $('<div>').addClass("emergency")
                            .addClass("emergency-" + emergency.type_id.toLowerCase())
                            .attr('id','emergency-' + emergency.messageID)
                            .attr('data-messageid', emergency.messageID);

    emHeader.append($('<div>')
                    .addClass('emtitle')
                    /*
                    .append($('<a>')
                        .addClass('em-message-toggle')
                        .addClass('message-open')
                        .attr('href','#')
                        .attr('title', 'View Message')
                        .html('v')
                      )
                    */
                     .append($('<h2>')
                        .addClass("title")
                        .append($('<a>')
                            .attr('href','http://www.rowan.edu/emergency')
                            .attr('title','View Announcement')
                            .html(emergency.EmHeader)
                          )
                        )
                      );  

    emHeader.append($('<div>').addClass("embody").append(emergency.summary));

    $('body').prepend(emWrapper.append(emHeader)).addClass("rowan-emergency");

  }

})(jQuery);;
(function($) {

  // Behavior to load FlexSlider
  Drupal.behaviors.flexslider = {
    attach: function(context, settings) {
      var sliders = [];
      if ($.type(settings.flexslider) !== 'undefined' && $.type(settings.flexslider.instances) !== 'undefined') {

        for (id in settings.flexslider.instances) {

          if (settings.flexslider.optionsets[settings.flexslider.instances[id]] !== undefined) {
            if (settings.flexslider.optionsets[settings.flexslider.instances[id]].asNavFor !== '') {
              // We have to initialize all the sliders which are "asNavFor" first.
              _flexslider_init(id, settings.flexslider.optionsets[settings.flexslider.instances[id]], context);
            } else {
              // Everyone else is second
              sliders[id] = settings.flexslider.optionsets[settings.flexslider.instances[id]];
            }
          }
        }
      }
      // Slider set
      for (id in sliders) {
        _flexslider_init(id, settings.flexslider.optionsets[settings.flexslider.instances[id]], context);
      }
    }
  };

  /**
   * Initialize the flexslider instance
   */

  function _flexslider_init(id, optionset, context) {
    $('#' + id, context).once('flexslider', function() {
      // Remove width/height attributes
      // @todo load the css path from the settings
      $(this).find('ul.slides > li > *').removeAttr('width').removeAttr('height');

      if (optionset) {
        // Add events that developers can use to interact.
        $(this).flexslider($.extend(optionset, {
          start: function(slider) {
            slider.trigger('start');
          },
          before: function(slider) {
            slider.trigger('before');
          },
          after: function(slider) {
            slider.trigger('after');
          },
          end: function(slider) {
            slider.trigger('end');
          },
          added: function(slider) {
            slider.trigger('added');
          },
          removed: function(slider) {
            slider.trigger('removed');
          }
        }));
      } else {
        $(this).flexslider();
      }
    });
  }

}(jQuery));
;
