jQuery( document ).ready(function( $ ) {

    var anchors = ['home', 'service', 'projects', 'workflow', 'offers', 'contacts'];


    $('#fullpage').fullpage({
        anchors:anchors,
        scrollOverflow: true,
        fixedElements: '#flying-panel',
        slidesNavigation: true,
        navigation: true
    });
    $('#next').click(function(){
        $.fn.fullpage.moveSectionDown();
    });

    var asidePosition = $('<div id="aside-position" class="aside-position"></div>');
    $('#fp-nav').prepend(asidePosition);




    (function(){
        $('.switch-trigger').mouseenter(function(){
            var target = $(this),
                switchTarget = target.data('switch');
            $(this).closest('.switcher').find('.content-switch .entry-content').each(function(){
                if($(this).data('target') === switchTarget){
                    $(this).fadeIn(350);
                }else{
                    $(this).fadeOut(350);
                }
            });
        });

        $(window).on('hashchange', function(){
            addAndRemoveBlack();
            slideName();
        });
    })();

    function addAndRemoveBlack (){
        if(window.location.hash == '#home' || window.location.hash == '#workflow'){
            $('#flying-panel').addClass('white');
            $('.aside-position').addClass('white');
        } else{
            $('#flying-panel').removeClass('white');
            $('.aside-position').removeClass('white');
        }
    }


    function slideName (){
        var currentSlide = window.location.hash.substr(1),
            namePosition = anchors.indexOf(currentSlide),
            slides = $('.section');

        asidePosition.html( slides[namePosition].getAttribute("data-section-name") );
    }

    addAndRemoveBlack ();
    slideName();
});
