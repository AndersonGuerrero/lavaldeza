(function ($) {
  'use strict';

  $(function () {
    var delay_on_start = 3000;
    var $whatsappme = $('.whatsappme');
    var wame_settings = $whatsappme.data('settings');

    // In some strange cases data settings are empty
    if (typeof (wame_settings) == 'undefined') {
      try {
        wame_settings = JSON.parse($whatsappme.attr('data-settings'));
      } catch (error) {
        wame_settings = undefined;
      }
    }

    // only works if whatsappme is defined
    if ($whatsappme.length && !!wame_settings && !!wame_settings.telephone) {
      whatsappme_magic();
    }

    function whatsappme_magic() {
      var is_mobile = !!navigator.userAgent.match(/Android|iPhone|BlackBerry|IEMobile|Opera Mini/i);
      var timeoutID = null;

      // stored values
      var is_clicked = localStorage.whatsappme_click == 'yes';
      var views = wame_settings.message_text === '' ? 0 : parseInt(localStorage.whatsappme_views || 0) + 1;
      localStorage.whatsappme_views = views;

      // show button / dialog
      if (!wame_settings.mobile_only || is_mobile) {
        setTimeout(function () {
          $whatsappme.addClass('whatsappme--show');
        }, delay_on_start);
        if (views > 1 && !is_clicked) {
          setTimeout(function () {
            $whatsappme.addClass('whatsappme--dialog');
          }, delay_on_start + wame_settings.message_delay);
        }
      }

      if (!is_mobile && wame_settings.message_text !== '') {
        $('.whatsappme__button').mouseenter(function () {
          timeoutID = setTimeout(function () {
            $whatsappme.addClass('whatsappme--dialog');
          }, 1600);
        }).mouseleave(function () {
          clearTimeout(timeoutID);
        });
      }

      $('.whatsappme__button').click(function () {
        var link = whatsapp_link(wame_settings.telephone, wame_settings.message_send);

        $whatsappme.removeClass('whatsappme--dialog');
        localStorage.whatsappme_click = 'yes';

        if (typeof gtag == 'function') {
          // Send event (Global Site Tag - gtag.js)
          gtag('event', 'click', {
            'event_category': 'WhatsAppMe',
            'event_label': link,
            'transport_type': 'beacon'
          });
        } else if (typeof ga == 'function') {
          // Send event (Universal Analtics - analytics.js)
          ga('send', 'event', {
            'eventCategory': 'WhatsAppMe',
            'eventAction': 'click',
            'eventLabel': link,
            'transport': 'beacon'
          });
        }

        // Open WhatsApp link
        window.open(link, 'whatsappme');
      });

      $('.whatsappme__close').click(function () {
        $whatsappme.removeClass('whatsappme--dialog');
        localStorage.whatsappme_click = 'yes';
      });
    }

    // Return WhatsApp link with optional message
    function whatsapp_link(phone, message) {
      var link = 'https://api.whatsapp.com/send?phone=' + phone;
      if (typeof (message) == 'string' && message != '') {
        link += '&text=' + encodeURIComponent(message);
      }

      return link;
    }

  });

})(jQuery);