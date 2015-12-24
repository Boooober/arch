
// common variables

var anchors = ['home', 'service', 'projects', 'portfolio', 'offers', 'workflow', 'whatyouget', 'contacts'];


(function($){
    $(document).ready(function(){

        var body = $('body');

        // go up
        $('#logo').click(function(){
            body.animate({scrollTop:0}, '500');
            return false;
        });




        function addAndRemoveBlack (){
            if(window.location.hash == '#home' || window.location.hash == '#workflow' || /#projects(\/\d)?/.test(window.location.hash) || window.location.hash == ''){
                $('#flying-panel').addClass('white');
                $('.aside-position').addClass('white');
            } else{
                $('#flying-panel').removeClass('white');
                $('.aside-position').removeClass('white');
            }
        }




        $(window).on('hashchange', function(){
            addAndRemoveBlack();
        });
        addAndRemoveBlack ();



        // Load AJAX content to project page

        $(document).on('click', '.js-single-ajax', dynamicContent);

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



        //AJAX email send

        (function(){
            var form = $('.contact-form'),
                submitted,
                inputs,
                errorFlag = false;

            //form submit
            form.submit(function(){
                event.preventDefault();
                submitted =$(this);

                console.log($(this));
                inputs =  submitted.find('.form-input');

                inputs.blur(checkClass);

                // set error class
                inputs.each(checkClass);
                inputs.each(checkError);

                console.log(errorFlag);
                if (!errorFlag) sendAJAX();
            });

            function checkClass (){
                var input = $(this);

                if (input.val() == '' && input.attr('name') != 'fphone'){
                    input.addClass('error');
                    errorFlag = true;

                }else{
                    input.removeClass('error');
                    errorFlag = false;
                    if(input.attr('name') == 'femail'){
                        var email = jQuery.trim(input.val());
                        if(!validEmail(email)) {
                            input.addClass('error');
                            errorFlag = true;
                        }
                    }
                }
            }

            function checkError(){
                var input = $(this);
                if (input.val() == '' && input.attr('name') != 'fphone'){
                    errorFlag = true;
                    return false;
                }else{
                    if(input.attr('name') == 'femail'){
                        var email = jQuery.trim(input.val());
                        if(!validEmail(email)) {
                            errorFlag = true;
                            return false;
                        }
                    }else{
                        errorFlag = false;
                    }
                }
            }

            function validEmail(email){
                var reg = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
                return reg.test(email);
            }

            function sendAJAX(){
                var data = submitted.serialize(),
                    responseContainer = submitted.next();

                $.ajax({
                    url : ARCHproject.ajax_url,
                    type : 'post',
                    data : {
                        data: data,
                        arch_nonce : ARCHproject.arch_nonce,
                        action : 'send_email'
                    },
                    success : function( response ) {


                        var resp = $(response);

                        responseContainer.append( resp );
                        resp.addClass('open--popup');

                        setTimeout(function(){
                            resp.removeClass('open--popup').addClass('close--popup');
                            setTimeout(function(){
                                resp.remove();
                            },700);
                        }, 2000);


                    },
                    error: function(){
                        console.log('error');
                    }
                });
            }

        })();


        //tabs in gallery slide
        (function(){

            //DOM modifying
            var tabBlock = $('#tab-block'),
                outerCaption = tabBlock.find('.outer-tab-caption'),
                i = 0, j = 0;

            tabBlock.addClass('loaded');

            tabBlock.find('.outer-tab-content').each(function(){
                var outerContent = $(this),
                    outerTitle;

                outerTitle = outerContent.find('.undertitle').detach();
                outerCaption.append(outerTitle);

                if (i === 0){
                    outerContent.addClass('active');
                    outerTitle.addClass('active');
                }

                var innerCaption = outerContent.find('.inner-tab-caption');
                outerContent.find('.inner-tab-content').each(function(){
                    var innerContent = $(this),
                        innerTitle;

                    innerTitle = innerContent.find('.subundertitle').detach();
                    innerCaption.append(innerTitle);

                    if (j === 0){
                        innerContent.addClass('active');
                        innerTitle.addClass('active');
                    }

                    j++;
                });
                j = 0;
                i++;
            });


            //EventListeners
            $('.outer-tab-caption').on('click', 'div:not(.active)', changeTabs);
            $('.inner-tab-caption').on('click', 'div:not(.active)', changeTabs);

            function changeTabs () {
                $(this).addClass('active').siblings().removeClass('active');
                $(this).parent().siblings().removeClass('active').eq($(this).index()).addClass('active');
            }

        })();



        //push-page refactored from http://tympanus.net/Development/FullscreenOverlayStyles/

        //Toggle overlay blocks from aside
        (function() {

            var container = $('#container'),
                defaultContainer,
                fp = !!$.fn.fullpage;

            $(document).on('click', '.js-overly-trigger', toggleOverlay());
            $(document).on('click', '.overlay-menu a', toggleOverlay());

            function toggleOverlay() {

                defaultContainer = container.attr('class');

                return function() {
                    event.preventDefault();

                    var opened, overlay,
                        href;


                    if( !(opened = $(this).data('overlay') )){
                        href = $(this).attr('href').slice(1);
                        opened = '#pull-menu';

                        forceCloseOverlay();

                        setTimeout(function(){

                            if(fp){

                                $.fn.fullpage.moveTo(href);
                                $.fn.fullpage.setAllowScrolling(true);
                            } else{
                                scrollPageTo(href);
                            }

                        }, 150);

                        return;
                    }

                    overlay = $(opened);
                    overlay.hasClass('open') ? closeOverlay(overlay) : openOverlay(overlay);
                };
            }

            function closeOverlay(overlay) {
                overlay.removeClass('open');
                container.removeClass('#'+overlay.attr('id'));
                if ((container.attr('class')) == defaultContainer + ' overlay-open') {
                    container.removeClass('overlay-open');

                    if(fp) $.fn.fullpage.setAllowScrolling(true);
                }
            }

            function forceCloseOverlay(){
                $('.overlay').removeClass('open');
                container.get(0).className = defaultContainer;

                if(fp) $.fn.fullpage.setAllowScrolling(true);
            }

            function openOverlay (overlay){
                overlay.addClass('open');
                container.addClass('overlay-open ' + '#' + overlay.attr('id'));

                if(fp) $.fn.fullpage.setAllowScrolling(false);
            }

            function scrollPageTo(href){
                var destination = $('.section').get(anchors.indexOf(href)).scrollTop();
                body.animate({scrollTop:destination}, '500');
            }
        })();





    });
})(jQuery);