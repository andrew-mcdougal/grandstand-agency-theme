/*!
 * Simple jQuery Equal Heights
 *
 * Copyright (c) 2013 Matt Banks
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://docs.jquery.com/License
 *
 * @version 1.5.1
 */
(function(jQuery) {

    jQuery.fn.equalHeights = function(options) {
        var maxHeight = 0,
            jQuerythis = jQuery(this),
            equalHeightsFn = function() {
                var height = jQuery(this).innerHeight();
    
                if ( height > maxHeight ) { maxHeight = height; }
            };
        options = options || {};

        jQuerythis.each(equalHeightsFn);

        if(options.wait) {
            var loop = setInterval(function() {
                if(maxHeight > 0) {
                    clearInterval(loop);
                    return jQuerythis.css('height', maxHeight);
                }
                jQuerythis.each(equalHeightsFn);
            }, 100);
        } else {
            return jQuerythis.css('height', maxHeight);
        }
    };

    // auto-initialize plugin
    jQuery('[data-equal]').each(function(){
        var jQuerythis = jQuery(this),
            target = jQuerythis.data('equal');
        jQuerythis.find(target).equalHeights();
    });

})(jQuery);