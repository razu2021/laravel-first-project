

// about page

// year slider start 
var Carousel = new
function() {

    var timer = null;

    var start = function() {
        doCarousel();
    };

    var sliding = function() {
        var item_width = $('#logo-slider li').outerWidth() + 10;
        var left_indent = parseInt($('#logo-slider').css('left')) - item_width;
        $('#logo-slider:not(:animated)').animate({
            'left': left_indent
        }, 2000, 'linear', function() {
           $('#logo-slider li:last').after($('#logo-slider li:first'));
            $('#logo-slider').css({
                'left': '-160px'
            });
        });
    };

    var doCarousel = function() {
        timer = setInterval(sliding, 0);
    };

    var pause = function() {
        clearInterval(timer);
        timer = null;
    };

    var resume = function() {
        doCarousel();
    };

    this.init = function() {
        start();
    };
}();

$(function() {
    Carousel.init();
});
$('#logo-slider li').mouseover(function(){ 
 Carousel.pause();
});
//year slider end her 









