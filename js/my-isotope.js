$(window).load(function(){
    var $container = $('.imageContainer');
    $container.isotope({
/*        filter: '*',  */
        filter: '.start',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
 /*
    $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
        $(this).addClass('active');
        console.error($(this));
        console.error($(this).parent());
        ($(this).parent()).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
   */
   
   $('.multimediaFilter li').click(function(){
        $('.multimediaFilter .active').removeClass('active');
        $(this).addClass('active');
        var link = $(this).children();
 
        var selector = link.attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
 
});
