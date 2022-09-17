$(document).ready(function($) {
    $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800,'swing');
    });
});

// social icon
$(document).ready(function($) {
    $('.social i').tooltip('hide')
});

const wow = new WOW(
    {
        boxClass: 'wowload',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: true
    }
);

wow.init();


$('.carousel').swipe( {
    swipeLeft: function() {
        $(this).carousel('next');
    },
    swipeRight: function() {
        $(this).carousel('prev');
    },
    allowPageScroll: 'vertical'
});