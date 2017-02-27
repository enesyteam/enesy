/*
 * jQuery resize event - v1.1 - 3/14/2010
 * http://benalman.com/projects/jquery-resize-plugin/
 * 
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
(function($, h, c) {
    var a = $([]),
        e = $.resize = $.extend($.resize, {}),
        i, k = "setTimeout",
        j = "resize",
        d = j + "-special-event",
        b = "delay",
        f = "throttleWindow";
    e[b] = 250;
    e[f] = true;
    $.event.special[j] = {
        setup: function() {
            if (!e[f] && this[k]) {
                return false
            }
            var l = $(this);
            a = a.add(l);
            $.data(this, d, {
                w: l.width(),
                h: l.height()
            });
            if (a.length === 1) {
                g()
            }
        },
        teardown: function() {
            if (!e[f] && this[k]) {
                return false
            }
            var l = $(this);
            a = a.not(l);
            l.removeData(d);
            if (!a.length) {
                clearTimeout(i)
            }
        },
        add: function(l) {
            if (!e[f] && this[k]) {
                return false
            }
            var n;

            function m(s, o, p) {
                var q = $(this),
                    r = $.data(this, d);
                r.w = o !== c ? o : q.width();
                r.h = p !== c ? p : q.height();
                n.apply(this, arguments)
            }
            if ($.isFunction(l)) {
                n = l;
                return m
            } else {
                n = l.handler;
                l.handler = m
            }
        }
    };

    function g() {
        i = h[k](function() {
            a.each(function() {
                var n = $(this),
                    m = n.width(),
                    l = n.height(),
                    o = $.data(this, d);
                if (m !== o.w || l !== o.h) {
                    n.trigger(j, [o.w = m, o.h = l])
                }
            });
            g()
        }, e[b])
    }
})(jQuery, this);

/*
 * jQuery Responsive Containers
 * https://github.com/stilliard/jquery-responsive-containers
 *
 */
(function ($) {
    "use strict";

    // setup some default / example settings
    var defaults = {
            feature: 'min-width',
            value: '830px',
            className: 'infinite-columns-3',
            callback: null // function () { }
        },
        removeClasses = [];

    // Begin the plugin
    $.fn.responsiveContainer = function (options) {

        // we need a couple things to do anyhting of use
        if (typeof options.feature === 'undefined') {
            throw new Error('Responsive container error: No "feature" supplied, such as min-width.');
        }
        if (typeof options.value === 'undefined') {
            throw new Error('Responsive container error: No "value" supplied, such as 800px.');
        }
        if (typeof options.className === 'undefined' && typeof options.callback === 'undefined') {
            throw new Error('Responsive container error: No "className" or "callback" supplied, one or the other is needed, else theres no use.');
        }

        // extend the settings with the given options
        var settings = $.extend({}, defaults, options);

        // Loop over each of the selected items
        return this.each(function () {

            var self = $(this),
                resizeCallback = function () {

                    var matches = false,
                        width = self.width();

                    // remove the classname
                    if (settings.className !== '') {
                        self.removeClass(settings.className);
                    }

                    // detect if the max or min width condition is met
                    switch (settings.feature) {
                        case 'min-width':
                            if (settings.value.replace('px', '') < width) {
                                matches = true;
                            }
                            break;
                        case 'max-width':
                            if (settings.value.replace('px', '') > width) {
                                matches = true;
                            }
                            break;
                    }

                    // if condition met, add the class name or run the callback
                    if (matches) {
                        if (settings.className !== '') {
                            //self.addClass(settings.className);

                            //
                            var grid_element = self;
                            var grid_classes = $(grid_element).attr("class").split(' ');
                            //alert(grid_classes);
                             
                            for (var i = 0; i < grid_classes.length; i++) {
                                if (grid_classes[i].indexOf("course_grid_columns-") > -1) {
                                    grid_element.removeClass(grid_classes[i])
                                }
                            }
                            grid_element.addClass(settings.className);

                            //
                        }
                        if (settings.callback !== null) {
                            settings.callback({
                                width: width
                            });
                        }
                    }

                };

            // Listen for resize event
            $(this).resize(resizeCallback);

            // Listen for resize event
            resizeCallback();

        });
    };

}(jQuery));