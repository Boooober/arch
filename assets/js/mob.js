(function($){
    $(document).ready(function(){

        $(document).bind('scroll',function(e){
            $('.section').each(function(){
                if (
                    $(this).offset().top < window.pageYOffset + 70
                        //begins before top
                        && $(this).offset().top + $(this).height() > window.pageYOffset + 70
                //but ends in visible area
                    ) {
                    window.location.hash = anchors[$(this).index()];
                }
            });
        });


        (function(){
            $('.slide-trigger').click(function(){
                var trigger = $(this);
                trigger.next().slideToggle();
            });
        })();


        var gallery = $('.owl-gallery');

        gallery.owlCarousel({
            margin: 40,
            dots: true,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                }
            }
        });


        $('.owl-carousel').owlCarousel({
            items: 1,
            dots: false,
        });


        // Switching block on home slide
        (function(){
            var children = $('#home-switcher').children();

            children.click(function(){
                $(this).siblings().removeClass('active');
                $(this).addClass('active').closest('.switcher').find('.entry-content').fadeOut().eq($(this).index()).fadeIn();
            });

        })();
    });
})(jQuery);