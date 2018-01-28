'use strict';
console.log('It is working');
var HeadtopToggle = (function () {
    var $Hdropdown = $('.h-dropdown');
    $Hdropdown.click(function () {
        var $HmenuDroped = $(this).find('.h-menu-droped');
        $HmenuDroped.slideToggle("fast");
    });



})();

var footer = (function () {
    function scrollTo(local) {
        var position = $('.' + local).offset().top;
        position = position + "px";

        $("html,body").animate({
            scrollTop: position
        }, 'slow');
    }

    $(".voltar-topo>a").click(function () {
        scrollTo("goheader");
    });

})();


var Userlogin = (function () {
    var $card = $('.wc-login');
    $('.flip-card').click(function (event) {
        event.preventDefault();
        if ($card.children(".login").hasClass("is-active")) {
            $card.children(".login").removeClass("is-active").addClass("not_active");
            $card.children(".cadastro").addClass("is-active").removeClass("not_active");
        } else {
            $card.children(".cadastro").removeClass("is-active").addClass("not_active");
            $card.children(".login").addClass("is-active").removeClass("not_active");
        }
       
    });

})();