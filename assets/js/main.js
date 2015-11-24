jQuery( document ).ready(function( $ ) {

    var anchors = ['home', 'service', 'projects', 'workflow', 'offers', 'contacts'];

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
        if(window.location.hash == '#home' || window.location.hash == '#workflow' || window.location.hash == ''){
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
                mapHeight = 350,
                tableHeight = $(window).innerHeight() - mapHeight;

            cell.each(function(){
                $(this).wrap('<div class="js-table" style="height:'+tableHeight+'px"></div>');
            });

        })();


        //Switching content on mouseenter
        (function(){
            $('.switch-trigger').mouseenter(function(){
                var target = $(this),
                    switchTarget = target.data('switch');
                target.closest('.switcher').find('.content-switch .entry-content').each(function(){
                    if($(this).data('target') === switchTarget){
                        $(this).fadeIn(350);
                    }else{
                        $(this).fadeOut(350);
                    }
                });
            });
        })();


    }


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
            pull = document.querySelector( 'div.overlay.overlay-contentpull'),

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
            toggleOverlay(e, push);
        }
        $(document).on('click', 'p.push-content-close', togglePushContent);
        $(document).on('click', '.trigger-push-content', togglePushContent);


        function togglePullMenu(e){
            toggleOverlay(e, pull);
        }

        $(document).on('click', 'p.pull-menu-close', togglePullMenu);
        $(document).on('click', '.trigger-pull-menu', togglePullMenu);






        function toggleOverlay(e, overlay) {
            //close overlay

            if (e.preventDefault) {
                e.preventDefault();
            } else {
                e.returnValue = false;
            }

            var opened;


            if( classie.has( overlay, 'overlay-contentpush' ) ){
                opened = 'contentpush';
            } else if( classie.has( overlay, 'overlay-contentpull' ) ){
                opened = 'contentpull';
            }


            console.log(overlay);

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

    })();


});
