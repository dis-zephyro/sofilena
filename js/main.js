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
    var menu = $('.mobileNav');

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle('fast');
    });

    $(window).resize(function(){
        var w = $(window).width();
        if(w > 1169) {
            menu.removeAttr('style');
        }
    });
});


// mobileNav --------

$('.mobileNav__first > li > a').click(function (event) {
    event.preventDefault();
    var box = $(this).closest('.mobileNav__first > li');
    var body = box.find('.mobileNav__dropdown');
    body.slideToggle(300);
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

$('.slider__body').slick({
    arrows: false,
    autoplay: true,
    dots: false,
    autoplaySpeed: 4000,
    slidesToShow: 1,
    slidesToScroll: 1
});

$('.slider .prev').click(function(){
    $('.slider__body').slick('slickPrev');
});

$('.slider .next').click(function(){
    $('.slider__body').slick('slickNext');
});


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


$('.promoSlider_product').slick({
    arrows: false,
    autoplay: true,
    dots: false,
    autoplaySpeed: 2000,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }
    ]
});


$('.slide-nav-hit.prev').click(function(){
    $('.promoSlider_product').slick('slickPrev');
});

$('.slide-nav-hit.next').click(function(){
    $('.promoSlider_product').slick('slickNext');
});


$('.historyView__slider').slick({
    arrows: false,
    autoplay: false,
    dots: false,
    vertical: true,
    slidesToShow: 2,
    slidesToScroll: 1
});


$('.historyView .vertical-nav.prev').click(function(){
    $('.historyView__slider').slick('slickPrev');
});

$('.historyView .vertical-nav.next').click(function(){
    $('.historyView__slider').slick('slickNext');
});


/* Product Gallery */

$('.product__gallery').tabs();

$(".btn-modal, .product__image a").fancybox({
    'padding' : 0,
    'tpl'        : {
        closeBtn : '<a title="Close" class="btn_close" href="javascript:;"></a>',
        next     : '<a title="Next" class="modal-nav next" href="javascript:;"><span></span></a>',
        prev     : '<a title="Previous" class="modal-nav prev" href="javascript:;"><span></span></a>'
    }
});

$('.product__thumbs ul').slick({
    arrows: false,
    autoplay: false,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1
});



$('.thumbs-nav.prev').click(function(){
    $('.product__thumbs ul').slick('slickPrev');
});

$('.thumbs-nav.next').click(function(){
    $('.product__thumbs ul').slick('slickNext');
});


$('.product__info').tabs();

// Color choice
$(".product__colors input[type='radio']").ionCheckRadio();


// ----- Mask ----------
jQuery(function($){
    $(".size__number").mask("9");
});

$('.reply').tabs();

$(".grade input[type='radio']").ionCheckRadio();
$(".btn-recomend input[type='radio']").ionCheckRadio();
$(".filter__group input[type='radio']").ionCheckRadio();
$(".basket__size input[type='radio']").ionCheckRadio();
$(".showcase__size input[type='radio']").ionCheckRadio();


// Minibasket

$(document).ready(function() {
    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});

$('.header__basket').click(function(){
    $('.miniBasket').toggle();
});

$('.miniBasket button').click(function(){
    $('.miniBasket').hide();
});