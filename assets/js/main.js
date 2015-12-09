jQuery( document ).ready(function( $ ) {

    var anchors = ['home', 'service', 'projects', 'offers', 'workflow', 'whatyouget', 'portfolio',  'contacts'];

    $('#fullpage').fullpage({
        anchors:anchors,
        scrollOverflow: true,
        fixedElements: '#flying-panel',
        slidesNavigation: true,
        navigation: true
    });

    // go up
    $('#logo').click(function(){
        $.fn.fullpage.moveTo(1);
        return false;
    });

    var asidePosition = $('<div id="aside-position" class="aside-position"></div>');
    $('#fp-nav').prepend(asidePosition);


    $(document).on('click', '.js-single-ajax, .js-nav', dynamicContent);

    function dynamicContent (event){
        event.preventDefault();
        var postId = $(this).data('project'),
            container = $('.container'),
            queryContent = $('#query-content');
        if(container.get(0) && !container.hasClass('overlay-open')){
            queryContent.fadeOut(0);
        }else{
            queryContent.fadeOut(250);
        }


        $.ajax({
            url : ARCHproject.ajax_url,
            type : 'post',
            data : {
                post_id : postId,
                arch_nonce : ARCHproject.arch_nonce,
                action : 'get_arch_project'
            },
            success : function( response ) {
                queryContent.html(response).fadeIn(250);
            },
            error: function(){
                console.log('error');
            }
        });

    }


    function addAndRemoveBlack (){
        if(window.location.hash == '#home' || window.location.hash == '#workflow' || /#projects(\/\d)?/.test(window.location.hash) || window.location.hash == ''){
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

        if(slides[namePosition]){
            asidePosition.html( slides[namePosition].getAttribute("data-section-name") );
        }
    }

    $(window).on('hashchange', function(){
        addAndRemoveBlack();
        slideName();
    });
    addAndRemoveBlack ();
    slideName();



    if($(window).width() > 768){

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
        (function(){
            $('.switch-trigger').mouseenter(function(){
                switcher($(this));
            });
        })();
    }

    function switcher (target) {

        console.log(target);
        var switchTarget = target.data('switch');

        target.closest('.switcher').find('.content-switch .entry-content').each(function(){
            if($(this).data('target') === switchTarget){
                $(this).fadeIn(350);
            }else{
                $(this).fadeOut(350);
            }
        });
    }

    (function(){
        var homeSwitcher = $('#home-switcher'),
            children = homeSwitcher.children(),
            childrenLeng = children.length,
            current = 1;

        setInterval(function(){

            children.each(function(){

                var child = $(this);
                child.removeClass('active');
                if ( child.get(0) == children.get(current) ){
                    child.addClass('active');
                    switcher (child.find('.switch-trigger'));
                }
            });

            current++;
            if (current === childrenLeng ) current = 0;

        }, 3500);



    })();


    if($(window).width() <= 768){
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
    }

    //push-page from http://tympanus.net/Development/FullscreenOverlayStyles/
    (function() {
        var container = document.querySelector( 'div.container' ),
            push = document.querySelector( 'div.overlay.overlay-contentpush'),
            pullMenu = document.querySelector( '.pull-menu-content'),
            pullForm = document.querySelector( '.pull-form-content'),

            transEndEventNames = {
                'WebkitTransition': 'webkitTransitionEnd',
                'MozTransition': 'transitionend',
                'OTransition': 'oTransitionEnd',
                'msTransition': 'MSTransitionEnd',
                'transition': 'transitionend'
            },
            transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
            support = { transitions : Modernizr.csstransitions };




        function togglePushContent(e){

            if (e.preventDefault) {
                e.preventDefault();
            } else {
                e.returnValue = false;
            }

            toggleOverlay(push);
        }
        $(document).on('click', '.push-content-close', togglePushContent);
        $(document).on('click', '.trigger-push-content', togglePushContent);




        function togglePullMenu(e){

            if (e.preventDefault) {
                e.preventDefault();
            } else {
                e.returnValue = false;
            }

            toggleOverlay(pullMenu);
        }

        $(document).on('click', '.menu-close', togglePullMenu);
        $(document).on('click', '.trigger-pull-menu', togglePullMenu);

        function togglePullForm(e){

            if (e.preventDefault) {
                e.preventDefault();
            } else {
                e.returnValue = false;
            }

            target = $(e.target);

            if(target.hasClass('trigger-form-btn')) localizeForm($(e.target));
            toggleOverlay(pullForm);
        }

        $(document).on('click', '.form-close', togglePullForm);
        $(document).on('click', '.trigger-form-btn', togglePullForm);



        function localizeForm (target){
            console.log(target.data('ftitle'));
        }



        function toggleOverlay(overlay) {
            //close overlay

            var opened;


            if( classie.has( overlay, 'overlay-contentpush' ) ){
                opened = 'contentpush';
            } else if( classie.has( overlay, 'overlay-contentpull' ) ){
                opened = 'contentpull';
            }

            if( classie.has( overlay, 'open' ) ) {
                classie.remove( overlay, 'open' );

                if( (!classie.has( container, 'contentpush' ) &&  classie.has( container, 'contentpull' )) || (!classie.has( container, 'contentpull' ) && classie.has( container, 'contentpush' )) ){
                    classie.remove( container, 'overlay-open' );
                    $.fn.fullpage.setAllowScrolling(true);
                }
                classie.remove( container, opened );


                classie.add( overlay, 'close' );



                var onEndTransitionFn = function( ev ) {
                    if( support.transitions ) {
                        if( ev.propertyName !== 'visibility' ) return;
                        this.removeEventListener( transEndEventName, onEndTransitionFn );
                    }
                    classie.remove( overlay, 'close' );

                };
                if( support.transitions ) {
                    overlay.addEventListener( transEndEventName, onEndTransitionFn );
                }
                else {
                    onEndTransitionFn();
                }
            }
            else if( !classie.has( overlay, 'close' ) ) {
                classie.add( overlay, 'open' );
                classie.add( container, 'overlay-open' );
                classie.add( container, opened );

                $.fn.fullpage.setAllowScrolling(false);
            }
        }


        $('.pull_menu a').click(function(){

            event.preventDefault();
            var link = event.target,
                href = link.href.substring(link.href.indexOf('#')+1);

            toggleOverlay(pull);

            setTimeout(function(){
                $.fn.fullpage.moveTo(href);
                $.fn.fullpage.setAllowScrolling(true);
            }, 150);
        });
    })();


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

});
