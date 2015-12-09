jQuery( document ).ready(function( $ ) {

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

//        function togglePushContent(e){
//
//            if (e.preventDefault) {
//                e.preventDefault();
//            } else {
//                e.returnValue = false;
//            }
//
//            toggleOverlay(push);
//        }
//        $(document).on('click', 'p.push-content-close', togglePushContent);
//        $(document).on('click', '.trigger-push-content', togglePushContent);
//
//
        function togglePullMenu(e){

            if (e.preventDefault) {
                e.preventDefault();
            } else {
                e.returnValue = false;
            }

            toggleOverlay(pull);
        }

        $(document).on('click', 'p.pull-menu-close', togglePullMenu);
        $(document).on('click', '.trigger-pull-menu', togglePullMenu);


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

                classie.remove( container, 'overlay-open' );
//                }
//                if( (!classie.has( container, 'contentpush' ) &&  classie.has( container, 'contentpull' )) || (!classie.has( container, 'contentpull' ) && classie.has( container, 'contentpush' )) ){
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

            }
        }


        $('.pull_menu a').click(function(){

            event.preventDefault();
            var link = event.target,
                href = link.href.substring(link.href.indexOf('#')+1);

            toggleOverlay(pull);

            setTimeout(function(){
                window.location = href;
            }, 150);
        });
    })();
});
