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
        dots: false,
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

    // Switching block on home slide
    (function(){
        var homeSwitcher = $('#home-switcher'),
            children = homeSwitcher.children(),
            childrenLeng = children.length,
            current = 1,
            interval;

        children.hover(pauseSwitching, startSwitching);

        startSwitching();

        function startSwitching() {
            interval = setInterval(function(){
                children.each(function(){

                    var child = $(this);
                    child.removeClass('active');
                    if ( child.get(0) == children.get(current) ){
                        child.addClass('active').closest('.switcher ').find('.entry-content').fadeOut().eq(current).fadeIn();
                    }
                });

                current++;
                if (current === childrenLeng ) current = 0;
            }, 3500);
        }

        function pauseSwitching(){
            clearInterval(interval);
            children.removeClass('active');
        }
    })();








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
