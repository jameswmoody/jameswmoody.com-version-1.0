/* Scroll on Click */

$(document).ready(function () {
     $('a[href^="#"]').on('click', function (e) {
         e.preventDefault();

         var target = this.hash,
             $target = $(target);

         $('html, body').stop().animate({
             'scrollTop': $target.offset().top
         }, 900, 'swing', function () {
             window.location.hash = target;
         });
     });
 });


/* WebDev */

$(document).ready(function(){
    $('.thumbnail').hover(function() {
        $(this).closest(".thumbnail").addClass('transition');
    
    }, function() {
        $(this).closest(".thumbnail").removeClass('transition');

    });
});