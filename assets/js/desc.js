jQuery( document ).ready(function( $ ) {



    $('#fullpage').fullpage({
        fitToSection: false,
        anchors:anchors,
        scrollOverflow: true,
        fixedElements: '#flying-panel',
        slidesNavigation: true,
        navigation: true

    });

    var asidePosition = $('<div id="aside-position" class="aside-position"></div>');
    $('#fp-nav').prepend(asidePosition);



    function slideName (){
        var currentSlide = window.location.hash.substr(1),
            namePosition = anchors.indexOf(currentSlide),
            slides = $('.section');

        if(slides[namePosition]){
            asidePosition.html( slides[namePosition].getAttribute("data-section-name") );
        }
    }

    $(window).on('hashchange', function(){
        slideName();
    });
    slideName();



    var gallery = $('.owl-gallery');

    gallery.owlCarousel({
        margin: 40,
        nav: true,
        navText: [],
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
            1024:{
                items:3
            }
        }
    });




//    //scroll to events
//    (function(){
//
//        function goToByScroll(id){
//            $('html,body').animate({
//                    scrollTop: $(id).offset().top},
//                3000);
//        }
//
//        $('.nav-menu').find('a').each(function(){
//            var link = $(this).attr('href'),
//                hash = link.substring(0,1);
//
//            if (hash === '#'){
//                $(this).click(function(){
//                    event.preventDefault();
//                    goToByScroll(link);
//                });
//            }
//        });
//
//    })();
//
//


        //Stretch contacts box to the window bottom
        (function(){
            var cell = $('.box-6 .js-cell'),
                mapHeight = 350+47,
                tableHeight = $(window).innerHeight() - mapHeight;

            cell.each(function(){
                $(this).wrap('<div class="js-table" style="height:'+tableHeight+'px"></div>');
            });

        })();


        //Switching content on mouseenter

        $('.switch-trigger').mouseenter(function(){
            switcher($(this));
        });

        function switcher (target) {
            var switchTarget = target.data('switch');

            target.closest('.switcher').find('.content-switch .entry-content').each(function(){
                if($(this).data('target') === switchTarget){
                    $(this).fadeIn(350);
                }else{
                    $(this).fadeOut(350);
                }
            });
        }




});
