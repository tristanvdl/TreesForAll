/**
 * Created by Tristan on 17-4-2016.
 */

$(window).scroll(function(){
    var scrollPos = $(this).scrollTop();

    if (scrollPos > $('.one').offset().top - $(window).height()) {
        var offset = Math.min(0,scrollPos - $('.story').offset().top + 300);

        $('.image1').css({'transform': 'translate(' + offset + 'px, 0px)'});
        $('.text1').css({'transform': 'translate(' + -offset + 'px, 0px)'});
    }

    if (scrollPos > $('.two').offset().top - $(window).height()) {
        var offset2 = Math.min(0, scrollPos - $('.two').offset().top  + 250);

        $('.image2').css({'transform': 'translate(' + -offset2 + 'px, 0px)'});
        $('.text2').css({'transform': 'translate(' + offset2 + 'px, 0px)'});
    }
});

