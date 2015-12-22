(function($){
    $( document ).ready(function() {
        var mainScene,
            b1, b2, b3, b4, b5, b7;

        mainScene = new ScrollMagic.Controller({
            globalSceneOptions: {
                //reverse: true
            }
        });


        b1 = new TimelineLite();
        b1.from('#box-1 .content', 1, {ease: Power2.easeOut, autoAlpha:0}, 0.5);

        new ScrollMagic.Scene({
            triggerElement: '#box-1'
        })
            .setTween(b1)
            .addTo(mainScene);


        b2 = new TimelineLite();
        b2.staggerFrom("#box-2 h1, #box-2 .left .col", 0.8, {ease: Power2.easeOut, y:100}, 0.1)
          .from('#box-2 .right', 1, {autoAlpha:0}, 1);

        new ScrollMagic.Scene({
            triggerElement: '#box-2'
        })
            .setTween(b2)
            .addTo(mainScene);


        b3 = new TimelineLite();
        b3.from("#box-3 .section-title", 0.8, {ease: Power2.easeOut, y:-50, autoAlpha:0}, 0.7);


        new ScrollMagic.Scene({
            triggerElement: '#box-3'
        })
            .setTween(b3)
            .addTo(mainScene);


        b4 = new TimelineLite();
        b4.staggerFrom("#box-4 h1, #box-4 .left .col", 0.8, {ease: Power2.easeOut, y:100}, 0.1)
            .from('#box-4 .right', 1, {autoAlpha:0}, 1);


        new ScrollMagic.Scene({
            triggerElement: '#box-4'
        })
            .setTween(b4)
            .addTo(mainScene);


        b5 = new TimelineLite();
        b5.staggerFrom("#box-5 h1, #box-5 .col", 0.8, {ease: Power2.easeOut, y:100}, 0.1);


        new ScrollMagic.Scene({
            triggerElement: '#box-5'
        })
            .setTween(b5)
            .addTo(mainScene);

        b7 = new TimelineLite();
        b7.staggerFrom("#box-7 h1, #box-7 .col", 0.8, {ease: Power2.easeOut, y:100}, 0.2);


        new ScrollMagic.Scene({
            triggerElement: '#box-7'
        })
            .setTween(b7)
            .addTo(mainScene);

    });
})(jQuery);