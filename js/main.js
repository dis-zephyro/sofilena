// Search Head

$(function() {
    var pull = $('#header__search-toddle');
    var menu = $('.header__search');

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle('fast');
    });

    $(window).resize(function(){
        var w = $(window).width();
        if(w > 767 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
});


// topNav

$(function() {
    var pull = $('.btn-nav');
    var menu = $('.topNav');

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle('fast');
    });

    $(window).resize(function(){
        var w = $(window).width();
        if(w > 1169 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
});