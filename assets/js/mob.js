(function($){
    $(document).ready(function(){

        var windowHeight = $(window).height();

        $(document).bind('scroll',function(e){
            $('div.section').each(function(){
                if (
                    $(this).offset().top < window.pageYOffset + 10
                        //begins before top
                        && $(this).offset().top + $(this).height() > window.pageYOffset + 10
                //but ends in visible area
                    ) {
                    window.location.hash = anchors[$(this).index()];
                }
            });
        });

//        $('.section').css('min-height', windowHeight);


        (function(){
            $('.toggle-trigger').click(function(){
                $(this).find('.entry-content').slideToggle();
            });
        })();

        (function(){
            $('.slide-trigger').click(function(){
                var trigger = $(this);
                trigger.find('.description').slideToggle();
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
    });
})(jQuery);