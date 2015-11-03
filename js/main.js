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


// footerNav

$(function() {
    var pull = $('#fnt1');
    var menu = $('#fn1');

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

$(function() {
    var pull = $('#fnt2');
    var menu = $('#fn2');

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


$(function() {
    var pull = $('#fnt3');
    var menu = $('#fn3');

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



//  Sliders

$('.promoSlider__new').slick({
    arrows: false,
    autoplay: true,
    dots: false,
    autoplaySpeed: 2000,
    slidesToShow: 2,
    slidesToScroll: 1
});



$('.slide-nav-new.prev').click(function(){
    $('.promoSlider__new').slick('slickPrev');
});

$('.slide-nav-new.next').click(function(){
    $('.promoSlider__new').slick('slickNext');
});


$('.promoSlider__hit').slick({
    arrows: false,
    autoplay: true,
    dots: false,
    autoplaySpeed: 2000,
    slidesToShow: 2,
    slidesToScroll: 1
});



$('.slide-nav-hit.prev').click(function(){
    $('.promoSlider__hit').slick('slickPrev');
});

$('.slide-nav-hit.next').click(function(){
    $('.promoSlider__hit').slick('slickNext');
});