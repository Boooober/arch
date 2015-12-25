(function($){
    $(document).ready(function(){

        var sections = $('.section'),
            windW = $(window).width(),
            windH = $(window).height();

        $(document).bind('scroll',function(e){
            sections.each(function(){
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


        var fullSlides = ['.box-1', '.box-3 .slide'];
        function fullSize (){
            var height = windH;

//            (windW < windH) ? (height = windH) : (height = windW);
            for( var i = 0, c = fullSlides.length; i < c; i++ ){
                $(fullSlides[i]).css('height', height);
            }
        }


        $(window).resize(fullSize);
        fullSize();


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
            dots: false
        });


        // Switching block on home slide
        (function(){
            var children = $('#home-switcher').children();

            children.click(function(){
                $(this).siblings().removeClass('active');
                $(this).addClass('active').closest('.switcher').find('.entry-content').fadeOut().eq($(this).index()).fadeIn();
            });

        })();

        // slide-toggle fixed panel
        (function(){
            var didScroll,
                lastScrollTop = 0,
                delta = 5,
                navbar = $('#flying-panel'),
                navbarHeight = navbar.outerHeight();


            $(window).scroll(function(){
                didScroll = true;
            });

            setInterval(function() {
                if (didScroll) {
                    hasScrolled();
                    didScroll = false;
                }
            }, 250);

            function hasScrolled() {
                var st = $(this).scrollTop();

                // Make sure they scroll more than delta
                if(Math.abs(lastScrollTop - st) <= delta)
                    return;

                // If they scrolled down and are past the navbar, add class .nav-up.
                // This is necessary so you never see what is "behind" the navbar.
                if (st > lastScrollTop && st > navbarHeight){
                    // Scroll Down
                    navbar.removeClass('nav-down').addClass('nav-up');
                } else {
                    // Scroll Up
                    if(st + $(window).height() < $(document).height()) {
                        navbar.removeClass('nav-up').addClass('nav-down');
                    }
                }

                lastScrollTop = st;
            }
        })();

    });
})(jQuery);