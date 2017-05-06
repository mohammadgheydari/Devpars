//Check to see if the window is top if not then display button
if ($(window).width() > 992) {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrolltotop').fadeIn();
        } else {
            $('.scrolltotop').fadeOut();
        }
    });
}
//Click event to scroll to top
$('.scrolltotop').click(function () {
    $('html, body').animate({scrollTop: 0}, 800);
    return false;
});


$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

$('.share-btn').click(function (e) {
    e.preventDefault();
    $('.socials-top').slideToggle('fast');
});

$('a.like-btn').on('click', function(e){
    e.preventDefault();
   $(this).toggleClass('liked')
});



$('.card').on('mouseenter', function(){
    $(this).find('.card-action a.will-hide').fadeIn('fast');
}).on('mouseleave', function(){
    $(this).find('.card-action a.will-hide').fadeOut();
});

$('.btn-more').on('click', function(e){
    e.preventDefault();
    $(this).addClass('hidden');
    $('.loading').removeClass('hidden');
});

var myColors = [ '#4cd964', '#34aadc', '#ff3b30','#5856d6'];
var i = 0;
$('div.ad-section a').each(function() {
    $(this).css('background-color', myColors[i]);
    i = (i + 1) % myColors.length;
});
