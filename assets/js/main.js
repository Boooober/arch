jQuery( document ).ready(function( $ ) {

    $('#fullpage').fullpage({
        anchors:['home', 'service', 'cases', 'workflow', 'offers', 'contacts'],
        scrollOverflow: true,
        fixedElements: '#flying-panel',
        slidesNavigation: true,
        navigation: true
    });
    $('#next').click(function(){
        $.fn.fullpage.moveSectionDown();
    });
//    $('#next-slide').click(function(){
//        $.fn.fullpage.moveSlideRight();
//    });
//    $('#prev-slide').click(function(){
//        $.fn.fullpage.moveSlideRight();
//    });


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
        });
    })();

    function addAndRemoveBlack (){
        if(window.location.hash == '#home'){
            $('#flying-panel').addClass('white');
        } else{
            $('#flying-panel').removeClass('white');
        }
    }
    addAndRemoveBlack ();
});
