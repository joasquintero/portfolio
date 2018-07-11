/*
 * jQuery Collapsible Plugin
 * Examples and documentation at: http://github.com/jgorset/jquery-collapsible
 * Copyright (c) 2011 Johannes Gorset
 * Version: 1.1 
 * License: MIT
 * Requires: jQuery v1.4 or later
 */

(function($){

    $.fn.collapsible = function(options){

        options = $.extend({
            collapsed: false,
            labels: {
                collapsed: 'Expand',
                expanded: 'Collapse'
            },
            classes: {
                collapsed: 'collapsed',
                expanded: 'expanded'
            }
        }, options)

        $(this).each(function(){
            var parent = this

            $(this).append(
                $('<a />', {
                    'html': options.labels.expanded,
                    'class': options.classes.expanded,
                    'click': function(){

                        if($(this).hasClass(options.classes.expanded)){
                            collapse()
                        }else{
                            expand()
                        }   

                    }
                })
            )

            if(options.collapsed){
                collapse()
            }

            function collapse(){
                var button = $(parent).find('.' + options.classes.expanded)

                $(parent).children().not(button).slideUp(100)
                $(button).removeClass(options.classes.expanded)
                $(button).addClass(options.classes.collapsed)
                $(button).text(options.labels.collapsed)
            }

            function expand(){
                var button = $(parent).find('.' + options.classes.collapsed)

                $(parent).children().not(button).slideDown(100)
                $(button).removeClass(options.classes.collapsed)
                $(button).addClass(options.classes.expanded)
                $(button).text(options.labels.expanded)
            }

        })

    }

})(jQuery)
